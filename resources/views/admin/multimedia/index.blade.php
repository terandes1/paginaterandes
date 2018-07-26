@extends('admin.layouts.master')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <br>
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
        <a href="{{('/admin/multimedia/create')}}" class="btn btn-primary">Nuevo Multimedia</a>

    </div>

    <div class="col-md-12">
    </br>
        <table class="table table-striped" id="table-multimedia">
        <thead>
          <tr>

            <th scope="col">Nombres</th>
            <th scope="col">Descripción</th>
            <th scope="col">Fecha de Creación</th>
            <th scope="col">Fecha de Actualización</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($multimedias as $multimedia)
          <tr>
            <td>{{$multimedia->name}}</td>
            <td>{{$multimedia->description}}</td>
            <td>{{$multimedia->created_at}}</td>
            <td>{{$multimedia->updated_at}}</td>
            <td class="text-right">
              <div class="container">
                <div class="row">
                <div class="col-xs-6">
                  <a href="{{url('/admin/multimedia/'. $multimedia->id )}}"><i class="fa fa-edit" style="color:blue;"></i></a>
                </div>
                <div class="col-xs-6">
                  {!!Form::open(['url'=>'/admin/multimedia/'.$multimedia->id,'method'=>'DELETE','id'=>'eliminar'.$multimedia->id])!!}
                   &nbsp;&nbsp;&nbsp;&nbsp; <a href="#"><i name="eliminar{{$multimedia->id}}" class="fa fa-times" style="color:red;"></i></a>
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

      $('#table-multimedia').DataTable();

      $('i[name^="eliminar"]').click((e)=>{
        let opcion = confirm("Esta seguro que desea eliminar este usuario");

        if(opcion == true){
          $('#'+$(e.target).attr('name')).submit();
        }


      });
    });
  </script>
@endsection
