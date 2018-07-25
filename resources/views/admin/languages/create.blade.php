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
      <h3>Creando Nuevo Lenguaje</h3>
    </div>
  </div>
  {!! Form::open(['url' => 'admin/users']) !!}
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              {!!Form::label('name','Nombre')!!}
              {!!Form::text('name',null,['class'=>'form-control'])!!}
            </div>
            <div class="col-md-12">
              {!!Form::label('abbr','Abreviación')!!}
              {!!Form::text('abbr',null,['class'=>'form-control'])!!}
            </div>
            <div class="col-md-12">
              {!!Form::label('abbr','Estado')!!}
              {!!Form::select('status', ['A' => 'habilitado', 'D' => 'desabilitado'], 'A',['class'=>'form-control'])!!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
{!! Form::close() !!}
</div>
@endsection
