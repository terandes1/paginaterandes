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
      <h3>Creando Nuevo Usuario</h3>
    </div>
  </div>
  {!! Form::open(['url' => 'admin/users']) !!}
  <div class="card">
    <div class="card-body">
      <div class="row justify-content-md-center">


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
            <select name="language_id" id="language_id" class="form-control">
              @foreach($languages as $language)
              <option value="{{$language->id}}">{{$language->name}}</option>
              @endforeach
            </select>

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
            {!!Form::select('status', ['A' => 'habilitado', 'D' => 'desabilitado'], 'A',['class'=>'form-control'])!!}
          </div>
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
