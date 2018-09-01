@extends('admin.layouts.master')

@section('content')
<style type="text/css">
	.table {
	    table-layout: fixed;
	    word-wrap: break-word;
	}
	tr.something {
	  td {
	    width: 90px;
	  }
	}
</style>
<div class="container-fluid"></br>
	<div class="card">
	  <div class="card-header">
	    		        <a href="{{('/admin/tours/create')}}" class="btn btn-primary">Nuevo Tour</a>

	  </div>
	  	<div class="card-body">
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
		    </div>
		    <div class="col-md-12 table-responsive" >
		        <table class="table table-hover" id="table_tours">
		        <thead class="thead-light">
		          <tr>
		            <th>Lenguaje</th>
		            <th>Nombre</th>
		            <th style="width: 450px;">Descripción</th>
		            <th>Precio</th>
		            <th>Estado</th>
		            <th style="width: 150px;">Fecha</th>
		            <th>Acciones</th>
		          </tr>
		        </thead>
		        <tbody>
		          @foreach($tours as $tour)
		          <tr>
		            <td><span style="text-transform: uppercase;">{!! $tour->nameLenguage !!}</span></td>
		            <td>{{$tour->name}}</td>
		            <td>{{$tour->description_short}}</td>
		            <td>$ {{$tour->price}}</td>
		            <td>
		                @if($tour->status == 'A')
		                	@if($tour->principal == '1')
		                	<span class="badge badge-success">Habilitado</span>
		                	<span class="badge badge-primary">Tour de lujo</span>
		                	@endif
		                	@if($tour->principal == '0')
		                	<span class="badge badge-success">Habilitado</span>
		                	@endif
		                	
		                @else
		                	 <span class="badge badge-danger">Deshabilitado</span>
		                @endif
		            </td>

		            <td> <center><strong>Fecha </strong></center> 
		            	 Creación:
		            	{{$tour->created_at}}<br>
		            	 Actualización:
		            	{{$tour->updated_at}}

		            </td>

		            <td>
		              <div class="dropdown show">
		              <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                Acciones
		              </a>
			                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
			                <a class="dropdown-item" href="{{url('/admin/tours/'. $tour->id )}}">Editar</a>
			                <a class="dropdown-item" href="{{route('itinerario',$tour->id)}}">Itinerario</a>
			                <a class="dropdown-item" href="{{url('/admin/price/tour/'.$tour->id)}}">Precio</a>
			                <a class="dropdown-item" href="{{url('/admin/serie/tour/'.$tour->id)}}">Serie</a>
			                <a class="dropdown-item" onclick="publicarPrincipal('{{$tour->id}}');" href=" ">Tour de lujo</a>
							<center>{!! Form::open(['method' => 'DELETE','route' => ['tours.destroy', $tour->id]]) !!}
							{{ Form::button('Eliminar', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm'] )  }}
				          	{!! Form::close() !!}</center>
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
	 </div>
</div>





@endsection


@section('script')
   <script>
   	var id=1;
   	function publicarPrincipal(id)
   	{
   		
   		event.preventDefault();
 
      	   $.ajax({
		   url:'{{ route('publicarTourPrincipal','') }}'+'/'+id,
		   type: 'get',
		   data:'_token = <?php echo csrf_token() ?>',
		   dataType: 'JSON',
		   beforeSend: function() {
		    
		   },
		   error: function() {
		   },
		   success: function(data) {
				 toastr.success('Publicado en la portada principal', 'Correcto')
		   		}
			});
  
   	}
   	
   	$(()=>{
      $('#table_tours').DataTable();
    });

  </script>
@endsection
