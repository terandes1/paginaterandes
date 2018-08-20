@extends('public.es.layouts.master')

@section('content')

<?php 
	function carousel($carrusel)
	{
              $htmlTemp='';
              $i=0;
              foreach($carrusel as $item)
              {
				$i=$i+1;
				$htmlTemp.='<li data-target="#myCarousel1" data-slide-to="'.$i.'">'.
	              				'<img src="../../'.$item->path.'" alt="Chania">'.
	            			 '</li>';
              }
              return $htmlTemp;
	} 

	function slider($multimediaTour)
	{
			 $htmlTemp1='';
              $i=0;
              foreach($multimediaTour as $item)
              {
				$i=$i+1;
				if($i==1)
				{
					$htmlTemp1.='<div class="item active">'.
		              	'<img src="../../'.$item->path.'" alt="Chania" width="460" height="345" style="width:850px;height:450px">'.
		            '</div>';

				}else {

				}
				$htmlTemp1.='<div class="item">'.
		              			'<img src="../../'.$item->path.'" alt="Chania" width="460" height="345" style="width:850px;height:450px">'.
		            		'</div>';
              }

              return $htmlTemp1;
	}

?>
<!--====== BANNER ==========-->
<section>
  <div class="rows inner_banner inner_banner_4">
    <div class="container">
      <h2><span>{!! $tour->name !!}</span> Family Package</h2>
       <div class="tour_head">
           
           <span class="tour_star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i></span><span class="tour_rat">4.5</span>
        </div>
      <ul>
        <li><a href="#inner-page-title">Inicio</a>
        </li>
        <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
        <li><a href="{{route('paquetes','es')}}" class="bread-acti">Tours</a>
        </li>
      </ul>
      <p>Reserve paquetes de viaje y disfrute de sus vacaciones con una experiencia única</p>
    </div>
  </div>
</section>
<!--====== TOUR DETAILS - BOOKING ==========-->
<section>
  <div class="rows banner_book" id="inner-page-title">
    <div class="container">
      <div class="banner_book_1">
        <ul>
          <li class="dl1">Ubicación: Rio, Brasil</li>
          <li class="dl2">Precio: $ 500</li>
          <li class="dl3">Duración: 8 noches / 9 días</li>
          <li class="dl4"><a href="{{route('contact','es')}}">Recervar ahora</a> </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!--====== TOUR DETAILS ==========-->
  
<section>
  <div class="rows inn-page-bg com-colo">
    <div class="container inn-page-con-bg tb-space">
      <div class="col-md-9" style="margin-top: -140px;">
 		
        <div class="tour_head1" style="text-align: justify;">
          <h3></h3>
          <div class="db-2-com db-2-main">
          <h4>Descripción</h4>
          <div class="db-2-main-com">
          
            
            
          </div>
        </div>
          <p>
          	{!! strip_tags($tour->description_complete) !!}
          </p>
         </div>
        <!--====== ROOMS: HOTEL BOOKING ==========-->
        <div class="tour_head1 hotel-book-room">
          <h3>Galería de fotos</h3>
          <div id="myCarousel1" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators carousel-indicators-1">

            	<?=carousel($multimediaTour);?>  
           
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-inner1" role="listbox">
            	<?=slider($multimediaTour);?>  
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev"> 
            	<span><i class="fa fa-angle-left hotel-gal-arr" aria-hidden="true"></i></span> 
            </a>
			<a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next"> 
					<span><i style="margin-left: -100px;margin-top: 52px;"class="fa fa-angle-right hotel-gal-arr hotel-gal-arr1" aria-hidden="true"></i></span> 
			</a>
          </div>
        </div>
        <!--====== DURATION ==========-->
        <div class="container">
          <div class="row">
            <div class="col-md-9" style="margin-left: -20px;">
                  <div class="panel with-nav-tabs panel-success">
                      <div class="panel-heading">
                              <ul class="nav nav-tabs">
                                  <li class="active"><a href="#tab1default" data-toggle="tab">ITINERARIO</a></li>
                                  <li><a href="#tab2default" data-toggle="tab">ORGANIZACIÓN</a></li>
                                  <li><a href="#tab3default" data-toggle="tab">UBICACIÓN</a></li>
                              </ul>
                      </div>
                      <div class="panel-body">
                          <div class="tab-content">
                              <div class="tab-pane fade in active" id="tab1default">
                                <div class="panel-group" id="accordion">
                                	@foreach($itinerarioTour as $itemp)

	                                  <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                      <h4 class="panel-title">
	                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse{!! $itemp->day !!}"">
	                                          <h4><span>D{!!  $itemp->day !!} - {!! $itemp->name !!}:</span></span> 
	                                           </h4>
	                                        </a>
	                                      </h4>
	                                    </div>
	                                    <div id="collapse{!! $itemp->day !!}" class="panel-collapse collapse">
	                                      <div class="panel-body">
	                                          <p>
	                                          	{!!  $itemp->description !!}
	                                          </p>
	                                      </div>
	                                    </div>
	                                  </div>

                                  @endforeach

                                </div> 

                              </div>
                              <div class="tab-pane fade" id="tab2default">
                                  <div class="row">
                                      
                                      <div class="col-sm-12">
                                             <div class="tour_head1 tout-map map-container">
                                             
                                             	{!! $tour->organization !!}
                                            </div>

                                      </div>
                                       
                                  </div>
                              </div>

                              <div class="tab-pane fade" id="tab3default">
                                  <div class="row">
                                      
                                      <div class="col-sm-12" style="margin-top: -50px;">

                                             <div class="tour_head1 tout-map map-container">
                                              <h3>Ubicación</h3>
                                              
                                            </div>
                                            <div id="map_ubicacion" style="height: 450px;"></div>

                                      </div>
                                       
                                  </div>
                              </div>
                              
                          </div>
                      </div>
                  </div>
              </div> 
        </div>
      </div>

        <!--====== TOUR LOCATION ==========-->
      

        <div>
          <div class="dir-rat">
            <div class="dir-rat-inn dir-rat-title">
              <h3>CONTÁCTENOS</h3>
              <p>Gracias por su interés en tener una experiencia de viaje personalizada comisariada por Tierra de los Andes Perú</p>
              
            </div>
            <div class="dir-rat-inn">
              <form class="dir-rat-form">
                <div class="form-group col-md-6 pad-left-o">
                  <input type="text" class="form-control" id="email11" placeholder="Ingrese su nombre"> </div>
                <div class="form-group col-md-6 pad-left-o">
                  <input type="number" class="form-control" id="email12" placeholder="Ingresa móvil"> </div>
                <div class="form-group col-md-6 pad-left-o">
                  <input type="email" class="form-control" id="email13" placeholder="Ingresar correo electrónico"> </div>
                <div class="form-group col-md-6 pad-left-o">
                  <input type="text" class="form-control" id="email14" placeholder="Ingrese su ciudad"> </div>
                <div class="form-group col-md-12 pad-left-o">
                  <textarea placeholder="Escribe tu mensaje"></textarea>
                </div>
                <div class="form-group col-md-12 pad-left-o">
                  <input type="submit" value="Enviar" class="link-btn"> </div>
              </form>
            </div>

            <!--tours relacionados-->
           <div class="tour_head1">
						<h3>TOUR RELACIONADOS</h3>
						<div class="tr-room-type">
							<ul>
								@foreach($toursRelacionados  as $item)
								<li>
									<div class="tr-room-type-list">
										<div class="col-md-3 tr-room-type-list-1"><img src="/{{$item->img}}" alt="" />
										</div>
										<div class="col-md-6 tr-room-type-list-2">
											<h4>{!! $item->name !!}</h4>
											<p><b>Description:
											 </b>
												{!! str_limit($item->description_short, 150) !!}
												</br> <b>Maxinum </b> : 4 Persons</span> 
                                            <div class="col-md-12" style="margin: 15px;">
                                                    <a class="link-btn" style="text-align:center;color: #f15a23;" href="{{url('tour',['lang' => 'es','slug' => $item->slug])}}">VER MÁS DETALLE
                                                    </a>
                                            </div>
										</div>
										<div class="col-md-3 tr-room-type-list-3"> <span class="hot-list-p3-1">Precio por noche</span> <span class="hot-list-p3-2">$ {{ $item->price}}</span> <a href="{{route('contact','es')}}" class="hot-page2-alp-quot-btn spec-btn-text">Reservar ahora</a> </div>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
					</div>
            
           
          </div>
        </div>
      </div>
      <div class="col-md-3 tour_r" style="margin-top: -90px;">
        <!--====== SPECIAL OFFERS ==========-->
        <div class="tour_right tour_offer">

          <div class="band1"><img src="/assets/public/images/offer.png" alt="" /> </div>
          <p>Oferta especial</p>
          <h4>$500<span class="n-td">
              <span class="n-td-1">$800</span>
              </span>
            </h4> <a href="{{route('contact','es')}}" class="link-btn">RESERVAR AHORA</a> </div>
        <!--====== TRIP INFORMATION ==========-->
        
        <!--====== PACKAGE SHARE ==========-->
        <div class="tour_right head_right tour_social tour-ri-com">
          <h3>COMPARTE ESTE PAQUETE</h3>
          <ul>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
            <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
          </ul>
        </div>
        <!--====== HELP PACKAGE ==========-->
        <div class="tour_right head_right tour_help tour-ri-com">
          <h3>SERVICIO DE ASISTENCIA</h3>
          <div class="tour_help_1">
            <h4 class="tour_help_1_call">Llámanos ahora</h4>
            <h4><i class="fa fa-phone" aria-hidden="true"></i> 10-800-123-000</h4> </div>
        </div>
        <!--====== PUPULAR TOUR PACKAGES ==========-->
        <div class="tour_right tour_rela tour-ri-com">
          <h3>TOURS POPULARES</h3>
          	@foreach($toursPrincipal as $item)
	          <div class="tour_rela_1"> <img src="/{{$item->img}}" alt="" />
	             <h5 style="color: #f4364f;text-align: center;">{!! $item->dias!!} DIAS / {{ ((int)($item->dias)-1)}} NOCHES </h5>
	            <p style="text-align: justify;">
	            	 {!! str_limit($item->description_short, 150) !!}
	            </p> <a style="text-align: center;" href="{{url('tour',['lang' => 'es','slug' => $item->slug])}}" class="link-btn">MÁS SOBRE ESTE VIAJE</a> 
	          </div>
	          @endforeach
        </div>

      </div>
    </div>
    
  </div>

</section>

@endsection

@section('script')


<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxJnaq8H2Ib6E0bBT1sTnSnGZ5tqONxFI&callback&sensor=true&callback=initialize">
</script>

 <script>


    //ListItinerarioMap();
    function initialize()
        {
            var marcadores;
            var idTour='{{$tour->id}}';
            var abbr='{{$abbr}}';
            $.ajax({
                     url:'{{ route('listItinerarioMap') }}',
                     type: 'POST',
                     data:{
                            "_token": "{{ csrf_token() }}",
                             "idTour":idTour, "abbr":abbr
                        },
                     dataType: 'JSON',
                     beforeSend: function() {
                     },
                     error: function() {
                     },
                      success: function(respuesta) {
                        var marcadores=respuesta.data;
 
                        var flightPlanCoordinates   = [];
                         $.each(respuesta.grafica,function(index,element)
                            { 
                            
                                flightPlanCoordinates .push({"lat":Number(element.lat),"lng":Number(element.lng)});

                                 
                             });
                        
                      var lineSymbol = {
                              path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW
                            };

                        var map = new google.maps.Map(document.getElementById('map_ubicacion'),
                         {
                            zoom: 7,
                            center: new google.maps.LatLng(-13.539158, -71.9720368),
                            mapTypeId: google.maps.MapTypeId.ROADMAP

                          });
                        var flightPath = new google.maps.Polyline({
                          path: flightPlanCoordinates,
                          strokeColor: '#15959F',
                          strokeOpacity: 0.8,
                          strokeWeight: 3,
                          fillColor: '#15959F',
                          fillOpacity: 0.35,
                          draggable: true,
                          geodesic: true,
                          icons: [{
                            icon: lineSymbol,
                            repeat: '330px',
                            offset: '0',
                          }],
                          map: map
                        });
                        
                        flightPath.setMap(map);

                          var infowindow = new google.maps.InfoWindow();

                          var marker, i;
                          for (i = 0; i < marcadores.length; i++) 
                          {  
                            marker = new google.maps.Marker({
                              position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
                              map: map,
                              icon: {
                                         url: "../../assets/content/iconos/"+marcadores[i][3]+"."+marcadores[i][4]+"",
                                         scaledSize: new google.maps.Size(30, 30), 
                                         origin: new google.maps.Point(0,0), 
                                         anchor: new google.maps.Point(0, 0) 
                                    }
                            });

                            google.maps.event.addListener(marker, 'mouseover', (function(marker, i)
                             {
                              return function() {
                                infowindow.setContent("<img style='width:250px;' src='../../"+marcadores[i][6]+"'>"+
                                    "<table> <tr><th><h4><strong> "+marcadores[i][0]+" </strong></th></tr><tr><td style='width:150px; text-align:justify;'></h3></h6>"+marcadores[i][5]+"</h6></td></tr></table>");
                                infowindow.open(map, marker);
                              }
                            })(marker, i));

                          }

                      }

                  });
            
          
        }
    $(document).ready(function(e) { initialize() });

</script>


@endsection