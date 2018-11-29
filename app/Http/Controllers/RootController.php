<?php

namespace App\Http\Controllers;

use App\CategorySlugRelation;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Category_images;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class RootController extends Controller
{

    public function index()
    {
        $json = file_get_contents('https://www.thecocktaildb.com/api/json/v1/1/list.php?c=list');
        $drinks = json_decode($json, true);

        $drinks = $drinks["drinks"];
        $simpleDrinks = [];
        foreach ($drinks as $drink) {
            $simpleDrinks[] = $drink['strCategory'];
        }

        $relations = CategorySlugRelation::all();

        foreach ($simpleDrinks as $simpleDrink) {
            $relation = $relations->where('category_string', $simpleDrink, 'category_api');

            if ($relation->isEmpty()) {
                $newRelation = new CategorySlugRelation([
                    'category_string' => $simpleDrink,
                    'slug' => str_slug($simpleDrink),
                    'category_api' => $simpleDrink
                ]);
               // $newRelation->save();
            } else {
                $firstRelation = $relation->shift();
                $duplicateRelations = $relation;

                foreach ($duplicateRelations as $duplicateRelation) {
                    $duplicateRelation->delete();
                }
            }
        }

        // remove deprecated categories
        foreach ($relations as $relation) {
            if (!in_array($relation->category_string, $simpleDrinks)) {
                // category aus datenbank löschen
                $relation->delete();
            }
        }


        $img = Category_images::all();

        $drinks = CategorySlugRelation::all();

        return view('index', compact('img', 'drinks'));
    }

    public function show($category)
    {
        //dd($category);
        $param = CategorySlugRelation::where('slug', $category)->firstOrFail() ;
        $urlParam = $param->category_api;
        $json = file_get_contents('https://www.thecocktaildb.com/api/json/v1/1/filter.php?c=' . $urlParam);
        $drinks = json_decode($json, true);
        $drinks = $drinks["drinks"];


        //This would contain all data to be sent to the view
        $data = array();

        //Get current page form url e.g. &page=6
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        //Create a new Laravel collection from the array data
        $collection = new Collection($drinks);

        //Define how many items we want to be visible in each page
        $per_page = 20;

        //Slice the collection to get the items to display in current page
        $currentPageResults = $collection->slice(($currentPage-1) * $per_page, $per_page)->all();

        //Create our paginator and add it to the data array
        $data['results'] = new LengthAwarePaginator($currentPageResults, count($collection), $per_page);

        //Set base url for pagination links to follow e.g custom/url?page=6
        $data['results']->setPath($category);

        //Pass data to view
        //return view('search', $data);

        return view('cocktails.show', $data);

    }


}