<!-- MOBILE MENU -->
<style type="text/css">

</style>
<section>
    <div class="ed-mob-menu">
        <div class="ed-mob-menu-con">
            <div class="ed-mm-left">
                <div class="wed-logo"  style="width: 130px;" >
                    <a href="{{('/de')}}"><img  id="logoTerandes" src="/assets/public/images/logo.png" alt="" />
                     </a>
                </div>


            </div>
            <div class="ed-mm-right">
                <div class="ed-mm-menu">
                    <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                    <div class="ed-mm-inn">
                        <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                        <h4>unsere Reise</h4>
                        <ul>
                            <li><a href="{{route('paquetesDe','de')}}">Unsere reise</a></li>
                        </ul>
                        <h4>KATEGORIEN</h4>
                        <ul>
                            <li><a href="{{route('paquetesCategoriaDe','de')}}/descubrir"> Entdecken</a></li>
                            <li><a href="{{route('paquetesCategoriaDe','de')}}/aventura"> Abenteuer</a></li>
                            <li><a href="{{route('paquetesCategoriaDe','de')}}/alta-montania"> Hoher Berg</a></li>
                            <li><a href="{{route('paquetesCategoriaDe','de')}}/excursiones">Ausflug</a></li>
                             <li><a href="{{route('paquetesCategoriaDe','de')}}/viaje-en-grupo">Gruppenreisen</a></li>
                        </ul>
                        <h4>Ereignisse</h4>
                        <ul>
                            <li><a href="{{route('paginas','de')}}/eventos" style="font-family: Lovelo Black;">EREIGNISSE</a></li>
                        </ul>
                        <h4>Geschäft</h4>
                        <ul>
                            <li><a href="{{route('paginas','de')}}/nosotros" style="font-family: Lovelo Black;">WIR</a></li>
                        </ul>

                         <h4>Kontakt</h4>
                        <ul>
                           <li><a href="{{route('paginas','de')}}/contacto" style="font-family: Lovelo Black;">KONTAKT</a></li>
                        </ul>
                        <h4>Sprachen</h4>
                        <ul>
                            <li>
                                
                                    <a class="route-language" href="{{route('idiomas',$abbr)}}">
                                        <img lass="img-lng" style="margin-left: -6px;" src="{{URL::asset('assets/public/images/icon')}}/{!! $abbr !!}.png" alt="Idioma">
                                    </a>
                                     @foreach($lenguajeFaltantes as $item)
                                    <a class="route-language" href="{{route('idiomas',$item)}}">
                                        <img class="img-lng" style="margin-left: -6px;" src="{{URL::asset('assets/public/images/icon/')}}/{!! $item !!}.png" alt="Idioma">
                                    </a>
                                    @endforeach
                            </li>
                           
                           
                        </ul>
                       
                          
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--HEADER SECTION-->
<section style="background-color:#0e4817; color:white; ">
    <div class="top-logo" style="background: #fff;color: black;height: 80px;" data-spy="affix" data-offset-top="250">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wed-logo" style="margin-top: -1px;">
                        <a href="{{('/de')}}"><img style="width:100%;height: 80px;"  src="/assets/public/images/logo.png" alt="" />
                        </a>
                    </div>
                    <div class="main-menu" style="margin-top: 10px;">
                        <ul>
                           
                            <li class="about-menu">
                                <a href="{{route('paquetesDe','de')}}" class="mm-arr" style="font-family: Lovelo Black;"><span class="fa fa-train" style="color: #084959;"></span> Unsere Reise</a>
                            </li>
                            <li class="admi-menu">

                                <a href="#" class="mm-arr" style="font-family: Lovelo Black;"> <span class="fa fa-map-marker" style="color: #696B73;"></span> KATEGORIEN <span style="margin-left: 4px;" class="fa fa-sort-desc"></span>
                                </a>
                                <!-- MEGA MENU 1 -->
                                <div class="mm-pos">
                                    <div class="admi-mm m-menu">
                                        <div class="m-menu-inn">
                                            <div class="mm2-com mm1-com mm1-s1">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay" href="{{route('paquetesCategoriaDe','de')}}/descubrir">
                                                        <img src="{{URL::asset('assets/public/images/category/menu/5.jpg')}}" alt="">
                                                        <span style="font-family: Lovelo Black;">Entdeckung</span>
                                                    </a>
                                                </div>
                                                
                                            </div>
                                            <div class="mm2-com mm1-com mm1-s1">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay" href="{{route('paquetesCategoriaDe','de')}}/aventura">
                                                        <img src="{{URL::asset('assets/public/images/category/menu/2.jpg')}}" alt="">
                                                        <span style="font-family: Lovelo Black;">Aventura</span>
                                                    </a>
                                                </div>
                                                
                                            </div>
                                            <div class="mm2-com mm1-com mm1-s1">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay" href="{{route('paquetesCategoriaDe','de')}}/alta-montania">
                                                        <img src="{{URL::asset('assets/public/images/category/menu/3.jpg')}}" alt="">
                                                        <span style="font-family: Lovelo Black;">Hoher Berg</span>
                                                    </a>
                                                </div>
                                             </div>
                                            
                                            <div class="mm2-com mm1-com mm1-s1">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay" href="{{route('paquetesCategoriaDe','de')}}/excursiones">
                                                        <img src="{{URL::asset('assets/public/images/category/menu/4.jpg')}}" alt="">
                                                        <span style="font-family: Lovelo Black;">Ausflüge</span>
                                                    </a>
                                                </div>
                                            </div>
                                             <div class="mm2-com mm1-com mm1-s1">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay" href="{{route('paquetesCategoriaDe','de')}}/viaje-en-grupo">
                                                        <img src="{{URL::asset('assets/public/images/category/menu/1.jpg')}}" alt="">
                                                        <span style="font-family: Lovelo Black;">Gruppenreisen</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                            </li>
                            <li><a href="{{route('paginas','de')}}/eventos" style="font-family: Lovelo Black;">EREIGNISSE</a>
                            </li> 
                            <li><a href="{{route('paginas','de')}}/nosotros" style="font-family: Lovelo Black;">WIR</a>
                            </li>
                            
                            <li><a href="{{route('paginas','de')}}/contacto" style="font-family: Lovelo Black;"><span class="fa fa-phone-square" style="color: #D98886;"></span> KONTAKT</a>
                            </li>   
        
                            <li class="cour-menu">
                                    <a href="#!" class="mm-arr"><a class="route-language" href="{{route('idiomas',$abbr)}}"><img class="img-lng" style="width: 38px;height: 25px;" src="{{URL::asset('assets/public/images/icon')}}/{!! $abbr !!}.png" alt="Idioma"></a>
                                        <span style="margin-left: 4px;" class="fa fa-sort-desc"></span>
                                    </a>
                                   
                                    <div class="mm-pos" style="width: 400%; float:right;position: relative;">
                                        <div class="cour-mm m-menu" style="height:40px;background: rgb(255, 255, 255);margin-left: 130px; width: 250px;">

                                                <div class="mm2-com" style="text-align: center;margin-top: -30px;">
                                                   @foreach($lenguajeFaltantes as $item)
                                                    <a class="route-language" href="{{route('idiomas',$item)}}">
                                                        <img class="img-lng" style="margin-left: -6px;" src="{{URL::asset('assets/public/images/icon/')}}/{!! $item !!}.png" alt="Idioma">
                                                    </a>
                                                    @endforeach
                                                    
                                                </div>
                                               

                                         </div>
                                    </div>
                             </li>
                               
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
   
</section>
<!--END HEADER SECTION-->
