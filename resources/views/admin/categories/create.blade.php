@extends('admin.layouts.master')


@section('content')
<div class="container">
  <div class="row">
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
      <h3>Creando Nuevo Categoria</h3>
    </div>
  </div>
  {!! Form::open(['url' => 'admin/users']) !!}
  <div class="card">
    <div class="card-body">
      <div class="row justify-content-md-center">

        <div class="col-md-6">
          {!!Form::label('name','Nombre')!!}
          {!!Form::text('name',null,['class'=>'form-control','required'])!!}
        </div>
        <div class="col-md-6">
          {!!Form::label('name','Lenguaje')!!}
          <select name="" id="" class="form-control">
            <option value="">Spanish</option>
          </select>
        </div>
        <div class="col-md-12">
          {!!Form::label('description','Descripcion')!!}
          {!!Form::textarea('name',null,['class'=>'form-control','required'])!!}
        </div>

          <div class="col-md-6">
            {!!Form::label('status','Estado')!!}
            {!!Form::select('size', ['A' => 'habilitado', 'D' => 'deshabilitado'], 'A',['class'=>'form-control'])!!}
          </div>
        <div class="col-md-12">
          <hr>
        </div>
        <div class="col-md-2">
          <a href="{{('/admin/users')}}" class="btn btn-danger form-control">Cancelar</a>
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
