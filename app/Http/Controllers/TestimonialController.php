<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTestimonial;
use Image;
use DB;
class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestimonial $request)
    {
            //return $request->all();
           
           $date = new \DateTime();
           $date->format('Y-m-d');

           $img = $request->file('Imagen');
           $url = $img->getClientOriginalExtension();
           $itemp=new Testimonial; 

           $itemp->impresion_global=$request->global;
           $itemp->name=$request->name;
           $itemp->email=$request->email;
           $itemp->date =$date;
           $itemp->nationality=$request->nacionalidad;
           $itemp->photo= $url;
           $itemp->testimonial=$request->testimonial;
           $itemp->language=$request->abbr;

           $itemp->save();

           $id=DB::table('testimonials')->max('id');
           $nombreImgen = $id.'.'.$img->getClientOriginalExtension();
           $destinationPath = '../public/assets/content/testimonio';
           if (!file_exists($destinationPath)) {
              mkdir($destinationPath, 666, true);
             }
           $thumb_img = Image::make($img->getRealPath())->resize(600,300);
           $thumb_img->save($destinationPath.'/'.$nombreImgen,20);

           return redirect()->route('idiomas',$request->abbr)->with('info' , 'Se registro correctamente');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        //
    }

    public function insertTestimonials(Request $request)
    {

        if($request->ajax())
        {
           $itemp=new Testimonial; 

           $itemp->impresion_global=$_POST['impresion_global'];
           $itemp->name=$_POST['name'];
           $itemp->email=$_POST['email'];
           $itemp->date ='2017-07-07';
           $itemp->nationality=$_POST['nacionalidad'];
           $itemp->photo='holsad';
           $itemp->testimonial=$_POST['testimonial'];
           $itemp->language=$_POST['abbr'];

           $itemp->save();
           return response(['abbr'=>'hola']);
        }

    }
}
