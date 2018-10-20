<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\storeContact;
use Session;
class ContactController extends Controller
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
    public function store(storeContact $request)
    {

        if($request->idioma=='es')
        {
           Mail::to('solicitudes@terandes.com')->send(new ContactMail($request));
        //   Mail::to('terandes@terandes.com')->send(new ContactMail($request));
        //   Mail::to('ventascusco8@terandes.com')->send(new ContactMail($request));


        //   Mail::to('ventascusco2@terandes.com')->send(new ContactMail($request));
        //   Mail::to('ventascusco4@terandes.com')->send(new ContactMail($request));
 
           Session::flash('flash_message', '¡ Muchas gracias! Su mensaje ha sido registrada. En breves minutos nos comunicaremos con usted.');
           return Redirect::back();     
        }
       

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
