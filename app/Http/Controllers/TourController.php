<?php

namespace App\Http\Controllers;

use App\Tour;
use App\Multimedia;
use App\Language;
use App\Categorie;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTour;

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

      $file =  $request->file('img');
      $extension = $file->getClientOriginalExtension();
      $fileName = time() . '.' . $extension;
      $size = $file->getClientSize();
      $file->move(public_path('assets/content/'),$fileName);
      $ruta = 'assets/content/'.$fileName;


        Tour::create([
          'name'=>$request->name,
          'img'=>$ruta,
          'description_short'=>$request->description_short,
          'description_complete'=>$request->description_complete,
          'multimedia_id'=>$request->multimedia_id,
          'status'=>$request->status
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
        //
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
    public function update(Request $request, Tour $tour)
    {
        //
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
}
