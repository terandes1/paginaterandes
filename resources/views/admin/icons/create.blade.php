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
      <h3>Creando Nuevo Icono</h3>
    </div>
  </div>
  {!! Form::open(['route' => ['icons.store'] , 'method' => 'POST', 'class' => 'form-horizontal','enctype' => 'multipart/form-data' ]) !!}
  <div class="card">
    <div class="card-body">
      <div class="row justify-content-md-center">
        

        <div class="col-md-12">
          {!!Form::label('name','Nombre')!!}
          {!!Form::text('name',null,['class'=>'form-control','required'])!!}
      
        </div>
 
        <div class="col-md-12">
             {!!Form::label('name','Subir Imagen')!!}
            <input type="file" class="form-control" name="img" required>
        </div>

        <div class="col-md-12">
          <hr>
        </div>
        <div class="col-md-2">
          <a href="{{('/admin/icons')}}" class="btn btn-danger form-control">Cancelar</a>
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