@extends('admin.layouts.master')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <br>
      @if (session('info'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('info') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      @endif
    </div>
    <div class="col-md-2">
    </br>
        <a href="{{('/admin/categories/create')}}" class="btn btn-primary">Nuevo Categoria</a>

    </div>

    <div class="col-md-12">
    </br>
        <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Nombres</th>
            <th scope="col">description</th>
            <th>Imgen</th>
            <th scope="col">Lenguaje</th>
            <th>Estado</th>
            <th scope="col">Fecha de Creación</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach($categorias as $item)
              <tr>
                    <th scope="row">{{ $item->name }}</th>
                    <td>{{ $item->description }}</td>
                    <td><img style="width: 100px;" src="/assets/content/categoria/{{$item->id}}.{{$item->img}}"> </td>
                    <td>{{ $item->language_id }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                    <button type="button" class="btn btn-success btn-sm">Editar</button>
                    <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
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
