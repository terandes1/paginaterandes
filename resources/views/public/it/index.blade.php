@extends('public.it.layouts.master')

@section('content')
{!!Html::style('assets/public/css/stylePersonalizado.css')!!}
<?php 
 function DostourDeLujos($toursLujos)
{
    $htmltemp='';
    $i=0;
     foreach($toursLujos as $item)
      {
         
         $htmltemp.='<div class="db-1">'.

                    '<a href="/it/il-nostro-viaggio/dettaglio/'.$item->slug.'">'.

                    '<div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="0.9s">'.

                        '<div style="text-align: center;width: 100%;position: absolute;z-index: 2000;padding:6px; ">'.
                            '<i style="padding: 9px;border-radius: 25px; box-shadow: 5px 5px 5px #000; width: 32px; height: 32px; background:rgba(11, 168, 51, 0.5); color: #1a2e3c;  font-size: 15px; " class="fa fa-child" aria-hidden="true">'.
                             '</i>&nbsp '.
                             '<i style="padding: 9px;border-radius: 25px; box-shadow: 5px 5px 5px #000; width: 32px; height: 32px; background:rgba(11, 168, 51, 0.5); color: #1a2e3c;  font-size: 15px; " class="fa fa-car" aria-hidden="true">'.
                             '</i> &nbsp'.
                             '<i style="padding: 9px;border-radius: 25px; box-shadow: 5px 5px 5px #000; width: 32px; height: 32px; background:rgba(11, 168, 51, 0.5); color: #1a2e3c;  font-size: 15px; " class="fa fa-plane" aria-hidden="true">'.
                             '</i> &nbsp'.
                             '<i style="padding: 9px;border-radius: 25px; box-shadow: 5px 5px 5px #000; width: 32px; height: 32px; background:rgba(11, 168, 51, 0.5); color: #1a2e3c;  font-size: 15px; " class="fa fa-ship" aria-hidden="true">'.
                             '</i>&nbsp'.
                            
                        '</div>'.


                    '<div class="v_place_img" style="width:108%;height: 90%;"><img style=" height: 320px;" src="'.$item->img.'" />'.
                     '</div>'.
                    '<div class="tour-mig-lc-con" style="text-align: center;">'.
                                      
                                       ' <span style="font-size: 25px;text-align: center; color: #fff; letter-spacing: -2px;text-shadow: 0 4px 5px rgba(0, 0, 0, 0.6); line-height: 1.1em;font-family: Lovelo Black;">'.$item->name.'</span>'.
                                     '<div>'.
                                        '<span class="tour_star">'.
                                            '<i class="fa fa-star" aria-hidden="true"></i>'.
                                            '<i class="fa fa-star" aria-hidden="true"></i>'.
                                            '<i class="fa fa-star" aria-hidden="true"></i>'.
                                            '<i class="fa fa-star" aria-hidden="true"></i>'.
                                             '<i class="fa fa-star" aria-hidden="true"></i>'.
                                       '</span> '.
                                    '</div>'.
                                       
                    '</div>'.
                '</div>'.
               '</a>'.
            '</div>';

        
      }
            
    return $htmltemp;
}
 

?>

<section>
    
       
        @include('public.video.video')
         <dir id="texto" style="font-family: Lovelo Black;">
             AVENTURA
            
             <div class="descrip_video" style="margin-bottom: 5%;font-style: italic;    text-align: center;color: white;font-family: 'Linotype Textra', sans-serif;50px;font-size: 20px;">Per gli amanti del trekking in luoghi autentici e selvaggi</div>
       </dir>
       
   
</section>
<!--END HEADER SECTION-->
<section>
    <div class="rows pad-bot-redu tb-space">
        
        <div class="container" style="margin-top: -60px;">
            
            <!-- TITLE & DESCRIPTION -->
            <div class="spe-title" style="z-index: -1000;">
                <h2 style="color:#121214; font-size: 1.8em;font-family: Lovelo Black;font-weight: 100;letter-spacing: 3px;line-height: 1.4em; text-transform: uppercase">
                   Tours sudamericani di lusso
                </h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p style="font-family: 'NewsGoth CN BT', sans-serif;font-weight: 300;color:#303030;">
                    Tierras de los Andes S.A.C. (Società privata chiusa) che ha aperto le sue porte nell'anno 2000. Tour operator peruviano specializzato in viaggi d'avventura, ha come obiettivo principale la creazione di viaggi personalizzati.
                </p>
                     
                           
            </div>
            <div class="row" style="margin-top:-12px;">
                     <div class="input-field col s4">

                     </div>
                      
                            <div class="input-field col s4" >
                                  <a style="color:white;font-size: 15px;" href="{{route('paginas',$abbr)}}/noi">
                                        <i class="waves-effect waves-light btn-large full-btn waves-input-wrapper">
                                            <span id="aprendaMas">ALTRO SULLE TERANDE!</span>
                                        </i>
                                 </a>
                            </div>
                        
            </div>
            
        </div>
    </div>
</section>

    <section>
     <div class="db" style="margin-left: 0px;">
                <div class="spe-title">
                    <h2 style="color:#121214; font-size: 1.8em;font-family: Lovelo Black;font-weight: 100;letter-spacing: 3px;line-height: 1.4em; text-transform: uppercase">Categoría</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p style="font-family: 'NewsGoth CN BT', sans-serif;font-weight: 300;color:#303030;">
                   Privato e completamente personalizzato vedere tutte le categorie.</p>
                </div>
                <div>
                    <!-- TOUR PLACE 1 -->
                    <div class="col-md-3 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s">

                        <div class="v_place_img">

                                        <div style="/*background-color: rgba(9, 74, 108, 0.65);*/text-align: center;width: 100%;position: absolute;z-index: 1000;padding:6px; ">
                                        </div>
                             <a class="course-overlay" href="{{route('paquetesCategoriaIt',$abbr)}}/scoprire">    
                                 <img  style="height: 540px;" src="{{URL::asset('assets/public/images/category/6.jpg')}}" /> 
                            </a>
                                  <div class="tour-mig-lc-con" style="text-align: center;">
                                      
                                        <span style="text-align: center; color: #fff; letter-spacing: 4px;text-shadow: 0 1px 1px rgba(0, 0, 0, 0.6); line-height: 1.1em;font-family: Lovelo Black;">
                                           Scoprire
                                        </span>
                                        <div>
                                            <span class="tour_star">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                            </span> 
                                        </div>
                                        <a  style="color: white;" class="js-video-button" data-video-id='_g2n5k2OwMM' href="">
                                            <div style="border: 1px solid #fff; line-height: 1em; background-color: rgba(0,0,0,.65);padding: 10px; height: 40px;position: relative; font-family: 'NewsGoth CN BT'">
                                                     
                                                      <span class="fa fa-film"></span>  Guarda il video
                                                   
                                            </div>
                                         </a>
                                  </div>


                        </div>
                    </div>
                    <!-- TOUR PLACE 2 -->
                   <div class="col-md-3 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s">

                        <div class="v_place_img">
                            <div style="text-align: center;width: 100%;position: absolute;z-index: 1000;padding:6px; ">            
                                               
                            </div>
                        <a class="course-overlay" href="{{route('paquetesCategoriaIt',$abbr)}}/avventura">
                             <img  style="height: 540px;" src="{{URL::asset('assets/public/images/category/10.jpg')}}" /> 
                        </a>
                              <div class="tour-mig-lc-con" style="text-align: center;">
                                  
                                    <span style="text-align: center; color: #fff; letter-spacing: 4px;text-shadow: 0 1px 1px rgba(0, 0, 0, 0.6); line-height: 1.1em;font-family: Lovelo Black;">Avventura</span>
                                    <div>
                                        <span class="tour_star">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                             <i class="fa fa-star" aria-hidden="true"></i>
                                        </span> 
                                    </div>
                                       <a  style="color: white;" class="js-video-button" data-video-id='_g2n5k2OwMM' href="">
                                            <div style="border: 1px solid #fff; line-height: 1em;background-color: rgba(0,0,0,.65); padding: 10px; height: 40px;position: relative; font-family: 'NewsGoth CN BT'">
                                                  
                                                      <span class="fa fa-film"></span>  Guarda il video
                                                    
                                            </div>
                                        </a>

                              </div>
                        </div>
                    </div>
                       <div class="col-md-3 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s">

                        <div class="v_place_img">
                            <div style=" /*background-color: rgba(9, 74, 108, 0.65);*/text-align: center;width: 100%;position: absolute;z-index: 1000;padding:6px; ">
                                            
                                               
                                        </div>
                        <a class="course-overlay" href="{{route('paquetesCategoriaIt',$abbr)}}/alta-montagna">
                             <img  style="height: 540px;" src="{{URL::asset('assets/public/images/category/8.jpg')}}" /> 
                        </a>
                              <div class="tour-mig-lc-con" style="text-align: center;">
                                  
                                    <span style="text-align: center; color: #fff; letter-spacing: 4px;text-shadow: 0 1px 1px rgba(0, 0, 0, 0.6); line-height: 1.1em;font-family: Lovelo Black;">Alta montagna</span>
                                    <div>
                                        <span class="tour_star">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                             <i class="fa fa-star" aria-hidden="true"></i>
                                        </span> 
                                    </div>
                                    
                                    <a  style="color: white;" class="js-video-button" data-video-id='_g2n5k2OwMM' href="">
                                        <div style="border: 1px solid #fff; line-height: 1em;background-color: rgba(0,0,0,.65); padding: 10px; height: 40px;position: relative; font-family: 'NewsGoth CN BT'">
                                                
                                                  <span class="fa fa-film"></span>  Guarda il video
                                                
                                        </div>
                                    </a>

                              </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s">

                        <div class="v_place_img">
                            <div style=" /*background-color: rgba(9, 74, 108, 0.65);*/text-align: center;width: 100%;position: absolute;z-index: 1000;padding:6px; ">
                                                 
                                        </div>
                          <a class="course-overlay" href="{{route('paquetesCategoriaIt',$abbr)}}/escursioni">
                             <img  style="height: 540px;" src="{{URL::asset('assets/public/images/category/9.jpg')}}" /> 
                          </a>
                              <div class="tour-mig-lc-con" style="text-align: center;">
                                  
                                    <span style="text-align: center; color: #fff; letter-spacing: 4px;text-shadow: 0 1px 1px rgba(0, 0, 0, 0.6); line-height: 1.1em;font-family: Lovelo Black;">Escursioni</span>
                                    <div>
                                        <span class="tour_star">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </span> 
                                    </div>
                                     <a  style="color: white;" class="js-video-button" data-video-id='_g2n5k2OwMM' href="">
                                        <div style="border: 1px solid #fff; line-height: 1em;background-color: rgba(0,0,0,.65); padding: 10px; height: 40px;position: relative; font-family: 'NewsGoth CN BT'">
                                               
                                                  <span class="fa fa-film"></span>  Guarda il video
                                              
                                        
                                        </div>
                                      </a>

                              </div>
                        </div>
                    </div>  
                    
                    
                    </div>
                </div>
           
        </div>
    </section>


<!--====== SECTION: FREE CONSULTANT ==========-->
<section style="margin-top: 50px;">
    <div class="spe-title" style="z-index: -1000;">
        <h2 style="color:#121214; font-size: 1.8em;font-family: Lovelo Black;font-weight: 100;letter-spacing: 3px;line-height: 1.4em; text-transform: uppercase">Offerta del mese</h2>
        <div class="title-line">
            <div class="tl-1"></div>
            <div class="tl-2"></div>
            <div class="tl-3"></div>
        </div>
        <p style="font-family: 'NewsGoth CN BT', sans-serif;font-weight: 300;color:#303030;">Lavoriamo ogni giorno per offrirti le migliori offerte sui tour.</p>
    </div>
    <div class="offer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="offer-l"> <span class="ol-1"></span> <span class="ol-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> <span class="ol-4">
                     GRANDE VIAGGIO AL SUD DEL GRUPPO PERÙ - IN
                    </span>                            <span class="ol-3"></span> <span class="ol-5">$99/-</span>
                        <ul>
                            <li class="wow fadeInUp" data-wow-duration="0.5s">
                                <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="/assets/public/images/icon/dis1.png" alt="">
                                </a><span>WiFi gratuito</span>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="0.7s">
                                <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="/assets/public/images/icon/dis2.png" alt=""> </a><span>Prima colazione</span>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="0.9s">
                                <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="/assets/public/images/icon/dis3.png" alt=""> </a><span>Piscina</span>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="1.1s">
                                <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="/assets/public/images/icon/dis4.png" alt=""> </a><span>TV</span>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="1.3s">
                                <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="/assets/public/images/icon/dis5.png" alt=""> </a><span>PALESTRA</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="offer-r">
                        <div class="or-1"> <span class="or-11">Andare</span> <span class="or-12">soggiorni</span> </div>
                        <div class="or-2"> <span class="or-21">Un sacco</span> <span class="or-22">70%</span> <span class="or-23">Off</span> <span class="or-24">Código: RG5481WERQ</span> <span class="or-25"></span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<!--====== HOME HOTELS ==========-->
<section style="margin-top: 50px;">
     <div class="spe-title" style="z-index: -1000;">
                    <h2 style="color:#121214; font-size: 1.8em;font-family: Lovelo Black;font-weight: 100;letter-spacing: 3px;line-height: 1.4em; text-transform: uppercase">Tour Lujos </h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p style="font-family: 'NewsGoth CN BT', sans-serif;font-weight: 300;color:#303030;">Il sito web di prenotazione e di viaggio leader nel mondo per prenotazioni, più di 30.000 pacchetti turistici in tutto il mondo</p>
                </div>
        <div class="db">
            <!--LEFT SECTION-->
            <?=DostourDeLujos($toursLujos);?>
           
        </div>
</section><br><br><br>
<section>
     <div class="spe-title spe-title-1">
        <h2 style="color:#121214; font-size: 1.8em;font-family: Lovelo Black;font-weight: 100;letter-spacing: 3px;line-height: 1.4em; text-transform: uppercase">Viaggi di gruppo</h2>
        <div class="title-line">
            <div class="tl-1"></div>
            <div class="tl-2"></div>
            <div class="tl-3"></div>
        </div>
    </div>

    <div class="v2-hom-search">

      <div class="container">

        <div class="row">
             <div class="col-md-4">
                            
             </div>  
             <div class="col-md-8">
                <div class="v2-ho-se-ri">
                <h5>TERANDES PORTARE IN PACCHETTI TURISTICI.</h5>
                <h1>VIAGGIO DI GRUPPO</h1>
                <h1 style="font-size: 1.3em;font-family: Lovelo Black;text-align: justify;">Come designer di viaggi personalizzati, <br>Siamo qui per rendere unico il tuo viaggio.</h1>
                        <div class="tourz-hom-ser v2-hom-ser">
                          <ul>
                            <li>
                              <a href="{{route('paquetesCategoriaIt',$abbr)}}/viaggi-di-gruppo" class="waves-effect waves-light btn-large tourz-pop-ser-btn"><img src="{!! URL::asset('assets/public/images/2.png')!!}" alt=""> Famiglia</a>
                            </li>
                            <li>
                              <a href="{{route('paquetesCategoriaIt',$abbr)}}/viaggi-di-gruppo" class="waves-effect waves-light btn-large tourz-pop-ser-btn"><img src="{!! URL::asset('assets/public/images/3.png')!!}" alt=""> Gruppi</a>
                            </li>
                            <li>
                              <a href="{{route('paquetesCategoriaIt',$abbr)}}/viaggi-di-gruppo" class="waves-effect waves-light btn-large tourz-pop-ser-btn"><img src="{!! URL::asset('assets/public/images/4.png')!!}" alt=""> Coppie</a>
                            </li>
                            <li>
                              <a href="{{route('paquetesCategoriaIt',$abbr)}}/viaggi-di-gruppo" class="waves-effect waves-light btn-large tourz-pop-ser-btn"><img src="{!! URL::asset('assets/public/images/5.png')!!}" alt=""> persone</a>
                            </li>               
                          </ul>
                        </div>
                         <div class="col-md-14">
                           
                             <div class="">
                                    <div class="tourz-hom-ser v2-hom-ser">
                                          <ul>
                                           
                                            <li>
                                              <a href="{{route('paquetesCategoriaIt',$abbr)}}/viaggi-di-gruppo" class="waves-effect waves-light btn-large tourz-pop-ser-btn text-center" style="width: 300px;height: 65px; padding: 15px;">
                                                  <h4>VISUALIZZA I TOUR </h4>   
                                               </a>
                                            </li>
                                                        
                                          </ul>
                                    </div>
                            
                             </div>  
                                       
                      </div>
                 </div>            
             </div> 
              <div class="col-md-2">
                            
             </div>
                  
        </div>
      </div>
    </div>
  </section>
<section>
    <div class="rows pla pad-bot-redu tb-space">
       

    </div>
</section>
 

<section>
    <div class="rows pla pad-bot-redu tb-space" style="margin-top: -220px;">
        <div class="pla1 p-home container" style="background: #f6f6f6;">
            <!-- TITLE & DESCRIPTION -->

            <div class="spe-title spe-title-1">
                <h2 style="color:#121214; font-size: 1.8em;font-family: Lovelo Black;font-weight: 100;letter-spacing: 3px;line-height: 1.4em; text-transform: uppercase">TESTIMONIANZE SUPERIORI DI QUESTO MESE</h2>
                
                <div class="title-line">
                     <div class="tour_head">
                                 <h2>
                                    <span class="tour_star">
                                         <?php 
                                        $k = 1; 
                                        for($s=1; $s<= 5; $s++)
                                        { 
                                            if($media >= $k){ ?>
                                             <i class="fa fa-star" aria-hidden="true"></i> 
                                           <?php } 
                                            else { ?>
                                            <i class="fa fa-star-o" aria-hidden="true"> </i>
                                             <?php } 
                                             $k++;
                                          } ?>   
                                     </span>
                                     <span class="tour_rat"  style="color: white;font-size: 30px;">{{$media}}</span>
                                 </h2> 
                             </div>
                </div>
                <p style="font-family: 'NewsGoth CN BT', sans-serif;font-weight: 300;color:#303030;"> Condividi esperienze di viaggio con noi. </p>

            </div>
             
                <div class="row">
                <div class="col-sm-12">
                        
                  <div id="myCarousel" class="row carousel slide" data-ride="carousel">
                   @if (count($testimonials) > 0)<br>
                   <?php
                      $i = 1
                       ?>
                 <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                      <div class="item active">                      
                        <ul class="thumbnails">
                          @foreach($testimonials as $item)
                          <li class="col-sm-3">      
                            <div class="thumbnail">
                             @if (empty($item->photo))
                              <a href="#"><img src="/assets/content/testimonio/default.jpg" alt=""></a>
                              @else
                              <a href="#"><img src="/assets/content/testimonio/{{$item->id}}.{{$item->photo}}" alt=""></a>
                              @endif
                            </div>
                            <div class="caption-box" style="text-align: center; min-height: 180px">
                                <div class="tour_head">
                                 <h2>
                                    <span class="tour_star">
                                        <?php $stars = (int)$item->impresion_global; 
                                        $k = 1; 
                                        for($h=1; $h <= 5; $h++)
                                        { 
                                            if($stars >= $k){ ?>
                                             <i class="fa fa-star" aria-hidden="true"></i> 
                                           <?php } 
                                            else { ?>
                                            <i class="fa fa-star-o" aria-hidden="true"> </i>
                                             <?php } 
                                             $k++;
                                          } ?>        
                                       
                                     </span>
                                     <span class="tour_rat">{{$item->impresion_global}} </span>
                                 </h2> 
                             </div>
                              <h2 style="color:black; font-size: 15px;font-family: Lovelo Black;">{{$item->name}} - {{$item->nationality}}</h2>

                              <h4 style="text-align: justify;margin:5%;font-family: 'NewsGoth CN BT';font-size:1em; ">{!!str_limit($item->testimonial, 135)!!}</h4>
                                <a href="/es/testimonianze" style="background: #253d52;" class="db-done">{{$item->date}}</a>
                            </div>
                          </li>
                          <?php
                          $i++;
                           if(($i % 4) == 1)  //odd
                          { ?>

                          </ul>
                          </div>
                            <div class="item">  
                            <ul class="thumbnails">

                           <?php } //odd
                          ?>

                          @endforeach
                        </ul>
                      </div><!-- /Slide1 -->  

                    </div><!-- /Wrapper for slides .carousel-inner -->
                      
                    @endif
                    <!-- Control box -->
                    <div class="control-box">                            
                      <a data-slide="prev" href="#myCarousel" class="carousel-control left">‹</a>
                      <a data-slide="next" href="#myCarousel" class="carousel-control right">›</a>
                    </div><!-- /.control-box -->  

                     <div >
                        <div  style="padding: 15px" class="col-md-2 col-md-offset-10 col-sm-12 ">
                            <a href="/it/testimonianze"> <strong><u> &#62;&#62; Leggi di più</u> </strong> </a>
                        </div>
                        
                         <div class="col-sm-12">
                             <div class="col-sm-4">
                                
                            </div>
                            <div class="col-sm-4">
                                 <a style="color:white;" data-toggle="modal" data-target="#idTestimonio">
                                                    <i class="waves-effect waves-light btn-large full-btn waves-input-wrapper" style="height: 50px;">
                                                         <span>INSERISCI LA TUA TESTIMONIANZA</span>
                                                    </i>
                                </a>
                                
                            </div>
                             <div class="col-sm-4">
                                
                            </div>
                            
                        </div> 
                      

                     </div>                      
                  </div><!-- /#myCarousel -->   
                </div><!-- /.col-sm-12 -->          
                </div><!-- /.row --> 

        </div>
    </div>
    @include('public.it.testimonials.formTestimonials')
</section>

<!--====== socios ==========-->
<section style="background: white;">
        <div class="container">
            
       
        <div class="db" style="margin-top: 49px;" >
 
             <div class="db-3" style=" width: 280px;border: 1px solid #ffffff;  ">
                <h3 style="text-align: center;font-family:  'NewsGoth CN BT';font-size: 1.1em;">AFFILIATI</h3>
                <ul>
                    @include('public.partials.paginaInicio.socios')
                   
                </ul>
            </div>
             <div class="db-3" style="width: 280px; border: 1px solid #ffffff;">
                <h3 style="text-align: center;font-family:  'NewsGoth CN BT';font-size: 1.1em;">PARTNERS</h3>
                <ul>
                     @include('public.partials.paginaInicio.certificacion')
                   
                </ul>
            </div>
              <div class="db-3" style="width: 280px;border: 1px solid #ffffff; ">
                <h3 style="text-align: center;font-family:  'NewsGoth CN BT';font-size: 1.1em;">CERTIFICAZIONI</h3>
                <ul>
                    @include('public.partials.paginaInicio.certificacion')
                   
                </ul>
            </div>
             
             <div class="db-3" style=" width: 280px;border: 1px solid #ffffff;">
                <h3 style="text-align: center;font-family:  'NewsGoth CN BT';font-size: 1.1em;padding: 2PX;">RESPONSABILITÀ SOCIALE E COMMERCIALE</h3>
             <ul>
                   @include('public.partials.paginaInicio.responsabilidad')
                   
                </ul>
            </div>

        </div>
         </div>
    </section>


<!--====== fin socios ==========-->


@endsection
@section('script')
  
   @if($errors->any())
    <script>
        $(document).ready(function(){
             $("#idTestimonio").modal('show');
        });
    </script>
    @endif

      {!!Html::script('assets/public/js/videoPortada.js')!!}
  

@endsection
