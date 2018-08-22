<?php

namespace App\Http\Controllers;

use Image;
use Illuminate\Http\Request;
use App\Encuesta;
use App\Img;
use App\Testimonial;

class EncuestaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  
       
        
        $carbon = new \Carbon\Carbon();
        $date = $carbon->now();
        $date = $date->format('Y-m-d');
        
      
        $testimonial=$request['le_gusto'];
       
        Testimonial::create([
            'codigo_viaje'=>$request['codigo_viaje'],
            'name'=>$request['nombres_apellidos'],
            'date'=>$date,
            'acompanante'=>$request['acompanante'],
            'impresion_global'=>$request['global'],
            'ig_comentario'=>$request['ig_comentario'],
            'testimonial'=> $testimonial,
            'i_organizacion'=>$request['i_organizacion'],
            'i_transporte'=>$request['i_transporte'],
            'i_chofer'=>$request['i_chofer'],
            'i_comentario'=>$request['i_comentario'],
            'g_conocimiento'=>$request['g_conocimiento'],
            'g_simpatia'=>$request['g_simpatia'],
            'g_eficacia'=>$request['g_eficacia'],
            'g_comunicacion'=>$request['g_comunicacion'],
            'g_comentario'=>$request['g_comentario'],
            'alojamiento_limpieza'=>$request['alojamiento_limpieza'],
            'alojamiento_servicio'=>$request['alojamiento_servicio'],
            'alojamiento_comentario'=>$request['alojamiento_comentario'],
            'comida_cantidad'=>$request['comida_cantidad'],
            'comida_servicio'=>$request['comida_servicio'],
            'c_comentario'=>$request['c_comentario'],
            'le_gusto'=>$request['le_gusto'],
            'no_le_gusto'=>$request['no_le_gusto'],
            'status'=>'disappoved',
            'language'=>$request['lenguaje'],
            'email'=>$request['email'],
            'recomendaria'=>$request['recomendaria'],
            'contactarnos'=>$request['contactar'],
            'nationality'=>$request->nationality,
            'tipo'=>'Encuesta',
            

        ]);
        
        

        return redirect('/encuesta/enviada');
        
        
        
        
        
    }

    public function enviado(){
        return '<img src="https://www.terandes.com/img/terandes-logo.png"/><br><h3>THANK YOU<br> YOUR OPINION <br>IS VERY IMPORTANT TO US</h3><br><a href="https://www.terandes.com">visita la página de terandes.com</a>';
    }



    public function upload(Request $request){   
      
        $file = $request->file('images');
        $extension = $file->getClientOriginalExtension(); 
        $fileName = $file->getClientOriginalName();
        $size = $file->getClientSize();
        $file->move('../public_html/img/encuesta/', $fileName);
        $ruta = 'img/encuesta/'.$fileName;

        Img::create([
            'route'=>$ruta
        ]);


    }




    public function index(){
        $encuesta = Encuesta::All();
        return view('admin.encuesta.index',['encuesta'=>$encuesta]);
    }

    public function show($id){

        $encuesta = Encuesta::find($id);
     
        return view('admin.encuesta.edit',['encuesta'=>$encuesta]);
     
    }

    public function edit(Request $request,$id){

        $encuesta = Encuesta::find($id);
        $encuesta->fill([
            'status'=>$request['status']
        ]);
        
        $encuesta->save();

        return redirect('admin/encuesta');
    }


  
}
