@extends('admin.layouts.master')



@section('style')

{!!Html::style('assets/admin/plugins/fileinput/css/fileinput.min.css')!!}
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
{!!Html::style('assets//admin/plugins/fileinput/themes/explorer-fa/theme.css')!!}
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
      <h3>Creando Nuevo Lenguaje</h3>
    </div>
  </div>
  {!! Form::open(['url' => 'admin/languages','files'=>true]) !!}
  <div class="card">
    <div class="card-body">
      <div class="row justify-content-md-center">
        <div class="col-md-6 text-center">
          <div id="kv-avatar-errors-2" class="center-block" style="display:none"></div>
              <div class="kv-avatar">
                  <div class="file-loading">
                      <input id="avatar-1" name="flag" type="file" required>
                  </div>
              </div>
              <div class="kv-avatar-hint"><small>Select file < 200 KB</small></div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              {!!Form::label('name','Nombre')!!}
              {!!Form::text('name',null,['class'=>'form-control','required'])!!}
            </div>
            <div class="col-md-12">
              {!!Form::label('abbr','Abreviación')!!}
              {!!Form::text('abbr',null,['class'=>'form-control','required'])!!}
            </div>
            <div class="col-md-12">
              {!!Form::label('abbr','Estado')!!}
              {!!Form::select('status', ['A' => 'habilitado', 'D' => 'desabilitado'], 'A',['class'=>'form-control'])!!}
            </div>

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
@endsection




@section('script')

{!!Html::script('assets/admin/plugins/fileinput/js/fileinput.min.js')!!}
{!!Html::script('assets/admin/plugins/fileinput/themes/explorer-fa/theme.js')!!}
<script type="text/javascript">

  $(()=>{


    $("#avatar-1").fileinput({
        theme: "explorer-fa",
        overwriteInitial: true,
        maxFileSize: 200,
        showClose: false,
        showCaption: false,
        showBrowse: false,
        browseOnZoneClick: true,
        removeLabel: '',
        removeIcon: '<i class="fa fa-trash"></i>',
        removeTitle: 'Cancel or reset changes',
        elErrorContainer: '#kv-avatar-errors-2',
        msgErrorClass: 'alert alert-block alert-danger',
        defaultPreviewContent: '<span class="fa fa-flag"></span><h6 class="text-muted">Click to select</h6>',
        allowedFileExtensions: ["jpg", "png", "gif"]
    });



  });
</script>

@endsection
