<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Itinerarie;
use App\Tour;
class ItinerarieController extends Controller
{
    public function update($id)
    {
    	$tourItem=Tour::find($id);
    	return view('admin.itineraries.update',['tourItem'=>$tourItem]);
    
    }
    public function insert(Request $request)
    {
		
		DB::table('itineraries')->insert(
		    [
		    'tour_id' => $request['idTourP'],
		    'name' => $request['name'], 
		    'description' => $request['description'],
		    'day' => $request['day'],
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

    	//$price = Itinerarie::where('tour_id', '=',$itinerarie->tour_id)->max();
    	 $min = Itinerarie::whereRaw('id = (select min(`id`) from itineraries where tour_id='.$itinerarie->tour_id.' )')->get();
    	 
    	 $max = Itinerarie::whereRaw('id = (select max(`id`) from itineraries where tour_id='.$itinerarie->tour_id.' )')->get();
    	
    	DB::table('itineraries')->where('id', '=', $idItinerario)->delete();
    	if($itinerarie->day== $min[0]->day)
    	{
    		$da=0;
            //   max 3  min 1
    		for ($i=$min[0]->day; $i <$max[0]->day   ; $i++) { 
    			$da=$i+1;  // da=1  // i=2
    			DB::table('itineraries')
    					->where('tour_id',$itinerarie->tour_id)//1
    					->where('day',$da) //2
           			   ->update([
		    				'day' => $i,
               	 		]);	
    		}
    		return redirect()->route('itinerario',$itinerarie->tour_id)->with('info' , 'Se registro correctamente');
    	}

    	if($itinerarie->day == $max[0]->day)
    	{
    		
            DB::table('itineraries')->where('id', '=', $idItinerario)->delete();
            return redirect()->route('itinerario',$itinerarie->tour_id)->with('info' , 'Se registro correctamente');
    	}
    	
        if($itinerarie->day != $max[0]->day &&  $itinerarie->day != $min[0]->day )
        {
            $min=$itinerarie->day;
            $da=0;
            //   max 3  min 1
            for ($i=$min; $i <$max[0]->day   ; $i++) { 
                $da=$i+1;  // da=1  // i=2
                DB::table('itineraries')
                        ->where('tour_id',$itinerarie->tour_id)//1
                        ->where('day',$da) //2
                       ->update([
                            'day' => $i,
                        ]); 
            }
           
            return redirect()->route('itinerario',$itinerarie->tour_id)->with('info' , 'Se registro correctamente');
        }
        
    	/*return $max[0]->day;
    	return $min[0]->day;
    	DB::table('itineraries')->where('id', '=', $idItinerario)->delete();



    	return redirect()->route('itinerario',$itinerarie->tour_id)->with('info' , 'Se registro correctamente');*/

    }
     public function actualizar(Request $request)
    {

    	DB::table('itineraries')
            ->where('id', $request['id'])
            ->update([

            		'tour_id' => $request['idTourP'],
		    		'name' => $request['name'], 
		    		'description' => $request['description'],
		    		'day' => $request['day'],
		    		'department' => $request['deparment'],
		    		'province' => $request['province'],
		    		'district' => $request['district'],
		    		'altitud' => $request['altitud'],
		    		'latitud' => $request['latitud'],
		    		'longitud' => $request['longitud'],
		    		'icono' => $request['description']
                ]);

    	return redirect()->route('itinerario',$request['idTourP'])->with('info' , 'Se registro correctamente');

    }

}
