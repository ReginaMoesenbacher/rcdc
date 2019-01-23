<?php

namespace App\Http\Controllers;

use App\CategorySlugRelation;
use Illuminate\Http\Request;
use App\Category_images;


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
                new CategorySlugRelation([
                    'category_string' => $simpleDrink,
                    'slug' => str_slug($simpleDrink),
                    'category_api' => $simpleDrink
                ]);

            } else {
                $relation->shift();
                $duplicateRelations = $relation;

                foreach ($duplicateRelations as $duplicateRelation) {
                    $duplicateRelation->delete();
                }
            }
        }

        // entfernen deprecated categories
        foreach ($relations as $relation) {
            if (!in_array($relation->category_string, $simpleDrinks)) {
                // category aus datenbank löschen
                $relation->delete();
            }
        }


        $img = Category_images::all();

        $drinks = CategorySlugRelation::all();

        return view('index', compact('drinks', 'img'));
    }


}