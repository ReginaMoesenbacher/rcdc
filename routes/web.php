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
Route::get('/{category}', ["uses" => "DrinkController@index", "as" => "index"]);
Route::post('/{drink_id}', ["uses" => "DrinkController@show", "as" => "show"]);


Route::get('/home/profile', function () {
    return view('home/profile');
});




