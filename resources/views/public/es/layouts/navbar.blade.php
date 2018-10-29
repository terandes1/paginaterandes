<!-- MOBILE MENU -->
<style type="text/css">

</style>
<section>
    <div class="ed-mob-menu">
        <div class="ed-mob-menu-con">
            <div class="ed-mm-left">
                <div class="wed-logo"  style="width: 130px;" >
                    <a href="{{('/es')}}"><img  id="logoTerandes" src="/assets/public/images/logo.png" alt="" />
                     </a>
                </div>


            </div>
            <div class="ed-mm-right">
                <div class="ed-mm-menu">
                    <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                    <div class="ed-mm-inn">
                        <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                        <h4>TOURS</h4>
                        <ul>
                            <li><a href="{{route('paquetesEs','es')}}">Nuestros viajes</a></li>
                        </ul>
                        <h4>CATEGORIAS</h4>
                        <ul>
                            <li><a href="{{route('paquetesCategoriaES','es')}}/descubrir"> Descubrir</a></li>
                            <li><a href="{{route('paquetesCategoriaES','es')}}/aventura"> Aventura</a></li>
                            <li><a href="{{route('paquetesCategoriaES','es')}}/alta-montania"> Alta montaña</a></li>
                            <li><a href="{{route('paquetesCategoriaES','es')}}/excursiones">Excursion</a></li>
                             <li><a href="{{route('paquetesCategoriaES','es')}}/viaje-en-grupo">Viaje en grupo</a></li>
                        </ul>
                        <h4>Eventos</h4>
                        <ul>
                            <li><a href="{{route('paginas','es')}}/eventos" style="font-family: Lovelo Black;">EVENTOS</a></li>
                        </ul>
                        <h4>Empresa</h4>
                        <ul>
                            <li><a href="{{route('paginas','es')}}/nosotros" style="font-family: Lovelo Black;">NOSOTROS</a></li>
                        </ul>

                         <h4>Contacto</h4>
                        <ul>
                           <li><a href="{{route('paginas','es')}}/contacto" style="font-family: Lovelo Black;">CONTACTO</a></li>
                        </ul>
                        <h4>Idiomas</h4>
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
                        <a href="{{('/es')}}"><img style="width:100%;height: 80px;"  src="/assets/public/images/logo.png" alt="" />
                        </a>
                    </div>
                    <div class="main-menu" style="margin-top: 10px;">
                        <ul>
                           
                            <li class="about-menu">
                                <a href="{{route('paquetesEs','es')}}" class="mm-arr" style="font-family: Lovelo Black;"><span class="fa fa-train" style="color: #084959;"></span> Nuestros viajes</a>
                            </li>
                            <li class="admi-menu">

                                <a href="#" class="mm-arr" style="font-family: Lovelo Black;"> <span class="fa fa-map-marker" style="color: #696B73;"></span> CATEGORIAS <span style="margin-left: 4px;" class="fa fa-sort-desc"></span>
                                </a>
                                <!-- MEGA MENU 1 -->
                                <div class="mm-pos">
                                    <div class="admi-mm m-menu">
                                        <div class="m-menu-inn">
                                            <div class="mm2-com mm1-com mm1-s1">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay" href="{{route('paquetesCategoriaES','es')}}/descubrir">
                                                        <img src="{{URL::asset('assets/public/images/category/menu/5.jpg')}}" alt="">
                                                        <span style="font-family: Lovelo Black;">Descubrimiento</span>
                                                    </a>
                                                </div>
                                                
                                            </div>
                                            <div class="mm2-com mm1-com mm1-s1">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay" href="{{route('paquetesCategoriaES','es')}}/aventura">
                                                        <img src="{{URL::asset('assets/public/images/category/menu/2.jpg')}}" alt="">
                                                        <span style="font-family: Lovelo Black;">Aventura</span>
                                                    </a>
                                                </div>
                                                
                                            </div>
                                            <div class="mm2-com mm1-com mm1-s1">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay" href="{{route('paquetesCategoriaES','es')}}/alta-montania">
                                                        <img src="{{URL::asset('assets/public/images/category/menu/3.jpg')}}" alt="">
                                                        <span style="font-family: Lovelo Black;">Alta Montaña</span>
                                                    </a>
                                                </div>
                                             </div>
                                            
                                            <div class="mm2-com mm1-com mm1-s1">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay" href="{{route('paquetesCategoriaES','es')}}/excursiones">
                                                        <img src="{{URL::asset('assets/public/images/category/menu/4.jpg')}}" alt="">
                                                        <span style="font-family: Lovelo Black;">Excursiones</span>
                                                    </a>
                                                </div>
                                            </div>
                                             <div class="mm2-com mm1-com mm1-s1">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay" href="{{route('paquetesCategoriaES','es')}}/viaje-en-grupo">
                                                        <img src="{{URL::asset('assets/public/images/category/menu/1.jpg')}}" alt="">
                                                        <span style="font-family: Lovelo Black;">Viaje en grupo</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                            </li>
                            <li><a href="{{route('paginas','es')}}/eventos" style="font-family: Lovelo Black;">EVENTOS</a>
                            </li> 
                            <li><a href="{{route('paginas','es')}}/nosotros" style="font-family: Lovelo Black;">NOSOTROS</a>
                            </li>
                            
                            <li><a href="{{route('paginas','es')}}/contacto" style="font-family: Lovelo Black;"><span class="fa fa-phone-square" style="color: #D98886;"></span> CONTACTO</a>
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
    <!--<div class="search-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-form">
                        <form>
                            <div class="sf-type">
                                <div class="sf-input">
                                    <input type="text" id="sf-box" placeholder="Search course and discount courses">
                                </div>
                                <div class="sf-list">
                                    <ul>
                                        <li><a href="course-details.html">Accounting/Finance</a></li>
                                        <li><a href="course-details.html">civil engineering</a></li>
                                        <li><a href="course-details.html">Art/Design</a></li>
                                        <li><a href="course-details.html">Marine Engineering</a></li>
                                        <li><a href="course-details.html">Business Management</a></li>
                                        <li><a href="course-details.html">Journalism/Writing</a></li>
                                        <li><a href="course-details.html">Physical Education</a></li>
                                        <li><a href="course-details.html">Political Science</a></li>
                                        <li><a href="course-details.html">Sciences</a></li>
                                        <li><a href="course-details.html">Statistics</a></li>
                                        <li><a href="course-details.html">Web Design/Development</a></li>
                                        <li><a href="course-details.html">SEO</a></li>
                                        <li><a href="course-details.html">Google Business</a></li>
                                        <li><a href="course-details.html">Graphics Design</a></li>
                                        <li><a href="course-details.html">Networking Courses</a></li>
                                        <li><a href="course-details.html">Information technology</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sf-submit">
                                <input type="submit" value="Search Course">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
</section>
<!--END HEADER SECTION-->
