@extends('admin.layouts.master')


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <br>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <br>
      <h3>Creando Nuevo Events</h3>
    </div>
  </div>
    {!! Form::open(['route' => ['events.update',"$event->id"] , 'method' => 'PUT', 'class' => 'form-horizontal','enctype' => 'multipart/form-data' ]) !!}
  <div class="card">
  <div class="card">
    <div class="card-body">
      <div class="row justify-content-md-center">
        

        <div class="col-md-12">
          {!!Form::label('name','Nombre')!!}
          {!!Form::text('name',$event->name,['class'=>'form-control','required'])!!}
      
        </div>
        <div class="col-md-6">
          {!!Form::label('Fecha Inicio','Fecha Inicio')!!}
          {!!Form::date('fecha_inicio',$event->fecha_inicio,['class'=>'form-control','required'])!!}
      
        </div>
        <div class="col-md-6">
          {!!Form::label('Fecha Final','Fecha Final')!!}
          {!!Form::date('fecha_fin',$event->fecha_fin,['class'=>'form-control','required'])!!}
        </div>
        <div class="col-md-8">
             {!!Form::label('name','Subir Imagen')!!}
            <input type="file" class="form-control" name="img" >
        </div>
        <div class="col-md-4">
        	<br>
        	<div class="thumbnail">
           		 <img alt="Nature" style="width: 130px;" src="/assets/content/events/{{$event->id}}.{{$event->img}}">
           	</div>
		</div>
        <div class="col-md-12">
          {!!Form::label('description','Descripcion')!!}
          {!!Form::textarea('description',$event->description,['class'=>'form-control','required'])!!}
        </div>

        <div class="col-md-12">
          <hr>
        </div>
        <div class="col-md-2">
          <a href="{{('/admin/events')}}" class="btn btn-danger form-control">Cancelar</a>
        </div>
        <div class="col-md-2">
          <button class="btn btn-success form-control">Actualizar</button>
        </div>

      </div>
    </div>
  </div>
{!! Form::close() !!}
</div>
@endsection