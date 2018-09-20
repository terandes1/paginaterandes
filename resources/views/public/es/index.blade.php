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

/*
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

}*/
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

                    '<a href="tour/es/'.$item->slug.'">'.

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

         // $i=$i+1;
         // if($i<3)
         //     {
         //        $htmltemp.='<div class="col-md-6">'.
         //                '<a href="tour/es/'.$item->slug.'">'.
         //                    '<div class="tour-mig-like-com">'.
         //                        '<div class="tour-mig-lc-img">'.
         //                              '<img src="'.$item->img.'" alt="" style="height:377px;">'.
         //                        '</div>'.
         //                        '<div class="tour-mig-lc-con">'.
         //                            '<h6 style="text-align:center;">'.$item->name.' </h6> <br><br>'.
         //                            '<p><span>12 Packages</span> A partir de $ '.$item->price.'</p>'.
         //                        '</div>'.
         //                    '</div>'.
         //               '</a>'.
         //            '</div>';
         //     }else {

         //         $htmltemp.='<div class="col-md-3">'.
         //                        '<a href="tour/es/'.$item->slug.'">'.
         //                            '<div class="tour-mig-like-com">'.
         //                                '<div class="tour-mig-lc-img">'.
         //                                      '<img src="'.$item->img.'" alt="" style="height:200px;">'.
         //                                '</div>'.
         //                                '<div class="tour-mig-lc-con">'.
         //                                     '<h6 style="text-align:center;">'.$item->name.' </h6><br><br>'.
         //                                    '<p><span></span>A partir de $ '.$item->price.'</p>'.
         //                                '</div>'.
         //                            '</div>'.
         //                       '</a>'.
         //                    '</div>';
         //     }
        
      }
            
    return $htmltemp;
}
 

?>

<section>
    
       
        <div class="contenedor_video">
            <video id="videoId" style=" /*width: 1348px;*/ margin-top: -22px;"poster="{{URL::asset('assets/public/inicio/portada.jpg')}}" playsinline="" autoplay="" loop="" preload="auto" muted=""> 
             <source src="https://www.kuodatravel.com/wp-content/uploads/2017/11/discover-south-america-kt.mp4" type="video/mp4"></video>
        </div>
         <dir id="texto" style="font-family: Lovelo Black;">
             AVENTURE 
            
             <div class="descrip_video" style="margin-bottom: 5%;font-style: italic;    text-align: center;color: white;text-transform: capitalize;    font-family: 'Linotype Textra', sans-serif;50px;font-size: 20px;">Para los amantes del trekking en lugares aún auténticos y salvajes</div>
       </dir>
       
   
</section>
<!--END HEADER SECTION-->
<section>
    <div class="rows pad-bot-redu tb-space">
        
        <div class="container" style="margin-top: -60px;">
            
            <!-- TITLE & DESCRIPTION -->
            <div class="spe-title" style="z-index: -1000;">
                <h2 style="color:#121214; font-size: 1.8em;font-family: Lovelo Black;font-weight: 100;letter-spacing: 3px;line-height: 1.4em; text-transform: uppercase">
                    Tours sudamericanos de lujo
                </h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p style="font-family: 'NewsGoth CN BT', sans-serif;font-weight: 300;color:#303030;">
                    Tierras de los Andes es una S.A.C. (Sociedad privada cerrada) que abrió sus puertas en el año 2000. Tour operador peruano especializado en viajes de aventura, tiene como objetivo principal la creación de viajes a medida.
                </p>
                     
                           
            </div>
            <div class="row" style="margin-top:-12px;">
                     <div class="input-field col s4">

                     </div>
                        <div class="input-field col s4" >
                            <i class="waves-effect waves-light btn-large full-btn waves-input-wrapper" style="height: 50px;">
                                <a style="color:white;" href="{{route('our-team','es')}}"> ¡APRENDA MÁS SOBRE TERANDES!</a>
                            </i>
                        </div>
            </div><br>
            
        </div>
    </div>
</section><br>

    <section style="margin-top: -170px;">
        <div class="rows pad-bot-redu tb-space">
            <div class="container">
                <div class="spe-title">
                    <h2 style="color:#121214; font-size: 1.8em;font-family: Lovelo Black;font-weight: 100;letter-spacing: 3px;line-height: 1.4em; text-transform: uppercase">Categoría</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p style="font-family: 'NewsGoth CN BT', sans-serif;font-weight: 300;color:#303030;">
                    Privado y completamente personalizado 
                    vea todas las categorias.</p>
                </div>
                <div>
                    <!-- TOUR PLACE 1 -->
                    <div class="col-md-3 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s">

                        <div class="v_place_img">

                                        <div style="/*background-color: rgba(9, 74, 108, 0.65);*/text-align: center;width: 100%;position: absolute;z-index: 1000;padding:6px; ">
                                                 
                                                   <i style="padding: 9px;border-radius: 25px; box-shadow: 5px 5px 5px #000; width: 32px; height: 32px; background: rgba(11, 149, 123, 0.5); color: #1a2e3c;  font-size: 15px; " class="fa fa-child" aria-hidden="true">
                                                    </i> 
                                                  <i style="padding: 9px;border-radius: 25px; box-shadow: 5px 5px 5px #000;width: 32px; height: 32px; background: rgba(11, 149, 123, 0.5); color: #1a2e3c;  font-size: 15px; " class="fa fa-car" aria-hidden="true">
                                                    </i>
                                                    <i style="padding: 9px;border-radius: 25px; box-shadow: 5px 5px 5px #000;width: 32px; height: 32px; background: rgba(11, 149, 123, 0.5); color: #1a2e3c;  font-size: 15px; " class="fa fa-plane" aria-hidden="true">
                                                    </i>
                                                    <i style="padding: 9px;border-radius: 25px; box-shadow: 5px 5px 5px #000;width: 32px; height: 32px; background: rgba(11, 149, 123, 0.5); color: #1a2e3c;  font-size: 15px; " class="fa fa-ship" aria-hidden="true">
                                                    </i>
                                               
                                        </div>
                             <a class="course-overlay" href="{{route('paquetes','es')}}/Descubrir">    
                                 <img  style="height: 540px;" src="{{URL::asset('assets/public/category/6.jpg')}}" /> 
                            </a>
                                  <div class="tour-mig-lc-con" style="text-align: center;">
                                      
                                        <span style="text-align: center; color: #fff; letter-spacing: 4px;text-shadow: 0 1px 1px rgba(0, 0, 0, 0.6); line-height: 1.1em;font-family: Lovelo Black;">
                                            Descubrir
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
                                                     
                                                      <span class="fa fa-film"></span>  Ver video
                                                   
                                            </div>
                                         </a>
                                  </div>


                        </div>
                    </div>
                    <!-- TOUR PLACE 2 -->
                   <div class="col-md-3 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s">

                        <div class="v_place_img">
                            <div style=" /*background-color: rgba(9, 74, 108, 0.65);*/text-align: center;width: 100%;position: absolute;z-index: 1000;padding:6px; ">
                                                 
                                                   <i style="padding: 9px;border-radius: 25px; box-shadow: 5px 5px 5px #000;width: 32px; height: 32px; background: rgba(11, 149, 123, 0.5); color: #1a2e3c;  font-size: 15px; " class="fa fa-child" aria-hidden="true">
                                                    </i> 
                                                  <i style="padding: 9px;border-radius: 25px; box-shadow: 5px 5px 5px #000;width: 32px; height: 32px; background: rgba(11, 149, 123, 0.5); color: #1a2e3c;  font-size: 15px; " class="fa fa-car" aria-hidden="true">
                                                    </i>
                                                    <i style="padding: 9px;border-radius: 25px; box-shadow: 5px 5px 5px #000;width: 32px; height: 32px; background: rgba(11, 149, 123, 0.5); color: #1a2e3c;  font-size: 15px; " class="fa fa-plane" aria-hidden="true">
                                                    </i>
                                                    <i style="padding: 9px;border-radius: 25px; box-shadow: 5px 5px 5px #000;width: 32px; height: 32px; background: rgba(11, 149, 123, 0.5); color: #1a2e3c;  font-size: 15px; " class="fa fa-ship" aria-hidden="true">
                                                    </i>
                                               
                                        </div>
                        <a class="course-overlay" href="{{route('paquetes','es')}}/Aventura">
                             <img  style="height: 540px;" src="{{URL::asset('assets/public/category/10.jpg')}}" /> 
                        </a>
                              <div class="tour-mig-lc-con" style="text-align: center;">
                                  
                                    <span style="text-align: center; color: #fff; letter-spacing: 4px;text-shadow: 0 1px 1px rgba(0, 0, 0, 0.6); line-height: 1.1em;font-family: Lovelo Black;">Aventura</span>
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
                                                  
                                                      <span class="fa fa-film"></span>  Ver video
                                                    
                                            </div>
                                        </a>

                              </div>
                        </div>
                    </div>
                       <div class="col-md-3 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s">

                        <div class="v_place_img">
                            <div style=" /*background-color: rgba(9, 74, 108, 0.65);*/text-align: center;width: 100%;position: absolute;z-index: 1000;padding:6px; ">
                                                 
                                                   <i style="padding: 9px;border-radius: 25px; box-shadow: 5px 5px 5px #000;width: 32px; height: 32px; background: rgba(11, 149, 123, 0.5); color: #1a2e3c;  font-size: 15px; " class="fa fa-child" aria-hidden="true">
                                                    </i> 
                                                  <i style="padding: 9px;border-radius: 25px; box-shadow: 5px 5px 5px #000;width: 32px; height: 32px; background: rgba(11, 149, 123, 0.5); color: #1a2e3c;  font-size: 15px; " class="fa fa-car" aria-hidden="true">
                                                    </i>
                                                    <i style="padding: 9px;border-radius: 25px; box-shadow: 5px 5px 5px #000;width: 32px; height: 32px; background: rgba(11, 149, 123, 0.5); color: #1a2e3c;  font-size: 15px; " class="fa fa-plane" aria-hidden="true">
                                                    </i>
                                                    <i style="padding: 9px;border-radius: 25px; box-shadow: 5px 5px 5px #000;width: 32px; height: 32px; background: rgba(11, 149, 123, 0.5); color: #1a2e3c;  font-size: 15px; " class="fa fa-ship" aria-hidden="true">
                                                    </i>
                                               
                                        </div>
                        <a class="course-overlay" href="{{route('paquetes','es')}}/alta-Montania">
                             <img  style="height: 540px;" src="{{URL::asset('assets/public/category/8.jpg')}}" /> 
                        </a>
                              <div class="tour-mig-lc-con" style="text-align: center;">
                                  
                                    <span style="text-align: center; color: #fff; letter-spacing: 4px;text-shadow: 0 1px 1px rgba(0, 0, 0, 0.6); line-height: 1.1em;font-family: Lovelo Black;">Alta montaña</span>
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
                                                
                                                  <span class="fa fa-film"></span>  Ver video
                                                
                                        </div>
                                    </a>

                              </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s">

                        <div class="v_place_img">
                            <div style=" /*background-color: rgba(9, 74, 108, 0.65);*/text-align: center;width: 100%;position: absolute;z-index: 1000;padding:6px; ">
                                                 
                                                   <i style="padding: 9px;border-radius: 25px; box-shadow: 5px 5px 5px #000;width: 32px; height: 32px; background: rgba(11, 149, 123, 0.5); color: #1a2e3c;  font-size: 15px; " class="fa fa-child" aria-hidden="true">
                                                    </i> 
                                                  <i style="padding: 9px;border-radius: 25px; box-shadow: 5px 5px 5px #000;width: 32px; height: 32px; background: rgba(11, 149, 123, 0.5); color: #1a2e3c;  font-size: 15px; " class="fa fa-car" aria-hidden="true">
                                                    </i>
                                                    <i style="padding: 9px;border-radius: 25px; box-shadow: 5px 5px 5px #000;width: 32px; height: 32px; background: rgba(11, 149, 123, 0.5); color: #1a2e3c;  font-size: 15px; " class="fa fa-plane" aria-hidden="true">
                                                    </i>
                                                    <i style="padding: 9px;border-radius: 25px; box-shadow: 5px 5px 5px #000;width: 32px; height: 32px; background: rgba(11, 149, 123, 0.5); color: #1a2e3c;  font-size: 15px; " class="fa fa-ship" aria-hidden="true">
                                                    </i>
                                               
                                        </div>
                          <a class="course-overlay" href="{{route('paquetes','es')}}/Excursiones">
                             <img  style="height: 540px;" src="{{URL::asset('assets/public/category/9.jpg')}}" /> 
                          </a>
                              <div class="tour-mig-lc-con" style="text-align: center;">
                                  
                                    <span style="text-align: center; color: #fff; letter-spacing: 4px;text-shadow: 0 1px 1px rgba(0, 0, 0, 0.6); line-height: 1.1em;font-family: Lovelo Black;">Excursiones</span>
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
                                               
                                                  <span class="fa fa-film"></span>  Ver video
                                              
                                        
                                        </div>
                                      </a>

                              </div>
                        </div>
                    </div>  
                    
                    
                    </div>
                </div>
            </div>
        </div>
    </section><br>
<!--====== HOME HOTELS ==========-->
<section style="margin-top: -50px;">
     <div class="spe-title" style="z-index: -1000;">
                    <h2 style="color:#121214; font-size: 1.8em;font-family: Lovelo Black;font-weight: 100;letter-spacing: 3px;line-height: 1.4em; text-transform: uppercase">Tour lujos </h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p style="font-family: 'NewsGoth CN BT', sans-serif;font-weight: 300;color:#303030;">El sitio web de reservas y viajes líder mundial en reservas, más de 30,000 paquetes turisticos en todo el mundo</p>
                </div>
        <div class="db">
            <!--LEFT SECTION-->
            <?=DostourDeLujos($toursLujos);?>
           
        </div>
    </section>
<!-- <section style="margin-top: -160px;">
    <div class="rows pad-bot-redu tb-space"> -->
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
      <!--   <div class="search-top">
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
        </div><br><br><br> -->
        <!-- <div class="container">
            
            
            <div class="spe-title" style="z-index: -1000;">
                <h2>Paquetes De Viaje <span style="color:#36691D">Principales </span></h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p>El sitio web de reservas y viajes líder mundial en reservas, más de 30,000 paquetes turisticos en todo el mundo</p>
            </div>
            <div> -->

               <!--  @foreach($toursPrincipal as $item)
                <div id="tort" class="col-md-4 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s">
                    
                    <a href="{{url('tour',['lang' => 'es','slug' => $item->slug])}}">
                        <div class="v_place_img"> 
                            <img style="height:220px;" src="/{{$item->img}}" alt="Tour Booking" title="Tour Booking" /> 
                            
                            <div class="hom-hot-av-tic"> -->
                                <!-- {!! $item->categoriesName!!} -->
                         <!--        <h5 style="text-align: center;">{!! $item->dias!!} DIAS / {{ ((int)($item->dias)-1)}} NOCHES </h5>
                            </div>
                            
                        </div>
                     </a>
 -->
                    
                   <!--  <div class="b_pack rows">
                      
                        <div class="col-md-12 col-sm-12" style="text-align: center;">
                            <h4>
                                <a style="font-size: 12px; href="{{'paquetes'}}">{{ $item->name }}
                                </a>
                                <a style=" font-size: 1.05em;color: #f15a23;text-align: center;font-family:Roboto;font-weight:400;font-style:normaltext-align: right;" href="#!">
                                        <div class="col-md-3 col-sm-4 pack_icon">
                             
                                               
                                        </div>
                                        <div class="col-md-6 col-sm-6  pack_icon">
                             
                                                 
                                             
                                        </div>


                                </a>

                            </h4>   
                        </div> -->
                        
                        <!-- <div class="col-md-12 col-sm-12" style="text-align: justify;margin-top: -15px;">
                            <p>
                              {!! str_limit($item->description_short, 150) !!}

                            </p>
                            
                        </div>
                
                        
                        <div class="col-md-12 col-sm-12 ">
                            <div class="col-md-12" style="margin: 15px;">
                                <a class="link-btn" style="text-align:center;color: #f15a23;" href="{{url('tour',['lang' => 'es','slug' => $item->slug])}}"> MÁS SOBRE ESTE VIAJE
                                </a>

                            </div>
                        </div>
                    </div>
                </div> -->
       <!--          @endforeach
                   
            </div>
        </div>
    </div>
</section>
 -->

<!-- <section style="">
    <div class="rows tb-space pad-top-o pad-bot-redu" >
        <div class="container">
           
            <div class="spe-title">
               </br>
                <p>El sitio web de reservas de tour líder en el latinomarica, más de 30,000 personas  disfrute de sus vacaciones con una experiencia única</p>
            </div>
         
            <?=DostourDeLujos($toursLujos);?>

        </div>
    </div>
</section> -->

<!--====== SECTION: FREE CONSULTANT ==========-->
<section style="margin-top: 50px;">
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
<section>
    <div class="rows pla pad-bot-redu tb-space">
        <div class="pla1 p-home container">
            <!-- TITLE & DESCRIPTION -->
            <div class="spe-title spe-title-1">
                <h2 style="color:#121214; font-size: 1.8em;font-family: Lovelo Black;font-weight: 100;letter-spacing: 3px;line-height: 1.4em; text-transform: uppercase">Usted define su estilo de viaje</h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p style="font-family: 'NewsGoth CN BT', sans-serif;font-weight: 300;color:#303030;">¿Desea planear su aventura sudamericana? </p>
            </div>
            <div class="popu-places-home" style="padding-bottom: 30px">
                <!-- POPULAR PLACES 1 -->
                <div class="col-md-8 col-md-offset-2 col-sm-12  place">
                    <div class="col-md-6 col-sm-12 col-xs-12" > <img  style="border:3px inset ;" src="/imagenesprueba/peques/04.png" alt="" /> </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <h3><span>   </span>    </h3>
                        <p style = "text-align: justify;"> Desde tours culinarios peruanos para la familia,grupos,parejas y  amigos, nos especializamos en la elaboración de viajes privados únicos diseñados especialmente para usted.<br>
                        Contáctanos y comienza a rodar.</p> <a href="{{route('paquetes','es')}}/Series" class="link-btn">mas informacion</a> </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== EVENTS ==========-->
<!-- <section style="margin-top: -55px;">
    <div class="rows tb-space" style="background: #f6f6f6;">
        <div class="container events events-1" id="inner-page-title">
           
            <div class="spe-title">
                <h2 style="color:#121214; font-size: 1.8em;font-family: Lovelo Black;font-weight: 100;letter-spacing: 3px;line-height: 1.4em; text-transform: uppercase">Viaje en grupo</h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p style="font-family: 'NewsGoth CN BT'">World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
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
</section> -->
<!-- <section>
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
</section> -->
<section>
    <div class="rows pla pad-bot-redu tb-space" style="margin-top: -98px;">
        <div class="pla1 p-home container" style="background: #f6f6f6;">
            <!-- TITLE & DESCRIPTION -->

            <div class="spe-title spe-title-1">
                <h2 style="color:#121214; font-size: 1.8em;font-family: Lovelo Black;font-weight: 100;letter-spacing: 3px;line-height: 1.4em; text-transform: uppercase">TOP TESTIMONIOS DE ESTE MES</h2>
                
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
                <p style="font-family: 'NewsGoth CN BT', sans-serif;font-weight: 300;color:#303030;"> Comparte experiencias de viaje con nosotros. </p>

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
                              <h3 style="color:black; font-size: 15px;font-family: Lovelo Black;">{{$item->name}} - {{$item->nationality}}</h3>

                              <h2 style="text-align: justify;margin:5%;font-family: 'NewsGoth CN BT';font-size:1em; ">{!!str_limit($item->testimonial, 135)!!}</h2>
                              <h5>{{$item->date}} <h5>
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
                            <a href="/es/testimonials"> <strong><u> &#62;&#62; Leer Más</u> </strong> </a>
                        </div>
                        <div  class="col-sm-5">
                           
                        </div>
                         <div class="input-field col s2">
                            <i class="waves-effect waves-light full-btn waves-input-wrapper" style="">
                                  <input type="submit" value="INGRESE SU TESTIMONIO"  data-toggle="modal" data-target="#idTestimonio" class="waves-button-input">
                            </i> 
                        </div>                        
                     </div>                      
                  </div><!-- /#myCarousel -->   
                </div><!-- /.col-sm-12 -->          
                </div><!-- /.row --> 

        </div>
    </div>
    @include('public.es.testimonials.formTestimonials')
</section>
<!--====== socios ==========-->
<section style="background: white;">
        <div class="container">
            
       
        <div class="db" style="margin-top: 49px;" >
 
             <div class="db-3" style=" width: 280px;border: 1px solid #ffffff;  ">
                <h3 style="text-align: center;font-family:  'NewsGoth CN BT';font-size: 1.1em;">AFILIADOS</h3>
                <ul>
                    <li style="border-bottom: 1px solid #fff;">
                        <a href="https://www.asta.org/" style="color:black;"> <img src="{{URL::asset('assets/public/icons/social/asta.jpg') }}" alt="" />
                          <!-- ASTA -->
                     
                        </a>
                    </li>
                    <li style="border-bottom: 1px solid #fff;">
                        <a href="#!"  style="color:black;"> <img src="{{URL::asset('assets/public/icons/social/cantur.jpg') }}" alt="" />
                          <!--  DATA -->
                        </a>
                    </li>
                    
                    <li style="border-bottom: 1px solid #fff;">
                        <a href="http://udgart.com/"  style="color:black;"> <img src="{{URL::asset('assets/public/icons/social/atr.jpg') }}" alt="" />
                         <!--   ART -->
                        </a>
                    </li>
                   
                </ul>
            </div>
             <div class="db-3" style="width: 280px; border: 1px solid #ffffff;">
                <h3 style="text-align: center;font-family:  'NewsGoth CN BT';font-size: 1.1em;">SOCIOS</h3>
                <ul>
                    <li style="border-bottom: 1px solid #fff;">
                        <a href="#!"  style="color:black;"> <img src="{{URL::asset('assets/public/icons/social/illapaA.jpg') }}" white="20px;" alt="" />
                           <!--  ILLAPA TRANSPORTE -->
                     
                        </a>
                    </li>
                    <li style="border-bottom: 1px solid #fff;">
                        <a href="#!"  style="color:black;"> <img src="{{URL::asset('assets/public/icons/social/illapaT.jpg') }}" alt="" />
                           <!--  ILLAPA CULTURAS ANDINA -->
                        </a>
                    </li>
                    
                   
                </ul>
            </div>
              <div class="db-3" style="width: 280px;border: 1px solid #ffffff; ">
                <h3 style="text-align: center;font-family:  'NewsGoth CN BT';font-size: 1.1em;">CERTIFICACIONES</h3>
                <ul>
                   <li style="border-bottom: 1px solid #fff;">
                        <a href="https://www.indecopi.gob.pe/inicio"  style="color:black;"> <img src="{{URL::asset('assets/public/icons/social/indecopi.jpg') }}" alt="" />
                           <!--  INDECOPI -->
                     
                        </a>
                    </li>
                    <li style="border-bottom: 1px solid #fff;">
                        <a href="https://www.gob.pe/mincetur"  style="color:black;"> <img src="{{URL::asset('assets/public/icons/social/mincetur.png') }}" alt="" />
                          <!--  MINCETUR -->
                        </a>
                    </li>
                    <li style="border-bottom: 1px solid #fff;">
                        <a href="http://dirceturcusco.gob.pe/"  style="color:black;"> <img style="background: #b61632;" src="{{URL::asset('assets/public/icons/social/dircusco.png') }}" alt="" />
                            <!--  DIRCETUR CUSCO -->
                        </a>
                    </li>
                    <li style="border-bottom: 1px solid #fff;">
                        <a href="http://www.sernanp.gob.pe/cusco"  style="color:black;"> <img src="{{URL::asset('assets/public/icons/social/sernanp.png') }}" alt="" />
                          <!--   SERNANP -->
                        </a>
                    </li>
                   
                </ul>
            </div>
             
             <div class="db-3" style=" width: 280px;border: 1px solid #ffffff;">
                <h3 style="text-align: center;font-family:  'NewsGoth CN BT';font-size: 1.1em;padding: 2PX;">RESPONSABILIDAD SOCIAL Y EMPRESARIAL</h3>
             <ul>
                   <li>
                        <a href="https://www.patronatomachupicchu.org/"  style="color:black;"> <img src="{{URL::asset('assets/public/icons/social/patronato.png') }}" alt="" />
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

        $("#buscar").click(function(){

              $texto=$("#select-search").val();
              window.location.href = "/es/tours/"+$texto;
        });

     $(window).resize(function() {
          var width = $(window).width();
          if (width < 598){
                $( "#videoId" ).remove();
                $( ".contenedor_video" ).html( "<div id='portada'><img src='{{URL::asset('assets/public/inicio/portada.jpg')}}'></img> </div>" );
          }else{
             $( "#portada" ).remove();
             var video="<source src='https://www.kuodatravel.com/wp-content/uploads/2017/11/discover-south-america-kt.mp4' type='video/mp4'>";
             var html= "<video id='videoId' playsinline='' autoplay='' loop='' preload='auto' muted=''>"+video+"</video>";
             $( ".contenedor_video" ).html(html);
          }
    });
    </script>
  

@endsection
