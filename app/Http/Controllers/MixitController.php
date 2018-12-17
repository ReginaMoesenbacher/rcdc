<?php

namespace App\Http\Controllers;

use App\Mixit;
use Illuminate\Http\Request;

class MixitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $json = file_get_contents('https://www.thecocktaildb.com/api/json/v1/1/list.php?i=list');
        $ingredients = json_decode($json, true);

        //dd($ingredients['drinks'][0]['strIngredient1']);


        return view('mixits.index', compact('ingredients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mixit  $mixit
     * @return \Illuminate\Http\Response
     */
    public function show(Mixit $mixit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mixit  $mixit
     * @return \Illuminate\Http\Response
     */
    public function edit(Mixit $mixit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mixit  $mixit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mixit $mixit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mixit  $mixit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mixit $mixit)
    {
        //
    }
}
