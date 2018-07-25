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
      <div class="row">




        <div class="col-md-12">
          <a href="{{('/admin/users')}}" class="btn btn-danger">Cancelar</a>
          <button class="btn btn-success">Guardar</button>
        </div>

      </div>
    </div>
  </div>
{!! Form::close() !!}
</div>
@endsection
