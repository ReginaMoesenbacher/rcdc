<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', ["uses" => "RootController@index", "as" => "index"]);
Route::get('/home', ["uses" => "RootController@index", "as" => "home"]);
Route::middleware('auth')->group(function() {

    Route::get('/profile', ["uses" => "HomeController@edit", "as" => "profile"]);
    Route::post('/profile', ["uses" => "HomeController@update", "as" => "profile.update"]);

    Route::post('/buyMixit', 'CartController@index');

});

//Route::get('/search/', ["uses" => "SearchController@search", "as" => "search"]);
Route::get('/mixit', ["uses" => "MixitController@index", "as" => "index"]);
Route::get('/cart', ["uses" => "CartController@index", "as" => "cart.index"]);
Route::get('/{category}', ["uses" => "DrinkController@index", "as" => "index"]);
Route::post('/{drink_id}', ["uses" => "DrinkController@show", "as" => "show"]);






