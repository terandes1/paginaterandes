<?php

namespace App\Http\Controllers;

use App\Tour;
use App\Multimedia;
use App\Language;
use App\Categorie;
use App\CategorieTour;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTour;
use App\Http\Requests\UpdateTour;
use Illuminate\Support\Str as Str;
use Illuminate\Support\Facades\DB;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tour::All();
        return view('admin.tours.index',['tours'=>$tours]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $languages = Language::All();
        $multimedia = Multimedia::All();
        return view('admin.tours.create',['multimedia'=>$multimedia,'languages'=>$languages]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTour $request)
    {

      $slug = Str::slug($request['name']);


      $file =  $request->file('img');
      $extension = $file->getClientOriginalExtension();
      $fileName = time() . '.' . $extension;
      $size = $file->getClientSize();
      $file->move(public_path('assets/content/'),$fileName);
      $ruta = 'assets/content/'.$fileName;


        $tour = Tour::create([
          'name'=>$request->name,
          'img'=>$ruta,
          'description_short'=>$request->description_short,
          'description_complete'=>$request->description_complete,
          'organization'=>$request->organization,
          'multimedia_id'=>$request->multimedia_id,
          'status'=>$request->status,
          'slug'=>$slug,
          'meta_description'=>$request->meta_description,
          'meta_keywords'=>$request->meta_keywords
        ]);

      return response($tour->id);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {

      $languages = Language::All();
      $multimedia = Multimedia::All();
      $categories = DB::select('select categories.slug from categories_has_tours cht left join categories on categories.id = cht.categorie_id where cht.tour_id = :id',['id'=>$tour->id]);

      return view('admin.tours.update',['tour'=>$tour,'multimedia'=>$multimedia,'languages'=>$languages,'categories'=>$categories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTour $request, Tour $tour)
    {


        if($request->name != $tour->name){
          $request->validate([
            'name' => 'required|unique:tours,name'
          ]);
        }


        $slug = Str::slug($request['name']);

        if ($request->img != null) {


          \File::delete(public_path($tour->img));

            $file =  $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move(public_path('assets/content/'),$fileName);
            $ruta = 'assets/content/'.$fileName;

            $tour->fill([
                'img'=>$ruta
            ]);

        }

        $tour->fill([
          'name'=>$request->name,
          'description_short'=>$request->description_short,
          'description_complete'=>$request->description_complete,
          'organization'=>$request->organization,
          'multimedia_id'=>$request->multimedia_id,
          'status'=>$request->status,
          'slug'=>$slug,
          'meta_description'=>$request->meta_description,
          'meta_keywords'=>$request->meta_keywords
        ]);


        $tour->save();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {
        //
    }

    public function get_categoria($id){
        $categories = Categorie::where('language_id',$id)->get();
        return response($categories);
    }


    public function delete_categoria($id){
        
        $categories = CategorieTour::where('tour_id',$id)->get();

        foreach($categories as $categorie){
            $c = CategorieTour::find($categorie->id);
            $c->delete();
        }

    }
}
