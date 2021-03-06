@extends('admin.layouts.master')


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <br>
    </div>
  </div>
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
      @if (session('error'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      @endif
    </div>
  </div>
  <div class="row">
    <div class="card">
      <div class="card-body">
        <div class="col-md-12">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">USUARIOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">TOURS</a>
            </li>
           
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <br><br>
                    <table class="table table-striped" id="table-users">
                    <thead>
                      <tr>

                        <th>Nombres</th>
                        <th>Email</th>
                        <th>Lenguaje</th>
                        <th>Estado</th>
                        <th>Fecha de Creación</th>
                        <th>Fecha de Eliminación</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td></td>
                          <td>{{$user->status}}</td>
                          <td>{{$user->created_at}}</td>
                          <td>{{$user->deleted_at}}</td>
                          <td class="text-right">
                            
                            {!!Form::open(['url'=>'/admin/trash/restore_user/'.$user->id])!!}
                            <button class="btn btn-warning" name="eliminar{{$user->id}}">Restaurar</button>
                            {!!Form::close()!!}

                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <table class="table table-striped" id="table-users">
              <thead>
                <tr>

                  <th scope="col">Nombres</th>
                  <th scope="col">Email</th>
                  <th scope="col">Lenguaje</th>
                  <th>Estado</th>
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
      </div>
    </div>
  </div>
</div>
@endsection


@section('script')
<script>
  $(()=>{
    $('#table-users').DataTable();
  });
</script>
@endsection