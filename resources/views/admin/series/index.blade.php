@extends('admin.layouts.master')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <br>
    </div>
    <div class="col-md-12">
      @if (session('status'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('status') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      @endif
    </div>
    <div class="col-md-2">
    </br>
        <a href="{{('/admin/series/create')}}" class="btn btn-primary">Nueva Serie</a>

    </div>

    <div class="col-md-12">
    </br>
        <table class="table table-striped" id="table_serie">
        <thead>
          <tr>
            <th>Tour</th>
            <th>Cantidad Personas</th>
            <th>Precio Por Persona</th>
            <th>Fecha de Creación</th>
            <th>Fecha de Actualización</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($series as $serie)
          <tr>
            <td>{{$serie->tour}}</td>
            <td>{{$serie->cant_person}}</td>
            <td>$ {{$serie->price}}</td>
            <td>{{$serie->created_at}}</td>
            <td>{{$serie->updated_at}}</td>
            <td class="text-right">
                <div class="container">
                  <div class="row">
                  <div class="col-xs-6">
                    <a href="{{url('/admin/series/'. $serie->id )}}"><i class="fa fa-edit" style="color:blue;"></i></a>
                  </div>
                  <div class="col-xs-6">
                    {!!Form::open(['url'=>'/admin/series/'.$serie->id,'method'=>'DELETE','id'=>'eliminar'.$serie->id])!!}
                     &nbsp;&nbsp;&nbsp;&nbsp; <a href="#"><i name="eliminar{{$serie->id}}" class="fa fa-times" style="color:red;"></i></a>
                    {!!Form::close()!!}
                  </div>
                </div>
                </div>
              </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection


@section('script')
   <script>
    $(()=>{
      $('#table_serie').DataTable();
    });
  </script>
@endsection
