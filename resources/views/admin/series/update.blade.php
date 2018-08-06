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
      <h3>Actualizando Serie</h3>
    </div>
  </div>
  {!!Form::model($serie, ['url' => ['admin/series', $serie->id],'method'=>'PUT'])!!}
  <div class="card">
    <div class="card-body">
      <div class="row justify-content-md-center">

        <div class="col-md-12">
            <div class="form-group">
                {!!Form::label('','Selecciona el Tour que quieres convertir en Serie')!!}
                <select name="" id="" class="form-control">
                    <option value="{{$tour->id}}">{{$tour->name}}</option>
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                {!!Form::label('cant_person','Cantidad de Personas')!!}
                {!!Form::number('cant_person', null,['class'=>'form-control','step'=>'any','required'])!!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!!Form::label('price','Precio por Persona en $')!!}
                {!!Form::number('price', null,['class'=>'form-control','step'=>'any','required'])!!}
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                {!!Form::label('date_start','Fecha Inicio')!!}
                {!!Form::date('date_start', null,['class'=>'form-control','required'])!!}
                
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
            {!!Form::label('','Fecha Final')!!}
            {!!Form::date('date_end', null,['class'=>'form-control','required'])!!}
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
