<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Serie;
use App\Tour;
use App\Http\Requests\StoreSerie;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = Serie::All();

        $series = DB::select('SELECT series.*,tours.name as tour FROM series INNER JOIN tours ON tours.id = series.tour_id');
        return view('admin.series.index',['series'=>$series]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tours = DB::select('select * from tours WHERE NOT EXISTS (SELECT NULL FROM series WHERE series.tour_id = tours.id)');
        return view('admin.series.create',['tours'=>$tours]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSerie $request)
    {
        Serie::create($request->all());
        return redirect('admin/series')->with('status','La serie ha sido creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $serie = Serie::find($id);
        $tour = Tour::find($serie->tour_id);
        return view('admin.series.update',['serie'=>$serie,'tour'=>$tour]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function edit(Serie $serie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $serie = Serie::find($id);
        $serie->fill($request->all());
        $serie->save();
        return redirect('admin/series')->with('status','La serie ha sido actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serie $serie)
    {
        //
    }
}
