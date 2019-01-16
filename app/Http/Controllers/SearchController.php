<?php

namespace App\Http\Controllers;

use App\CategorySlugRelation;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $searchterm =$request->get('searchterm');
        $json = file_get_contents("https://www.thecocktaildb.com/api/json/v1/1/search.php?s=$searchterm");
        $drinks_detail = json_decode($json, true);

        $categories = CategorySlugRelation::all();
        // Rückgabewert: Suchergebnis
        return view('cocktails.show', compact('drinks_detail', 'categories'));
    }
}
