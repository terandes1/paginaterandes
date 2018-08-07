<?php

namespace App\Http\Controllers;

use App\Tour;
use App\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index($id){
      $tour = Tour::find($id);
      $prices = Price::where('tour_id',$id)->get();

      return view('admin.price.index',['tour'=>$tour,'prices'=>$prices]);
    }

    public function create($id){
      $tour = Tour::find($id);
      return view('admin.price.create',['tour'=>$tour]);
    }

    public function store(Request $request){
      Price::create($request->all());
      return redirect('admin/price/tour/'.$request->tour_id)->with('status','El rango de precios ha sido creado exitosamente');
    }

    public function show($id){
      $price = Price::find($id);
      return view('admin.price.update',['price'=>$price]);
    }

    public function update(Request $request, $id){
      $price = Price::find($id);
      $tour = Tour::find($price->tour_id);
      $price->fill($request->all());
      $price->save();
      return redirect('admin/price/tour/'.$tour->id)->with('status','El rango de precios ha sido actualizado exitosamente');
    }

    public function delete($id){


      $price = Price::find($id);
      $tour = Tour::find($price->tour_id);
      $price->delete();

      return redirect('admin/price/tour/'.$tour->id)->with('status','El rango de precios ha sido eliminado exitosamente');

    }








}
