<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategorySlugRelation;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class DrinkController extends Controller
{
    public function index($category)
    {
        //dd($category)

        $param = CategorySlugRelation::where('slug', $category)->firstOrFail();
        $urlParam = $param->category_api;
        $json = file_get_contents('https://www.thecocktaildb.com/api/json/v1/1/filter.php?c=' . $urlParam);
        $drinks = json_decode($json, true);
        $drinks = $drinks["drinks"];
        $categories = CategorySlugRelation::all();

// Pagenate Anzahl der Seiten

        $data = array();

        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        $collection = new Collection($drinks);

        $per_page = 8;

        $currentPageResults = $collection->slice(($currentPage-1) * $per_page, $per_page)->all();

        $data['results'] = new LengthAwarePaginator($currentPageResults, count($collection), $per_page);

        $data['results']->setPath($category);



        return view('cocktails.index', compact('categories', 'data'));
//
    }

//Zeigt mir die Details an
    public function show($drink_id)
    {

        $json = file_get_contents('https://www.thecocktaildb.com/api/json/v1/1/lookup.php?i=' . $drink_id);
        $drinks_detail = json_decode($json, true);

        //dd($drinks);
        $categories = CategorySlugRelation::all();

        return view('cocktails.show', compact('categories','drinks_detail'));

    }
}
