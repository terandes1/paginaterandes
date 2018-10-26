@extends('public.de.layouts.master')

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

@media screen and (max-width: 1400px) , screen and (max-height: 1601px) {
  div.contenedor_video {
   background: white;
    overflow: hidden;
    text-align: center;
    margin-top: 0px;  
    width: 100%; /*margin-top: -22px;*/
  }
   #texto{
    width: 100%;height: auto;font-family: 'Oswald', sans-serif;    color: white;text-transform: uppercase;text-align: center;    font-size: 50px; margin-top: -25%;z-index: 1; position: absolute;text-shadow: 2px 2px 4px #000;
 }
}
@media screen and (max-width: 991px) , screen and (max-height: 1399px) {
  div.contenedor_video {
   background: white;
    overflow: hidden;
    text-align: center;
    margin-top: 0px;  
    width: 100%; /*margin-top: -22px;*/
  }
   #texto{
    width: 100%;height: auto;font-family: 'Oswald', sans-serif;    color: white;text-transform: uppercase;text-align: center;    font-size: 50px; margin-top: -25%;z-index: 1; position: absolute;text-shadow: 2px 2px 4px #000;
 }
 #videoId{
    width: 100%;
 }
  
}
@media (min-width: 900px) and (max-width: 1400px) {
     .item {
     display: none;
     }
     #portada {
        width: 100%;
    }
    #portada img {
        width: 100%;
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
         
        font-size: 14px;
        margin-top: -83px;
        margin-left: -14px;
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
  #portada {
        width: 100%;
    }
    #portada img {
        width: 89%;
    }
}

@media screen and (min-width: 480px) {
    #portada {
        width: 100%;
    }
    #portada img {
        width: 89%;
    }
     #texto{
    width: 100%;height: auto;font-family: 'Oswald', sans-serif;    color: white;text-transform: uppercase;text-align: center;    font-size: 30px; margin-top: -25%;z-index: 1; position: absolute;text-shadow: 2px 2px 4px #000;
        margin-left: -20px;
        }
   
}

</style>
<style type="text/css">


.radio{
        margin-right:20px;
    }
    .card{
        margin:10px !important;
        background: transparent;
    }
.input-hidden {
position: absolute;
left: -9999px;
}

input[type=radio]:checked + label>img {
  border: 1px solid #fff;
  box-shadow: 0 0 3px 3px #090;
}

input[type=radio]:checked + label {
  color: #090;
}

input[type=radio] + label>img {
  margin-right: 10px;
  border: 1px dashed #444;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  transition: 500ms all;
  cursor:pointer;
}

input[type=radio]:checked + label>img {
  transform: 
    rotateZ(-10deg) 
    rotateX(10deg);
}

 
</style>
<?php 
 function DostourDeLujos($toursLujos)
{
    $htmltemp='';
    $i=0;
     foreach($toursLujos as $item)
      {
         
         $htmltemp.='<div class="db-1">'.

                    '<a href="/es/tour/detalle/'.$item->slug.'">'.

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
    
       
        <div class="contenedor_video">
            <video id="videoId" style=" /*width: 1348px;*/ margin-top: -22px;" poster="{{URL::asset('assets/public/images/portada-movil/portada.jpg')}}" playsinline="" autoplay="" loop="" preload="auto" muted=""> 
             <source src="{{URL::asset('assets/public/video/Definitivo.mp4')}}" type="video/mp4"></video>
        </div>
         <dir id="texto" style="font-family: Lovelo Black;">
             Abenteuer
            
             <div class="descrip_video" style="margin-bottom: 5%;font-style: italic;    text-align: center;color: white;font-family: 'Linotype Textra', sans-serif;50px;font-size: 20px;">Für Liebhaber von Trekking in authentischen und wilden Orten</div>
       </dir>
       
   
</section>
<!--END HEADER SECTION-->
<section>
    <div class="rows pad-bot-redu tb-space">
        
        <div class="container" style="margin-top: -60px;">
            
            <!-- TITLE & DESCRIPTION -->
            <div class="spe-title" style="z-index: -1000;">
                <h2 style="color:#121214; font-size: 1.8em;font-family: Lovelo Black;font-weight: 100;letter-spacing: 3px;line-height: 1.4em; text-transform: uppercase">
                    SÜDAMERIKANISCHE LUXUS-TOUREN
                </h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p style="font-family: 'NewsGoth CN BT', sans-serif;font-weight: 300;color:#303030;">
                    Tierra de los Andes S.A.C. (Privates geschlossenes Unternehmen), das im Jahr 2000 seine Pforten öffnete. Der peruanische Reiseveranstalter, der auf Abenteuerreisen spezialisiert ist, hat als Hauptziel die Schaffung von maßgeschneiderten Reisen.
                </p>
                     
                           
            </div>
            <div class="row" style="margin-top:-12px;">
                     <div class="input-field col s4">

                     </div>
                      
                            <div class="input-field col s4" >
                                  <a style="color:white;font-size: 15px;" href="{{route('paginas','es')}}/nosotros">
                                        <i class="waves-effect waves-light btn-large full-btn waves-input-wrapper">
                                            <span id="aprendaMas">MEHR ÜBER TERANDEN!</span>
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
                    <h2 style="color:#121214; font-size: 1.8em;font-family: Lovelo Black;font-weight: 100;letter-spacing: 3px;line-height: 1.4em; text-transform: uppercase">Kategorie</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p style="font-family: 'NewsGoth CN BT', sans-serif;font-weight: 300;color:#303030;">
                    Privat und vollständig angepasst
                     Siehe alle Kategorien.</p>
                </div>
                <div>
                    <!-- TOUR PLACE 1 -->
                    <div class="col-md-3 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s">

                        <div class="v_place_img">

                                        <div style="/*background-color: rgba(9, 74, 108, 0.65);*/text-align: center;width: 100%;position: absolute;z-index: 1000;padding:6px; ">
                                        </div>
                             <a class="course-overlay" href="{{route('paquetesCategoriaDe','de')}}/entdeckung">    
                                 <img  style="height: 540px;" src="{{URL::asset('assets/public/images/category/6.jpg')}}" /> 
                            </a>
                                  <div class="tour-mig-lc-con" style="text-align: center;">
                                      
                                        <span style="text-align: center; color: #fff; letter-spacing: 4px;text-shadow: 0 1px 1px rgba(0, 0, 0, 0.6); line-height: 1.1em;font-family: Lovelo Black;">
                                            Entdeckung
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
                                                     
                                                      <span class="fa fa-film"></span>  Siehe Video
                                                   
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
                        <a class="course-overlay" href="{{route('paquetesCategoriaDe','de')}}/abenteuer">
                             <img  style="height: 540px;" src="{{URL::asset('assets/public/images/category/10.jpg')}}" /> 
                        </a>
                              <div class="tour-mig-lc-con" style="text-align: center;">
                                  
                                    <span style="text-align: center; color: #fff; letter-spacing: 4px;text-shadow: 0 1px 1px rgba(0, 0, 0, 0.6); line-height: 1.1em;font-family: Lovelo Black;">Abenteuer</span>
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
                                                  
                                                      <span class="fa fa-film"></span>  Siehe Video
                                                    
                                            </div>
                                        </a>

                              </div>
                        </div>
                    </div>
                       <div class="col-md-3 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s">

                        <div class="v_place_img">
                            <div style=" /*background-color: rgba(9, 74, 108, 0.65);*/text-align: center;width: 100%;position: absolute;z-index: 1000;padding:6px; ">
                                            
                                               
                                        </div>
                        <a class="course-overlay" href="{{route('paquetesCategoriaDe','de')}}/hoher-berg">
                             <img  style="height: 540px;" src="{{URL::asset('assets/public/images/category/8.jpg')}}" /> 
                        </a>
                              <div class="tour-mig-lc-con" style="text-align: center;">
                                  
                                    <span style="text-align: center; color: #fff; letter-spacing: 4px;text-shadow: 0 1px 1px rgba(0, 0, 0, 0.6); line-height: 1.1em;font-family: Lovelo Black;">Hoher Berg</span>
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
                                                
                                                  <span class="fa fa-film"></span>  Siehe Video
                                                
                                        </div>
                                    </a>

                              </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s">

                        <div class="v_place_img">
                            <div style=" /*background-color: rgba(9, 74, 108, 0.65);*/text-align: center;width: 100%;position: absolute;z-index: 1000;padding:6px; ">
                                                 
                                        </div>
                          <a class="course-overlay" href="{{route('paquetesCategoriaDe','de')}}/ausflüge">
                             <img  style="height: 540px;" src="{{URL::asset('assets/public/images/category/9.jpg')}}" /> 
                          </a>
                              <div class="tour-mig-lc-con" style="text-align: center;">
                                  
                                    <span style="text-align: center; color: #fff; letter-spacing: 4px;text-shadow: 0 1px 1px rgba(0, 0, 0, 0.6); line-height: 1.1em;font-family: Lovelo Black;">Ausflüge</span>
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
                                               
                                                  <span class="fa fa-film"></span>  Siehe Video
                                              
                                        
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
        <h2 style="color:#121214; font-size: 1.8em;font-family: Lovelo Black;font-weight: 100;letter-spacing: 3px;line-height: 1.4em; text-transform: uppercase">Angebot des Monats</h2>
        <div class="title-line">
            <div class="tl-1"></div>
            <div class="tl-2"></div>
            <div class="tl-3"></div>
        </div>
        <p style="font-family: 'NewsGoth CN BT', sans-serif;font-weight: 300;color:#303030;">Wir arbeiten jeden Tag, um Ihnen die besten Angebote für Touren anzubieten.</p>
    </div>
    <div class="offer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="offer-l"> <span class="ol-1"></span> <span class="ol-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> <span class="ol-4">
                     Große Reise in den Süden von Peru - IN GROUP
                    </span>                            <span class="ol-3"></span> <span class="ol-5">$99/-</span>
                        <ul>
                            <li class="wow fadeInUp" data-wow-duration="0.5s">
                                <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="/assets/public/images/icon/dis1.png" alt="">
                                </a><span>Gratis Wifi</span>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="0.7s">
                                <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="/assets/public/images/icon/dis2.png" alt=""> </a><span>Frühstück</span>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="0.9s">
                                <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="/assets/public/images/icon/dis3.png" alt=""> </a><span>Schwimmbad</span>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="1.1s">
                                <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="/assets/public/images/icon/dis4.png" alt=""> </a><span>Fernsehen</span>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="1.3s">
                                <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="/assets/public/images/icon/dis5.png" alt=""> </a><span>FITNESSSTUDIO</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="offer-r">
                        <div class="or-1"> <span class="or-11">Ir</span> <span class="or-12">Aufenthalte</span> </div>
                        <div class="or-2"> <span class="or-21">Holen Sie sich ein</span> <span class="or-22">70%</span> <span class="or-23">Off</span> <span class="or-24">Code: RG5481WERQ</span> <span class="or-25"></span> </div>
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
                    <h2 style="color:#121214; font-size: 1.8em;font-family: Lovelo Black;font-weight: 100;letter-spacing: 3px;line-height: 1.4em; text-transform: uppercase">Lujos-Turm </h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p style="font-family: 'NewsGoth CN BT', sans-serif;font-weight: 300;color:#303030;">Die weltweit führende Website für Reservierungen und Reisebuchungen, mehr als 30.000 touristische Pakete auf der ganzen Welt</p>
                </div>
        <div class="db">
            <!--LEFT SECTION-->
            <?=DostourDeLujos($toursLujos);?>
           
        </div>
</section><br><br><br>
<section>
     <div class="spe-title spe-title-1">
        <h2 style="color:#121214; font-size: 1.8em;font-family: Lovelo Black;font-weight: 100;letter-spacing: 3px;line-height: 1.4em; text-transform: uppercase">Gruppenreisen</h2>
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
                <h5>TERANDES LEADER IN TOURISTISCHE PAKETE.</h5>
                <h1>GRUPPENREISE</h1>
                <h1 style="font-size: 1.3em;font-family: Lovelo Black;text-align: justify;">Als benutzerdefinierte Reisedesigner, <br>Wir sind hier, um Ihre Reise einzigartig zu machen.</h1>
                        <div class="tourz-hom-ser v2-hom-ser">
                          <ul>
                            <li>
                              <a href="{{route('paquetesCategoriaDe','de')}}/gruppenreisen" class="waves-effect waves-light btn-large tourz-pop-ser-btn"><img src="{!! URL::asset('assets/public/images/2.png')!!}" alt=""> Familie</a>
                            </li>
                            <li>
                              <a href="{{route('paquetesCategoriaDe','de')}}/gruppenreisen" class="waves-effect waves-light btn-large tourz-pop-ser-btn"><img src="{!! URL::asset('assets/public/images/3.png')!!}" alt=""> Gruppen</a>
                            </li>
                            <li>
                              <a href="{{route('paquetesCategoriaDe','de')}}/gruppenreisen" class="waves-effect waves-light btn-large tourz-pop-ser-btn"><img src="{!! URL::asset('assets/public/images/4.png')!!}" alt=""> Paare</a>
                            </li>
                            <li>
                              <a href="{{route('paquetesCategoriaDe','de')}}/gruppenreisen" class="waves-effect waves-light btn-large tourz-pop-ser-btn"><img src="{!! URL::asset('assets/public/images/5.png')!!}" alt=""> Freunde</a>
                            </li>               
                          </ul>
                        </div>
                         <div class="col-md-14">
                           
                             <div class="">
                                    <div class="tourz-hom-ser v2-hom-ser">
                                          <ul>
                                           
                                            <li>
                                              <a href="{{route('paquetesCategoriaDe','de')}}/gruppenreisen" class="waves-effect waves-light btn-large tourz-pop-ser-btn text-center" style="width: 300px;height: 65px; padding: 15px;">
                                                  <h4>VER Touren  </h4>   
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
                <h2 style="color:#121214; font-size: 1.8em;font-family: Lovelo Black;font-weight: 100;letter-spacing: 3px;line-height: 1.4em; text-transform: uppercase">TOP-Zeugnisse dieses Monats</h2>
                
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
                <p style="font-family: 'NewsGoth CN BT', sans-serif;font-weight: 300;color:#303030;"> Teilen Sie Reiseerfahrungen mit uns. </p>

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
                                <a href="/es/testimonios" style="background: #253d52;" class="db-done">{{$item->date}}</a>
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
                            <a href="/es/testimonios"> <strong><u> &#62;&#62; Lesen Sie mehr</u> </strong> </a>
                        </div>
                        
                         <div class="col-sm-12">
                             <div class="col-sm-4">
                                
                            </div>
                            <div class="col-sm-4">
                                 <a style="color:white;" data-toggle="modal" data-target="#idTestimonio">
                                                    <i class="waves-effect waves-light btn-large full-btn waves-input-wrapper" style="height: 50px;">
                                                         <span>GEBEN SIE IHR ZEUGNIS EIN</span>
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
    @include('public.de.testimonials.formTestimonials')
</section>

<!--====== socios ==========-->
<section style="background: white;">
        <div class="container">
            
       
        <div class="db" style="margin-top: 49px;" >
 
             <div class="db-3" style=" width: 280px;border: 1px solid #ffffff;  ">
                <h3 style="text-align: center;font-family:  'NewsGoth CN BT';font-size: 1.1em;">VERBUNDENE</h3>
                <ul>
                    <li style="border-bottom: 1px solid #fff;">
                        <a href="https://www.asta.org/" style="color:black;"> <img src="{{URL::asset('assets/public/images/socios/asta.jpg') }}" alt="" />
                          <!-- ASTA -->
                     
                        </a>
                    </li>
                    <li style="border-bottom: 1px solid #fff;">
                        <a href="https://www.cantturperu.org/es"  style="color:black;"> <img src="{{URL::asset('assets/public/images/socios/cantur.jpg') }}" alt="" />
                          <!--  DATA -->
                        </a>
                    </li>
                    
                    <li style="border-bottom: 1px solid #fff;">
                        <a href="http://udgart.com/"  style="color:black;"> <img src="{{URL::asset('assets/public/images/socios/atr.jpg') }}" alt="" />
                         <!--   ART -->
                        </a>
                    </li>
                   
                </ul>
            </div>
             <div class="db-3" style="width: 280px; border: 1px solid #ffffff;">
                <h3 style="text-align: center;font-family:  'NewsGoth CN BT';font-size: 1.1em;">PARTNER</h3>
                <ul>
                    <li style="border-bottom: 1px solid #fff;">
                        <a href="http://www.illapa.com/"  style="color:black;"> <img src="{{URL::asset('assets/public/images/socios/illapaA.jpg') }}" white="20px;" alt="" />
                           <!--  ILLAPA TRANSPORTE -->
                     
                        </a>
                    </li>
                    <li style="border-bottom: 1px solid #fff;">
                        <a href="http://illapatransportes.com/"  style="color:black;"> <img src="{{URL::asset('assets/public/images/socios/illapaT.jpg') }}" alt="" />
                           <!--  ILLAPA CULTURAS ANDINA -->
                        </a>
                    </li>
                    
                   
                </ul>
            </div>
              <div class="db-3" style="width: 280px;border: 1px solid #ffffff; ">
                <h3 style="text-align: center;font-family:  'NewsGoth CN BT';font-size: 1.1em;">ZERTIFIZIERUNGEN</h3>
                <ul>
                   <li style="border-bottom: 1px solid #fff;">
                        <a href="https://www.indecopi.gob.pe/inicio"  style="color:black;"> <img src="{{URL::asset('assets/public/images/socios/indecopi.jpg') }}" alt="" />
                           <!--  INDECOPI -->
                     
                        </a>
                    </li>
                    <li style="border-bottom: 1px solid #fff;">
                        <a href="https://www.gob.pe/mincetur"  style="color:black;"> <img src="{{URL::asset('assets/public/images/socios/mincetur.png') }}" alt="" />
                          <!--  MINCETUR -->
                        </a>
                    </li>
                    <li style="border-bottom: 1px solid #fff;">
                        <a href="http://dirceturcusco.gob.pe/"  style="color:black;"> <img style="background: #b61632;" src="{{URL::asset('assets/public/images/socios/dircusco.png') }}" alt="" />
                            <!--  DIRCETUR CUSCO -->
                        </a>
                    </li>
                    <li style="border-bottom: 1px solid #fff;">
                        <a href="http://www.sernanp.gob.pe/cusco"  style="color:black;"> <img src="{{URL::asset('assets/public/images/socios/sernanp.png') }}" alt="" />
                          <!--   SERNANP -->
                        </a>
                    </li>
                   
                </ul>
            </div>
             
             <div class="db-3" style=" width: 280px;border: 1px solid #ffffff;">
                <h3 style="text-align: center;font-family:  'NewsGoth CN BT';font-size: 1.1em;padding: 2PX;">SOZIALE UND UNTERNEHMENSVERANTWORTUNG</h3>
             <ul>
                   <li>
                        <a href="https://www.patronatomachupicchu.org/"  style="color:black;"> <img src="{{URL::asset('assets/public/images/socios/patronato.png') }}" alt="" />
                            <!-- PATRONATO DE CULTURA MACHUPICCHU -->
                        </a>
                    </li>
                    
                   
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

    <script>

     $(window).resize(function() {
          var width = $(window).width();
          if (width < 598){
                $( "#videoId" ).remove();
                $( ".contenedor_video" ).html( "<div id='portada'><img src='{{URL::asset('assets/public/images/portada-movil/portada.jpg')}}'></img> </div>" );
          }else{
             $( "#portada" ).remove();
             var video="<source src='{{URL::asset('assets/public/video/Definitivo.mp4')}}' type='video/mp4'>";
             var html= "<video id='videoId' playsinline='' autoplay='' loop='' preload='auto' muted=''>"+video+"</video>";
             $( ".contenedor_video" ).html(html);
          }
    });
    </script>
  

@endsection
