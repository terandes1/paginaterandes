<?php

namespace App\Http\Controllers;
use App\Tour;
use Illuminate\Http\Request;
use App\Helpers\publicTours;
use Illuminate\Support\Facades\DB;
use App\Categorie;
use App\testimonial;
use App\Event;
use App\Itinerarie;
class PublicController extends Controller
{
    function __construct()
    {
         $this->middleware('verificarIdioma');
    }

    public function index()
    {
    	
		
    	return redirect('/es');
    	
    }

    public function lang($abbr='es'){

    	$toursPrincipal=publicTours::tours($abbr,'0');//Retoro de  tours  en español y principal(es y 0)
    	
    	//return $toursPrincipal;
    	$toursLujos=publicTours::tours($abbr,'1');//Retoro de  turs de lujos (es y 1)
    	
    	//return $toursPrincipal;
        $testimonials = DB::table('testimonials')->where('status', 'approve')->where("language","=",$abbr)->latest()->take(10)->get();

        $suma = 0;
        foreach($testimonials as $item)            
        {   
            $suma += (int)$item->impresion_global; 
        }
        $media =round($suma/count($testimonials));//promedio de impresion global de testimonios

    	return view('public.'.$abbr.'.index',['toursPrincipal' => $toursPrincipal,'toursLujos' => $toursLujos,'testimonials'=>$testimonials,'abbr'=>$abbr,'media'=>$media]);
    }

    public function contact($abbr='es')
    {

    	return view('public.'.$abbr.'.contact');

    }

   public function tours($abbr='es',$search='')
   {

   		$categorias = DB::table('languages')
			    ->join('categories', 'languages.id', '=', 'categories.language_id')
			    ->where('languages.abbr','=',$abbr)
			    ->get();


		if($search=='')
		{
			$todoTours=publicTours::todoTours($abbr);//todo los tours

		}else {

				if($search=="cuzco")
				{
					$search="cusco";
				}
				
				$todoTours=publicTours::searchTours($abbr,$search);//buscar tours

		}
	    
   		return view('public.'.$abbr.'.tours',['categorias' =>$categorias ,'abbr' => $abbr,'todoTours' =>$todoTours]);

   }
   public function toursOpcion()//filtrado por catagoria y ciudades
   {
   		
   		if(request()->ajax())
			{
				
				$abbr=$_POST['abbr'];
				if($_POST['cantidaPeticion']<1)
				{
					$categories = DB::table('categories')
								  ->select('categories.name as categoriaName','tours.name','tours.slug','tours.description_short','tours.price','tours.img')
                    			  ->join('languages', 'languages.id', '=', 'categories.language_id')
                  				  ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			       				  ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
                  				  ->where('languages.abbr',$abbr)->get();

					return response(['data' => $categories,'can' => $_POST['cantidaPeticion']]);
				}

				$categorie=$_POST['catagoria'];
			
				
				$categories = DB::table('categories')
								  ->select('categories.name as categoriaName','tours.name','tours.slug','tours.description_short','tours.price','tours.img')
                    			  ->join('languages', 'languages.id', '=', 'categories.language_id')
                  				  ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			       				  ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
                  				  ->whereIn('categories.id', $categorie)
                  				  ->where('languages.abbr',$abbr)->get();

				return response(['data' => $categories,'can' => $_POST['cantidaPeticion']]);
				
				
			}
	

   }

   public function toursOpcionPrecio()
   {

   		if(request()->ajax())
			{
				
				$abbr=$_POST['abbr'];
				if($_POST['cantidaPeticion']<2)
				{
					$categories = DB::table('categories')
								  ->select('categories.name as categoriaName','tours.name','tours.slug','tours.description_short','tours.price','tours.img')
                    			  ->join('languages', 'languages.id', '=', 'categories.language_id')
                  				  ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			       				  ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
                  				  ->where('languages.abbr',$abbr)->get();

					return response(['data' => $categories,'can' => $_POST['cantidaPeticion']]);
				}

				$precios=$_POST['precios'];
				$id;
				$minPrecio;
				$maxPrecio;

				$count=0;
				$tempTours=array();
				foreach ($precios as $key => $value) 
					{
						$count=1+$count;

						if($count==1)
						{
							$minPrecio=$value;
						}
						if($count==2)
						{
							$maxPrecio=$value;
							
								$categories = DB::table('categories')
								  ->select('categories.name as categoriaName','tours.name','tours.slug','tours.description_short','tours.price','tours.img')
                    			  ->join('languages', 'languages.id', '=', 'categories.language_id')
                  				  ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			       				  ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
                  				  ->whereBetween('tours.price',[$minPrecio,$maxPrecio])
                  				  ->where('languages.abbr',$abbr)->get();
                  				  foreach ($categories as  $item) {

                  				  		 $tempTours[] = array(
                  				  		 	"categoriaName" => $item->categoriaName,
                  				  		 	"name" => $item->name,
                  				  		 	"description_short" => $item->description_short,
                  				  		 	"description_short" => $item->description_short,
                  				  		 	"price" => $item->price,
                  				  		 	"slug" => $item->slug,
                  				  		 	"img" => $item->img
                  				  		 );
                  				  }
                  				 

                  			$count=0;

						}

					}
				
			
				return response(['data' => $tempTours]);
				
				
			}
	

   }

   public function tour($abbr='es',$slug)
   {
   	 
   	 $tour = Tour::where('slug', '=', $slug)->get()[0];


   	 $tourCategoria = DB::table('tours')
			        ->select('categories.id')
			        ->join('categories_has_tours', 'tours.id', '=', 'categories_has_tours.tour_id')
			        ->join('categories', 'categories.id', '=', 'categories_has_tours.categorie_id')
			        ->where("tours.id","=",$tour->id)
			        ->get()[0];//traaes el ide relacionado con tours
	
	 		       
   	 $multimediaTour = DB::table('tours')
			        ->select('images.path')
			        ->join('multimedia', 'tours.multimedia_id', '=', 'multimedia.id')
			        ->leftjoin('images', 'multimedia.id', '=', 'images.multimedia_id')
			        ->where("tours.id","=",$tour->id)
			        ->get();

	$itinerarioTour = DB::table('tours')
			        ->select('itineraries.name','itineraries.description','itineraries.day','itineraries.department','itineraries.province','itineraries.district','itineraries.altitud','itineraries.altitud','itineraries.latitud','itineraries.longitud','itineraries.icono')
			        ->join('itineraries', 'tours.id', '=', 'itineraries.tour_id')
			        ->where("tours.id","=",$tour->id)
			        ->get();
   
    $toursPrincipal=publicTours::tours($abbr,'1');//Retorne de  tours  en español y principal(1 y 0)
    $toursRelacionados=publicTours::toursRelacionados($abbr,$tourCategoria->id);//Retorne de  tours  relacionados

   	 return view('public.'.$abbr.'.tour',['tour' => $tour,'multimediaTour' => $multimediaTour,'toursPrincipal' => $toursPrincipal,'itinerarioTour' => $itinerarioTour,'toursRelacionados' => $toursRelacionados,'abbr'=>$abbr]);

   }
   public function tourItinerario(Request $request)
   {
	   	if($request->ajax())
	   	{
	   		$idTour =	$_POST['idTour'];
	   		$abbr	=	$_POST['abbr'];
	   		$tempItinerarioPuntos=[];
	   		$tempItinerarioGrafica=[];
	   		$data=DB::table('tours')
   					->select('itineraries.name','itineraries.day','itineraries.latitud','itineraries.longitud','icons.id as idIcons','icons.url','itineraries.description','tours.img')
   			  		->join('itineraries','tours.id','=','itineraries.tour_id')
   			  		->join('icons','itineraries.icono','=','icons.id')
   			  		->where('tours.id',$idTour)
   			  		->get();
   			$dataGrfica=DB::table('tours')
   					->select('itineraries.latitud as lat','itineraries.longitud as lng')
   			  		->join('itineraries','tours.id','=','itineraries.tour_id')
   			  		->join('icons','itineraries.icono','=','icons.id')
   			  		->where('tours.id',$idTour)
   			  		->get();

   			foreach ($data as $item) {

   				  $tempItinerarioPuntos[]=[$item->name,(float)$item->latitud,(float)$item->longitud,$item->idIcons,$item->url,$item->description,$item->img];

   				  $tempItinerarioGrafica[]=[(float)$item->latitud,(float)$item->longitud];
   			}
   			

	   	}

	   	return response(['data'=>$tempItinerarioPuntos,'grafica'=> $dataGrfica]);
   }

    
    public function  testimonials($abbr='es',$estadoHabilitado='approve')
    {

       $testimonials = DB::table('testimonials')->where('status', $estadoHabilitado)->where("language","=",$abbr)->get();
       return view('public.'.$abbr.'.testimonials',['testimonials'=>$testimonials]);
   
     }
 
    public function  events($abbr='es')
    {
    	$eventos=Event::all();

    	return view('public.'.$abbr.'.events',['eventos'=>$eventos]);

    }

    public function   our_team($abbr='es')
    {
    	return view('public.'.$abbr.'.our-team');
    }
    
}   

