@extends('public.es.layouts.master')

@section('content')

<!--====== EVENTS ==========-->
<section>
  <div class="rows inn-page-bg com-colo">
    <div class="container inn-page-con-bg events events-1 tb-space" id="inner-page-title">
      <!-- TITLE & DESCRIPTION -->
      <div class="spe-title col-md-12">
        <h2>Tierra de los Andes <span> Eventos</span></h2>
        <div class="title-line">
          <div class="tl-1"></div>
          <div class="tl-2"></div>
          <div class="tl-3"></div>
        </div>
        <p>
          Tierras de los Andes es una agencia que organiza estadías y ofrece una amplia selección de servicios y servicios para clientes individuales o grupos.
        </p>
      </div>
      <div class="col-md-12">
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar eventos" title="Type in a name">
        <table id="myTable">
          <tbody>
            <tr>
              <th>#</th>
              <th>Nombre del evento</th>
              <th class="e_h1">Descripción</th>
              <th class="e_h1">Fecha</th>
              <th class="e_h1">Ubicación</th>

            </tr>
            @foreach($eventos as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>
                	<img src="/assets/content/events/{{$item->id}}.{{$item->img}}" alt="" />
                	<h4 style="text-align: left;">{!! $item->name !!}</h4>
                	<a href="#" class="events-title"></a> 
                </td>
                <td class="e_h1" style="text-align: justify;">{!! $item->description !!}</td>
                <td class="e_h3">{!! $item->fecha_fin !!}</td>
                <td class="e_h1">{!! $item->place !!}</td>
              </tr>

            @endforeach
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

@endsection
