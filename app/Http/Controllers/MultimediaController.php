<?php

namespace App\Http\Controllers;

use App\Multimedia;
use App\Image;
use App\Video;
use Illuminate\Http\Request;

class MultimediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $multimedias = Multimedia::All();
        return view('admin.multimedia.index',['multimedias'=>$multimedias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.multimedia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


      $multimedia =  Multimedia::create($request->all());
      return response($multimedia->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Multimedia  $multimedia
     * @return \Illuminate\Http\Response
     */
    public function show(Multimedia $multimedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Multimedia  $multimedia
     * @return \Illuminate\Http\Response
     */
    public function edit(Multimedia $multimedia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Multimedia  $multimedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Multimedia $multimedia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Multimedia  $multimedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Multimedia $multimedia)
    {
        //
    }

    public function create_img(){
      
    }


}
