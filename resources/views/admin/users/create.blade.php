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
      <h3>Creando Nuevo Usuario</h3>
    </div>
  </div>
  {!! Form::open(['url' => 'admin/users']) !!}
  <div class="card">
    <div class="card-body">
      <div class="row">


        <div class="col-md-6">
          <div class="form-group">
            {!!Form::label('name','Nombres')!!}
            {!!Form::text('name',null,['class'=>'form-control','required'])!!}
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            {!!Form::label('email','Email')!!}
            {!!Form::email('email',null,['class'=>'form-control','required'])!!}
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            {!!Form::label('password','Password')!!}
            {!!Form::password('password',['class'=>'form-control','required'])!!}
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            {!!Form::label('language_id','Idioma')!!}
            {!!Form::select('language_id', ['spanish' => 'Spanish', 'english' => 'English'], 'S',['class'=>'form-control'])!!}
          </div>
        </div>


        <div class="col-md-6">
          <div class="form-group">
            {!!Form::label('privilege','Privilegios')!!}
            {!!Form::select('privilege', ['admin' => 'Administrador', 'normal' => 'Normal'], 'normal',['class'=>'form-control'])!!}
          </div>
        </div>


        <div class="col-md-6">
          <div class="form-group">
            {!!Form::label('status','Estado')!!}
            {!!Form::select('status', ['A' => 'habilitado', 'D' => 'desabilitado'], 'S',['class'=>'form-control'])!!}
          </div>
        </div>

        <div class="col-md-12">
          <a href="{{('/admin/users')}}" class="btn btn-primary">Cancelar</a>
          <button class="btn btn-primary">Guardar</button>
        </div>

      </div>
    </div>
  </div>
{!! Form::close() !!}
</div>
@endsection
