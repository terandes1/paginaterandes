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
use Carbon\Carbon;
use App\Helpers\languageUsers;
class PublicController extends Controller
{
    function __construct()
    {
       
    }

    public function index()
    {
    	
		
    	return redirect('/es');
    	
    }

    public function lang($abbr='es'){

      if($abbr =='es' || $abbr=='fr' || $abbr=='en' || $abbr=='de' || $abbr=='it')
      {
    	     
            $toursLujos=publicTours::toursIndex($abbr,'1');//Retoro de  turs de lujos (es y 1)
        	
        	  //return $toursPrincipal;
            $testimonials = DB::table('testimonials')
                            ->select('id','name','photo','impresion_global','nationality','testimonial','date')
                            ->where('status', 'approve')
                            ->where("language","=",$abbr)
                            ->latest()->take(10)->get();

            $suma = 0;
            foreach($testimonials as $item)            
            {   
                $suma += (int)$item->impresion_global; 
            }
            if(count($testimonials)>0)
            {
                    $media =round($suma/count($testimonials));//promedio de impresion global de testimonios

            }else 
            {
            	 $media=0;
            }

            $lenguajeFaltantes=languageUsers::lenguajeFaltantes($abbr);

            return view('public.'.$abbr.'.index',['toursLujos' => $toursLujos,'testimonials'=>$testimonials,'abbr'=>$abbr,'lenguajeFaltantes' => $lenguajeFaltantes,'media'=>$media]);


        } else {

            return view('errors.404');
        }

    	
    }


   public function tours($abbr='es',$searchCategoria='')
   {

     
      
      if($searchCategoria=='viaje-en-grupo' || $searchCategoria=='gruppenreisen' || $searchCategoria=='voyage-en-groupe'|| $searchCategoria=='group-travel' || $searchCategoria=='viaggi-di-gruppo')
      {
        $searchCategoria='series';
      }

      $categorias = DB::table('languages')
   				->select('categories.name','languages.abbr','categories.id')
			    ->join('categories', 'languages.id', '=', 'categories.language_id')
			    ->where('languages.abbr','=',$abbr)
			    ->get();


		switch ($searchCategoria) {
            case '':
                        $todoTours=publicTours::todoTours($abbr);//todo los tours
                        break;
            case 'series':
                         $todoTours=publicTours::searchSeries($abbr);//buscar tours tipo serie
                        break;
           
            default:

                        if($searchCategoria=='alta-Montania'){

                            $searchCategoria=str_replace("-"," ",$searchCategoria);
                            $searchCategoria=str_replace("alta-Montania","Alta Montaña",$searchCategoria);

                        }
                         if($searchCategoria=='voyage-en-groupe'){

                            $searchCategoria=str_replace("-"," ",$searchCategoria);
                           
                        }

                        $todoTours=publicTours::searchTours($abbr,$searchCategoria);//buscar tours

                break;
        } 
        $lenguajeFaltantes=languageUsers::lenguajeFaltantes($abbr);
	    
   		return view('public.'.$abbr.'.tours',['categorias' =>$categorias ,'lenguajeFaltantes' => $lenguajeFaltantes,'abbr' => $abbr,'todoTours' =>$todoTours]);

   }
   public function toursOpcion()//filtrado por catagori
   {
   		

      if(request()->ajax())
			{
				
				$abbr=$_POST['abbr'];
				if($_POST['cantidaPeticion']<1)
				{
					$categories = DB::table('categories')
								  ->select('categories.name as categoriaName', DB::raw('count(*) as dias'),'tours.id','tours.name','tours.slug','tours.description_short','tours.price','tours.img')
                    			  ->join('languages', 'languages.id', '=', 'categories.language_id')
                  				  ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			       				  ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
                                  ->leftJoin('itineraries', 'itineraries.tour_id', '=', 'tours.id')
                                  ->groupBy('tours.name')
                  				  ->where('languages.abbr',$abbr)->get();

					return response(['data' => $categories,'can' => $_POST['cantidaPeticion']]);
				}

				$categorie=$_POST['catagoria'];
			
				
				$categories = DB::table('categories')
								  ->select('categories.name as categoriaName',DB::raw('count(*) as dias'),'tours.name','tours.id','tours.slug','tours.description_short','tours.price','tours.img')
                    			  ->join('languages', 'languages.id', '=', 'categories.language_id')
                  				  ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			       				  ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
                                  ->leftJoin('itineraries', 'itineraries.tour_id', '=', 'tours.id')
                                  ->groupBy('tours.name')
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
								  ->select('categories.name as categoriaName',DB::raw('count(*) as dias'),'tours.name','tours.slug','tours.description_short','tours.price','tours.img')
                    			  ->join('languages', 'languages.id', '=', 'categories.language_id')
                  				  ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			       				  ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
                                  ->leftJoin('itineraries', 'itineraries.tour_id', '=', 'tours.id')
                                  ->groupBy('tours.name')
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
								  ->select('categories.name as categoriaName','tours.name',DB::raw('count(*) as dias'),'tours.slug','tours.description_short','tours.price','tours.img')
                    			  ->join('languages', 'languages.id', '=', 'categories.language_id')
                  				  ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			       				  ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
                                  ->leftJoin('itineraries', 'itineraries.tour_id', '=', 'tours.id')
                                  ->groupBy('tours.name')
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
                  				  		 	"img" => $item->img,
                                            "dias" => $item->dias
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
			        ->select('itineraries.name','itineraries.description','itineraries.day')
			        ->join('itineraries', 'tours.id', '=', 'itineraries.tour_id')
			        ->where("tours.id","=",$tour->id)
			        ->get();
    $seriesTour     = DB::table('series')
                    ->select('series.cant_person','series.date_start','series.date_end','series.status')
                    /*->join('series', 'tours.id', '=', 'series.tour_id')*/
                    ->where("series.tour_id","=",$tour->id)
                    ->get(); 

    $pricesTour     = DB::table('prices')
                    ->select('prices.range_first','prices.range_end','prices.monto')
                    /*->join('prices', 'tours.id', '=', 'prices.tour_id')*/
                    ->where("prices.tour_id","=",$tour->id)
                    ->get();                               
   
    $toursPrincipal=publicTours::tours($abbr,'1');//Retorne de  tours  en español y principal(1 y 0)
    $toursRelacionados=publicTours::toursRelacionados($abbr,$tourCategoria->id);//Retorne de  tours  relacionados

    $lenguajeFaltantes=languageUsers::lenguajeFaltantes($abbr);

   	 return view('public.'.$abbr.'.tour',['tour' => $tour,'multimediaTour' => $multimediaTour,'toursPrincipal' => $toursPrincipal,'itinerarioTour' => $itinerarioTour,'toursRelacionados' => $toursRelacionados,'seriesTour'=>$seriesTour,'pricesTour'=>$pricesTour,'abbr'=>$abbr,'lenguajeFaltantes' => $lenguajeFaltantes]);

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
   					->select('itineraries.id','itineraries.name','itineraries.day','itineraries.latitud','itineraries.longitud','icons.id as idIcons','icons.url')
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

   				  $tempItinerarioPuntos[]=[$item->name,(float)$item->latitud,(float)$item->longitud,$item->idIcons,$item->url];

   				  $tempItinerarioGrafica[]=[(float)$item->latitud,(float)$item->longitud];
   			}
   			

	   	}

	   	return response(['data'=>$tempItinerarioPuntos,'grafica'=> $dataGrfica]);
   }

 
  
    public function paginasIndependientes($abbr='es',$pagina)
    {
      
     
       if($pagina=='evenements' || $pagina=='eventos' || $pagina=='events' || $pagina=='ereignisse' || $pagina=='eventi') 
       {
          
          $eventos=Event::all();
          $lenguajeFaltantes=languageUsers::lenguajeFaltantes($abbr);
         
          return view('public.'.$abbr.'.events',['eventos'=>$eventos,'lenguajeFaltantes' => $lenguajeFaltantes,'abbr'=>$abbr]);
       }
     
      
      if($pagina=='nosotros' || $pagina=='nous' || $pagina=='we' || $pagina=='uns' || $pagina=='noi' )
      {

             $lenguajeFaltantes=languageUsers::lenguajeFaltantes($abbr);
             return view('public.'.$abbr.'.our-team',['lenguajeFaltantes' => $lenguajeFaltantes,'abbr'=>$abbr]);
      }

      if($pagina=='contacto' || $pagina=='contact' || $pagina=='kontakt' || $pagina=='contatto')
      {
            
           
            if($abbr=='es' || $abbr=='fr' || $abbr=='en' || $abbr=='de' || $abbr=='it')
             {
                 $tour = DB::table('tours')
                          ->select('tours.name')
                          ->join('categories_has_tours', 'tours.id', '=', 'categories_has_tours.tour_id')
                          ->join('categories', 'categories.id', '=', 'categories_has_tours.categorie_id')
                          ->join('languages', 'languages.id', '=', 'categories.language_id')
                          ->where('languages.abbr','=',$abbr)
                          ->get();
                $lenguajeFaltantes=languageUsers::lenguajeFaltantes($abbr);

                return view('public.'.$abbr.'.contact',['tour' =>$tour ,'abbr'=>$abbr,'lenguajeFaltantes' => $lenguajeFaltantes]);

             } else {

                 return view('errors.404');
             }

      }

      if($pagina=='testimonios' || $pagina=='temoignages' || $pagina=='testimonies' || $pagina=='testimonianze' || $pagina=='zeugnis')
      {
        
         $estadoHabilitado='approve';
         $testimonials = DB::table('testimonials')->where('status', $estadoHabilitado)->where("language","=",$abbr)->latest()->take(20)->get();
       
         $lenguajeFaltantes=languageUsers::lenguajeFaltantes($abbr);

         return view('public.'.$abbr.'.testimonials',['testimonials'=>$testimonials,'lenguajeFaltantes' => $lenguajeFaltantes,'abbr'=>$abbr]);
      }


    }

    public function reservation($abbr='es',$idTour='')
    {

      $tourCompra = DB::table('tours')
              ->select('tours.id','tours.name','tours.img','tours.price', 'tours.tipo_tour','categories.id as idCtagoria')
              ->join('categories_has_tours', 'tours.id', '=', 'categories_has_tours.tour_id')
              ->join('categories', 'categories.id', '=', 'categories_has_tours.categorie_id')
              ->where("tours.id","=",$idTour)
              ->get()[0];

     $tourItinerario= DB::table('itineraries')
                  ->select('itineraries.id')
                  ->where("itineraries.tour_id","=",$idTour)
                  ->get();
   $dia=count($tourItinerario);
    
   $toursRelacionados = DB::table('tours')
            ->select('tours.name','tours.img','tours.slug')
            ->join('categories_has_tours', 'tours.id', '=', 'categories_has_tours.tour_id')
            ->join('categories', 'categories.id', '=', 'categories_has_tours.categorie_id')
            ->where("categories.id","=",$tourCompra->idCtagoria)
            ->get()->take(3);

     $paises = DB::table('paises')
                            ->get();
      
     $lenguajeFaltantes=languageUsers::lenguajeFaltantes($abbr);

      return view('public.'.$abbr.'.reservation',['tour' => $tourCompra,'toursRelacionados' =>$toursRelacionados, 'paises' =>$paises,'dia' => $dia,'abbr'=>$abbr,'lenguajeFaltantes' => $lenguajeFaltantes]);

    }
    
}   

