@extends('admin.layouts.master')

@section('style')
{!!Html::style('assets/admin/plugins/fileinput/css/fileinput.min.css')!!}
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
{!!Html::style('assets/admin/plugins/fileinput/themes/explorer-fa/theme.css')!!}

@endsection


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <br>
      <h3>Creando Nuevo Multimedia</h3>{{$multimedia->id}}
    </div>
  </div>
  {!!Form::model($multimedia, ['url' => ['admin/multimedia', $multimedia->id],'method'=>'PUT','id'=>'form-multimedia'])!!}
  <div class="card">
    <div class="card-body">
      <div class="row justify-content-md-center">

        <div class="col-md-12">
          <div class="form-group">
            {!!Form::label('name','Nombre')!!}
            {!!Form::text('name',null,['class'=>'form-control','id'=>'name','required'])!!}
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            {!!Form::label('description','Descripción')!!}
            {!!Form::textarea('description',null,['class'=>'form-control','id'=>'description','required','style'=>'height:100px;'])!!}
          </div>
        </div>

        <div class="col-md-12">
          <hr>
        </div>
        <div class="col-md-2">
          <a href="{{('/admin/multimedia')}}" class="btn btn-danger form-control">Cancelar</a>
        </div>
        <div class="col-md-2">
          <button class="btn btn-success form-control" id="guardar-multimedia">Guardar</button>
        </div>

      </div>
    </div>
  </div>
{!! Form::close() !!}
</div>



<div class="container" id="administrador-contenido">
  <div class="row">
    <div class="col-md-12">
              <p>
              <a class="btn btn-primary" data-toggle="collapse" href="#collapseimagenes" role="button" aria-expanded="false" aria-controls="collapseExample">
                AGREGAR IMAGENES
              </a>

        </p>
        <div class="collapse" id="collapseimagenes">
          <div class="card card-body">
                  <div class="file-loading">
                    <input id="images" name="images" type="file" multiple>
                  </div>
          </div>
        </div>
    </div>
    <div class="col-md-12">
      <p>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapsevideos" role="button" aria-expanded="false" aria-controls="collapseExample">
              AGREGAR VIDEOS
            </a>
      </p>



      <div class="collapse" id="collapsevideos">
        <div class="card card-body">
          <div class="row">
            <div class="col-md-12">

              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_crear_video">
                <span class="fa fa-plus"></span> Video
              </button>

              <hr>
            </div>
            <div class="col-md-12">
              <div class="row" id="contenedor-video">
                <!--aqui va los videos -->
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>



<!-- Modal crear video-->
<div class="modal fade" id="modal_crear_video" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Creando Nuevo Video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" id="form-video-nuevo">
        <div class="row">
          <div class="col-md-12">
            <input type="text" name="multimedia_id" id="multimedia_id" value="{{$multimedia->id}}" hidden>
            <div class="form-group">
              <label for="name">Nombre</label>
              <input type="text" name="name" class="form-control" required>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="description">Descripción</label>
              <input name="description" type="text" class="form-control" required>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="path">Pegue el iframe de youtube</label>
              <input type="text" name="path" class="form-control" required>
            </div>
          </div>

        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" form="form-video-nuevo">Save changes</button>
      </div>
    </div>
  </div>
</div>





<!-- Modal editar video-->
<div class="modal fade" id="modal_editar_video" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editando Video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" id="form-video-nuevo">
        <div class="row">
          <div class="col-md-12">
            <input type="text" name="multimedia_id" id="multimedia_id">
            <div class="form-group">
              <label for="name">Nombre</label>
              <input type="text" name="name" class="form-control" required>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="description">Descripción</label>
              <input name="description" type="text" class="form-control" required>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="path">URL</label>
              <input type="text" name="path" class="form-control" required>
            </div>
          </div>

        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" form="form-video-nuevo">Save changes</button>
      </div>
    </div>
  </div>
</div>



@endsection

@section('script')

{!!Html::script('assets/admin/plugins/fileinput/js/fileinput.js')!!}
{!!Html::script('assets/admin/plugins/fileinput/themes/explorer-fa/theme.js')!!}
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>

<script>

  $(()=>{



    toastr.options = {
      "closeButton": false,
      "debug": false,
      "newestOnTop": false,
      "progressBar": false,
      "positionClass": "toast-bottom-right",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }


    $('#form-multimedia').validate({

      submitHandler:()=>{
        var UpdateMultimedia = new FormData($('#form-multimedia')[0]);
        UpdateMultimedia.append('_method','PUT');
        $.ajax({
          url:'/admin/multimedia/3',
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          method:'POST',
          data:UpdateMultimedia,
          contentType:false,
          processData:false,
        }).done((data)=>{
          Command: toastr["success"]('El campo multimedia ha sido actualizado exitosamente','EXITO!');
        }).fail(()=>{
          alert("ha ocurrido un error");
        });
      }
    });
  });

</script>

@endsection
