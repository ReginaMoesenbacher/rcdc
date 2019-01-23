<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
            'password' => ['required']

        ]);

        $users = User::findOrFail(auth()->id());
        $users->fill(\request()->all());
        $users ->password = Hash::make(\request('password'));
        $users->save();

        return redirect('/');

    }

}
