<?php

namespace App\Http\Controllers;

use App\CategorySlugRelation;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->get('search');
        $json = file_get_contents("https://www.thecocktaildb.com/api/json/v1/1/search.php?s=$search");
        $drinks_detail = json_decode($json, true);

        $categories = CategorySlugRelation::all();

        return view('cocktails.show', compact('drinks_detail', 'categories'));
    }
}
