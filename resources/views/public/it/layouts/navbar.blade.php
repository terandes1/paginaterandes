<!-- MOBILE MENU -->
<style type="text/css">

</style>
<section>
    <div class="ed-mob-menu">
        <div class="ed-mob-menu-con">
            <div class="ed-mm-left">
                <div class="wed-logo"  style="width: 130px;" >
                    <a href="{{($abbr)}}"><img  id="logoTerandes" src="/assets/public/images/logo.png" alt="" />
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
                            <li><a href="{{route('paquetesIt',$abbr)}}">Tours</a></li>
                        </ul>
                        <h4>CATEGORIE</h4>
                        <ul>
                            <li><a href="{{route('paquetesCategoriaIt',$abbr)}}/scoperta"> Scoperta</a></li>
                            <li><a href="{{route('paquetesCategoriaIt',$abbr)}}/avventura"> avventura</a></li>
                            <li><a href="{{route('paquetesCategoriaIt',$abbr)}}/alta-montagna"> Alta montagna</a></li>
                            <li><a href="{{route('paquetesCategoriaIt',$abbr)}}/escursioni">Escursioni</a></li>
                             <li><a href="{{route('paquetesCategoriaIt',$abbr)}}/Viaggi-di-gruppo">Viaggi di gruppo</a></li>
                        </ul>
                        <h4>EVENTI</h4>
                        <ul>
                            <li><a href="{{route('paginas',$abbr)}}/eventi" style="font-family: Lovelo Black;">EVENTI</a></li>
                        </ul>
                        <h4>SOCIETÀ</h4>
                        <ul>
                            <li><a href="{{route('paginas',$abbr)}}/noi" style="font-family: Lovelo Black;">Noi</a></li>
                        </ul>

                         <h4>CONTATTO</h4>
                        <ul>
                           <li><a href="{{route('paginas',$abbr)}}/contatto" style="font-family: Lovelo Black;">CONTATTO</a></li>
                        </ul>
                        <h4>LINGUE</h4>
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
                        <a href="/it"><img style="width:100%;height: 80px;"  src="/assets/public/images/logo.png" alt="" />
                        </a>
                    </div>
                    <div class="main-menu" style="margin-top: 10px;">
                        <ul>
                           
                            <li class="about-menu">
                                <a href="{{route('paquetesIt',$abbr)}}" class="mm-arr" style="font-family: Lovelo Black;"><span class="fa fa-train" style="color: #084959;"></span> il nostro viaggio</a>
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
                                                    <a class="course-overlay" href="{{route('paquetesCategoriaIt',$abbr)}}/scoperta">
                                                        <img src="{{URL::asset('assets/public/images/category/menu/5.jpg')}}" alt="">
                                                        <span style="font-family: Lovelo Black;">Scoperta</span>
                                                    </a>
                                                </div>
                                                
                                            </div>
                                            <div class="mm2-com mm1-com mm1-s1">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay" href="{{route('paquetesCategoriaIt',$abbr)}}/avventura">
                                                        <img src="{{URL::asset('assets/public/images/category/menu/2.jpg')}}" alt="">
                                                        <span style="font-family: Lovelo Black;">Avventura</span>
                                                    </a>
                                                </div>
                                                
                                            </div>
                                            <div class="mm2-com mm1-com mm1-s1">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay" href="{{route('paquetesCategoriaIt',$abbr)}}/alta-montagna">
                                                        <img src="{{URL::asset('assets/public/images/category/menu/3.jpg')}}" alt="">
                                                        <span style="font-family: Lovelo Black;">Alta montagna</span>
                                                    </a>
                                                </div>
                                             </div>
                                            
                                            <div class="mm2-com mm1-com mm1-s1">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay" href="{{route('paquetesCategoriaIt',$abbr)}}/escursioni">
                                                        <img src="{{URL::asset('assets/public/images/category/menu/4.jpg')}}" alt="">
                                                        <span style="font-family: Lovelo Black;">Escursioni</span>
                                                    </a>
                                                </div>
                                            </div>
                                             <div class="mm2-com mm1-com mm1-s1">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay" href="{{route('paquetesCategoriaIt',$abbr)}}/viaggi-di-gruppo">
                                                        <img src="{{URL::asset('assets/public/images/category/menu/1.jpg')}}" alt="">
                                                        <span style="font-family: Lovelo Black;">Viaggi di gruppo</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                            </li>
                            <li><a href="{{route('paginas',$abbr)}}/eventi" style="font-family: Lovelo Black;">EVENTI</a>
                            </li> 
                            <li><a href="{{route('paginas',$abbr)}}/noi" style="font-family: Lovelo Black;">Noi</a>
                            </li>
                            
                            <li><a href="{{route('paginas',$abbr)}}/contatto" style="font-family: Lovelo Black;"><span class="fa fa-phone-square" style="color: #D98886;"></span> CONTATTO</a>
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
