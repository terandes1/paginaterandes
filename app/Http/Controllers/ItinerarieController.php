<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Itinerarie;
use App\Tour;
use App\Http\Requests\UpdateItinerarie;
use App\Icon;
class ItinerarieController extends Controller
{
    public function update($id)
    {
    	$icons=Icon::all();

        $tourItem=Tour::find($id);

    	return view('admin.itineraries.update',['tourItem'=>$tourItem,'icons'=>$icons]);
    
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
		    'latitud' => ' ',
		    'longitud' => ' ',
		    'icono' => $request['icon']
			]
		);

    	return redirect()->route('itinerario',$request['idTourP'])->with('info' , 'Se registro correctamente');
    }

    public function listar($id)
    {
         $itinerarie=DB::table('itineraries')->where('tour_id', '=', $id)->get();

         $maxItem = Itinerarie::whereRaw('id = (select max(`id`) from itineraries where tour_id='.$id.' )')->get();
         return response()->json(['data'=>$itinerarie,'maxItem'=>$maxItem]);
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
        //return $request['altitud'];
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
                ]);
    	return redirect()->route('itinerario',$request['idTourP'])->with('info' , 'Se registro correctamente');

    }

    public function ubicacion($id)
    {
     
     $itenerarioItem=Itinerarie::find($id);
     $icons=Icon::all();
     return response()->json(['data'=>$itenerarioItem,'icons'=>$icons]);

    }
    public function ubicacionUpdate(Request $request)
    {
       
        $itinerarie=DB::table('itineraries')->where('id', '=', $request['idItinerario'])->get()[0]; 
        
        $idTourP=$itinerarie->tour_id;
        DB::table('itineraries')
            ->where('id', $request['idItinerario'])
            ->update([
                
                    'latitud' => $request['latitud1'],
                    'longitud' => $request['longitud1'],
                    'icono' => $request['Selecticons']
                ]);
        return redirect()->route('itinerario', $idTourP)->with('info' , 'Se registro correctamente');
    }

}
