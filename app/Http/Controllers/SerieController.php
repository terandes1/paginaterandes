<?php

namespace App\Http\Controllers;

use App\Tour;
use App\Serie;


use Illuminate\Http\Request;

class SerieController extends Controller
{

  public function index($id){
    $tour = Tour::find($id);
    $series = Serie::where('tour_id',$id)->get();
    return view('admin.series.index',['series'=>$series,'tour'=>$tour]);
  }

  public function create($id){
    $tour = Tour::find($id);
    return view('admin.series.create',['tour'=>$tour]);
  }

  public function store(Request $request, $id){
    Serie::create($request->all());
    return redirect('admin/serie/tour/'.$id)->with('status','La serie ha sido creada Exitosamente');
  }

  public function show($id){
    $serie = Serie::find($id);
    $tour = Tour::find($serie->tour_id);
  return view('admin.series.update',['serie'=>$serie,'tour'=>$tour]);
  }

  public function update(Request $request,$id){
      $serie = Serie::find($id);
      $serie->fill($request->all());
      $serie->save();
      return redirect('admin/serie/tour/'.$serie->tour_id)->with('status','La serie ha sido actualizada Exitosamente');
  }

  public function delete($id){
      $serie = Serie::find($id);
      $serie->delete();
      return redirect('admin/serie/tour/'.$serie->tour_id)->with('status','La serie ha sido eliminada Exitosamente');
  }


}
