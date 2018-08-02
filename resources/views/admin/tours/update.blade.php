@extends('admin.layouts.master')


@section('style')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">


{!!Html::style('assets/admin/plugins/fileinput/css/fileinput.min.css')!!}
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
{!!Html::style('assets/admin/plugins/fileinput/themes/explorer-fa/theme.css')!!}
<!-- some CSS styling changes and overrides -->
<style>
.kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
    margin: 0;
    padding: 0;
    border: none;
    box-shadow: none;
    text-align: center;
}
.kv-avatar {
    display: inline-block;
}
.kv-avatar .file-input {
    display: table-cell;
    width: 100%;
}
.kv-reqd {
    color: red;
    font-family: monospace;
    font-weight: normal;
}


i[name="eliminar-categoria"]{
  cursor: pointer;
}


</style>
@endsection



@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <br>
    </div>
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
      <h3>Editando Tour</h3>
    </div>
  </div>
  {!!Form::model($tour, ['url' => ['admin/tours', $tour->id],'method'=>'PUT','id'=>'form-tours'])!!}
  <div class="card">
    <div class="card-body">
      <div class="row justify-content-md-center">
        <div class="col-sm-12 text-center">
        <div id="kv-avatar-errors-1" class="center-block" style="width:800px;display:none"></div>
            <div class="kv-avatar">
                <div class="file-loading">
                    <input id="avatar-1" name="img" type="file">
                </div>
            </div>
            <div class="kv-avatar-hint"><small>Select file < 1500 KB</small></div>
      </div>

        <div class="col-md-12">
          <div class="form-group">
            {!!Form::label('name','Nombre de Tour')!!}
            {!!Form::text('name',null,['class'=>'form-control','required'])!!}
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            {!!Form::label('multimedia_id','Multimedia')!!}
            <select name="multimedia_id" id="" class="form-control">
              @foreach($multimedia as $multi)
              <option value="{{$multi->id}}">{{$multi->name}}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <hr>
            <button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target="#exampleModal">
              Asignar Categoria
            </button>

          </div>
        </div>


        <div class="col-md-12">
  				<div class="form-group">
  					{!!Form::label('description_short','Descripción Corta')!!}
  					{!!Form::textarea('description_short', null,['class'=>'form-control','rows'=>'2','required'])!!}
  				</div>
  			</div>

        <div class="col-md-12">
  				<div class="form-group">
  					{!!Form::label('description_complete','Descripción Completa')!!}
  					{!!Form::textarea('description_complete', null,['class'=>'form-control summernote','required'])!!}
  				</div>
  			</div>

        <div class="col-md-12">
  				<div class="form-group">
  					{!!Form::label('organization','Organización')!!}
  					{!!Form::textarea('organization', null,['class'=>'form-control summernote','required'])!!}
  				</div>
  			</div>

        <div class="col-md-12">
          <div class="form-group">
            {!!Form::label('meta_description','Meta Descriptión')!!}
            {!!Form::text('meta_description',null,['class'=>'form-control'])!!}
          </div>

        </div>

        <div class="col-md-12">
          <div class="form-group">
            {!!Form::label('meta_keywords','Meta Keyword')!!}
            {!!Form::text('meta_keywords',null,['class'=>'form-control'])!!}
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            {!!Form::label('status','Estado')!!}
            {!!Form::select('status', ['A' => 'habilitado', 'D' => 'desabilitado'], null,['class'=>'form-control'])!!}
          </div>
        </div>

        <div class="col-md-12">
          <hr>
        </div>
        <div class="col-md-2">
          <a href="{{('/admin/languages')}}" class="btn btn-danger form-control">Cancelar</a>
        </div>
        <div class="col-md-2">
          <button class="btn btn-success form-control">Guardar</button>
        </div>

      </div>
    </div>
  </div>
{!! Form::close() !!}
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Asignando Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="">Lenguaje</label>
              <select name="language_id" id="language_id" class="form-control">
                @foreach($languages as $language)
                <option value="{{$language->id}}">{{$language->name}}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="">Categoria</label>
              <select name="categorie_slug" id="categorie_slug" class="form-control">

              </select>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="">Categoria</label>
              <button class="btn btn-primary" id="agregando-categoria">agregar</button>
            </div>
          </div>

          <div class="col-md-12">
            <ul id="contenido-categoria">

            </ul>
          </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


@endsection

@section('script')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
{!!Html::script('assets/admin/plugins/fileinput/js/fileinput.min.js')!!}
{!!Html::script('assets/admin/plugins/fileinput/themes/explorer-fa/theme.js')!!}
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
<script type="text/javascript">

var tour=<?php echo json_encode($tour);?>;
var categories=<?php echo json_encode($categories);?>;


 var arrayCategoria = [];

function eliminar_categoria(){
    $('i[name="eliminar-categoria"]').click((e)=>{
      let idli = e.target.id
      idli = idli.substring(9,12);
      delete arrayCategoria[idli];
      $('#li'+idli).remove();

  });
}


  var cadena='';
  for(let i = 0; i < categories.length ; i++){  
      cadena += '<li id="li'+i+'">'+categories[i].slug+' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i name="eliminar-categoria" id="categoria'+i+'" class="fa fa-times" style="color:red;"></i></li>';   
      arrayCategoria.push(categories[i].slug);
  }

  $('#contenido-categoria').html(cadena);
  eliminar_categoria();


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


$('.summernote').summernote({
  height: 350,                 // set editor height
      minHeight: null,             // set minimum height of editor
      maxHeight: null,             // set maximum height of editor
      focus: false
});

  $(()=>{


   
    var contador=0;

    $.ajaxSetup({
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    });

    $("#avatar-1").fileinput({
        theme: "explorer-fa",
        overwriteInitial: true,
        maxFileSize: 500,
        showClose: false,
        showCaption: false,
        showBrowse: false,
        browseOnZoneClick: true,
        removeLabel: '',
        removeIcon: '<i class="fa fa-trash"></i>',
        removeTitle: 'Cancel or reset changes',
        elErrorContainer: '#kv-avatar-errors-2',
        msgErrorClass: 'alert alert-block alert-danger',
        defaultPreviewContent: '<img src="/'+tour.img+'">',
        allowedFileExtensions: ["jpg", "png", "gif"]
    });




$('#language_id').change(()=>{
  cargar_categorias($('#language_id').val());
});


// funcion para cargar categorias
function cargar_categorias(id){
    $.ajax({
      url:'/admin/get/categoria/'+id,
      method:'GET'
    }).done((data)=>{
      var cadena = '';

      var contador=0;
      $(data).each(()=>{
        cadena+='<option value="'+data[contador].slug+'">'+data[contador].slug+'</option>';
        contador++;
      });
      $('#categorie_slug').html(cadena);
    }).fail((data)=>{
      alert("ha ocurrido un error");
    });
}




//agregando categorias al array
  $('#agregando-categoria').click(()=>{
    var i = 0;
    var cuenta=0;
    let categoria = $('#categorie_slug').val();
    do{
        if(arrayCategoria[i] == categoria){+
          cuenta++;
        }
      i++;
    }
    while(i < arrayCategoria.length);

    if(cuenta == 0){
      arrayCategoria.push(categoria);
    }

  cargar_lista();
  });





//cargar los array en li
  function cargar_lista(){
    var cadena='';
    for(let i = 0; i < arrayCategoria.length ; i++){
      if(arrayCategoria[i] != undefined){
        cadena += '<li id="li'+i+'">'+arrayCategoria[i]+' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i name="eliminar-categoria" id="categoria'+i+'" class="fa fa-times" style="color:red;"></i></li>';
      }
    }

    $('#contenido-categoria').html(cadena);
    eliminar_categoria();
  }






$('#form-tours').validate({
  submitHandler:()=>{

    var updatetours = new FormData($('#form-tours')[0]);

    updatetours.append('_method','PUT');

    $.ajax({
      url:'/admin/tours/'+tour.id,
      method:'POST',
      data:updatetours,
      contentType:false,
      processData:false
    }).done((data)=>{

    
      $.ajax({
        url:'/admin/delete/categoria/'+tour.id,
        method:'POST',
        async:false
      });

     
      var NuevoArrayCategoria = [];
      for(let i = 0 ; i < arrayCategoria.length ; i++){
        if(arrayCategoria[i] != undefined){
            NuevoArrayCategoria.push(arrayCategoria[i]);
        }
      }
      
      for(let i = 0 ; i < NuevoArrayCategoria.length ; i++){
            $.ajax({
            url:'/admin/categories_has_tours',
            method:'POST',
            async:false,
            data:{id:tour.id,slug:NuevoArrayCategoria[i]}
            }).done((data)=>{
      
            }).fail((data)=>{
            alert("ha ocurrido un error");
            });
      
      }
      
      
      window.location.href = "/admin/tours";

    }).fail((data)=>{
        if(data.status == 422){
          $errors = data.responseJSON;
          $.each($errors,(key,value)=>{
            if(value['name'] != undefined){
              Command: toastr["error"]('El campo nombre ya esta en uso','ERROR!');
            }
          })
        }
    });
  }



});





  });
</script>
@endsection
