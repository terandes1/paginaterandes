@extends('admin.layouts.master')

@section('content')
<div class="container">
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
        <table class="table table-striped">
        <thead>
          <tr>

            <th scope="col">Nombres</th>
            <th scope="col">Email</th>
            <th scope="col">Lenguaje</th>
            <th scope="col">Fecha de Creación</th>
            <th scope="col">Fecha de Actualización</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection


@section('script')
  <script>
    // $(()=>{
    //   $('i[name^="eliminar"]').click((e)=>{
    //     let opcion = confirm("Esta seguro que desea eliminar este usuario");
    //
    //     if(opcion == true){
    //       $('#'+$(e.target).attr('name')).submit();
    //     }
    //
    //
    //   });
    // });
  </script>
@endsection
