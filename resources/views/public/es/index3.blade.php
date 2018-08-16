@extends('public.es.layouts.master')

@section('content')

<!--HEADER SECTION-->
<section>
    <div class="tourz-search">
       
        <div class="contenedor_video" style="margin: 0px;position: relative;width: 100%;height: 0;z-index: 1;overflow: hidden;padding-bottom: 37%;">
            <video poster="https://www.kuodatravel.com/wp-content/uploads/2018/04/poster-video-home.jpg" playsinline="" autoplay="" loop="" preload="auto" muted=""> <source src="https://www.kuodatravel.com/wp-content/uploads/2017/11/discover-south-america-kt.mp4" type="video/mp4"></video>
        </div>
         <dir id="texto" style="width: 100%;height: auto;font-family: 'Oswald', sans-serif;    color: white;text-transform: uppercase;text-align: center;    font-size: 50px; margin-top: -25%;z-index: 10000; position: absolute;text-shadow: 2px 2px 4px #000;">
             DISCOVER SOUTH AMERICA
             <div class="descrip_video" style="margin-bottom: 5%;font-style: italic;    text-align: center;color: white;text-transform: capitalize;    font-family: 'Oswald', sans-serif;50px;">Pursue the Luxury of Personalized Travel</div>
       </dir>
       
    </div>
   
</section>
<!--END HEADER SECTION-->
<section>
    <div class="rows pad-bot-redu tb-space">
        <div class="container">
<<<<<<< HEAD
            <div class="row">
                <div class="tourz-search-1">
                
                    <h1>Plan Your Travel Now!</h1>
                    <br><br><br>
                    <!-- <p>Experience the various exciting tour and travel packages and Make hotel reservations, find vacation packages, search cheap hotels and events</p> -->
=======
            <div class="row" style="margin-top: -80px;">
                
>>>>>>> e55f92a9a00dbe48b6e8d276094b033536679b26
                    <form class="tourz-search-form">
                        <div class="input-field">
                            <input type="text" id="select-city" class="autocomplete">
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
        <div class="container">
            
            <!-- TITLE & DESCRIPTION -->
            <div class="spe-title">
                <h2>Top <span>Tour Packages</span></h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide.</p>
            </div>
            <div>
                <!-- TOUR PLACE 1 -->
                <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s">
                    <!-- OFFER BRAND -->
                    <div class="band"> <img src="/assets/public/images/band.png" alt="" /> </div>
                    <!-- IMAGE -->
                    <div class="v_place_img"> <img src="/imagenesprueba/peques/01.png" alt="Tour Booking" title="Tour Booking" /> </div>
                    <!-- TOUR TITLE & ICONS -->
                    <div class="b_pack rows">
                        <!-- TOUR TITLE -->
                        <div class="col-md-8 col-sm-8">
                            <h4><a href="{{'paquetes'}}">Rio de Janeiro<span class="v_pl_name">(Brazil)</span></a></h4>
                        </div>
                        <!-- TOUR ICONS -->
                        <div class="col-md-4 col-sm-4 pack_icon">
                            <ul>
                                <li>
                                    <a href="#"><img src="/assets/public/images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="/assets/public/images/info.png" alt="Details" title="View more details" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="/assets/public/images/price.png" alt="Price" title="Price" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="/assets/public/images/map.png" alt="Location" title="Location" /> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- TOUR PLACE 2 -->
                <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="0.7s">
                    <!-- OFFER BRAND -->
                    <!-- <div class="band"> <img src="/imagenesprueba/peques/02.png" alt="" /> </div> -->
                    <!-- IMAGE -->
                    <div class="v_place_img"> <img src="/imagenesprueba/peques/02.png" alt="Tour Booking" title="Tour Booking" /> </div>
                    <!-- TOUR TITLE & ICONS -->
                    <div class="b_pack rows">
                        <!-- TOUR TITLE -->
                        <div class="col-md-8 col-sm-8">
                            <h4><a href="{{'paquetes'}}">Paris<span class="v_pl_name">(England)</span></a></h4>
                        </div>
                        <!-- TOUR ICONS -->
                        <div class="col-md-4 col-sm-4 pack_icon">
                            <ul>
                                <li>
                                    <a href="#"><img src="/assets/public/images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="/assets/public/images/info.png" alt="Details" title="View more details" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="/assets/public/images/price.png" alt="Price" title="Price" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="/assets/public/images/map.png" alt="Location" title="Location" /> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- TOUR PLACE 3 -->
                <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="0.9s">
                    <div class="v_place_img"><img src="/imagenesprueba/peques/03.png" alt="Tour Booking" title="Tour Booking" /> </div>
                    <div class="b_pack rows">
                        <div class="col-md-8 col-sm-8">
                            <h4><a href="{{'paquetes'}}">South India<span class="v_pl_name">(India)</span></a></h4>
                        </div>
                        <div class="col-md-4 col-sm-4 pack_icon">
                            <ul>
                                <li>
                                    <a href="#"><img src="/assets/public/images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="/assets/public/images/info.png" alt="Details" title="View more details" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="/assets/public/images/price.png" alt="Price" title="Price" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="/assets/public/images/map.png" alt="Location" title="Location" /> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- TOUR PLACE 4 -->
                <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.1s">
                    <div class="v_place_img"><img src="/imagenesprueba/peques/04.png" alt="Tour Booking" title="Tour Booking" /> </div>
                    <div class="b_pack rows">
                        <div class="col-md-8 col-sm-8">
                            <h4><a href="{{'paquetes'}}">The Great Wall<span class="v_pl_name">(China)</span></a></h4>
                        </div>
                        <div class="col-md-4 col-sm-4 pack_icon">
                            <ul>
                                <li>
                                    <a href="#"><img src="/assets/public/images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="/assets/public/images/info.png" alt="Details" title="View more details" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="/assets/public/images/price.png" alt="Price" title="Price" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="/assets/public/images/map.png" alt="Location" title="Location" /> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- TOUR PLACE 5 -->
                <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.3s">
                    <div class="v_place_img"><img src="/imagenesprueba/peques/05.png" alt="Tour Booking" title="Tour Booking" /> </div>
                    <div class="b_pack rows">
                        <div class="col-md-8 col-sm-8">
                            <h4><a href="{{'paquetes'}}">Nail Island<span class="v_pl_name">(Andaman)</span></a></h4>
                        </div>
                        <div class="col-md-4 col-sm-4 pack_icon">
                            <ul>
                                <li>
                                    <a href="#"><img src="/assets/public/images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="/assets/public/images/info.png" alt="Details" title="View more details" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="/assets/public/images/price.png" alt="Price" title="Price" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="/assets/public/images/map.png" alt="Location" title="Location" /> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- TOUR PLACE 6 -->
                <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.5s">
                    <div class="v_place_img"><img src="/imagenesprueba/peques/06.png" alt="Tour Booking" title="Tour Booking" /> </div>
                    <div class="b_pack rows">
                        <div class="col-md-8 col-sm-8">
                            <h4><a href="{{'paquetes'}}">Mauritius<span class="v_pl_name">(Indiana)</span></a></h4>
                        </div>
                        <div class="col-md-4 col-sm-4 pack_icon">
                            <ul>
                                <li>
                                    <a href="#"><img src="/assets/public/images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="/assets/public/images/info.png" alt="Details" title="View more details" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="/assets/public/images/price.png" alt="Price" title="Price" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="/assets/public/images/map.png" alt="Location" title="Location" /> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== HOME HOTELS ==========-->
<section>
    <div class="rows tb-space pad-top-o pad-bot-redu">
        <div class="container">
            <!-- TITLE & DESCRIPTION -->
            <div class="spe-title">
                <h2>Popular <span>Packages</span> </h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide. Book Hotel rooms and enjoy your holidays with distinctive experience</p>
            </div>
            <!-- CITY -->
            <div class="col-md-6">
                <a href="{{'paquetes'}}">
                    <div class="tour-mig-like-com">
                        <div class="tour-mig-lc-img"> <img src="/imagenesprueba/peques/03.png" alt=""> </div>
                        <div class="tour-mig-lc-con">
                            <h5>Europe</h5>
                            <p><span>12 Packages</span> Starting from $2400</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{'paquetes'}}">
                    <div class="tour-mig-like-com">
                        <div class="tour-mig-lc-img"> <img src="/imagenesprueba/peques/01.png" alt=""> </div>
                        <div class="tour-mig-lc-con tour-mig-lc-con2">
                            <h5>Dubai</h5>
                            <p>Starting from $2400</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{'paquetes'}}">
                    <div class="tour-mig-like-com">
                        <div class="tour-mig-lc-img"> <img src="/imagenesprueba/peques/02.png" alt=""> </div>
                        <div class="tour-mig-lc-con tour-mig-lc-con2">
                            <h5>India</h5>
                            <p>Starting from $2400</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{'paquetes'}}">
                    <div class="tour-mig-like-com">
                        <div class="tour-mig-lc-img"> <img src="/imagenesprueba/peques/03.png" alt=""> </div>
                        <div class="tour-mig-lc-con tour-mig-lc-con2">
                            <h5>Usa</h5>
                            <p>Starting from $2400</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{'paquetes'}}">
                    <div class="tour-mig-like-com">
                        <div class="tour-mig-lc-img"> <img src="/imagenesprueba/peques/04.png" alt=""> </div>
                        <div class="tour-mig-lc-con tour-mig-lc-con2">
                            <h5>London</h5>
                            <p>Starting from $2400</p>
                        </div>
                    </div>
                </a>
            </div>
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
                <h2>Top <span>Events</span> in this month</h2>
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
                    <tr>
                        <td>2</td>
                        <td><img src="/imagenesprueba/peques/02.png" alt="" /><a href="hotels-list.html" class="events-title">Salesforce Summer, Dubai</a> </td>
                        <td class="e_h1">16.12.2016</td>
                        <td class="e_h1">10.00 PM</td>
                        <td class="e_h1">Dubai</td>
                        <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><img src="/imagenesprueba/peques/03.png" alt="" /><a href="hotels-list.html" class="events-title">God Towers, TOKYO, JAPAN</a> </td>
                        <td class="e_h1">16.12.2016</td>
                        <td class="e_h1">10.00 PM</td>
                        <td class="e_h1">JAPAN</td>
                        <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><img src="/imagenesprueba/peques/04.png" alt="" /><a href="hotels-list.html" class="events-title">TOUR DE ROMANDIE, Switzerland</a> </td>
                        <td class="e_h1">16.12.2016</td>
                        <td class="e_h1">10.00 PM</td>
                        <td class="e_h1">Switzerland</td>
                        <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><img src="/imagenesprueba/peques/05.png" alt="" /><a href="hotels-list.html" class="events-title">TOUR DE POLOGNE, Poland</a> </td>
                        <td class="e_h1">16.12.2016</td>
                        <td class="e_h1">10.00 PM</td>
                        <td class="e_h1">Poland</td>
                        <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><img src="/imagenesprueba/peques/06.png" alt="" /><a href="hotels-list.html" class="events-title">Future of Marketing,Sydney, Australia</a> </td>
                        <td class="e_h1">16.12.2016</td>
                        <td class="e_h1">10.00 PM</td>
                        <td class="e_h1">Australia</td>
                        <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td><img src="/imagenesprueba/peques/07.png" alt="" /><a href="hotels-list.html" class="events-title">Eiffel Tower, Paris</a> </td>
                        <td class="e_h1">16.12.2016</td>
                        <td class="e_h1">10.00 PM</td>
                        <td class="e_h1">France</td>
                        <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td><img src="/imagenesprueba/peques/08.png" alt="" /><a href="hotels-list.html" class="events-title">PARIS - ROUBAIX, England</a> </td>
                        <td class="e_h1">16.12.2016</td>
                        <td class="e_h1">10.00 PM</td>
                        <td class="e_h1">England</td>
                        <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td><img src="/imagenesprueba/peques/09.png" alt="" /><a href="hotels-list.html" class="events-title">Dubai Beach Resort, Dubai</a> </td>
                        <td class="e_h1">16.12.2016</td>
                        <td class="e_h1">10.00 PM</td>
                        <td class="e_h1">Dubai</td>
                        <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td><img src="/imagenesprueba/peques/11.png" alt="" /><a href="hotels-list.html" class="events-title">TOUR DE POLOGNE, Poland</a> </td>
                        <td class="e_h1">16.12.2016</td>
                        <td class="e_h1">10.00 PM</td>
                        <td class="e_h1">Poland</td>
                        <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!--====== POPULAR TOUR PLACES ==========-->
<section>
    <div class="rows pla pad-bot-redu tb-space">
        <div class="pla1 p-home container">
            <!-- TITLE & DESCRIPTION -->
            <div class="spe-title spe-title-1">
                <h2>Top <span>Sight Seeing</span> in this month</h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
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
