@extends('admin.layouts.master')


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <br>
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
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">LENGUAJE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">CATEGORIAS</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
