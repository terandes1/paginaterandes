<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Itinerarie;
class ItinerarieController extends Controller
{
    public function update($id)
    {
    	
    	return view('admin.itineraries.update',['idTour'=>$id]);
    }
    public function insert(Request $request)
    {
    	
		DB::table('itineraries')->insert(
		    [
		    'tour_id' => $request['idTourP'],
		    'name' => $request['name'], 
		    'description' => $request['description'],
		    'day' => '1',
		    'department' => $request['deparment'],
		    'province' => $request['province'],
		    'district' => $request['district'],
		    'altitud' => $request['altitud'],
		    'latitud' => $request['latitud'],
		    'longitud' => $request['longitud'],
		    'icono' => $request['description']
			]
		);

    	return redirect()->route('itinerario',$request['idTourP'])->with('info' , 'Se registro correctamente');
    }

    public function listar($id)
    {
    	 $itinerarie=DB::table('itineraries')->where('tour_id', '=', $id)->get();
    	 return response()->json(['data'=>$itinerarie]);
    }

     public function eliminar($idItinerario)
    {
    	
    	$itinerarie=DB::table('itineraries')->where('id', '=', $idItinerario)->get()[0]; 

    	DB::table('itineraries')->where('id', '=', $idItinerario)->delete();

    	return redirect()->route('itinerario',$itinerarie->tour_id)->with('info' , 'Se registro correctamente');

    }
}
