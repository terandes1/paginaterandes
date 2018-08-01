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

    <div class="col-md-12 table-responsive">
    </br>
        <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">Nombres</th>
            <th scope="col">Description</th>
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
                    <td>{{ $item->idioma }}</td>
                    <td>
                        @if($item->status == 'A')
                        <span class="badge badge-success">Habilitado</span>
                        @else
                        <span class="badge badge-danger">Deshabilitado</span>
                        @endif
                      </td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                    	<div class="row" >
	                    	 <div class="col-md-1">
	                    	 	<a  class="btn btn-success btn-sm" href="{{route('categories.show',$item->id)}} "> 
	                         			<span class="fa fa-edit"> </span>
	                     		</a>
	                  		</div>
	                  		<div class="col-md-1">
	                    	 	
	                  		</div>
	 						<div class="col-md-1">
	 						 	{!! Form::open(['method' => 'DELETE','route' => ['categories.destroy', $item->id]]) !!}
									{{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm'] )  }}
	          			  		{!! Form::close() !!}
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
  
@endsection
