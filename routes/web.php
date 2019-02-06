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
Route::get('/privacy_policy', function () {
    return view('policy');
});

Route::middleware('auth')->group(function() {

    Route::get('/profile', ["uses" => "HomeController@edit", "as" => "profile"]);
    Route::post('/profile', ["uses" => "HomeController@update", "as" => "profile.update"]);

    Route::post('/buy_mixit', 'CartController@index');
    Route::get('/cart', ["uses" => "CartController@index", "as" => "cart.index"]);
    Route::post('/cart', 'CartController@store');

});

Route::middleware('admin')->group(function(){
    Route::get('admin/costumers/', ["uses" => "Backend\AdminController@costumer", "as" => "admin.customer"]);
    Route::get('admin/costumers/{id}', ["uses" => "Backend\AdminController@edit_costumer", "as" => "admin.edit_costumer"]);
    Route::post('admin/costumers/{id}', ['uses' => 'Backend\AdminController@update_costumer', 'as' => 'admin.update_costumer']);
    Route::delete('admin/costumers/{id}', ['uses' => 'Backend\AdminController@destroy_costumer', 'as' => 'admin.destroy_costumer']);
    Route::get('admin/orders', ["uses" => "Backend\AdminController@orders", "as" => "admin.order"]);
    Route::get('admin/orders/{id}', ["uses" => "Backend\AdminController@edit_order", "as" => "admin.edit_order"]);
    Route::post('admin/orders/{id}', ['uses' => 'Backend\AdminController@update_order', 'as' => 'admin.update_order']);
    Route::delete('admin/orders/{id}', ['uses' => 'Backend\AdminController@destroy_order', 'as' => 'admin.destroy_order']);
});

Route::get('/search', ["uses" => "SearchController@search", "as" => "search"]);
Route::get('/mixit', ["uses" => "MixitController@index", "as" => "index"]);
Route::get('/{category}', ["uses" => "DrinkController@index", "as" => "index"]);
Route::post('/{drink_id}', ["uses" => "DrinkController@show", "as" => "show"]);






