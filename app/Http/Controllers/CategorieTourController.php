<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\CategorieTour;
use Illuminate\Http\Request;

class CategorieTourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "llegaste";
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
      $categoria = Categorie::where('slug',$request->slug)->get();

      $idcategoria = $categoria[0]->id;

      CategorieTour::create([
        'categorie_id'=>$idcategoria,
        'tour_id'=>$request->id
      ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategorieTour  $categorieTour
     * @return \Illuminate\Http\Response
     */
    public function show(CategorieTour $categorieTour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategorieTour  $categorieTour
     * @return \Illuminate\Http\Response
     */
    public function edit(CategorieTour $categorieTour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategorieTour  $categorieTour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategorieTour $categorieTour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategorieTour  $categorieTour
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategorieTour $categorieTour)
    {
        //
    }
}
