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
      <h3>Creando Nuevo Rango de Precio</h3>
    </div>
  </div>
  {!! Form::open(['url' => 'admin/price/tour/'.$tour->id.'/create']) !!}
  <div class="card">
    <div class="card-body">
      <div class="row justify-content-md-center">

        <input type="text" name="tour_id" value="{{$tour->id}}" hidden>
        <div class="col-md-4">
          <div class="form-group">
            {!!Form::label('range_first','DE')!!}
            {!!Form::number('range_first', null,['class'=>'form-control','required'])!!}
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            {!!Form::label('range_end','HASTA')!!}
            {!!Form::number('range_end', null,['class'=>'form-control','required'])!!}
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            {!!Form::label('monto','Precio')!!}
            {!!Form::number('monto', null,['class'=>'form-control','step'=>'any','required'])!!}
          </div>
        </div>

        <div class="col-md-12">
          <hr>
        </div>
        <div class="col-md-2">
          <a href="{{('/admin/price/tour/'.$tour->id)}}" class="btn btn-danger form-control">Cancelar</a>
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
