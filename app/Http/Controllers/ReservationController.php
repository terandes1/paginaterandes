<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;
use App\Http\Requests\StoreReservation;
use App\Http\Requests\StoreReservationTour;
use Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationMail;
use App\User;
use App\Tour;
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
       
          
            $tour=Tour::select('name')
                 ->where('id',$request->tour_id)
                 ->get()[0];

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
           $reservation->status ='pendiente';
           //$reservation->save();

           $abbr=$request->abbr;
           $tour_id=$request->tour_id;
           Mail::to('michael101136@gmail.com')->send(new ReservationMail($request,$tour));

           Session::flash('flash_message', '¡ Muchas gracias! Su reserva ha sido registrada. En breves minutos nos comunicaremos con usted');

           return redirect($abbr.'/reservacion/'.$tour_id);
           

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
      
    
      /**  $reservation = reservation::find($reservation->id);
        $reservation->status = 'atendido';
        $reservation->save();
        return redirect('admin/reservartions/atendido')
                        ->with('success','Member deleted successfully'); */
    
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
     public function listReservationsStatus($status='pendiente')
    {
      
         $Reserva = Reservation::where('status',$status)->paginate(4); //listado de Reservaciones

        /*if(languageUsers::privilege()=='normal')
        {
             $language=languageUsers::languageTestimonioEncuesta();

             $ReservationPendiente = Reservation::where('language',$language->abbr)
                          ->where('status',$status)//opcion  testimonio encuesta
                          ->orderBy('created_at', 'desc')->paginate(4);
            
             return view('admin.reservation.index',['reservartions'=>$ReservationPendiente,'status'=>$status]);
 
        }*/
        
        return view('admin.reserva.index',['reserva'=>$Reserva,'status'=>$status]);

    }

    public function moverAtendido($id)
    { 
        $reservartion = Reservation::find($id);
        if ($reservartion->status== 'pendiente')
        {
            $reservartion->status ='atendido';
            $reservartion->save();
                return response()->json(['rpta'=>'Se movio a Atendidos' ]);
        }
        else{ 
            return response()->json(['rpta'=>'No se realizo el cambio']);
        }
    }

    public function reservartionTour(StoreReservationTour $request)
    {

            return( $request->all());
    }
}
