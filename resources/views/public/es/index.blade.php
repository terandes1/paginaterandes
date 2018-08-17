@extends('public.es.layouts.master')

@section('content')
<!--HEADER SECTION-->
<style type="text/css">

div.contenedor_video {
  margin: 0px;
    position: relative;
    width: 100%;
    height: 0;
    z-index: 1;
    overflow: hidden;
    padding-bottom: 37%;
}
.search-top{
background: #679E02 ;margin-top: -101px;z-index: 0;position: relative;
}


@media screen and (min-width: 1602px) {
  div.contenedor_video {
   background: white;
    overflow: hidden;
    text-align: center;
    margin-top: 35px;  
  }
   #texto{
    width: 100%;height: auto;font-family: 'Oswald', sans-serif;    color: white;text-transform: uppercase;text-align: center;    font-size: 50px; margin-top: -25%;z-index: 1; position: absolute;text-shadow: 2px 2px 4px #000;
 }

}
@media screen and (max-width: 1300px) , screen and (max-height: 1601px) {
  div.contenedor_video {
   background: white;
    overflow: hidden;
    text-align: center;
    margin-top: 0px;  
  }
   #texto{
    width: 100%;height: auto;font-family: 'Oswald', sans-serif;    color: white;text-transform: uppercase;text-align: center;    font-size: 50px; margin-top: -25%;z-index: 1; position: absolute;text-shadow: 2px 2px 4px #000;
 }
}

@media screen and (max-width: 767px) {
  div.contenedor_video {
    margin: 0px;
    position: relative;
    width: 100%;
    height: 0;
    z-index: 1;
    overflow: hidden;
    padding-bottom: 37%;
  }

}

@media (max-width: 768px) {
    #texto {
         
        font-size: 20px;
        margin-top: -105px;
    }
    .search-top{
        margin-top: 10px;
    }
  div.contenedor_video {
    background: white;
    overflow: hidden;
    text-align: center;
    margin-top: 0px;  
  }
}



</style>
<?php 
 function DostourDeLujos($toursLujos)
{
    $htmltemp='';
    $i=0;
     foreach($toursLujos as $item)
      {
         $i=$i+1;
         if($i<3)
             {
                $htmltemp.='<div class="col-md-6">'.
                        '<a href="tour/es/'.$item->slug.'">'.
                            '<div class="tour-mig-like-com">'.
                                '<div class="tour-mig-lc-img">'.
                                      '<img src="'.$item->img.'" alt="" style="height:377px;">'.
                                '</div>'.
                                '<div class="tour-mig-lc-con">'.
                                    '<h6 style="text-align:center;">'.$item->name.' </h6> <br><br>'.
                                    '<p><span>12 Packages</span> A partir de $ '.$item->price.'</p>'.
                                '</div>'.
                            '</div>'.
                       '</a>'.
                    '</div>';
             }else {

                 $htmltemp.='<div class="col-md-3">'.
                                '<a href="tour/es/'.$item->slug.'">'.
                                    '<div class="tour-mig-like-com">'.
                                        '<div class="tour-mig-lc-img">'.
                                              '<img src="'.$item->img.'" alt="" style="height:200px;">'.
                                        '</div>'.
                                        '<div class="tour-mig-lc-con">'.
                                             '<h6 style="text-align:center;">'.$item->name.' </h6><br><br>'.
                                            '<p><span></span>A partir de $ '.$item->price.'</p>'.
                                        '</div>'.
                                    '</div>'.
                               '</a>'.
                            '</div>';
             }
        
      }
            
    return $htmltemp;
}
 

?>
<section>
    <div class="tourz-search">
       
        <div class="contenedor_video">
            <video style="width: 1348px; margin-top: -22px;" poster="https://www.kuodatravel.com/wp-content/uploads/2018/04/poster-video-home.jpg" playsinline="" autoplay="" loop="" preload="auto" muted=""> 
             <source src="https://www.terandes.com/video/bannerterandes4.mp4" type="video/mp4"></video>
            <!-- <source src="https://www.terandes.com/video/bannerterandes1.mp4" type="video/webm"><source src="somevideo.mp4" type="video/webm">-->
             <source src="https://www.terandes.com/video/bannerterandes1.ogg" type="video/ogg">
        </div>
         <dir id="texto" style="">
             AVENTURE 
            
             <div class="descrip_video" style="margin-bottom: 5%;font-style: italic;    text-align: center;color: white;text-transform: capitalize;    font-family: 'Oswald', sans-serif;50px;font-size: 20px;">Para los amantes del trekking en lugares aún auténticos y salvajes</div>
       </dir>
       
    </div>
   
</section>
<!--END HEADER SECTION-->
<section>
    <div class="rows pad-bot-redu tb-space">
        <!--<div class="container" >
                    <div class="row" style=" margin-top: -80px;">
                         <div class="col-sm-3">
                         </div>
                         <div class="col-sm-9">
                            <form class="tourz-search-form">
                                <div class="input-field">
                                    <label for="select-city">Ciudad</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" id="select-search" class="autocomplete">
                                    <label for="select-search" class="search-hotel-type">Buscar tours y viajes, visitas turísticas, hoteles y más</label>
                                </div>
                                <div class="input-field">
                                    <input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn"> </div>
                            </form>
                            
                        </div>
                    </div>
        </div>-->
        <div class="search-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-form">
                        <form class="tourz-search-form">
                            <div class="input-field">
                                <label for="select-city" style="color: #679e02">Enter city</label>
                                <input  style="background: #679e02;border: 2px solid #679e02;" type="text" id="select-city" class="autocomplete">
                            </div>
                            <div class="input-field">
                                <input type="text" id="select-search" name="select-search" class="autocomplete">
                                <label for="select-search" class="search-hotel-type">Buscar tour por ciudad</label>
                            </div>
                            <div class="input-field" style="text-align: center;">
                                <input type="button" id="buscar" value="Buscar" class="waves-effect waves-light tourz-sear-btn"> </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br><br>
        <div class="container">
            
            <!-- TITLE & DESCRIPTION -->
            <div class="spe-title" style="z-index: -1000;">
                <h2>Paquetes De Viaje <span style="color:#36691D">Principales </span></h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p>El sitio web de reservas y viajes líder mundial en reservas, más de 30,000 paquetes turisticos en todo el mundo</p>
            </div>
            <div>

                @foreach($toursPrincipal as $item)
                <div id="tort" class="col-md-4 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s">
                    <!-- OFFER BRAND -->
                    <div class="band"> <img src="/assets/public/images/band.png" alt="" /> </div>
                    <!-- IMAGE -->
                    <a href="{{url('tour',['lang' => 'es','slug' => $item->slug])}}">
                    <div class="v_place_img"> <img src="/{{$item->img}}" alt="Tour Booking" title="Tour Booking" /> 
                        <div class="hom-hot-av-tic" style="background:#99c104;;border: 2px solid #9ebb2f;    text-transform: uppercase; font-family: Eras ITC, Eras Light ITC, sans-serif;">
                            {!! $item->categoriesName!!}
                        </div>
                    </div></a>

                    <!-- TOUR TITLE & ICONS -->
                    <div class="b_pack rows">
                        <!-- TOUR TITLE -->
                        <div class="col-md-12 col-sm-12" style="text-align: center;">
                            <h4>
                                <a style="font-size: 12px; href="{{'paquetes'}}">{{ $item->name }}
                                </a>
                                <a style=" font-size: 1.05em;color: #f15a23;text-align: center;font-family:Roboto;font-weight:400;font-style:normaltext-align: right;" href="#!">
                                        <div class="col-md-3 col-sm-4 pack_icon">
                             
                                               
                                        </div>
                                        <div class="col-md-6 col-sm-6  pack_icon">
                             
                                                 <h5 style="color: #f4364f;">{!! $item->dias!!} DIAS / {{ ((int)($item->dias)-1)}} NOCHES </h5>
                                             
                                        </div>


                                </a>

                            </h4>   
                        </div>
                        
                        <div class="col-md-12 col-sm-12" style="text-align: justify;margin-top: -15px;">
                            <p>
                              {!! str_limit($item->description_short, 150) !!}

                            </p>
                            
                        </div>
                        <!-- TOUR ICONS -->
                        
                        <div class="col-md-12 col-sm-12 ">
                            <div class="col-md-12" style="margin: 15px;">
                                <a class="link-btn" style="text-align:center;color: #f15a23;" href="{{url('tour',['lang' => 'es','slug' => $item->slug])}}">APRENDE MÁS SOBRE ESTE VIAJE
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                   
            </div>
        </div>
    </div>
</section>
<!--====== HOME HOTELS ==========-->
<section>
    <div class="offer">

        <div class="container" style="">
 
            <div class="row">

                <div class="popu-places-home" style="margin: 5px;">
                    <span class="ol-4" style="font-size: 3em; margin-top:  -25px;
                    text-align: center;
                    color: white;
                    font-family: Georgia, serif;
                    font-size: 40px;
                    letter-spacing: 0;
                    text-align: left;
                    text-shadow: -1px -1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333;">
                    Tours de lujo en Perú
                   </span> 
                    
                   
                </div>
                
            </div>
        </div>
    </div>
</section>
<section>
    <div class="rows tb-space pad-top-o pad-bot-redu">
        <div class="container">
            <!-- TITLE & DESCRIPTION -->
            <div class="spe-title">
               </br>
                <p>El sitio web de reservas de tour líder en el latinomarica, más de 30,000 personas  disfrute de sus vacaciones con una experiencia única</p>
            </div>
            <!-- CITY -->
            <?=DostourDeLujos($toursLujos);?>

        </div>
    </div>
</section>

<!--====== SECTION: FREE CONSULTANT ==========-->
<section>
    <div class="offer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="offer-l"> <span class="ol-1"></span> <span class="ol-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> <span class="ol-4">Standardized Budget Rooms</span>                            <span class="ol-3"></span> <span class="ol-5">$99/-</span>
                        <ul>
                            <li class="wow fadeInUp" data-wow-duration="0.5s">
                                <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="/assets/public/images/icon/dis1.png" alt="">
              </a><span>Free WiFi</span>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="0.7s">
                                <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="/assets/public/images/icon/dis2.png" alt=""> </a><span>Breakfast</span>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="0.9s">
                                <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="/assets/public/images/icon/dis3.png" alt=""> </a><span>Pool</span>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="1.1s">
                                <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="/assets/public/images/icon/dis4.png" alt=""> </a><span>Television</span>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="1.3s">
                                <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="/assets/public/images/icon/dis5.png" alt=""> </a><span>GYM</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="offer-r">
                        <div class="or-1"> <span class="or-11">go</span> <span class="or-12">Stays</span> </div>
                        <div class="or-2"> <span class="or-21">Get</span> <span class="or-22">70%</span> <span class="or-23">Off</span> <span class="or-24">use code: RG5481WERQ</span> <span class="or-25"></span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== EVENTS ==========-->
<section>
    <div class="rows tb-space">
        <div class="container events events-1" id="inner-page-title">
            <!-- TITLE & DESCRIPTION -->
            <div class="spe-title">
                <h2>Top <span style="color:#36691D">Events</span> in this month</h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
            </div>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Event Name.." title="Type in a name">
            <table id="myTable">
                <tbody>
                    <tr>
                        <th>#</th>
                        <th>Event Name</th>
                        <th class="e_h1">Date</th>
                        <th class="e_h1">Time</th>
                        <th class="e_h1">Location</th>
                        <th>Book</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><img src="/imagenesprueba/peques/01.png" alt="" /><a href="hotels-list.html" class="events-title">Taj Mahal,Agra, India</a> </td>
                        <td class="e_h1">16.12.2016</td>
                        <td class="e_h1">10.00 PM</td>
                        <td class="e_h1">Australia</td>
                        <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<section>
    <div class="offer">

        <div class="container" style="">
 
            <div class="row">

                <div class="popu-places-home" style="margin: 10px;margin-left: 51px;">
                    <span class="ol-4" style="text-align: center;font-family: 'Oswald', sans-serif;">A medida</span> 
                    <div class="db-3" style="margin: 14px;">
                        <h4>En grupo</h4>
                        <ul>
                            <li>
                                <img src="/assets/public/icons/grupo1icono.png" alt="" />
                                <a href="#!">
                                    <h5>50% de descuento</h5>
                                    <p>Un viaje que satisfaga a todos</p>
                                </a>
                            </li>
                           
                        </ul>
                    </div>
                    <div class="db-3" style="margin: 14px;">
                        <h4>En Familia</h4>
                        <ul>
                            <li>
                                <img src="/assets/public/icons/familia1icono.png" alt="" /> 
                                <a href="#!">
                                    <h5>50% de descuento</h5>
                                    <p>Aproveche un viaje adecuado tanto para adultos como para jóvenes.</p>
                                </a>
                            </li>
                           
                        </ul>
                    </div>
                    <div class="db-3" style="margin: 14px;">
                        <h4>Pareja</h4>
                        <ul>
                            <li>
                                 <img src="/assets/public/icons/couple1icono.png" alt="" />
                                <a href="#!">
                                    <h5>50% de descuento</h5>
                                    <p>Comparte momentos inolvidables con tu pareja.</p>
                                </a>
                            </li>
                           
                        </ul>
                    </div>
                    <div class="db-3" style="margin: 14px;">
                        <h4>Amigos</h4>
                        <ul>
                            <li>
                                <img src="{{URL::asset('assets/public/icons/amigos1icono.png')}}" alt="" /> 
                                <a href="#!"> <img src="{{URL::asset('assets/public/images/icon/dbr1.jpg')}}" alt="" />
                                    <h5>50% de descuento</h5>
                                    <p>Comparte momentos inolvidables entre amigos.</p>
                                </a>
                            </li>
                           
                        </ul>
                    </div>
                  
                   
                </div>
                
            </div>
        </div>
    </div>
</section>
<section>
    <div class="rows pla pad-bot-redu tb-space">
        <div class="pla1 p-home container">
            <!-- TITLE & DESCRIPTION -->

            <div class="spe-title spe-title-1">
                <h2>TOP <span style="color:#36691D;">TESTIMONIOS</span> DE ESTE MES</h2>
                <div class="title-line">
                    
                </div>
                <p> Comparte experiencias de viaje con nosotros. </p>

            </div>

                <div class="row">
                <div class="col-sm-12">
                        
                  <div id="myCarousel" class="row carousel slide" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                      <div class="item active">
                        
                        <ul class="thumbnails">
                          <li class="col-sm-3" >      
                            <div class="thumbnail">
                              <a href="#"><img src="https://www.terandes.com/tours/cjtFQYqw1SgaQeF.png" alt=""></a>
                            </div>
                            <div class="caption-box" style="text-align: center;">

                              <h3>Praesent commodo</h3>
                              <h4>Muy buena organización y puntualidad...</h4>
                              <a class="link-btn" href="{{('testimonials')}}">Read More</a>
                               <div class="tour_head">
                                 <h2>
                                    <span class="tour_star">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"> 
                                        </i>
                                     </span>
                                     <span class="tour_rat">4.5</span>
                                 </h2> 
                             </div>
                            </div>
                          </li>

                          <li class="col-sm-3">      
                            <div class="thumbnail">
                              <a href="#"><img src="https://www.terandes.com/tours/cjtFQYqw1SgaQeF.png" alt=""></a>
                            </div>
                            <div class="caption-box" style="text-align: center;">
                              <h3>Praesent commodo</h3>
                              <h4>Muy buena organización y puntualidad...</h4>
                              <a class="link-btn" href="{{('testimonials')}}">Read More</a>
                               <div class="tour_head">
                                 <h2>
                                    <span class="tour_star">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"> 
                                        </i>
                                     </span>
                                     <span class="tour_rat">4.5</span>
                                 </h2> 
                             </div>
                            </div>
                          </li>

                          <li class="col-sm-3">      
                            <div class="thumbnail">
                              <a href="#"><img src="https://www.terandes.com/tours/cjtFQYqw1SgaQeF.png" alt=""></a>
                            </div>
                            <div class="caption-box" style="text-align: center;">
                              <h3>Praesent commodo</h3>
                              <h4>Muy buena organización y puntualidad...</h4>
                              <a class="link-btn" href="{{('testimonials')}}">Read More</a>
                               <div class="tour_head">
                                 <h2>
                                    <span class="tour_star">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"> 
                                        </i>
                                     </span>
                                     <span class="tour_rat">4.5</span>
                                 </h2> 
                             </div>
                            </div>
                          </li>

                          <li class="col-sm-3">      
                            <div class="thumbnail">
                              <a href="#"><img src="https://www.terandes.com/tours/cjtFQYqw1SgaQeF.png" alt=""></a>
                            </div>
                            <div class="caption-box" style="text-align: center;">
                              <h3>Praesent commodo</h3>
                              <h4>Muy buena organización y puntualidad...</h4>
                              <a class="link-btn" href="#">Read More</a>
                               <div class="tour_head">
                                 <h2>
                                    <span class="tour_star">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"> 
                                        </i>
                                     </span>
                                     <span class="tour_rat">4.5</span>
                                 </h2> 
                             </div>
                            </div>
                          </li>
                        </ul>
                      </div><!-- /Slide1 --> 


                      <div class="item">
                        <ul class="thumbnails">
                          <li class="col-sm-3">      
                            <div class="thumbnail">
                              <a href="#"><img src="https://www.terandes.com/tours/cjtFQYqw1SgaQeF.png" alt=""></a>
                            </div>
                            <div class="caption-box" style="text-align: center;">
                              <h3>Praesent commodo</h3>
                              <h4>Muy buena organización y puntualidad...</h4>
                              <a class="link-btn" href="{{('testimonials')}}">Read More</a>
                               <div class="tour_head">
                                 <h2>
                                    <span class="tour_star">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"> 
                                        </i>
                                     </span>
                                     <span class="tour_rat">4.5</span>
                                 </h2> 
                             </div>
                            </div>
                          </li>

                          <li class="col-sm-3">      
                            <div class="thumbnail">
                              <a href="#"><img src="https://www.terandes.com/tours/cjtFQYqw1SgaQeF.png" alt=""></a>
                            </div>
                            <div class="caption-box" style="text-align: center;">
                              <h3>Praesent commodo</h3>
                              <h4>Muy buena organización y puntualidad...</h4>
                              <a class="link-btn" href="{{('testimonials')}}">Read More</a>
                               <div class="tour_head">
                                 <h2>
                                    <span class="tour_star">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"> 
                                        </i>
                                     </span>
                                     <span class="tour_rat">4.5</span>
                                 </h2> 
                             </div>
                            </div>
                          </li>

                          <li class="col-sm-3">      
                            <div class="thumbnail">
                              <a href="#"><img src="https://www.terandes.com/tours/cjtFQYqw1SgaQeF.png" alt=""></a>
                            </div>
                            <div class="caption-box" style="text-align: center;">
                              <h3>Praesent commodo</h3>
                              <h4>Muy buena organización y puntualidad...</h4>
                              <a class="link-btn" href="{{('testimonials')}}">Read More</a>
                               <div class="tour_head">
                                 <h2>
                                    <span class="tour_star">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"> 
                                        </i>
                                     </span>
                                     <span class="tour_rat">4.5</span>
                                 </h2> 
                             </div>
                            </div>
                          </li>

                          <li class="col-sm-3">      
                            <div class="thumbnail">
                              <a href="#"><img src="https://www.terandes.com/tours/cjtFQYqw1SgaQeF.png" alt=""></a>
                            </div>
                            <div class="caption-box" style="text-align: center;">
                              <h3>Praesent commodo</h3>
                              <h4>Muy buena organización y puntualidad...</h4>
                              <a class="link-btn" href="{{('testimonials')}}">Read More</a>
                               <div class="tour_head">
                                 <h2>
                                    <span class="tour_star">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"> 
                                        </i>
                                     </span>
                                     <span class="tour_rat">4.5</span>
                                 </h2> 
                             </div>
                            </div>
                          </li>
                        </ul>
                      </div><!-- /Slide2 --> 
                      <div class="item" style="text-align: center;">
                        <ul class="thumbnails">
                          <li class="col-sm-3">      
                            <div class="thumbnail">
                              <a href="#"><img src="https://www.terandes.com/tours/cjtFQYqw1SgaQeF.png" alt=""></a>
                            </div>
                            <div class="caption-box" style="text-align: center;">
                              <h3>Praesent commodo</h3>
                              <h4>Muy buena organización y puntualidad...</h4>
                              <a class="link-btn" href="{{('testimonials')}}">Read More</a>
                               <div class="tour_head">
                                 <h2>
                                    <span class="tour_star">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"> 
                                        </i>
                                     </span>
                                     <span class="tour_rat">4.5</span>
                                 </h2> 
                             </div>
                            </div>
                          </li>

                          <li class="col-sm-3">      
                            <div class="thumbnail">
                              <a href="#"><img src="https://www.terandes.com/tours/cjtFQYqw1SgaQeF.png" alt=""></a>
                            </div>
                            <div class="caption-box" style="text-align: center;">
                              <h3>Praesent commodo</h3>
                              <h4>Muy buena organización y puntualidad...</h4>
                              <a class="link-btn" href="{{('testimonials')}}">Read More</a>
                               <div class="tour_head">
                                 <h2>
                                    <span class="tour_star">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"> 
                                        </i>
                                     </span>
                                     <span class="tour_rat">4.5</span>
                                 </h2> 
                             </div>
                            </div>
                          </li>

                          <li class="col-sm-3">      
                            <div class="thumbnail">
                              <a href="#"><img src="https://www.terandes.com/tours/cjtFQYqw1SgaQeF.png" alt=""></a>
                            </div>
                            <div class="caption-box" style="text-align: center;">
                              <h3>Praesent commodo</h3>
                              <h4>Muy buena organización y puntualidad...</h4>
                              <a class="link-btn" href="{{('testimonials')}}">Read More</a>
                               <div class="tour_head">
                                 <h2>
                                    <span class="tour_star">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"> 
                                        </i>
                                     </span>
                                     <span class="tour_rat">4.5</span>
                                 </h2> 
                             </div>
                            </div>
                          </li>

                          <li class="col-sm-3">      
                            <div class="thumbnail" style="text-align: center;">
                              <a href="#"><img src="https://www.terandes.com/tours/cjtFQYqw1SgaQeF.png" alt=""></a>
                            </div>
                            <div class="caption-box">
                              <h3>Praesent commodo</h3>
                              <h4>Muy buena organización y puntualidad...</h4>
                              <a class="link-btn" href="{{('testimonials')}}">Read More</a>
                               <div class="tour_head">
                                 <h2>
                                    <span class="tour_star">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"> 
                                        </i>
                                     </span>
                                     <span class="tour_rat">4.5</span>
                                 </h2> 
                             </div>
                            </div>
                          </li>
                        </ul>
                      </div><!-- /Slide3 --> 
                    </div><!-- /Wrapper for slides .carousel-inner -->
                    <!-- Control box -->
                    <div class="control-box">                            
                      <a data-slide="prev" href="#myCarousel" class="carousel-control left">‹</a>
                      <a data-slide="next" href="#myCarousel" class="carousel-control right">›</a>
                    </div><!-- /.control-box -->   

                  </div><!-- /#myCarousel -->


                </div><!-- /.col-sm-12 -->          
                </div><!-- /.row --> 
           
        </div>
    </div>
</section>
<!--====== POPULAR TOUR PLACES ==========-->
<section>
    <div class="rows pla pad-bot-redu tb-space">
        <div class="pla1 p-home container">
            <!-- TITLE & DESCRIPTION -->
            <div class="spe-title spe-title-1">
                <h2>Usted <span style="color:#36691D;">define su</span> estilo de viaje</h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p>Desde tours culinarios peruanos para la familia,grupos,parejas y amigos, nos especializamos en la elaboración de viajes privados únicos diseñados especialmente para usted. ¿Desea planear su aventura sudamericana? 
                    Contáctanos y comienza a rodar.</p>
            </div>
            <div class="popu-places-home">
                <!-- POPULAR PLACES 1 -->
                <div class="col-md-6 col-sm-6 col-xs-12 place">
                    <div class="col-md-6 col-sm-12 col-xs-12"> <img src="/imagenesprueba/peques/04.png" alt="" /> </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <h3><span>Honeymoon Package</span> 7 Days / 6 Nights</h3>
                        <p>lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p> <a href="{{'paquetes'}}" class="link-btn">more info</a> </div>
                </div>
                <!-- POPULAR PLACES 2 -->
                <div class="col-md-6 col-sm-6 col-xs-12 place">
                    <div class="col-md-6 col-sm-12 col-xs-12"> <img src="/imagenesprueba/peques/03.png" alt="" /> </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <h3><span>Family package</span> 14 Days / 13 Nights</h3>
                        <p>lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p> <a href="{{'paquetes'}}" class="link-btn">more info</a> </div>
                </div>
            </div>
            <div class="popu-places-home">
                <!-- POPULAR PLACES 3 -->
                <div class="col-md-6 col-sm-6 col-xs-12 place">
                    <div class="col-md-6 col-sm-12 col-xs-12"> <img src="/imagenesprueba/peques/02.png" alt="" /> </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <h3><span>Weekend Package </span> 3 Days / 2 Nights</h3>
                        <p>lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p> <a href="{{'paquetes'}}" class="link-btn">more info</a> </div>
                </div>
                <!-- POPULAR PLACES 4 -->
                <div class="col-md-6 col-sm-6 col-xs-12 place">
                    <div class="col-md-6 col-sm-12 col-xs-12"> <img src="/imagenesprueba/peques/01.png" alt="" /> </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <h3><span>Group Package</span> 10 Days / 9 Nights</h3>
                        <p>lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p> <a href="{{'paquetes'}}" class="link-btn">more info</a> </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== REQUEST A QUOTE ==========-->


@endsection
@section('script')
     
    <script>
       

        $("#buscar").click(function(){

              $texto=$("#select-search").val();
              window.location.href = "/es/tours/"+$texto;
        });
     
    </script>

@endsection
