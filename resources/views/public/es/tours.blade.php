@extends('public.es.layouts.master')

@section('content')
<!-- 
<section>
 <div class="offer">

        <div class="container" style="">
 
            <div class="row">

                <div class="popu-places-home" style="height: 500px;">
                    
                    
                   
                </div>
                
            </div>
        </div>
    </div>
</section> -->
<section>
    <div class="rows inner_banner inner_banner_1" style="height: 400px;">
      <div class="container">
        
        <ul style="background-color: rgba(2, 50, 31, 0.57);font-family: Lovelo Black;">
          <li><a href="{{route('paquetes','es')}}">Inicio</a> </li>
          <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
          <li><a href="{{route('paquetes','es')}}" class="bread-acti">Itinerarios</a> </li>
        </ul>
        <h2 style="background-color: rgba(2, 50, 31, 0.57);">
          <span style="font-family: Lovelo Black;">PERÚ TOURS DE LUJO EN AMÉRICA DEL SUR </span></h2>
      </div>
    </div>
  </section>

<section class="container">
  <div class="row">
    <div class="col-md-12">
      <br><br>
    </div>
  </div>
  <div class="row">
    <div class="hot-page2-alp-con">
      <!--LEFT LISTINGS-->
      <div class="col-md-3 hot-page2-alp-con-left">
        <div class="hot-page2-alp-con-left-1">
            <h3 id="tituloTous">CATEGORIA Y PRECIO</h3> </div>
        <!--PART 7 : LEFT LISTINGS-->
        
        <!--PART 4 : LEFT LISTINGS-->
        <div class="hot-page2-alp-l3 hot-page2-alp-l-com">
          <h4 id="subtitulo"><i class="fa fa-map-marker" aria-hidden="true"></i>  SELECCIONE CATEGORIA</h4>
          <div class="hot-page2-alp-l-com1 hot-page2-alp-p4">
            <form>
              <ul>
                @foreach($categorias as $item)
                    <li>
                      <div class="checkbox checkbox-info checkbox-circle" onchange="tourOpcionCategoria({!! $item->id !!},this);" >
                        <input id="chp{!! $item->id !!}" class="styled" type="checkbox" >
                        <label for="chp{!! $item->id !!}" id="subtitulo"> {!! $item->name!!}</label>
                      </div>

                    </li>
                @endforeach
              </ul>
            </form>  </div>
        </div>
        <!--END PART 4 : LEFT LISTINGS-->
    <div class="hot-page2-alp-l3 hot-page2-alp-l-com">
                            <h4 id="subtitulo"><i class="fa fa-dollar" aria-hidden="true"></i>RANGO DE PRECIOS</h4>
                            <div class="hot-page2-alp-l-com1 hot-page2-alp-p5">
                                <form>
                                    <ul>
                                        <li>
                                            <div class="checkbox checkbox-info checkbox-circle" onchange="tourOpcionPrecio(500,1000,this);" >
                                                <input id="chp52" class="styled" type="checkbox">
                                                <label for="chp52" id="subtitulo"> $ 500 - $ 1000 </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-info checkbox-circle" onchange="tourOpcionPrecio(1000,1500,this);">
                                                <input id="chp53" class="styled" type="checkbox">
                                                <label for="chp53" id="subtitulo"> $ 1000 - $ 1500 </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-info checkbox-circle" onchange="tourOpcionPrecio(1500,2000,this);">
                                                <input id="chp54" class="styled" type="checkbox">
                                                <label for="chp54" id="subtitulo"> $ 1500 - $ 2000 </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-info checkbox-circle" onchange="tourOpcionPrecio(2000,2500,this);">
                                                <input id="chp55" class="styled" type="checkbox">
                                                <label for="chp55"id="subtitulo"> $ 2000 - $ 2500 </label>
                                            </div>
                                        </li>
                                    </ul>
                                </form> </div>
                        </div>
    
      </div>
      <!--END LEFT LISTINGS-->
      <!--RIGHT LISTINGS-->
      <div class="col-md-9 hot-page2-alp-con-right">
        <div class="hot-page2-alp-con-right-1">
          <!--LISTINGS-->
          <div class="row" id="tours">
            @if (count($todoTours) == 0)<br>
               <div class="spe-title col-md-12">
					<h2>Lo sentimos</h2>
					<h2> Estamos trabajando para coberturar tus paquetes turísticos<h2>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					<p>
						<a href="/es" type="button" class="btn btn-link">Volver a buscar</a>
					</p>
				</div>
            @else
                  @foreach($todoTours as $item)
                          <div class="hot-page2-alp-r-list">

                            <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                              <a href="{{url('tour',['lang' => 'es','slug' => $item->slug])}}">
                                <div class="hotel-list-score">4.5</div>
                                <div class="hot-page2-hli-1">  <img src="/{{$item->img}}" alt=""> </div>
                              </a>
                              <div class="hom-hot-av-tic" style="font-family: Lovelo Black"> {{$item->categoriesName}}</div>
                            </div>

                            <div class="col-md-6">
                              <div class="trav-list-bod">
                              <a href="{{url('tour',['lang' => 'es','slug' => $item->slug])}}"><h3  id="tituloTousPrincipal">{{ $item->name }}</h3></a>
                              <p style="text-align: justify;" id="subtituloTousPrincipal">{!! str_limit($item->description_short, 150) !!}</p>
                              </div>
                              <div class="col-md-12" style="margin: 15px;">
                                      <a class="link-btn" style="text-align:center;color: #f15a23;" href="{{url('tour',['lang' => 'es','slug' => $item->slug])}}">VER MÁS DETALLE
                                      </a>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
                                <div class="hot-page2-alp-r-hot-page-rat">25% de descuento</div> <span class="hot-list-p3-1">Precios dede</span> <span class="hot-list-p3-2">$ {{$item->price}}</span><span class="hot-list-p3-4">
                                  <a href="{{route('reservation','es')}}/{{$item->id}}" class="hot-page2-alp-quot-btn" id="tituloTous">RESERVAR</a>
                                </span> </div>
                            </div>
                            <div>
                              <div class="trav-ami">
                                <h4 id="tituloTous">Detalle e Incluye</h4>
                                <ul>
                                  <li><img src="/assets/public/images/icon/a14.png" alt=""> <span>Duración:{{ $item->dias }} días / {{ (int)$item->dias-1}} noches</span></li>
                                  <li><img src="/assets/public/images/icon/a15.png" alt=""> <span>Hotel</span></li>
                                  <li><img src="/assets/public/images/icon/a16.png" alt=""> <span>Transferir</span></li>
                                  <li><img src="/assets/public/images/icon/a17.png" alt=""> <span>Equipaje</span></li>
                                  <li><img src="/assets/public/images/icon/a18.png" alt=""> <span>Duración 8N / 9D</span></li>
                                  <li><img src="/assets/public/images/icon/a19.png" alt=""> <span>Ubicación: Rio, Brasil</span></li>
                                  <li><img src="/assets/public/images/icon/dbl4.png" alt=""> <span>Stay Planw</span></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                  @endforeach
              @endif
            <!--END LISTINGS-->
            <!--END LISTINGS-->
          </div>
        </div>
      </div>
      <!--END RIGHT LISTINGS-->
    </div>
  </div>
</section>

@endsection
@section('script')
<script>
    var precios = [];
    function tourOpcionPrecio(precio1,precio2,element)
    {

        element.checked = !element.checked;
        if(element.checked==true)
        {
            precios.push(precio1,precio2);
        }else {
           precios.splice(precios.indexOf(precio1),1);
           precios.splice(precios.indexOf(precio2),1);
        }
       
       var cantidaPeticion=precios.length;
        $("#tours" ).html('');
        var htmlTours='';
        $.ajax({
                 url:'{{ route('toursOpcionPrecio') }}',
                 type: 'POST',
                 data:{
                        "_token": "{{ csrf_token() }}",
                         "abbr":"{{ $abbr }}", "precios":precios,"cantidaPeticion":cantidaPeticion
                    },
                 dataType: 'JSON',
                 beforeSend: function() {
                 },
                 error: function() {
                 },
                  success: function(respuesta) {

                        $.each(respuesta.data,function(index,element)
                        { 
                           htmlTours=htmlTours + "<div class='hot-page2-alp-r-list'>"+ 
                                                     " <div class='col-md-3 hot-page2-alp-r-list-re-sp'>"+ 
                                                         "<a href='../tour/es/"+element.slug+"'>"+
                                                             " <div class='hotel-list-score'>4.5</div>"+
                                                               "<div class='hot-page2-hli-1'> <img src='/"+element.img+"' alt=''> </div>"+
                                                         "</a>"+
                                                         "<div class='hom-hot-av-tic'>"+element.categoriaName+"</div>"+
                                                     "</div>"+
                                                     "<div class='col-md-6'>"+
                                                    "<div class='trav-list-bod'>"+
                                                   " <a href='../tour/es/"+element.slug+"'><h3>"+element.name+"</h3></a>"+
                                                    "<p>"+element.description_short.substring(0,150)+"</p>"+
                                                   " </div>"+
                                                    "<div class='col-md-12' style='margin: 15px;'> "+
                                                        "<a class='link-btn'href='../tour/es/"+element.slug+"'>VER MÁS DETALLE"+
                                                        "</a>"+
                                                    "</div>"+
                                                  "</div>"+
                                                  "<div class='col-md-3'>"+
                                                   " <div class='hot-page2-alp-ri-p3 tour-alp-ri-p3'>"+
                                                     " <div class='hot-page2-alp-r-hot-page-rat'>25% de descuento</div> "+
                                                      "<span class='hot-list-p3-1'>Precios dede</span> <span class='hot-list-p3-2'>$ "+element.price+" </span><span class='hot-list-p3-4'>"+
                                                       " <a href='{{route('reservation','es')}}' class='hot-page2-alp-quot-btn'>RESERVAR</a>"+
                                                     " </span> </div>"+
                                                "  </div>"+
                                                 " <div>"+
                                                    "<div class='trav-ami'>"+
                                                     " <h4>Detalle e Incluye</h4>"+
                                                    "  <ul>"+
                                                        "<li><img src='/assets/public/images/icon/a14.png' alt=''> <span>Turismo</span></li>"+
                                                      "  <li><img src='/assets/public/images/icon/a15.png' alt=''> <span>Hotel</span></li>"+
                                                       " <li><img src='/assets/public/images/icon/a16.png' alt=''> <span>Transferir</span></li>"+
                                                        "<li><img src='/assets/public/images/icon/a17.png' alt=''> <span>Equipaje</span></li>"+
                                                       " <li><img src='/assets/public/images/icon/a18.png' alt=''> <span>Duración 8N / 9D</span></li>"+
                                                        "<li><img src='/assets/public/images/icon/a19.png' alt=''> <span>Ubicación: Rio, Brasil</span></li>"+
                                                       " <li><img src='/assets/public/images/icon/dbl4.png' alt=''> <span>Stay Planw</span></li>"+
                                                      "</ul>"+
                                                    "</div>"+
                                                 " </div>"+
                                                "</div>";
                        });

                        $("#tours").append(htmlTours);
                  }
              });
      
    }
    var catagoria = [];
   
     function tourOpcionCategoria(id,element)
    {
        element.checked = !element.checked;
        if(element.checked==true)
        {
            catagoria.push(id);
        }else {
           catagoria.splice(catagoria.indexOf(id),1);
        }

        var cantidaPeticion=catagoria.length;

        $("#tours" ).html('');
        var htmlTours='';
        $.ajax({
                 url:'{{ route('toursOpcion') }}',
                 type: 'POST',
                 data:{
                        "_token": "{{ csrf_token() }}",
                         "abbr":"{{ $abbr }}", "catagoria":catagoria,"cantidaPeticion":cantidaPeticion
                    },
                 dataType: 'JSON',
                 beforeSend: function() {
                 },
                 error: function() {
                 },
                  success: function(respuesta) {
                        $.each(respuesta.data,function(index,element)
                        { 
                           htmlTours=htmlTours + "<div class='hot-page2-alp-r-list'>"+ 
                                                     " <div class='col-md-3 hot-page2-alp-r-list-re-sp'>"+ 
                                                         "<a href='../tour/es/"+element.slug+"'>"+
                                                             " <div class='hotel-list-score'>4.5</div>"+
                                                               "<div class='hot-page2-hli-1'> <img src='/"+element.img+"' alt=''> </div>"+
                                                         "</a>"+
                                                         "<div class='hom-hot-av-tic'>"+element.categoriaName+"</div>"+
                                                     "</div>"+
                                                     "<div class='col-md-6'>"+
                                                    "<div class='trav-list-bod'>"+
                                                   " <a href='../tour/es/"+element.slug+"'><h3>"+element.name+"</h3></a>"+
                                                    "<p>"+element.description_short.substring(0,150)+"</p>"+
                                                   " </div>"+
                                                    "<div class='col-md-12' style='margin: 15px;'> "+
                                                        "<a class='link-btn'href='../tour/es/"+element.slug+"'>VER MÁS DETALLE"+
                                                        "</a>"+
                                                    "</div>"+
                                                  "</div>"+
                                                  "<div class='col-md-3'>"+
                                                   " <div class='hot-page2-alp-ri-p3 tour-alp-ri-p3'>"+
                                                     " <div class='hot-page2-alp-r-hot-page-rat'>25% de descuento</div> "+
                                                      "<span class='hot-list-p3-1'>Precios dede</span> <span class='hot-list-p3-2'>$ "+element.price+" </span><span class='hot-list-p3-4'>"+
                                                       " <a href='{{route('reservation','es')}}' class='hot-page2-alp-quot-btn'>RESERVAR</a>"+
                                                     " </span> </div>"+
                                                "  </div>"+
                                                 " <div>"+
                                                    "<div class='trav-ami'>"+
                                                     " <h4>Detalle e Incluye</h4>"+
                                                    "  <ul>"+
                                                        "<li><img src='/assets/public/images/icon/a14.png' alt=''> <span>Turismo</span></li>"+
                                                      "  <li><img src='/assets/public/images/icon/a15.png' alt=''> <span>Hotel</span></li>"+
                                                       " <li><img src='/assets/public/images/icon/a16.png' alt=''> <span>Transferir</span></li>"+
                                                        "<li><img src='/assets/public/images/icon/a17.png' alt=''> <span>Equipaje</span></li>"+
                                                       " <li><img src='/assets/public/images/icon/a18.png' alt=''> <span>Duración 8N / 9D</span></li>"+
                                                        "<li><img src='/assets/public/images/icon/a19.png' alt=''> <span>Ubicación: Rio, Brasil</span></li>"+
                                                       " <li><img src='/assets/public/images/icon/dbl4.png' alt=''> <span>Stay Planw</span></li>"+
                                                      "</ul>"+
                                                    "</div>"+
                                                 " </div>"+
                                                "</div>";
                        });

                        $("#tours").append(htmlTours);
                  }
              });
        
    }

$(document).ready(function(){
    
   
    function tours() 
    {
    
        
    
              
    }
});
</script>

@endsection