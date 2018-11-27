<?php

namespace App\Http\Controllers;

use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Category_images;

class RootController extends Controller
{

    public function index()
    {
//        $json = file_get_contents('https://www.thecocktaildb.com/api/json/v1/1/list.php?c=list');
//        $drinks = json_decode($json, true);
//
//        $drinks = $drinks["drinks"];

        $img = Category_images::all();

        //dd($img);

        return view('index',compact( 'img'));
    }




}