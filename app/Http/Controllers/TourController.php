<?php

namespace App\Http\Controllers;

use App\Tour;
use App\Multimedia;
use App\Language;
use App\Categorie;
use App\CategorieTour;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTour;
use App\Http\Requests\UpdateTour;
use Illuminate\Support\Str as Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Helpers\languageUsers;


class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     function __construct()
    {      
         $this->middleware(['auth' ,'roles:normal,admin']);
    }
    public function index()
    {        
      
    }  

    public function listTourSerie($tipo_tour='tour')
    {

        $tours = DB::table('languages')
			        ->select('tours.*','languages.name as nameLenguage')
                    ->where('tours.tipo_tour',$tipo_tour)
			        ->join('categories', 'languages.id', '=', 'categories.language_id')
			        ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			        ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
              ->orderBy('tours.id', 'desc')
              ->get();

        if(languageUsers::privilege()=='normal')
        {
          	$tours = DB::table('languages')
			        ->select('tours.*','languages.name as nameLenguage')
			        ->join('categories', 'languages.id', '=', 'categories.language_id')
			        ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			        ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
			        ->where('languages.id',languageUsers::idLanguage())
             		->where('tours.status','A')
                    ->where('tours.tipo_tour',$tipo_tour)
			       ->orderBy('tours.id', 'desc')
                ->get();
            return view('admin.tours.index',['tours'=>$tours, 'tipo_tour' =>$tipo_tour ]);
     	 }

        return view('admin.tours.index',['tours'=>$tours, 'tipo_tour' =>$tipo_tour ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $languages = Language::All(); 

        if(languageUsers::privilege()=='normal')
        {
          $languages = DB::table('languages')
                    ->where('id', languageUsers::idLanguage())
                    ->get();
        }

        $multimedia = Multimedia::All();
        return view('admin.tours.create',['multimedia'=>$multimedia,'languages'=>$languages]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTour $request)
    {

      $slug = Str::slug($request['name']);

      $file =  $request->file('img');
      $extension = $file->getClientOriginalExtension();
      $fileName = time() . '.' . $extension;
      $size = $file->getClientSize();
      $file->move(public_path('assets/content/'),$fileName);
      $ruta = 'assets/content/'.$fileName;

        $tour = Tour::create([
          'name'=>$request->name,
          'img'=>$ruta,
          'description_short'=>$request->description_short,
          'description_complete'=>$request->description_complete,
          'organization'=>$request->organization,
          'multimedia_id'=>$request->multimedia_id,
          'status'=>$request->status,
          'slug'=>$slug,
          'tipo_tour'=>$request->tipo_tour,
          'meta_description'=>$request->meta_description,
          'meta_keywords'=>$request->meta_keywords,
          'price'=>$request->price 
        ]);

      return response($tour->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {

      $languages = Language::All(); 

        if(languageUsers::privilege()=='normal')
        {
          $languages = DB::table('languages')
                    ->where('id', languageUsers::idLanguage())
                    ->get();
        }

      $multimedia = Multimedia::All();
      $categories = DB::select('select categories.slug from categories_has_tours cht left join categories on categories.id = cht.categorie_id where cht.tour_id = :id',['id'=>$tour->id]);

      return view('admin.tours.update',['tour'=>$tour,'multimedia'=>$multimedia,'languages'=>$languages,'categories'=>$categories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTour $request, Tour $tour)
    {
        if($request->name != $tour->name){
          $request->validate([
            'name' => 'required|unique:tours,name'
          ]);
        }

        $slug = Str::slug($request['name']);

        if ($request->img != null) {

          \File::delete(public_path($tour->img));

            $file =  $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move(public_path('assets/content/'),$fileName);
            $ruta = 'assets/content/'.$fileName;
            $tour->fill([
                'img'=>$ruta
            ]);
        }

        $tour->fill([
          'name'=>$request->name,
          'description_short'=>$request->description_short,
          'description_complete'=>$request->description_complete,
          'organization'=>$request->organization,
          'multimedia_id'=>$request->multimedia_id,
          'status'=>$request->status,
          'slug'=>$slug,
          'tipo_tour'=>$request->tipo_tour,
          'meta_description'=>$request->meta_description,
          'meta_keywords'=>$request->meta_keywords,
          'price'=>$request->price 
        ]);
        $tour->save();
         if($tour->tipo_tour=='tour')
            {
                  return redirect('admin/listTourSerie/tour');
            }
            else{
                 return redirect('admin/listTourSerie/serie'); 
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {
        $tour = Tour::find($tour->id);
        $tour->status = 'D';
        $tour->save();
        return redirect('admin/listTourSerie/tour')
                        ->with('success','Member deleted successfully');
    }

    public function get_categoria($id)
    {
        $categories = Categorie::where('language_id',$id)->get();
        return response($categories);
    }

    public function delete_categoria($id)
    {
        $categories = CategorieTour::where('tour_id',$id)->get();
        foreach($categories as $categorie){
            $c = CategorieTour::find($categorie->id);
            $c->delete();
        }
    }

    public function publicarPrincipal($id)
    { 
       
        
        if(languageUsers::languageTestimonioEncuesta()->abbr=='all')
        {


                $tour = Tour::find($id);

                if ((int)$tour->principal== 0)
                {
                    
                        $tour->principal =1;
                        $tour->save();
                        return response()->json(['rpta'=>'Publicado en la portada principal' ]);
                }
                else{
                    $tour->principal =0;
                    $tour->save();
                    return response()->json(['rpta'=>'Se quitó de la portada principal']);
                }



        }else {

                $tour = Tour::find($id);
                if ((int)$tour->principal== 0)
                {
                    

                 $contarTurLujos = DB::table('languages')
                      ->select('tours.id','languages.name as nameLenguage')
                      ->join('categories', 'languages.id', '=', 'categories.language_id')
                      ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
                      ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
                      ->where('languages.id',languageUsers::idLanguage())
                      ->where('tours.status','A')
                      ->orderBy('tours.id', 'desc')
                      ->get();

                    if ( count($contarTurLujos)<6){
                        $tour->principal =1;
                        $tour->save();
                        return response()->json(['rpta'=>'Publicado en la portada principal' ]);
                    }
                    else{
                        return response()->json(['rpta'=>'No se publicó, Máximo 6 tours en la portada principal' ]);
                    }
                }
                else{
                    $tour->principal =0;
                    $tour->save();
                    return response()->json(['rpta'=>'Se quitó de la portada principal']);
                }

        }

       
    }     
}
