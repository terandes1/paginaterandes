<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Events = Event::all();

        return view('admin.events.index',['Events' => $Events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $img = $request->file('img');
           $url = $img->getClientOriginalExtension();
           $event = new Event;
           $event->name = $request->name;
           $event->fecha_inicio = $request->fecha_inicio;
           $event->fecha_fin = $request->fecha_fin;
           $event->img = $url;
           $event->place = $request->place;
           $event->description =$request->description;
           $event->save();
           $id=DB::table('events')->max('id');
           $nombreImgen = $id.'.'.$img->getClientOriginalExtension();
           $destinationPath = '../public/assets/content/events';
           if (!file_exists($destinationPath)) {
              mkdir($destinationPath, 666, true);
             }
           $thumb_img = Image::make($img->getRealPath())->resize(600,300);
           $thumb_img->save($destinationPath.'/'.$nombreImgen,20);
           return redirect()->route('events.index')->with('info' , 'Se registro correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $event = Event::find($id);
          return view('admin.events.update',['event'=>$event]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $img = $request->file('img');
        if(empty($img))
        {
          $event = Event::find($id);
          $event->update([
              'name'         => $request->name,
              'fecha_inicio' => $request->fecha_inicio,
              'fecha_fin'    => $request->fecha_fin,
              'description'  => $request->description,
              'place'        => $request->place,
          ]);

          return redirect()->route('events.index');
        }else{
          $img = $request->file('img');
          $url = $img->getClientOriginalExtension();
          $event = Event::find($id);
          $event->update([
              'name'         => $request->name,
              'description'  => $request->description,
              'fecha_inicio' => $request->fecha_inicio,
              'place'        => $request->place,
              'fecha_fin'    => $request->fecha_fin,
              'img'         => $url,
          ]);
          $itemEvent = Event::where('id', '=',$id)->get()[0];
          $destinationPath = '../public/assets/content/events/'.$id.'.'.$itemEvent->img;
          if(file_exists(public_path($destinationPath)))
            {
              unlink(public_path($destinationPath));
            }else{
            }
          $nombreImgen = $id.'.'.$img->getClientOriginalExtension();
          $destinationPathN = '../public/assets/content/events';
           if (!file_exists($destinationPathN))
           {
              mkdir($destinationPathN, 666, true);
           }
           $thumb_img = Image::make($img->getRealPath())->resize(600,300);
           $thumb_img->save($destinationPathN.'/'.$nombreImgen,20);
           return redirect()->route('events.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itemEvent = Event::where('id', '=',$id)->get()[0];
        Event::destroy($id);
        $destinationPath = '../public/assets/content/events/'.$id.'.'.$itemEvent->img;
        if(file_exists(public_path($destinationPath)))
            {
            unlink(public_path($destinationPath));
            }else{
            }
        return redirect()->route('events.index')
                        ->with('success','Member deleted successfully');

    }
}
