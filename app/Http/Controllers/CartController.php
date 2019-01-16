<?php

namespace App\Http\Controllers;

use App\Cart;
use App\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {


//        $carts = response()
//            ->json([
//                'user_id' => auth()->id(),
//                'ingredients_id' => \request()->all(),
//            ]);
        $users = auth()->user();

        $carts = request()->except('_token');


        return view('cart.index', compact('carts', 'users'));
        //return $carts;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


//        $cart = new Cart();
//        $cart->user_id = auth()->id();
//        $grocery->type = $request->type;
//        $grocery->price = $request->price;
//
//        $grocery->save();
//        return response()->json(['success'=>'Data is successfully added']);

        /*Cart::create([

            'user_id' => auth()->id(),
            'ingredients_id' => $request->cart,

        ]);*/


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
