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
  {!!Form::model($serie, ['url' => ['admin/serie', $serie->id],'method'=>'PUT'])!!}
  <div class="card">
    <div class="card-body">
      <div class="row justify-content-md-center">

        <input type="text" name="tour_id" value="{{$tour->id}}" hidden>

        <div class="col-md-4">
            <div class="form-group">
                {!!Form::label('cant_person','Cantidad de Personas')!!}
                {!!Form::number('cant_person', null,['class'=>'form-control','step'=>'any','required'])!!}
            </div>
        </div>


        <div class="col-md-4">
            <div class="form-group">
                {!!Form::label('date_start','Fecha Inicio')!!}
                {!!Form::date('date_start', null,['class'=>'form-control','required'])!!}

            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
            {!!Form::label('date_end','Fecha Final')!!}
            {!!Form::date('date_end', null,['class'=>'form-control','required'])!!}
            </div>
        </div>

        <div class="col-md-12">
          <hr>
        </div>
        <div class="col-md-2">
          <a href="{{('/admin/serie/tour/'.$tour->id)}}" class="btn btn-danger form-control">Cancelar</a>
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
