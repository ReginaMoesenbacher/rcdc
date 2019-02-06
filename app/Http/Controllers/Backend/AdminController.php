<?php

namespace App\Http\Controllers\Backend;

use App\Cart;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function costumer()
    {

        //        $currentPage = 1
//        Paginator::currentPageResolver(function () use ($currentPage) {
//            return $currentPage;
//        });

        $users = User::where('role', null)->get();


        return view('backend.customer', compact('users'));

    }


    public function edit_costumer($id)
    {

        $costumers = User::findOrFail($id);

        return view('backend.show_costumer', ['costumer' => $costumers]);
    }


    public function update_costumer(Request $request, $id)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'tel' => ['required'],
            'city' => ['required'],
            'zipcode' => ['required'],
            'state' => ['required'],
            'address' => ['required'],

        ]);

        $users = User::findOrFail($id);
        $users->fill($request->all());
        $users->save();

        return redirect('/admin/costumers')->with('info', 'User updated');
    }

    public function destroy_costumer($id)
    {
        $costumers = User::findOrFail($id);
        $costumers->delete();

        return redirect('/admin/costumers')->with('info', 'User deleted');
    }


    public function orders()
    {

        $orders = Cart::all()->load('user');


       $ingredients = (json_decode($orders[0]->ingredients));

        return view('backend.order', compact('orders', 'ingredients'));

    }

    public function edit_order($id)
    {

        $orders = Cart::findOrFail($id)->load('user');
        $ingredients = (json_decode($orders->ingredients));

        return view('backend.show_order', compact('orders', 'ingredients'));
    }


    public function update_order(Request $request, $id)
    {

        $this->validate($request, [
            "ingredients" => "string|required",
        ]);

        $orders = Cart::findOrFail($id);
        $orders->fill($request->all());
        $orders->ingredients = json_encode($orders->ingredients);
        $orders->save();

        return redirect('/admin/orders')->with('info', 'Order updated');
    }

    public function destroy_order($id)
    {
        $orders = Cart::findOrFail($id);
        $orders->delete();

        return redirect('/admin/orders')->with('info', 'Order deleted');
    }

}

