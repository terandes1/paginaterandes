@extends('public.en.layouts.master')

@section('content')

<!--====== EVENTS ==========-->
<section>
  <div class="rows inn-page-bg com-colo">
    <div class="container inn-page-con-bg events events-1 tb-space" id="inner-page-title">
      <!-- TITLE & DESCRIPTION -->
      <div class="spe-title col-md-12">
        <h2 id="titulo">Land of the Andes Events</h2>
        <div class="title-line">
          <div class="tl-1"></div>
          <div class="tl-2"></div>
          <div class="tl-3"></div>
        </div>
        <p id="subtitulo">
          Tierras de los Andes is an agency that organizes stays and offers a wide selection of services and services for individual clients or groups.
        </p>
      </div>
      <div class="col-md-12">
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar eventos" title="Type in a name">
        <table id="myTable">
          <tbody>
            <tr>
              <th>#</th>
              <th id="tituloEvento">Name of the event</th>
              <th class="e_h1" id="tituloEvento">Description</th>
              <th class="e_h1" id="tituloEvento">Date</th>
              <th class="e_h1" id="tituloEvento">Location</th>

            </tr>
            @foreach($eventos as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>
                	<img  style="width: 200px;" src="/assets/content/events/{{$item->id}}.{{$item->img}}"  alt="" />
                	<h4 id="tituloEvento">{!! $item->name !!}</h4>
                </td>
                <td class="e_h1" id="subtitulo" style="text-align: justify;">{!! $item->description !!}</td>
                <td class="e_h1" id="subtitulo" >{!! $item->fecha_fin !!}</td>
                <td class="e_h1" id="subtitulo">{!! $item->place !!}</td>
              </tr>

            @endforeach
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

@endsection
