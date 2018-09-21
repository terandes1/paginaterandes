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
	<p>
	<div class="card">
		<div class="card-header">
			<!-- <a style="text-transform: uppercase;" href="{{('/admin/tours/create')}}" class="btn btn-primary"> Nuevo</a> -->
		</div>
		<div class="card-body">
			
			<!-- <a href="{{('/admin/listTourSerie/tour')}}" type="button" class="btn btn-success">Tours</a>

			<a href="{{('/admin/listTourSerie/serie')}}" type="button" class="btn btn-info">Series</a> -->
		</div>
	</div>
	</p>

	<div class="card">
	    <div class="card-header">
	    	<ol class="breadcrumb">
	  		<li style="text-transform: uppercase;" class="breadcrumb-item active" aria-current="page"></li>
	  		</ol>      

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
		    <div id="datos" class="col-md-12 table-responsive" >
		        <table class="table table-hover" id="table_tours">
		        <thead class="thead-light">
		          <tr>
		            <th>Nombre</th>
		            <th>Email</th>
		            <th>skype</th>
		            <th>País</th>
		            <th>Fecha</th>
		            <th>Tipo de viaje</th>
		            <th>Número de personas</th>
		            <th>Tipo de habitaciones</th>
		            <th>Servicios de guia extra</th>
		            <th>Describe tu viaje</th>
		            <th>Acción</th>
		            
		          </tr>
		        </thead>
		        <tbody>
		          @foreach($reserva as $itemp)
		          <tr>
		            <td><span style="text-transform: uppercase;">{!! $itemp->name !!}</span></td>
		            <td>{{$itemp->email}}</td>
		            <td>{{$itemp->skype}}</td>
		            <td>{{$itemp->country}}</td>
		            <td>
		            	{{$itemp->fecha}}
		                <!-- @if($itemp->status == 'A')
		                	@if($itemp->principal == '1')
		                	<span class="badge badge-success">Habilitado</span>
		                	<span class="badge badge-primary">itemp de lujo</span>
		                	@endif
		                	@if($itemp->principal == '0')
		                	<span class="badge badge-success">Habilitado</span>
		                	@endif
		                	@if($itemp->tipo_itemp == 'serie')
		                	<span class="badge badge-primary">Serie</span>
		                	@endif
		                	
		                @else
		                	 <span class="badge badge-danger">Deshabilitado</span>
		                @endif -->
		            </td>

					
		            <td> 
		            	  <td>{{$itemp->travel_type}}</td>

		            </td>

		            <td> 
		            	  <td>{{$itemp->numberPersonas}}</td>

		            </td>

		            <td> 
		            	  <td>{{$itemp->room_type}}</td>

		            </td>
		             <td> 
		            	  <td>{{$itemp->guide_service}}</td>

		            </td>

		            <td>
		            	 <td>{{$itemp->message}}</td>
		              
		            </td>
		            <td> 
		            	

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
   	// var id=1;
   // 	function publicarPrincipal(id)
   // 	{
   		
   // 		event.preventDefault();
 
   //    	   $.ajax({
		 //   url:'{{ route('publicarTourPrincipal','') }}'+'/'+id,
		 //   type: 'get',
		 //   data:'_token = <?php echo csrf_token() ?>',
		 //   dataType: 'JSON',
		 //   beforeSend: function() {
		    
		 //   },
		 //   error: function() {
		 //   },
		 //   success: function(respuesta) {
		   	 	
			// 	 toastr.success(respuesta.rpta)
			// 	 $("#datos").load(" #datos");
		 //   		}
			// });
   // 	}
   	
   	$(()=>{
      $('#table_tours').DataTable();
    });

  </script>
@endsection
