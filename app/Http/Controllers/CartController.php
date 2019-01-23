<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Currency;
use App\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $users = auth()->user();
        $carts = request()->except('_token');
        return view('cart.index', compact('carts', 'users'));

    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'tel' => ['required'],
            'city' => ['required'],
            'zipcode' => ['required'],
            'state' => ['required'],
            'address' => ['required'],

        ]);
    }
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
           "card_id" => "string|required|min:16",
           "card_brand" => "string|required",
           "trial_ends_at" => "string|required|min:4"
        ]);
        if($validate->fails()) {
            return redirect()->route("cart.index")->withErrors($validate)->withInput();
        }
        $card_id = trim($request->card_id);
        $card_id = (int)substr($card_id, -4);
        $ingredients = (object) array();
        $count = -1;
        $inputs = $request->all();
        $uniq_id = str_random(10);
        foreach ($inputs as $key => $ingredient):
            if(strpos($key, "ingredient:") !== false) {
                $count++;
                $ingredients->$count = $ingredient;
            }
        endforeach;
        Cart::create([
            'user_id' => Auth::id(),
            'ingredients' => json_encode($ingredients),
            'uniq_id' => $uniq_id,
            'card_brand' => $request->card_brand,
            'card_last_four' => $card_id,
        ])->id;
        User::find(Auth::id())->update([
            "name" => $request->name,
            "email" => $request->email,
            "city" => $request->city,
            "zipcode" => $request->zipcode,
            "address" => $request->address,
            "state" => $request->state,
            "tel" => $request->tel
        ]);
        $email_data = [
            "uniq_id" => $uniq_id,
            "ingredients" => $ingredients,
            "name" => Auth::user()->name
        ];
        CartMail::send($email_data);
        return redirect()->route("cart.index")->with("success", "Successfully ordered!");

    }
}
