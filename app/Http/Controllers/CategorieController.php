<?php

namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\DB;
class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Categorie = Categorie::all();

        return view('admin.categories.index',['categorias' => $Categorie]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          
           $img = $request->file('img');
           $url = $img->getClientOriginalExtension(); 

           $categoria = new Categorie;

           $categoria->language_id =$request->language;
           $categoria->name = $request->nombre;
           $categoria->img = $url;
           $categoria->img_hd ='';
           $categoria->description =$request->description;
           $categoria->status = $request->status;
           $categoria->save();

           $id=DB::table('categories')->max('id');
           $nombreImgen = $id.'.'.$img->getClientOriginalExtension(); 

           $destinationPath = '../public/assets/content/categoria';
           if (!file_exists($destinationPath)) {
              mkdir($destinationPath, 666, true);
             }
           $thumb_img = Image::make($img->getRealPath())->resize(600,300);
           $thumb_img->save($destinationPath.'/'.$nombreImgen,20);


           return redirect()->route('categories.index')->with('info' , 'Se registro correctamente');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $categorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        //
    }
}
