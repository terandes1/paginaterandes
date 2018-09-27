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
    <div class="col-md-12">
      <p>Series para el el siguiente Tour:</p>
      <h1>{{$tour->name}}</h1>
    </div>

    <div class="col-md-2">
    </br>
        <a href="{{('/admin/serie/tour/'.$tour->id.'/create')}}" class="btn btn-primary">Nueva Serie</a>

    </div>


    <div class="col-md-12">
    </br>
        <table class="table table-striped" id="table_serie">
        <thead>
          <tr>
            <th>Cantidad Personas</th>
            <th>Estado</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($series as $serie)
          <tr>
            <td>{{$serie->cant_person}}</td>
            <td>{{$serie->status}}</td>
            <td>{{$serie->date_start}}</td>
            <td>{{$serie->date_end}}</td>
            <td class="text-right">
                <div class="container">
                  <div class="row">
                  <div class="col-xs-6">
                    <a href="{{url('/admin/serie/'. $serie->id )}}"><i class="fa fa-edit" style="color:blue;"></i></a>
                  </div>
                  <div class="col-xs-6">
                    {!!Form::open(['url'=>'/admin/serie/'.$serie->id,'method'=>'DELETE','id'=>'eliminar'.$serie->id])!!}
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

      $('i[name^="eliminar"]').click((e)=>{
        let opcion = confirm("Esta seguro que desea eliminar esta serie");

        if(opcion == true){
          $('#'+$(e.target).attr('name')).submit();
        }


      });


    });
  </script>
@endsection
