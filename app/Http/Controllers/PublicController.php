<?php

namespace App\Http\Controllers;
use App\Tour;
use Illuminate\Http\Request;
use App\Helpers\publicTours;
use Illuminate\Support\Facades\DB;
use App\Categorie;
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
    	return view('public.'.$abbr.'.index',['toursPrincipal' => $toursPrincipal,'toursLujos' => $toursLujos]);
    }

    public function contact($abbr='es')
    {

    	return view('public.'.$abbr.'.contact');

    }

   public function tours($abbr='es')
   {

   		$categorias = DB::table('languages')
			    ->join('categories', 'languages.id', '=', 'categories.language_id')
			    ->where('languages.abbr','=',$abbr)
			    ->get();
	    $todoTours=publicTours::todoTours($abbr);
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
				$max=max($precios);
				$min=min($precios);
				
				$categories = DB::table('categories')
								  ->select('categories.name as categoriaName','tours.name','tours.slug','tours.description_short','tours.price','tours.img')
                    			  ->join('languages', 'languages.id', '=', 'categories.language_id')
                  				  ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			       				  ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
                  				  ->whereBetween('tours.price',[$min,$max])
                  				  ->where('languages.abbr',$abbr)->get();

				return response(['data' => $categories,'can' => min($precios)]);
				
				
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

   	 return view('public.'.$abbr.'.tour',['tour' => $tour,'multimediaTour' => $multimediaTour,'toursPrincipal' => $toursPrincipal,'itinerarioTour' => $itinerarioTour,'toursRelacionados' => $toursRelacionados ]);

   }

    public function  testimonials($abbr='es')
    {

    	return view('public.'.$abbr.'.testimonials');

    }

    public function  events($abbr='es')
    {

    	return view('public.'.$abbr.'.events');

    }

    public function   our_team($abbr='es')
    {
    	return view('public.'.$abbr.'.our-team');
    }
    
}   

