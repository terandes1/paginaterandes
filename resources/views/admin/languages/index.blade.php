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

      @if (session('error'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      @endif

    </div>
    <div class="col-md-2">
    </br>
        <a href="{{('/admin/languages/create')}}" class="btn btn-primary">Nuevo Lenguaje</a>

    </div>

    <div class="col-md-12">
    </br>
        <table class="table table-striped">
        <thead>
          <tr>

            <th>Nombres</th>
            <th>Abreviación</th>
            <th>Flag</th>
            <th>Estado</th>
            <th>Fecha de Creación</th>
            <th>Fecha de Actualización</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($languages as $language)
          <tr>
            <td>{{$language->name}}</td>
            <td>{{$language->abbr}}</td>
            <td>{!!Html::image($language->flag,'flag',['width'=>'50px'])!!}</td>
            <td>
                @if($language->status == 'A')
                <span class="badge badge-success">habilitado</span>
                @else
                <span class="badge badge-danger">deshabilitado</span>
                @endif
              </td>
            <td>{{$language->created_at}}</td>
            <td>{{$language->updated_at}}</td>
            <td class="text-right">
              <div class="container">
                <div class="row">
                <div class="col-xs-6">
                  <a href="{{url('/admin/languages/'. $language->id )}}"><i class="fa fa-edit" style="color:blue;"></i></a>
                </div>
                <div class="col-xs-6">
                  {!!Form::open(['url'=>'/admin/languages/'.$language->id,'method'=>'DELETE','id'=>'eliminar'.$language->id])!!}
                   &nbsp;&nbsp;&nbsp;&nbsp; <a href="#"><i name="eliminar{{$language->id}}" class="fa fa-times" style="color:red;"></i></a>
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
      $('i[name^="eliminar"]').click((e)=>{
        let opcion = confirm("Esta seguro que desea eliminar este usuario");

        if(opcion == true){
          $('#'+$(e.target).attr('name')).submit();
        }


      });
    });
  </script>
@endsection
