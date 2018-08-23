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

	<ul class="nav nav-tabs" id="myTab" role="tablist">
	  <li class="nav-item" id="tapTestimonio">
	    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#testimonio" role="tab" aria-controls="home" aria-selected="true">			Testimonios
	    </a>
	  </li>
	  <li class="nav-item" id="tapEncuesta">
	    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#encuesta" role="tab" aria-controls="profile" aria-selected="false">		Encuestas
	    </a>
	  </li>

	</ul>
	<div class="tab-content" id="myTabContent">
	  <div class="tab-pane fade show active" id="testimonio" role="tabpanel" aria-labelledby="home-tab">
	  		<div class="card">
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
				            <th style="width: 100px;">Nombre</th>
				            <th style="width: 100px;">email</th>
				            <th style="width: 150px;">Nacionalidad</th>
				            <th style="width: 400px;">Testimonio</th>
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
								 
								 	<button type="button" class="btn btn-success btn-xs" aria-label="Left Align">
									 	<span class="fa fa-eye" aria-hidden="true"></span>
									</button>
								
								@else
								 	<button type="button" class="btn btn-info btn-xs" aria-label="Left Align">
									 	<span class="fa fa-eye-slash" aria-hidden="true"></span>
									</button>	
								 
								@endif
								<button type="button" class="btn btn-primary btn-xs" aria-label="Left Align">
									 	<span class="fa fa-pencil" aria-hidden="true"></span>
									</button> 
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
	  <div class="tab-pane fade" id="encuesta" role="tabpanel" aria-labelledby="profile-tab">
	  		<div class="card">
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
				            <th style="width: 100px;">Nombre</th>
				            <th style="width: 100px;">email</th>
				            <th style="width: 150px;">Nacionalidad</th>
				            <th style="width: 400px;">Testimonio</th>
				            <th style="width: 100px;">Impresión global</th>
				            <th style="width: 150px;">Creado</th>
				            <th style="width: 100px;">Acción</th>

				          </tr>
				        </thead>
				        <tbody>
				          @foreach($encuesta as $temp)
				          <tr>
				            <td>{{$temp->name}}</td>
				            <td>{{$temp->email}}</td>
				            <td>{{$temp->nationality}}</td>
				            <td style="text-align: justify;">{!! str_limit($temp->testimonial,150)
				            	 !!}
				            </td>
				            <td> 
				            	
				            	{{$temp->impresion_global}}
				            </td>

				            <td>
								{{$temp->created_at}}
				            </td>
				            <td>
								 @if( $temp->status=='approve')
								 
								 	<button type="button" class="btn btn-success btn-xs" aria-label="Left Align">
									 	<span class="fa fa-eye" aria-hidden="true"></span>
									</button>
								
								@else
								 	<button type="button" class="btn btn-info btn-xs" aria-label="Left Align">
									 	<span class="fa fa-eye-slash" aria-hidden="true"></span>
									</button>	
								 
								@endif
								<button type="button" class="btn btn-primary btn-xs" aria-label="Left Align">
									 	<span class="fa fa-pencil" aria-hidden="true"></span>
									</button> 
				            </td>
				             
				          </tr>
				          @endforeach
				        </tbody>

				      </table>
				       <div id="encuesta">
				       		  {{ $encuesta->links() }}
				       </div>
				      
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
