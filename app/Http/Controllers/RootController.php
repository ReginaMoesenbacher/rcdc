<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class RootController extends Controller
{

    public function index()
    {
        $json = file_get_contents('https://www.thecocktaildb.com/api/json/v1/1/list.php?c=list');
        $drinks = json_decode($json, true);

        $drinks = $drinks["drinks"];

        return view('index', compact("drinks"));
    }



}