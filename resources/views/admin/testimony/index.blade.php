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
	<div class="card-body">

		
		<a href="{{('/admin/listTestimonioEncuesta/testimonio')}}" type="button" class="btn btn-success">Testimonios</a>

		<a href="{{('/admin/listTestimonioEncuesta/encuesta')}}" type="button" class="btn btn-info">Encuestas</a>
	</div>
	
</div>

</p>
	
	<div class="tab-content" id="myTabContent">
	  <div class="tab-pane fade show active" id="testimonio" role="tabpanel" aria-labelledby="home-tab">
	  		<div class="card">
			  	<div class="card-body">
			  		<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li style="text-transform: uppercase;" class="breadcrumb-item active" aria-current="page">{!! $tipo !!}</li>
					  </ol>
					</nav> 
				  <div class="row">
				
				    <div class="col-md-12 table-responsive" >
				        <table class="table table-hover" id="table_tours">
				        <thead class="thead-light">
				          <tr>
				            <th style="width: 100px;">Nombre</th>
				            <th style="width: 100px;">Email</th>
				            <th style="width: 150px;">Nacionalidad</th>
				            <th style="width: 400px;text-transform: capitalize;">{!! $tipo !!}</th>
				            <th style="width: 100px;">Impresión global</th>
				            <th style="width: 150px;">Creado</th>
				            <th style="width: 100px;">Acción</th>

				          </tr>
				        </thead>
				        <tbody>
				          @foreach($testimonials as $itemp)
				          <tr>
				            <td>{{$itemp->name}}</td>
				            <td>{{$itemp->email}}</td>
				            <td>{{$itemp->nationality}}</td>
				            <td style="text-align: justify;">{!! str_limit($itemp->testimonial,150)
				            	 !!}
				            </td>
				            <td> 
				            	
				            	{{$itemp->impresion_global}}
				            </td>

				            <td>
								{{$itemp->created_at}}
				            </td>
				            <td>
								 @if( $itemp->status=='approve')
								 
								 	<a href="/admin/cambioEstadoTestimonioEncuesta/{{$itemp->id}}" type="button" class="btn btn-success btn-xs" aria-label="Left Align">
									 	<span class="fa fa-eye" aria-hidden="true"></span>
									</a>
								
								@else
								 	<a href="/admin/cambioEstadoTestimonioEncuesta/{{$itemp->id}}" class="btn btn-info btn-xs" aria-label="Left Align">
									 	<span class="fa fa-eye-slash" aria-hidden="true"></span>
									</a>	
								 
								@endif
									<a href="/admin/cambioEstadoTestimonioEncuesta/{{$itemp->id}}" type="button" class="btn btn-primary btn-xs" aria-label="Left Align">
										 	<span class="fa fa-pencil" aria-hidden="true"></span>
									</a> 
				            </td>
				             
				          </tr>
				          @endforeach
				        </tbody>

				      </table>
				        {{ $testimonials->links() }}
				    </div>
				  </div>
				</div>
	 		</div>
	  </div>
	  
	</div>



	
</div>



@endsection


@section('script')
   
   <script type="text/javascript">
	   $("#encuesta").click(function(){
		  	$("#prueba").addClass('container');
		});
   </script>

@endsection
