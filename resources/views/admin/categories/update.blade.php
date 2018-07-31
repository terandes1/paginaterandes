@extends('admin.layouts.master')


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <br>
      <h3>Actualizar Categoria</h3>
    </div>
  </div>
  {!! Form::open(['route' => ['categories.update',"$category->id"] , 'method' => 'PUT', 'class' => 'form-horizontal','enctype' => 'multipart/form-data' ]) !!}
  <div class="card">
    <div class="card-body">
      <div class="row justify-content-md-center">
        <div class="card">
		    <div class="card-body">
		      <div class="row justify-content-md-center">
		        <div class="col-md-8">
		             {!!Form::label('name','Subir Imagen')!!}
		            <input type="file" class="form-control" name="img">
		        </div>
		        <div class="col-md-4">
		        	<br>
		        	<div class="thumbnail">
		           		 <img alt="Nature" style="width: 130px;" src="/assets/content/categoria/{{$category->id}}.{{$category->img}}">
		           	</div>
		        </div>

		        <div class="col-md-6">
		          {!!Form::label('name','Nombre')!!}
		          {!!Form::text('name',$category->name,['class'=>'form-control','required'])!!}
		        </div>

		        <div class="col-md-6">
		          {!!Form::label('idioma','Idioma')!!}

		          <select name="language_id" id="language" class="form-control">
		            @foreach($languages as $language)
		            <option value="{{$language->id}}"{{ ($language->id == $category->language_id ) ? 'selected': ''}} >
		              {{$language->name}}</option>
		            @endforeach
		          </select>
		        
		        </div>

		        <div class="col-md-12">
		          {!!Form::label('description','Descripción')!!}
		          {!!Form::textarea('description',$category->description,['class'=>'form-control','required'])!!}
		        </div>

		        <div class="col-md-6">
		            {!!Form::label('status','Estado')!!}
		            {!!Form::select('status', ['A' => 'habilitado', 'D' => 'deshabilitado'], $category->status,['class'=>'form-control'])!!}
		        </div>
		        <div class="col-md-6">
		            {!!Form::label('slug','Slug')!!}
		            {!!Form::text('slug',$category->slug,['class'=>'form-control','required'])!!}

		        </div>


		        <div class="col-md-12">
		          <hr>
		        </div>
		        <div class="col-md-2">
		          <a href="{{('/admin/users')}}" class="btn btn-danger form-control">Cancelar</a>
		        </div>
		        <div class="col-md-2">
		          <button class="btn btn-success form-control">Guardar</button>
		        </div>

		      </div>
		    </div>
  		</div>
      </div>
    </div>
  </div>
{!! Form::close() !!}
</div>
@endsection
