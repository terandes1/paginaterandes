@extends('admin.layouts.master')


@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-12">
          <br>
      </div>
    <div class="col-md-12">
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <br>
      <h3>Creando Nueva Serie</h3>
    </div>
  </div>
  {!! Form::open(['url' => 'admin/series']) !!}
  <div class="card">
    <div class="card-body">
      <div class="row justify-content-md-center">

        <div class="col-md-12">
            <div class="form-group">
                {!!Form::label('','Selecciona el Tour que quieres convertir en Serie')!!}
                <select name="" id="" class="form-control">
                    @foreach($tours as $tour)
                    <option value="{{$tour->id}}">{{$tour->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                {!!Form::label('','Cantidad de Personas')!!}
                <input type="number" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!!Form::label('','Precio por Persona en $')!!}
                <input type="number" class="form-control" step="any"> 
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                {!!Form::label('','Fecha Inicio')!!}
                <input type="date" class="form-control">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
            {!!Form::label('','Fecha Final')!!}
                <input type="date" class="form-control">
            </div>
        </div>
    
        <div class="col-md-12">
          <hr>
        </div>
        <div class="col-md-2">
          <a href="{{('/admin/series')}}" class="btn btn-danger form-control">Cancelar</a>
        </div>
        <div class="col-md-2">
          <button class="btn btn-success form-control">Guardar</button>
        </div>

      </div>
    </div>
  </div>
{!! Form::close() !!}
</div>
@endsection
