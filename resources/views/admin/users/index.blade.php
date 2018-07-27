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
        <a href="{{('/admin/users/create')}}" class="btn btn-primary">Nuevo Usuario</a>

    </div>

    <div class="col-md-12">
    </br>
        <table class="table table-striped" id="table-users">
        <thead>
          <tr>

            <th scope="col">Nombres</th>
            <th scope="col">Email</th>
            <th scope="col">Lenguaje</th>
            <th scope="col">Estado</th>
            <th scope="col">Privilegio</th>
            <th scope="col">Fecha de Creación</th>
            <th scope="col">Fecha de Actualización</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
            <tr>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>

                @foreach($languages as $language)
                  @if($language->id == $user->language_id)
                  <td>{!!Html::image($language->flag,'flag',['width'=>'50px'])!!}</td>
                  @endif
                @endforeach


              <td>
                  @if($user->status == 'A')
                  <span class="badge badge-success">habilitado</span>
                  @else
                  <span class="badge badge-danger">deshabilitado</span>
                  @endif
                </td>
                <td>{{$user->privilege}}</td>
              <td>{{ $user->created_at }}</td>
              <td>{{ $user->updated_at }}</td>
              <td class="text-right">
                <div class="container">
                  <div class="row">
                  <div class="col-xs-6">
                    <a href="{{url('/admin/users/'. $user->id )}}"><i class="fa fa-edit" style="color:blue;"></i></a>
                  </div>
                  <div class="col-xs-6">
                    {!!Form::open(['url'=>'/admin/users/'.$user->id,'method'=>'DELETE','id'=>'eliminar'.$user->id])!!}
                     &nbsp;&nbsp;&nbsp;&nbsp; <a href="#"><i name="eliminar{{$user->id}}" class="fa fa-times" style="color:red;"></i></a>
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

      $('#table-users').DataTable();

      $('i[name^="eliminar"]').click((e)=>{
        let opcion = confirm("Esta seguro que desea eliminar este usuario");

        if(opcion == true){
          $('#'+$(e.target).attr('name')).submit();
        }


      });
    });
  </script>
@endsection
