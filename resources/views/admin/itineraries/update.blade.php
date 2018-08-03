@extends('admin.layouts.master')


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12" style="margin-top: 10px;">
		<div class="card bg-info text-white">
				<div class="card-body"><strong>Itinerario:</strong> {{$tourItem->name}}.</div>
		</div></br>
		
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <div class="row justify-content-md-center">
      	<div class="input-group mb-3">
		  	<div class="col-md-1">
				<a href="" id="masItinerario" class="btn btn-info form-control"><span class="fa fa-plus-circle"></span></a>
			</div>
		  <div class="input-group-append">
		  </div>
		</div>
        <div class="card">
			<input type='hidden' id="idTour" name='idTour' value='{{$tourItem->id}}'>
		    <div class="card-body">

		      <div class="bd-example bd-example-tabs">
					  <div class="row">
						    <div class="col-3">
						      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						        
						        
						       
						      </div>
						    </div>
						    <div class="col-9">
							      <div class="tab-content" id="v-pills-tabContent">
							        

							      </div>
							      
						    </div>

					  </div>
				  
				</div>
  			</div>
  			<div class="modal fade" id="ubicacionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			  <div class="modal-dialog modal-lg" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLongTitle">UBICACIÓN</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			      	
			       <div id="googleMap" style="width:100%;height:400px;"></div>
			       <div class='row' style='margin-left:3px;'>
						<div class='col-4'>
			                	<label for='Departamento'>Altitud</label>
			                	<input type='text' class='form-control' name='altitud1' id='altitud1'  placeholder='Altitud'>
						</div>
						<div class='col-4'>
			                	<label for='distric'>Latitud</label>
			                	<input type='text' class='form-control' name='latitud1' id='latitud1'  placeholder='Latitud'>
						</div>
						<div class='col-4'>
			                	<label for='distric'>Longitud</label>
			                	<input type='text' class='form-control' name='longitud1' id='longitud1'  placeholder='Longitud'>
						</div>
		         	<div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-primary">Guardar</button>
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

 <script>
 	var marker;          //variable del marcador
	var coords = {};    //coordenadas obtenidas con la geolocalización
	function initMap() {

		var map = new google.maps.Map(document.getElementById('googleMap'), {
		 center: {lat: -13.5364544, lng: -72.0259185},
		 scrollwheel: false,
		 zoom: 8,
		 zoomControl: true,
		 rotateControl : false,
		 mapTypeControl: true,
		 streetViewControl: false,
		 });
		 // Creamos dos marcadores.
		 var marker1 = new google.maps.Marker({
		 position: {lat: -13.5364544, lng: -72.0259185},
		 draggable: true
		 });
		 marker1.setMap(map);
		   google.maps.event.addListener(marker1,'dragend',function(event) {
   		   
   		   $("#latitud1").val(event.latLng.lat());
   		   $("#longitud1").val(event.latLng.lng());

  		 });
	}
	 jQuery("#ubicacionModal button.close").click(function () {
    jQuery("#ubicacionModal").modal("hide");
  });
	
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxJnaq8H2Ib6E0bBT1sTnSnGZ5tqONxFI&callback=initMap">
	
</script>

  <script>
  	//$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
  $(document).ready(function(){
  	var idTour=$("#idTour").val();
  	listarItineario(idTour);
  	var numero=1;
  	var active;
      $("#masItinerario").click(function(event){
      	
      	event.preventDefault();
      	if(numero==1)
      	{
			active="active show";
      	}else {
      		active="";
      	}
          var tab= "<a class='nav-link "+active+" ' id='v-pills-home-tab' data-toggle='pill' href='#v-pills-home"+numero+"' role='tab' 				  aria-controls='v-pills-home' aria-selected='true'>"+
          			"Dia "+numero+" </a>";
         $("#v-pills-tab").append(tab);

         var tabPanel= "<div class='tab-pane "+active+" ' id='v-pills-home"+numero+"' role='tabpanel' 								aria-labelledby='v-pills-home-tab'>"+
         						'{!! Form::open(['route' => ['itinerarioInsert'] , 'method' => 'POST', 'class' => 'form-horizontal','enctype' => 'multipart/form-data' ]) !!}'+
         							"<input type='hidden' id='idTourP' name='idTourP' value='{{$tourItem->id}}'>"+
		         			   		"<p style='width: 900px;'>"+
		         			           "<div class='row'>"+
		         			                "<input type='hidden' id='day' name='day' value='"+numero+"'>"+
		         			                "<div class='col'>"+
		         			                	"<label for='inputPassword'>Nombre</label>"+
		         			                	"<input type='text' class='form-control' name='name' id='name'  placeholder='Nombre'>"+
		         			                	"<label for='inputPassword'>Description</label>"+
		         			                	"<textarea  class='form-control' rows='5' name='description' id='description'>"+
		         			                	"</textarea>"+
		         			                "<div>"+

		         			                "<div class='row'>"+

													"<div class='col-4'>"+
				         			                	"<label for='Departamento'>Departamento</label>"+
				         			                	"<input type='text' class='form-control' name='deparment' id='deparment'  placeholder='Departamento'>"+
													"</div>"+
													"<div class='col-4'>"+
				         			                	"<label for='distric'>Provincia</label>"+
				         			                	"<input type='text' class='form-control' name='province' id='province'  placeholder='Provincia'>"+
													"</div>"+
													"<div class='col-4'>"+
				         			                	"<label for='distric'>Distrito</label>"+
				         			                	"<input type='text' class='form-control' name='district' id='district'  placeholder='Description'>"+
													"</div>"+
		         			                "<div>"+

		         			                "<div class='row' style='margin-left:3px;'>"+

													"<div class='col-4'>"+
				         			                	"<label for='Departamento'>Altitud</label>"+
				         			                	"<input type='text' class='form-control' name='altitud' id='altitud'  placeholder='Altitud'>"+
													"</div>"+
													"<div class='col-4'>"+
				         			                	"<label for='distric'>Latitud</label>"+
				         			                	"<input type='text' class='form-control' name='latitud' id='latitud'  placeholder='Latitud'>"+
													"</div>"+
													"<div class='col-4'>"+
				         			                	"<label for='distric'>Longitud</label>"+
				         			                	"<input type='text' class='form-control' name='longitud' id='longitud'  placeholder='Longitud'>"+
													"</div>"+
		         			                "<div>"+

		         			                "<div class='row'  style='margin-left:5px;'>"+

													"<div class='col-2'>"+
				         			                	"<label>Icono</label>"+
				         			                	"<input type='file' name='pic' accept='image/*'>"+
													"</div>"+
													
		         			                "<div><br><br><br>"+
		         			                 "<div class='row'>"+

													"<div class='col-5'>"+
				         			                	"<label style='color:white'>Eliminar</label>"+
				         			                	"<button id='eliminarItinerario' class='btn btn-danger form-control'>Eliminar</button>"+
													"</div>"+
													"<div class='col-5'>"+
				         			                	"<label style='color:white'>Guardar</label>"+
				         			                	"<button class='btn btn-success form-control'>Guardar</button>"+
													"</div>"+
													"<div class='col-2'>"+
				         			                	"<label>Ubicación</label>"+
				         			                		"<button type='button' id='btnCerrar' class='btn btn-primary' data-toggle='modal' data-target='#ubicacionModal'> Ubicación"+
															"</button>"
													"</div>"+

		         			                "<div>"+
		         			                

		         			          "</div>"+
		         			       "</p>"+
		         			       
		         			   '{!! Form::close() !!}'+
         			    "</div>";
         $("#v-pills-tabContent").append(tabPanel);
        numero++;
      });

	  
     function listarItineario(ite)
      {
      	   $.ajax({
		   url:'{{ route('itinerarioListar','') }}'+'/'+ite,
		   type: 'GET',
		   data:'_token = <?php echo csrf_token() ?>',
		   dataType: 'JSON',
		   beforeSend: function() {
		      //$("#respuesta").html('Buscando empleado...');
		   },
		   error: function() {
		     // $("#respuesta").html('<div> Ha surgido un error. </div>');
		   },
		   success: function(respuesta) {
					
					    $.each(respuesta.data,function(index,element)
                    	{
                   			console.log(element);
                    	    if(numero==1)
					      	{
								active="active show";
					      	}else {
					      		active="";
					      	}
					          var tab= "<a class='nav-link "+active+" ' id='v-pills-home-tab' data-toggle='pill' href='#v-pills-home"+numero+"' role='tab' 				  aria-controls='v-pills-home' aria-selected='true'>"+
					          			"Dia "+numero+" </a>";
					         $("#v-pills-tab").append(tab);

					         var tabPanel= "<div class='tab-pane "+active+" ' id='v-pills-home"+element.day+"' role='tabpanel' 								aria-labelledby='v-pills-home-tab'>"+
         						'{!! Form::open(['route' => ['itinerarioActualizar'] , 'method' => 'POST', 'class' => 'form-horizontal','enctype' => 'multipart/form-data' ]) !!}'+
         						"<input type='hidden' id='idTourP' name='idTourP' value='{{$tourItem->id}}'>"+
         						"<input type='hidden' id='id' name='id' value='"+element.id+"'>"+

		         			   		"<p style='width: 900px;'>"+
		         			           "<div class='row'>"+
		         			           	"<input type='hidden' id='day' name='day' value='"+numero+"'>"+
		         			                "<div class='col'>"+
		         			                	"<label for='inputPassword'>Nombre</label>"+
		         			                	"<input type='text' class='form-control' name='name' id='name' value="+element.name+">"+
		         			                	"<label for='inputPassword'>Description</label>"+
		         			                	"<textarea  class='form-control' rows='5' name='description' id='description'>"+
		         			                	    
		         			                	" "+element.description+" </textarea>"+
		         			                "<div>"+

		         			                "<div class='row'>"+

													"<div class='col-4'>"+
				         			                	"<label for='Departamento'>Departamento</label>"+
				         			                	"<input type='text' class='form-control' name='deparment' id='deparment'  value="+element.department+">"+
													"</div>"+
													"<div class='col-4'>"+
				         			                	"<label for='distric'>Provincia</label>"+
				         			                	"<input type='text' class='form-control' name='province' id='province'  value="+element.province+">"+
													"</div>"+
													"<div class='col-4'>"+
				         			                	"<label for='distric'>Distrito</label>"+
				         			                	"<input type='text' class='form-control' name='district' id='district'  value="+element.district+">"+
													"</div>"+
		         			                "<div>"+

		         			                "<div class='row' style='margin-left:3px;'>"+

													"<div class='col-4'>"+
				         			                	"<label for='Departamento'>Altitud</label>"+
				         			                	"<input type='text' class='form-control' name='altitud' id='altitud'  value="+element.altitud+">"+
													"</div>"+
													"<div class='col-4'>"+
				         			                	"<label for='distric'>Latitud</label>"+
				         			                	"<input type='text' class='form-control' name='latitud' id='latitud'  value="+element.latitud+">"+
													"</div>"+
													"<div class='col-4'>"+
				         			                	"<label for='distric'>Longitud</label>"+
				         			                	"<input type='text' class='form-control' name='longitud' id='longitud'  value="+element.longitud+">"+
													"</div>"+
		         			                "<div>"+

		         			                "<div class='row'  style='margin-left:5px;'>"+

													"<div class='col-2'>"+
				         			                	"<label>Icono</label>"+
				         			                	"<input type='file' name='pic' accept='image/*'>"+
													"</div>"+
													
		         			                "<div><br><br><br>"+
		         			                 "<div class='row'>"+

													"<div class='col-5'>"+
				         			                	"<label style='color:white'>Eliminar</label>"+
				         			                	"<a href='{{route('ItinerarioEliminar','')}}/"+element.id+"' id='eliminarItinerario' class='btn btn-danger form-control'>Eliminar</a>"+
				         			                	
													"</div>"+
													"<div class='col-5'>"+
				         			                	"<label style='color:white'>Actualizar</label>"+
				         			                	"<button class='btn btn-success form-control'>Actualizar</button>"+
													"</div>"+
													
		         			                "<div>"+
		         			                

		         			          "</div>"+
		         			       "</p>"+
		         			       
		         			   '{!! Form::close() !!}'+
         			    "</div>";
				         $("#v-pills-tabContent").append(tabPanel);
				        numero++;
                    	});
		   		

		     
		   		}
			});
      }



  });
  </script>
@endsection


	          				
								   
								    
								     	
								    
								
								
	          				
	          				
				        
