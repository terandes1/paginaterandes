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
      <h3>Creando Nuevo Multimedia</h3>
    </div>
  </div>
  {!! Form::open(['url' => 'admin/users','id'=>'form-multimedia']) !!}
  <div class="card">
    <div class="card-body">
      <div class="row justify-content-md-center">

        <div class="col-md-12">
          <div class="form-group">
            {!!Form::label('name','Nombre')!!}
            {!!Form::text('name',null,['class'=>'form-control','required'])!!}
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            {!!Form::label('description','Descripción')!!}
            {!!Form::textarea('description',null,['class'=>'form-control','required'])!!}
          </div>
        </div>

        <div class="col-md-12">
          <hr>
        </div>
        <div class="col-md-2">
          <a href="{{('/admin/multimedia')}}" class="btn btn-danger form-control">Cancelar</a>
        </div>
        <div class="col-md-2">
          <button class="btn btn-success form-control">Guardar</button>
        </div>

      </div>
    </div>
  </div>
{!! Form::close() !!}
</div>



<div class="container">
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


        </div>
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




// validamos el form multimedia y lo almacenamos en la bd
  $('#form-multimedia').validate({
    submitHandler:()=>{
      var storeMultimedia = new FormData($('#form-multimedia')[0]);
      $.ajax({
        url:'/admin/multimedia',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        method:'POST',
        data:storeMultimedia,
        contentType:false,
        processData:false
      }).done((data)=>{
        Command: toastr["success"]('El campo multimedia ha sido creado exitosamente','EXITO!');
        recuperar_imagenes(data);
        cargar_imagenes(data);
      });
    }
  });



// funcion para cargar y eliminar IMAGENES
function cargar_imagenes(id){
  $("#images").fileinput({
    uploadUrl: "/admin/image/create/"+id,
    theme: "explorer-fa",
    allowedFileExtensions: ['jpg', 'png', 'gif'],
    maxImageWidth: 800,
    resizeImage: true,
    browseOnZoneClick: true,
    maxFileCount: 5,
    overwriteInitial: false,
    initialPreview: images,
    initialPreviewAsData: true,
    initialPreviewFileType: 'image',
    initialPreviewConfig: captions
    }).on('fileunlock', function() {
          $('#images').fileinput('destroy');
          recuperar_imagenes(id);
      });
}



//funcion para recuperar imagenes una vez que hayan subido
function recuperar_imagenes(id){
      images = [];
      captions = [];
      $.ajax({
        url:'/admin/image/view/'+id,
        method:'GET'
      }).done((data)=>{
        $(data).each(function(key,value){
          images.push('/'+value['path']);
          captions.push({caption: value['name'], size: value['size'], url: "/admin/image/delete/"+value['id']});
        });
        cargar_imagenes(id);
      }).fail((data)=>{
        alert("ocurrio un error");
      });
}




  });
</script>

@endsection
