@extends('public.fr.layouts.master')

@section('content')
<section>
    <div class="rows inner_banner inner_banner_1" style="height: 400px;">
      
    </div>
    <section>
  <div class="rows banner_book" id="inner-page-title">
    <div class="container">
      <div class="banner_book_1">
      
          <h3 class="dl4">VISITES DE LUXE AU PÉROU EN AMÉRIQUE DU SUD <span class="tour_star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i></span>

           <span class="tour_rat" style="text-shadow: 2px 2px 4px #000;color: #fff;">4.5</span><h3>
        
      </div>
    </div>
  </div>
</section>
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
            <h3 id="tituloTous">FILTRE PAR CATÉGORIE ET PRIX</h3> </div>
        <!--PART 7 : LEFT LISTINGS-->
        
        <!--PART 4 : LEFT LISTINGS-->
        <div class="hot-page2-alp-l3 hot-page2-alp-l-com">
          <h4 id="subtitulo"><i class="fa fa-map-marker" aria-hidden="true"></i>  SÉLECTIONNER LA CATÉGORIE</h4>
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
                </form>  
            </div>
        </div>
        <!--END PART 4 : LEFT LISTINGS-->
    <div class="hot-page2-alp-l3 hot-page2-alp-l-com">
        <h4 id="subtitulo"><i class="fa fa-dollar" aria-hidden="true"></i>GAMME DE PRIX</h4>
        <div class="hot-page2-alp-l-com1 hot-page2-alp-p6">
            <form>
                <ul>
                  
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
                    <li>
                        <div class="checkbox checkbox-info checkbox-circle" onchange="tourOpcionPrecio(2000,2500,this);">
                            <input id="chp55" class="styled" type="checkbox">
                            <label for="chp55"id="subtitulo"> $ 2500 - $ 3000 </label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox checkbox-info checkbox-circle" onchange="tourOpcionPrecio(3000,3500,this);">
                            <input id="chp56" class="styled" type="checkbox">
                            <label for="chp56"id="subtitulo"> $ 3000 - $ 3500 </label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox checkbox-info checkbox-circle" onchange="tourOpcionPrecio(3500,4000,this);">
                            <input id="chp57" class="styled" type="checkbox">
                            <label for="chp57"id="subtitulo"> $ 3500 - $ 4000 </label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox checkbox-info checkbox-circle" onchange="tourOpcionPrecio(4000,4500,this);">
                            <input id="chp58" class="styled" type="checkbox">
                            <label for="chp58"id="subtitulo"> $ 4000 - $ 4500 </label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox checkbox-info checkbox-circle" onchange="tourOpcionPrecio(4500,5000,this);">
                            <input id="chp59" class="styled" type="checkbox">
                            <label for="chp59"id="subtitulo"> $ 4500 - $ 5000 </label>
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
          <div id="carga" style="text-align:center;">
                       
          </div>
          <div class="row" id="tours">
            @if (count($todoTours) == 0)<br>
               <div class="spe-title col-md-12">
          <h2>Lo sentimos</h2>
          <h2> Nous travaillons pour couvrir vos forfaits<h2>
          <div class="title-line">
            <div class="tl-1"></div>
            <div class="tl-2"></div>
            <div class="tl-3"></div>
          </div>
          <p>
            <a href="/es" type="button" class="btn btn-link">Rechercher à nouveau</a>
          </p>
        </div>
            @else
                  @foreach($todoTours as $item)
                          <div class="hot-page2-alp-r-list">

                            <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                              <a href="{{url('es/tour',['slug' => $item->slug])}}">
                                <div class="hotel-list-score">4.5</div>
                                <div class="hot-page2-hli-1">  
                                     <img src="/{{$item->img}}" alt=""> 
                                </div>
                              </a>
                              <div class="hom-hot-av-tic" style="font-family: Lovelo Black">
                                    @if($item->tipo_tour=='serie')
                                      SERIE
                                    @else
                                     {!!$item->categoriesName !!} 
                                    @endif
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="trav-list-bod">
                                <a href="{{url('fr/tour',['slug' => $item->slug])}}"><h3  id="tituloTousPrincipal">{{ $item->name }}</h3></a>
                              <p style="text-align: justify;" id="subtituloTousPrincipal">{!! str_limit($item->description_short, 150) !!}</p>
                              </div>
                              
                            </div>
                            <div class="col-md-3">
                              <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
                                <div class="hot-page2-alp-r-hot-page-rat">25% de réduction</div> <br><span class="hot-list-p3-4"><strong>À partir de</strong></span>
                                <!-- <span class="hot-list-p3-1" style="text-decoration:line-through;">$ {{(int)$item->price+200}}</span>-->
                                 <span class="hot-list-p3-2">$ {{($item->price)}}</span> <span class="hot-list-p3-4">
                                  <a href="{{route('reservation','fr')}}/{{$item->id}}" class="hot-page2-alp-quot-btn" id="tituloTous">RESERVER</a>
                                </span> </div>
                            </div>
                            <div>
                              <div class="trav-ami">
                                <h4 id="tituloTous">Détail et comprend</h4>
                                <ul>
                                  <li><img src="/assets/public/images/icon/a14.png" alt=""> <span>Durée:{{ $item->dias }} Días / {{ (int)$item->dias-1}} Les nuits</span></li>
                                  <li><img src="/assets/public/images/icon/a15.png" alt=""> <span>Hôtel</span></li>
                                  <li><img src="/assets/public/images/icon/a16.png" alt=""> <span>Transfert</span></li>
                                  <li><img src="/assets/public/images/icon/a17.png" alt=""> <span>Bagages</span></li>
                                  <li><img src="/assets/public/images/icon/a18.png" alt=""> <span>Guide touristique</span></li>
                                  <li><img src="/assets/public/images/icon/a5.png" alt=""> <span>Menu</span></li>
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

         $('#carga').append('<img style="width: 50px;margin-top:100px;" src="{!! URL::asset("assets/public/images/carga/carga.gif") !!}" alt="loading" /><br><h4>Chargement...</h4>');
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
                                                         "<a href='../es/tour/"+element.slug+"'>"+
                                                             " <div class='hotel-list-score'>4.5</div>"+
                                                               "<div class='hot-page2-hli-1'> <img src='/"+element.img+"' alt=''> </div>"+
                                                         "</a>"+
                                                         "<div class='hom-hot-av-tic'>"+element.categoriaName+"</div>"+
                                                     "</div>"+
                                                     "<div class='col-md-6'>"+
                                                    "<div class='trav-list-bod'>"+
                                                   " <a href='../es/tour/"+element.slug+"'><h3>"+element.name+"</h3></a>"+
                                                    "<p>"+element.description_short.substring(0,150)+"</p>"+
                                                   " </div>"+
                                                  "</div>"+
                                                  "<div class='col-md-3'>"+
                                                   " <div class='hot-page2-alp-ri-p3 tour-alp-ri-p3'>"+
                                                     " <div class='hot-page2-alp-r-hot-page-rat'>25% de remise</div> "+
                                                      "<br><span class='hot-list-p3-4'><strong>Desde</strong></span> "+
                                                       
                                                      "<span class='hot-list-p3-2'>$ "+element.price+" </span><span class='hot-list-p3-4'>"+
                                                       " <a href='{{route('reservation','es')}}/"+element.id+"' class='hot-page2-alp-quot-btn'>RESERVER</a>"+
                                                     " </span> </div>"+
                                                "  </div>"+
                                                 " <div>"+
                                                    "<div class='trav-ami'>"+
                                                     " <h4>Detalle e Incluye</h4>"+
                                                    "  <ul>"+
                                                        "<li><img src='/assets/public/images/icon/a14.png' alt=''> <span>"+element.dias+" Días / "+(parseInt(element.dias)-1)+" Noches</span></li>"+
                                                      "  <li><img src='/assets/public/images/icon/a15.png' alt=''> <span>Hôtel</span></li>"+
                                                       " <li><img src='/assets/public/images/icon/a16.png' alt=''> <span>Transfert</span></li>"+
                                                        "<li><img src='/assets/public/images/icon/a17.png' alt=''> <span>Bagages</span></li>"+
                                                       " <li><img src='/assets/public/images/icon/a18.png' alt=''> <span>Guide touristique</span></li>"+
                                                       " <li><img src='/assets/public/images/icon/a5.png' alt=''> <span>Menu</span></li>"+
                                                      "</ul>"+
                                                    "</div>"+
                                                 " </div>"+
                                                "</div>";
                        });
                        $("#tours").append(htmlTours);
                        $('#carga').html('');
                  }
              });
      
    }
    var catagoria = [];
   
     function tourOpcionCategoria(id,element)
    {
         $('#carga').append('<img style="width: 50px;margin-top:100px;" src="{!! URL::asset("assets/public/images/carga/carga.gif") !!}" alt="loading" /><br><h4>Chargement...</h4>');

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
                                                         "<a href='../es/tour/"+element.slug+"'>"+
                                                             " <div class='hotel-list-score'>4.5</div>"+
                                                               "<div class='hot-page2-hli-1'> <img src='/"+element.img+"' alt=''> </div>"+
                                                         "</a>"+
                                                         "<div class='hom-hot-av-tic'>"+element.categoriaName+"</div>"+
                                                     "</div>"+
                                                     "<div class='col-md-6'>"+
                                                    "<div class='trav-list-bod'>"+
                                                   " <a href='../es/tour/"+element.slug+"'><h3>"+element.name+"</h3></a>"+
                                                    "<p>"+element.description_short.substring(0,150)+"</p>"+
                                                   " </div>"+
                                                  "</div>"+
                                                  "<div class='col-md-3'>"+
                                                   " <div class='hot-page2-alp-ri-p3 tour-alp-ri-p3'>"+
                                                     " <div class='hot-page2-alp-r-hot-page-rat'>25% de réduction</div> "+"<br><span class='hot-list-p3-4'><strong>À partir de</strong></span> "+
                                                      "<span class='hot-list-p3-2'>$ "+element.price+" </span><span class='hot-list-p3-4'>"+
                                                       " <a href='{{route('reservation','es')}}/"+element.id+"' class='hot-page2-alp-quot-btn'>RESERVER</a>"+
                                                     " </span> </div>"+
                                                "  </div>"+
                                                 " <div>"+
                                                    "<div class='trav-ami'>"+
                                                     " <h4>Detalle e Incluye</h4>"+
                                                    "  <ul>"+
                                                        "<li><img src='/assets/public/images/icon/a14.png' alt=''> <span>"+element.dias+" Días / "+(parseInt(element.dias)-1)+" Noches</span></li>"+
                                                      "  <li><img src='/assets/public/images/icon/a15.png' alt=''> <span>Hotel</span></li>"+
                                                       " <li><img src='/assets/public/images/icon/a16.png' alt=''> <span>Transfert</span></li>"+
                                                        "<li><img src='/assets/public/images/icon/a17.png' alt=''> <span>Bagages</span></li>"+
                                                       " <li><img src='/assets/public/images/icon/a18.png' alt=''> <span>Guide touristique</span></li>"+
                                                       " <li><img src='/assets/public/images/icon/a5.png' alt=''> <span>Menu</span></li>"+
                                                      "</ul>"+
                                                    "</div>"+
                                                 " </div>"+
                                                "</div>";
                        });

                        $("#tours").append(htmlTours);
                         $('#carga').html('');
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