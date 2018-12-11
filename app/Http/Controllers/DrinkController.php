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
        //This would contain all data to be sent to the view
        $data = array();

        //Get current page form url e.g. &page=6
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        //Create a new Laravel collection from the array data
        $collection = new Collection($drinks);

        //Define how many items we want to be visible in each page
        $per_page = 9;

        //Slice the collection to get the items to display in current page
        $currentPageResults = $collection->slice(($currentPage-1) * $per_page, $per_page)->all();

        //Create our paginator and add it to the data array
        $data['results'] = new LengthAwarePaginator($currentPageResults, count($collection), $per_page);

        //Set base url for pagination links to follow e.g custom/url?page=6
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
