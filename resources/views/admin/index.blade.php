@extends('admin.layouts.master')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <br><br>
    </div>
    @if(auth()->user()->hasRoles(['admin']))
    <div class="col-md-3">
      <div class="card">
        <div class="card-body text-center">
          <h4>USUARIOS</h4> <br>
          <a href="{{('/admin/users')}}" class="btn btn-primary form-control">IR</a>
        </div>
      </div>
    </div>
    @endif
    @if(auth()->user()->hasRoles(['admin']))
    <div class="col-md-3">
      <div class="card">
        <div class="card-body text-center">
          <h4>LENGUAJE</h4> <br>
          <a href="{{('/admin/languages')}}" class="btn btn-primary form-control">IR</a>
        </div>
      </div>
    </div>
    @endif
    <div class="col-md-3">
      <div class="card">
        <div class="card-body text-center">
          <h4>CATEGORIAS</h4> <br>
          <a href="{{('/admin/categories')}}" class="btn btn-primary form-control">IR</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card">
        <div class="card-body text-center">
          <h4>TOUR</h4> <br>
          <a href="{{('/admin/tours')}}" class="btn btn-primary form-control">IR</a>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <br>
    </div>
    <!--<div class="col-md-3">
      <div class="card">
        <div class="card-body text-center">
          <h4>ITINERARIO</h4> <br>
          <a href="{{('/admin/itineraries')}}" class="btn btn-primary form-control">IR</a>
        </div>
      </div>
    </div>-->

    <div class="col-md-3">
      <div class="card">
        <div class="card-body text-center">
          <h4>TESTIMONIOS</h4> <br>
          <a href="{{('/admin/languages')}}" class="btn btn-primary form-control">IR</a>
        </div>
      </div>
    </div>

    <!--<div class="col-md-3">
      <div class="card">
        <div class="card-body text-center">
          <h4>RESERVA</h4> <br>
          <a href="{{('/admin/languages')}}" class="btn btn-primary form-control">IR</a>
        </div>
      </div>
    </div>-->

    <div class="col-md-3">
      <div class="card">
        <div class="card-body text-center">
          <h4>EVENTOS</h4> <br>
          <a href="{{('/admin/events')}}" class="btn btn-primary form-control">IR</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-body text-center">
          <h4>MULTIMEDIA</h4> <br>
          <a href="{{('/admin/multimedia')}}" class="btn btn-primary form-control">IR</a>
        </div>
      </div>
    </div>
 @if(auth()->user()->hasRoles(['admin']))
    <div class="col-md-3">
      <div class="card">
        <div class="card-body text-center">
          <h4>PAPELERA</h4> <br>
          <a href="{{('/admin/trash')}}" class="btn btn-primary form-control">IR</a>
        </div>
      </div>
    </div>
@endif

  </div>
</div>
@endsection
