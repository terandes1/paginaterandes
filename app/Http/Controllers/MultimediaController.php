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
        return view('admin.multimedia.update',['multimedia'=>$multimedia]);
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
        
        $multimedia->fill($request->all());
        $multimedia->save();
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

    public function create_img(Request $request, $id){



      $file =  $request->file('images');
      $extension = $file->getClientOriginalExtension();
      $NameOriginal = $file->getClientOriginalName();
      $fileName = $NameOriginal . '.' . $extension;
      $size = $file->getClientSize();
      $file->move(public_path('assets/content/'),$fileName);
      $ruta = 'assets/content/'.$fileName;

      Image::create([
        'multimedia_id'=>$id,
        'name'=>$fileName,
        'path'=>$ruta,
        'size'=>$size
      ]);

    }

    public function view_img($id){
      $images = Image::where('multimedia_id',$id)->get();
      return response($images);
    }

    public function delete_img($id){

      $video= Image::find($id);
      \File::delete(public_path($video->path));

      $video->delete();
    }



    public function view_video($id){

      $videos = Video::where('multimedia_id',$id)->get();
      return response($videos);
    }


    public function create_video(Request $request, $id){

      Video::create($request->all());
    }


    public function see_video($id){
      $video = Video::find($id);
      return response($video);
    }

    public function update_video(Request $request, $id){
        $video = Video::find($id);
        $video->fill([
          'name'=>$request->name,
          'description'=>$request->description,
          'path'=>$request->path
        ]);

        $video->save();
    }
    public function delete_video($id){
      $video = Video::find($id);
      $video->delete();
    }


}
