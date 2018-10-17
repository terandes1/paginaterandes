@extends('public.es.layouts.master')

@section('content')
<style>

/* links: outlines and underscores */  
a.btn,          
a.btn:active,   
a.btn:focus, 

.nav-tabs li a,
.nav-tabs li a:active,
.nav-tabs li a:focus { outline:0px !important; -webkit-appearance:none;  text-decoration:none; }  

</style>

<style>

.panel {margin-top: 10px;margin-bottom: 5px;    font-family: Lovelo Black;}
.panel .panel-heading { padding: 5px 5px 0 5px;}
.panel .nav-tabs {border-bottom: none;}


.nav > li > a               { background-color: #f5f5f5; color: #676767; border-color: #dddddd; border-width: 1px; padding: 5px 15px; line-height: 2; -webkit-transition: all 0.75s; -moz-transition: all 0.75s; transition: all 0.75s; }} 
.nav > li > a:active        { background-color: #f5f5f5; color: #676767;}
.nav > li > a:focus         { background-color: #f5f5f5; color: #676767;} 
.nav > li > a:hover         { background-color: #eeeeee; color: #676767; border-color: #dddddd;} 

.nav > li.active > a:hover  {color: #222222;} 


.btn-default.btn-outline:active,
.btn-default.btn-outline:focus, 
.btn-default.btn-outline        { color: #676767; border-color: #676767; background-color: transparent; border-width: 2px; -webkit-transition: all 0.25s; -moz-transition: all 0.25s; transition: all 0.25s;}   
.btn-default.btn-outline:hover  { color: #000000; border-color: #000000; background-color: transparent; border-width: 2px; -webkit-transition: all 0.75s; -moz-transition: all 0.75s; transition: all 0.75s; } 

.btn-group button.btn.btn-outline.btn-default           { background-color: #f5f5f5; color: #676767; border-color: #dddddd; border-width: 1px; padding: 5px 15px; line-height: 2; -webkit-transition: all 0.75s; -moz-transition: all 0.75s; transition: all 0.75s; }} 
.btn-group button.btn.btn-outline.btn-default:focus     { background-color: #f5f5f5;} 
.btn-group button.btn.btn-outline.btn-default:active    { background-color: #f5f5f5;}
.btn-group button.btn.btn-outline.btn-default:hover     { background-color: #eeeeee; border-width: 1px; -webkit-transition: all 0.75s; -moz-transition: all 0.75s; transition: all 0.75s; } 

.btn-outline.btn-highlight  { color: #676767; border-color: #676767; background-color: transparent; border-width: 2px;}

.display-title { font family: verdana, arial, helvetica; color:#008400;}


ul.nav.nav-tabs li.btn-group.active > a.btn.btn-default
{
border: 1px solid #dddddd;
background-color: #ffffff;
border-right:0px;
margin-right: 0px;
border-bottom: 0px;
}

ul.nav.nav-tabs li.btn-group > a.btn.btn-default
{
border: 1px solid #F5F5F5;
border-right:0px;
margin-right: 0px;
border-bottom: 0px;
}

ul.nav.nav-tabs > li.btn-group.active > a.btn.dropdown-toggle
{
border: 1px solid #dddddd;
background-color: #ffffff;
margin-left: 0px;
border-left:0px;
border-bottom: 0px;
 
}

ul.nav.nav-tabs > li.btn-group > a.btn.dropdown-toggle
{
border: 1px solid #F5F5F5;
margin-left: 0px;
border-left: 0px;
border-bottom: 0px;
}

 ul.nav.nav-tabs li.btn-group a.btn.dropdown-toggle span.caret
{
color: #F5F5F5;
}

 ul.nav.nav-tabs li.btn-group.active > a.btn.dropdown-toggle > span.caret
{
color: #999999;
}
    
    </style>
    
<?php 
	function carousel($carrusel)
	{
              $htmlTemp='';
              $i=0;
              foreach($carrusel as $item)
              {
				
				$htmlTemp.='<li data-target="#myCarousel1" data-slide-to="'.$i.'">'.
	              				'<img src="../../'.$item->path.'" alt="Chania">'.
	            			 '</li>';
	            $i=$i+1;
              }
              return $htmlTemp;
	} 

	function slider($multimediaTour)
	{
			 $htmlTemp1='';
              $i=0;
              foreach($multimediaTour as $item)
              {
				
				if($i==0)
				{
					$htmlTemp1.='<div class="item active">'.
		              	'<img src="../../'.$item->path.'" alt="Chania" width="460" height="345" style="width:850px;height:450px">'.
		            '</div>';

				}else {
					$htmlTemp1.='<div class="item">'.
		              			'<img src="../../'.$item->path.'" alt="Chania" width="460" height="345" style="width:850px;height:450px">'.
		            		'</div>';
				}
				
		        $i=$i+1;
              }
              
              return $htmlTemp1;
	}
    function fecha($date)
    {
       
        setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
        $fecha = strftime("%d de %B de %Y", strtotime($date));
        return $fecha;
    }

?>
<!--====== BANNER ==========-->
<section>
  <div class="rows inner_banner inner_banner_4" style="height: 400px;">
    <div class="container">
      <h2><span id="tituloTouRelacionados">   </span style="text-shadow: 2px 2px 4px #000;color: #fff;    font-size: 3em;"> </h2>
       <div class="tour_head">
           
          
        </div>
        
      <ul>
        <li><a href="#inner-page-title" id="subtitulo">Inicio</a>
        </li>
        <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
        <li><a href="{{route('paquetes','es')}}" class="bread-acti" id="subtitulo">Tours</a>
        </li>
      </ul>
      <!--p style="text-shadow: 2px 2px 4px #000;color: #fff; font-family: 'NewsGoth CN BT', sans-serif;font-weight: 300;" id="subtitulo">{!! $tour->description_short !!}</p> -->
    </div>
  </div>
</section>
<!--====== TOUR DETAILS - BOOKING ==========-->
<section>
  <div class="rows banner_book" id="inner-page-title" >
    <div class="container">
      <div class="banner_book_1">
        
          <h3 class="dl4" >{!! $tour->name !!} &nbsp <span class="tour_star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i></span>

           <span class="tour_rat" style="text-shadow: 2px 2px 4px #000;color: #fff;">4.5</span><h3>
        
      </div>
    </div>
  </div>
</section>
<!--====== TOUR DETAILS ==========-->
  
<section>
  <div class="rows inn-page-bg com-colo">
    <div class="container inn-page-con-bg tb-space">
      <div class="col-md-9" style="margin-top: -100px;">
 		
        <div class="tour_head1" style="text-align: justify;">

	        <h3 >Descripción</h3>
	           
            <p id="subtitulo" style="margin-top: -28px;color: black; font-size:larger">
          	{!! strip_tags($tour->description_complete) !!}.
            </p>
         </div>
        <!--====== ROOMS: HOTEL BOOKING ==========-->
        <div class="tour_head1 hotel-book-room">

          
	          <h3 >Galería de fotos</h3>
	          
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
					<span>
						<i style="margin-left: -48px;margin-top: 52px;"class="fa fa-angle-right hotel-gal-arr" aria-hidden="true"></i>
			</span> 
			</a>
          </div>
        </div>
        
        @if ($tour->tipo_tour == 'serie') 
        <div class="db">
            <!--LEFT SECTION-->
          
            <!--CENTER SECTION-->
            @if (count($pricesTour) > 0)
            <div class="db-2" style="width: 98%;">
                <div class="db-2-com db-2-main">
                    <!-- <h4>Travel Booking</h4> -->
                    <div class="db-2-main-com db-2-main-com-table">
                        <table class="responsive-table">
                            <thead>
                                <tr>
                                    @foreach($pricesTour as $itemprice)
                                    <th><h4 style="font-size: 15px;    font-family: Lovelo Black;">De {!!  $itemprice->range_first  !!} a {!!  $itemprice->range_end !!} personas</h4></th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach($pricesTour as $itemprices)
                                    <td style="font-size: 15px;padding-left: 15px">{!!  $itemprices->monto  !!} USD</td>  @endforeach                                  
                                </tr>
                               
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>&nbsp;
            @endif
            @if (count($seriesTour) > 0)
            <div class="db-2" style="width: 98%;">
                <div class="db-2-com db-2-main">
                    <!-- <h4>Travel Booking</h4> -->
                    <div class="db-2-main-com db-2-main-com-table">
                        <table class="responsive-table">
                            <thead>
                                <tr>
                                    <th><h4 style="font-size: 15px;    font-family: Lovelo Black;">LLEGADAS A LIMA</h4></th>
                                    <th><h4 style="font-size: 15px;    font-family: Lovelo Black;">SALIDAS DE LIMA </h4></th>
                                    <th><h4 style="font-size: 15px;    font-family: Lovelo Black;">DISPONIBILIDAD</h4></th>
                                    <th><h4 style="font-size: 15px;    font-family: Lovelo Black;">ESTADO</h4></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($seriesTour as $items)
                                <tr>
                                    <td style="font-size: 14px;padding-left: 15px">

                                        <?=fecha($items->date_start);?>
                                       
                                    </td>
                                    <td style="font-size: 14px;padding-left: 15px">
                                         <?=fecha($items->date_end);?>
                                    </td>
                                    <td style="font-size: 14px;padding-left: 15px">
                                        {!!  $items->cant_person !!} VACANTES
                                    </td>
                                    <td style="font-size: 14px;padding-left: 15px"><span class="db-done" style="text-transform: capitalize;">{!!  $items->status !!}</span></td>
                                </tr>
                                @endforeach
                               
                            </tbody>
                        </table>

                    </div>
                    
                </div>
            </div>
            @endif
        </div>
        @endif
        <br>
        <!--====== DURATION ==========-->
            <div class="rows inn-page-bg com-colo">
                <div class="col-md-12"> 
                        
                    <div class="panel panel-default panel-fade">
                    
                        <div class="panel-heading">
                       
                            <span class="panel-title">
                            
                                <div class="pull-left">
                                
                                <ul class="nav nav-tabs">
                                    <li class="active" style="">
                                        <a href="#letters" data-toggle="tab"><i style="color:black;" class="fa fa-address-card-o"></i>
                                            <span style="font-family: Lovelo Black;">ITINERARIO</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#emails" data-toggle="tab">
                                            <i style="color:black;" class="fa fa-users"></i> 
                                            <span style="font-family: Lovelo Black;">
                                                 ORGANIZACIÓN
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#loglist" data-toggle="tab" id="ubicacion">
                                            <i style="color:black;" class="fa fa-map-marker"></i> 
                                            <span style="font-family: Lovelo Black;">
                                                 UBICACIÓN
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                    
                                </div>
                                
                                <div class="btn-group pull-right">
                                    <div class="btn-group">
                                        <a href="#" class="btn  dropdown-toggle" data-toggle="dropdown">
                                            <span class="glyphicon glyphicon-cog"></span>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action 1</a></li>
                                            <li><a href="#">Action 2</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Another Action</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                            </span>
                            
                        </div>

                        <div class="panel-body">
                                    
                            <div class="tab-content">
                            
                                 <div class="tab-pane fade in active" id="letters">
                                 <!--    <h3>Letters</h3> -->
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
                            
                                                    
                                <div class="tab-pane fade" id="emails">                            
                                        {!! $tour->organization !!}
                                </div>
                                
                                <div class="tab-pane fade" id="loglist">                                  
                                 <div id="map_ubicacion" style="height: 450px;"></div>
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
                  <h3 style="text-align: center;">CONTÁCTENOS</h3>
                  <p>Gracias por su interés en tener una experiencia de viaje personalizada con Tierra de los Andes Perú.</p>
                  
                </div>
                <div class="dir-rat-inn">
                    {!! Form::open(['method' => 'POST' , 'class' => 'dir-rat-form' ,'id' => "formEnvio"]) !!}
                 <form class ='dir-rat-form'>
                    <div class="form-group col-md-12 pad-left-o">
                      <input type="text" class="form-control" id="nameTour" name="nameTour" value="{!! $tour->name !!}"> 
                    </div>
                    <div class="form-group col-md-6 pad-left-o">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese su nombre"> 
                      <p class="errorValidacion" id="errorName"></p>
                    </div>
                    <div class="form-group col-md-6 pad-left-o">
                      <input type="number" class="form-control" id="numero"  name="numero" placeholder="Ingresa móvil">
                      <p class="errorValidacion" id="errorNumero"></p>
                     </div>
                    <div class="form-group col-md-6 pad-left-o">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Ingresar correo electrónico"> 
                      <p class="errorValidacion" id="errorEmail"></p>
                    </div>
                    <div class="form-group col-md-6 pad-left-o">
                      <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ingrese su ciudad"> 
                      <p class="errorValidacion" id="errorCiudad"></p>
                    </div>
                    <div class="form-group col-md-12 pad-left-o">
                      <textarea placeholder="Escribe tu mensaje" id="mensaje" name="mensaje"></textarea>
                        <p class="errorValidacion" id="errorMensaje"></p>
                    </div>
                    <div class="form-group col-md-6 pad-left-o">
                      {!! Recaptcha::render() !!}
                      <p class="errorValidacion" id="errorCapcha"></p>
                    </div>
                    
                    <div class="form-group col-md-12 pad-left-o" style="text-align: center;">
                      <input type="submit" value="Enviar" id="EnviarReservationTour" name="EnviarReservationTour" class="link-btn"> </div>
                  </form>
                </div>



            <!--tours relacionados-->
           <div class="tour_head1" >
                <div class="db-2-com db-2-main" style ="margin-bottom: 40px">
						<h4>TOURS RELACIONADOS</h4>
                      
                </div>
						<div class="tr-room-type">
							<ul>

								@foreach($toursRelacionados  as $item)
								<li>
									<div class="tr-room-type-list">
										 <a  href="{{url('tour',['lang' => 'es','slug' => $item->slug])}}">
                        <div class="col-md-3 tr-room-type-list-1"><img src="/{{$item->img}}" alt="" />

    										</div>
                     </a>
										<div class="col-md-6 tr-room-type-list-2">
                       <a  href="{{url('tour',['lang' => 'es','slug' => $item->slug])}}">
  											<h4 id="tituloTous" style="color: #F27612;">
                          {!! $item->name !!}
                        </h4>
                      </a>
											<p><b>Description:
											 </b>
												{!! str_limit($item->description_short, 150) !!}
												
                                            <div class="col-md-12" style="margin: 15px;">
                                                    <a class="link-btn" style="text-align:center;color: #f15a23;" href="{{url('tour',['lang' => 'es','slug' => $item->slug])}}">VER MÁS DETALLE
                                                    </a>
                                            </div>
										</div>
										<div class="col-md-3 tr-room-type-list-3"> <span class="hot-list-p3-1"> </span> <span class="hot-list-p3-2">$ {{ $item->price}}</span> <a href="{{route('reservation','es')}}/{{$item->id}}" class="hot-page2-alp-quot-btn spec-btn-text" id="tituloTouRelacionados">Reservar ahora</a> </div>
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
          <p>   &nbsp  </p><br>
          <h4>   ${{ $tour->price}}
               
            </h4> <a href="{{route('reservation','es')}}/{{$item->id}}" class="link-btn">RESERVAR AHORA</a> </div>
        <!--====== TRIP INFORMATION ==========-->
        
        <!--====== PACKAGE SHARE ==========-->
        <div class="tour_right head_right tour_social tour-ri-com">
          <h3 id="tituloTouLateral">COMPARTE ESTE PAQUETE</h3>
          <ul>
            <li><a href="https://www.facebook.com/tierrasdelosandes" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
            <li><a href="https://www.youtube.com/channel/UC0MniFzf-lvtteI9CIKTQnw" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
            <li><a href="https://www.instagram.com/tierrasdelosandes/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a> </li>
            <li><a href="#" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
          </ul>
        </div>
        <!--====== HELP PACKAGE ==========-->
        <div class="tour_right head_right tour_help tour-ri-com">
          <h3 id="tituloTouLateral">SERVICIO DE ASISTENCIA</h3>
          <div class="tour_help_1">
            
            <h4><i class="fa fa-phone" aria-hidden="true"></i>  00-51-84-247277</h4> </div>
        </div>
        <!--====== PUPULAR TOUR PACKAGES ==========-->
        <div class="tour_right tour_rela tour-ri-com">
          <h3 id="tituloTouLateral">TOURS POPULARES</h3>
          	@foreach($toursPrincipal as $item)
	          <div class="tour_rela_1" style="text-align: center;"> 
              
              <a style="text-align: center;" href="{{url('tour',['lang' => 'es','slug' => $item->slug])}}" >
                <img src="/{{$item->img}}" alt="" />
              </a> 
	             <h5  style="color: #1d2129;text-align: center;">{!! $item->dias!!} DIAS / {{ ((int)($item->dias)-1)}} NOCHES </h5>
	            <p style="text-align: justify;color: #F27612;font-family: 'NewsGoth CN BT', sans-serif;">
	            	 {!! str_limit($item->name, 150) !!}
	            </p> <a style="text-align: center;" href="{{url('tour',['lang' => 'es','slug' => $item->slug])}}" class="link-btn" id="tituloTouLateral">Ver más detalle</a> 
	          </div>
	          @endforeach
        </div>

      </div>
    </div>
    
  </div>

</section>

@endsection

@section('script')


<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxJnaq8H2Ib6E0bBT1sTnSnGZ5tqONxFI&callback">
</script>

 <script>
   $("#EnviarReservationTour").click(function (e) {
        e.preventDefault();
        $("#errorName").html('');
        $("#errorNumero").html('');
        $("#errorEmail").html('');
        $("#errorCiudad").html('');
        $("#errorMensaje").html('');
        var response = grecaptcha.getResponse();
        if(response.length == 0){
            $("#errorCapcha").html('Verificar capcha');
         
            } else {
               $("#errorCapcha").html('');
                var data = $('#formEnvio').serialize();
                 $.ajax({
                     url:'{{ route('reservationTour') }}',
                         type: 'POST',
                         data:data,
                     success: function(data) {

                    },
                     error:function(data){

                        var errors = data.responseJSON.errors;

                        $("#errorName").html(errors.name);
                        $("#errorNumero").html(errors.numero);
                        $("#errorEmail").html(errors.email);
                        $("#errorCiudad").html(errors.ciudad);
                        $("#errorMensaje").html(errors.mensaje);
                    }
                });
            }
     
       


    });

    $( "#ubicacion" ).click(function() {
      initialize();
    });

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
                                infowindow.setContent("<table> <tr><th><h6><strong> "+marcadores[i][0]+" </strong></h6></th></tr><tr><td style='width:350px; text-align:justify;'></h3></td></tr></table>");
                                infowindow.open(map, marker);
                              }
                            })(marker, i));

                          }

                      }

                  });
            
          
        }
    $(document).ready(function(e) { initialize() });

</script>
    <script>
 
        $('a.btn.btn-default').hover(function(e) {
        $('a.btn.dropdown-toggle').trigger(e.type);
        })
    </script>
                
    <script type="text/javascript">
        $(".display-fade").delay(25).animate({"opacity": "1"}, 800);
        $(".table-fade").delay(25).animate({"opacity": "1"}, 800);
    </script>
                
    <script type="text/javascript">
        var def="black";
        function showNotification(color)
        {
            $( "#notification" ).removeClass(def);
            $( "#notification" ).addClass(color);
            def=color;
            $( "#notification" ).fadeIn( "slow" );
            //alert('hi');
            $(".win8-notif-button").click(function()
            {
            //alert('hi');
            $(".notification").fadeOut("slow");
            });
    
    }
    </script>

@endsection