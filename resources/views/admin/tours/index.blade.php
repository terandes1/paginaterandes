@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
  <div class="row">
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
        <a href="{{('/admin/tours/create')}}" class="btn btn-primary">Nuevo Tour</a>

    </div>

    <div class="col-md-12">
    </br>
        <table class="table table-striped" id="table_tours">
        <thead class="thead-light">
          <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Estado</th>
            <th>Fecha de Creación</th>
            <th>Fecha de Actualización</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($tours as $tour)
          <tr>
            <td>{{$tour->name}}</td>
            <td>{{$tour->description_short}}</td>
            <td>
                @if($tour->status == 'A')
                <span class="badge badge-success">habilitado</span>
                @else
                <span class="badge badge-danger">deshabilitado</span>
                @endif
              </td>
            <td>{{$tour->created_at}}</td>
            <td>{{$tour->updated_at}}</td>
            <td>


              <div class="dropdown show">
              <a class="btn btn-danger dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Acciones
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="{{url('/admin/tours/'. $tour->id )}}">Editar</a>
                <a class="dropdown-item" href="{{route('itinerario',$tour->id)}}">Itinerario</a>
                <a class="dropdown-item" href="{{url('/admin/price/tour/'.$tour->id)}}">Precio</a>
                <a class="dropdown-item" href="{{url('/admin/serie/tour/'.$tour->id)}}">Serie</a>
                {!!Form::open(['url'=>'/admin/tours/'.$tour->id,'method'=>'DELETE','id'=>'eliminar'.$tour->id])!!}
                   <a class="dropdown-item" name="eliminar{{$tour->id}}" href="#">Eliminar</a>
                {!!Form::close()!!}
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
      $('#table_tours').DataTable();
    });
  </script>
@endsection
