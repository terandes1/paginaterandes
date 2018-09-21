<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;
use App\Http\Requests\StoreReservation;
use Session;
class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reserva=Reservation::all();
        return view('admin.reserva.index',['reserva' => $reserva]);
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
    public function store(StoreReservation $request)
    {
       
           $reservation = new Reservation;
           $reservation->name =$request->name;
           $reservation->email = $request->email;
           $reservation->phone = $request->phone;
           $reservation->skype =$request->skype;
           $reservation->fecha =$request->fecha;
           $reservation->country =$request->country;
           $reservation->travel_type =$request->travel_type;
           $reservation->numberPersonas =$request->numberPersonas;
           $reservation->room_type =$request->room_type;
           $reservation->guide_service =$request->guide_service;
           $reservation->message =$request->message;
           $reservation->tour_id =$request->tour_id;
           $reservation->status ='disapproved';
           $reservation->save();

           $abbr=$request->abbr;
           $tour_id=$request->tour_id;

           Session::flash('flash_message', '¡ Muchas gracias! Su reserva ha sido registrada. En breves minutos nos comunicaremos');

           return redirect($abbr.'/reservartion/'.$tour_id);
           

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
