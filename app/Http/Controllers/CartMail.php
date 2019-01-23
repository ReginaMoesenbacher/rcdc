<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CartMail extends Controller
{
    public static function send($data)
    {
        Mail::send("cart_mail.cart", $data, function ($message) {
            $uniq_id = User::find(auth()->user()->uniq_id);
            $name = ucfirst(auth()->user()->name);
            $message->to(auth()->user()->email, $name)->subject("Hi $name. Your receipt for your order #$uniq_id");
        });
        // dd('Mail Send Successfully');
    }
}
