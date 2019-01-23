<?php

namespace App\Http\Controllers;

use App\Mixit;
use Illuminate\Http\Request;

class MixitController extends Controller
{
    public function index()
    {

        $json = file_get_contents('https://www.thecocktaildb.com/api/json/v1/1/list.php?i=list');
        $ingredients = json_decode($json, true);

        //dd($ingredients['drinks'][0]['strIngredient1']);


        return view('mixits.index', compact('ingredients'));
    }
}
