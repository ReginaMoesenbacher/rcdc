<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::all();

        return view('home.profile', compact('users'));
    }

    public function edit()
    {

        $users = User::findOrFail(auth()->id());
        $users->fill(\request()->old());


        return view('home.profile', compact('users'));
    }

    public function update()
    {
        $this->validate(\request(),[

            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'tel' => ['required'],
            'city' => ['required'],
            'zipcode' => ['required'],
            'state' => ['required'],
            'address' => ['required'],
        ]);

        $users = User::findOrFail(auth()->id());
        $users->fill(\request()->all());
        $users->save();

        return redirect('/');

    }

}
