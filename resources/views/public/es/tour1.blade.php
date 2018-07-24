@extends('public.es.layouts.master')

@section('content')




<!--====== TOUR DETAILS ==========-->
<section>
  <div class="rows inn-page-bg com-colo">
    <div class="container inn-page-con-bg tb-space">
      <div class="col-md-9">
        <!--====== TOUR TITLE ==========-->
        <div class="tour_head">
          <h2>EN EL CORAZÓN DE LAS COMUNIDADES ANDINAS<span class="tour_star"></span></h2> </div>

        <!--====== ROOMS: HOTEL BOOKING ==========-->
        <div class="tour_head1 hotel-book-room">

          <div id="myCarousel1" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators carousel-indicators-1">
              <li data-target="#myCarousel1" data-slide-to="0"><img src="/imagenesprueba/1.jpg" alt="Chania">
              </li>
              <li data-target="#myCarousel1" data-slide-to="1"><img src="/imagenesprueba/2.jpg" alt="Chania">
              </lijpg
              <li data-target="#myCarousel1" data-slide-to="2"><img src="/imagenesprueba/3.jpg" alt="Chania">
              </li>
              <li data-target="#myCarousel1" data-slide-to="3"><img src="/imagenesprueba/4.jpg" alt="Chania">
              </li>
              <li data-target="#myCarousel1" data-slide-to="4"><img src="/imagenesprueba/5.jpg" alt="Chania">
              </li>

            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-inner1" role="listbox">
              <div class="item active"> <img src="/imagenesprueba/1.jpg" alt="Chania" width="460" height="345" style="height:500px;"></div>
              <div class="item"> <img src="/imagenesprueba/2.jpg" alt="Chania" width="460" height="345" style="height:500px;"> </div>
              <div class="item"> <img src="/imagenesprueba/3.jpg" alt="Chania" width="460" height="345" style="height:500px;"> </div>
              <div class="item"> <img src="/imagenesprueba/4.jpg" alt="Chania" width="460" height="345" style="height:500px;"> </div>
              <div class="item"> <img src="/imagenesprueba/5.jpg" alt="Chania" width="460" height="345" style="height:500px;"> </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev"> <span><i class="fa fa-angle-left hotel-gal-arr" aria-hidden="true"></i></span> </a>
            <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next"> <span><i class="fa fa-angle-right hotel-gal-arr hotel-gal-arr1" aria-hidden="true"></i></span> </a>
          </div>
        </div>


        <!--====== TOUR DESCRIPTION ==========-->
        <div class="tour_head1">
          <h3>Description</h3>
          <p>Un curso diferente, fuera de los caminos trillados, reuniones de las comunidades Un curso diferente, fuera de los caminos trillados, para conocer a las comunidades andinas. Comience por quedarse en el corazón del Cañón del Colca, dentro de la comunidad de Pumachiri. Luego continúa su viaje hacia el Lago Titicaca y su comunidad de Llachón antes de terminar su descubrimiento por la región de Cusco y especialmente la comunidad de Maras. Durante esta inmersión, descubre las actividades cotidianas y tradiciones ancestrales de los habitantes de estos tres pueblos. ¡Un descubrimiento en profundidad de la cultura peruana!</p>
          </div>

        <!--====== DURATION ==========-->
        <div class="tour_head1 l-info-pack-days days">
          <h3>Detalla del itinerario</h3>
          <ul>
            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
              <h4><span>Day : 1</span> Llegada a Lima</h4>
              <p>
                Llegada al aeropuerto de Lima, recepción y traslado al hotel. Noche libre. Alojamiento en hotel en Lima
              </p>
            </li>
            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
              <h4><span>Day : 2</span> Lima - Arequipa (2400m)</h4>
              <p>
                Por la mañana, vuelo a Arequipa. A su llegada, recepción y traslado al hotel. Resto del día libre para aclimatarse tranquilamente a la altitud. Alojamiento en hotel en Arequipa.
              </p>
            </li>
            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
              <h4><span>Day : 3</span> Arequipa (2400m)</h4>
              <p>
                Por la mañana, descubra la ciudad blanca y su centro colonial, incluyendo el Museo Santuarios Andinos, el Convento de Santa Catalina y las torres de vigilancia de Yanahuara y Cayma, ofreciendo una vista panorámica de los volcanes circundantes. Tarde libre. Alojamiento en hotel en Arequipa.
              </p>
            </li>
            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
              <h4><span>Day : 4</span> Arequipa (2400M) - Chivay (3651M) - Yanque (3440M)</h4>
              <p>
                Salida hacia el Cañón del Colca, uno de los más profundos del mundo. Llegada a Chivay, la "capital del cañón", visita del pueblo, su iglesia y su mercado tradicional, y posibilidad de bañarse en los baños termales. Continuación hacia el pueblo de Yanque. Conozca a sus invitados por la noche. Cena y alojamiento en Yanque.
              </p>
            </li>
            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
              <h4><span>Day : 5</span> Yanque (3440M) - Cabanaconde</h4>
              <p>
                Mañana con sus anfitriones que le hacen descubrir su forma de vida local. Por la tarde, salida hacia Cabanaconde para un corto paseo hasta el mirador de Achachiua, desde donde se tiene una magnífica vista del cañón y del río Colca. Retorno al final del día al pueblo e instalación en su hotel. Noche en el hotel en el Cañón del Colca.
              </p>
            </li>

            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
              <h4><span>Day : 6</span> Cabanaconde - Chivay - Puno (3812 M)</h4>
              <p>
                Salida temprano por la mañana para la Croix du Condor, un mirador que ofrece una magnífica vista del cañón del Colca y desde donde se puede admirar el vuelo del ave más grande del mundo: el cóndor. Retorno a Chivay, luego salida en bus turístico hacia Puno. Llegada por la noche. Alojamiento en hotel en Puno
              </p>
            </li>


            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
              <h4><span>Day : 7</span> Puno (3812 M) - Llachon (3850 M)</h4>
              <p>
                Salida hacia el pequeño pueblo de Llachon y descubriendo la península de Capachica y los alrededores de Llachón durante una caminata fácil a orillas del lago. Regresa a tu familia anfitriona con quien pasas el resto del día. Le hará descubrir la artesanía local y sus hijos podrán jugar con los niños del pueblo. Cena y alojamiento en Llachon
              </p>
            </li>


            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
              <h4><span>Day : 8</span> Llachon (3850 M) - Uros (Titinos) - Amanti (3850 m) - Puno (3825 m)</h4>
              <p>
                Excursión de un día al Lago Titicaca. Visite las islas flotantes de los Uros y la isla de Amantani donde se puede caminar a la Pachatata (4200 m) y disfrutar, si el tiempo lo permite, la magnífica puesta de sol sobre el lago. Regreso a Puno por la tarde. Alojamiento en hotel en Puno.
              </p>
            </li>


            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
              <h4><span>Day : 9</span> Puno (3812M) - Cusco (3350m)</h4>
              <p>
                Salida en bus turístico a Cusco. En el camino visitaremos el pueblo de Pucará, el paso de La Raya (4360 m), que simboliza el final del altiplano y el comienzo de la región Cusco, almuerzo en Sicuani y visitar el santuario Inca de Raqchi, y la Iglesia de San Pedro en Andahuaylillas, conocida como la Capilla Sixtina de Sudamérica. Llegada a Cusco por la tarde. Noche en hotel en Cusco.
              </p>
            </li>

            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
              <h4><span>Day : 10</span>Cusco (3350 m), 4 Ruinas y visita de la ciudad</h4>
              <p>
                Por la mañana, visitaremos las cuatro ruinas ubicadas en las alturas del Cusco: Tambomachay, PucaPucara, Kenko y finalmente, Sacsayhuaman. Regreso al centro de la ciudad para visitar la catedral de Cusco y el monasterio Santo Domingo, antiguo templo del Sol también llamado Koricancha. Resto del día libre. Noche en hotel en Cusco.
              </p>
            </li>

            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
              <h4><span>Day : 11</span> Cusco (3350m) - Pisac (3400M) - Patabamba (3848M)</h4>
              <p>
                Salida hacia el Valle Sagrado y visita del complejo arqueológico de Pisaq. Parada en el mercado local de la villa de Pisaq, antes de ir a Patabamba donde conocer a los lugareños con los que va a pasar la noche. Cena y alojamiento en Patabamba.
              </p>
            </li>


            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
              <h4><span>Day : 12</span> Patabamba (3848M) - Huchuy Qosqo (3950M) - Lamay - Aguas Calientes (2040 M)</h4>
              <p>
                Día de senderismo: se pasa por el pequeño pueblo de Sihuas, luego el paso de Pukamarca (3900m) donde tendrá una magnífica vista de la cordillera de Urubamba y el Valle Sagrado. Seguir el cañón Puncu Puma "la puerta del Puma" antes de tomar prestado un antiguo camino Inca restaurado en el proyecto Qapacñan, "el camino" que le llevará al sitio Inca aislada y misteriosa Huchuy Qosqo , el "pequeño Cusco". Después de visitar el sitio, y después del almuerzo con una familia local, descenso a Lamay y traslado a Ollantaytambo para tomar el tren a Aguas Calientes, un pequeño pueblo al pie de la famosa Machupicchu. Alojamiento en hotel en Aguas Calientes.
              </p>
            </li>


            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
              <h4><span>Day : 13</span> Aguas Calientes (2040M) - Machu Picchu (2450M) - Maras (3300 m)</h4>
              <p>
                Temprano por la mañana, tour guiado de los más famosos sitio Inca del país: Machupicchu y tiempo libre para continuar la visita por su cuenta antes de tomar el tren a Ollantaytambo, donde se le llevará hasta el pueblo de Maras. Conozca a sus invitados por la noche. Cena y alojamiento en Maras.
              </p>
            </li>

            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
              <h4><span>Day : 14</span> Moray (3500 m) - Chinchero (3780 m) - Cusco</h4>
              <p>
              Este día, visitar las minas de sal de Maras, el sitio de Moray y Chinchero, la "ciudad del arco iris", conocida por sus correas de la técnica textil, ponchos y capas tejidas y teñidas de acuerdo con el método tradicional de Inca. Conoce a Sonia que te dará una demostración de tejer. Después de compartir un delicioso almuerzo con una familia local, visitar las ruinas y luego regresar a Cusco. Noche en hotel en Cusco.
              </p>
            </li>


            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
              <h4><span>Day : 15</span> Llegada a Lima</h4>
              <p>
                Vuelo a Lima, luego conexión a su vuelo internacional.
              </p>
            </li>

        </ul>
        </div>



        <div>
          <div class="dir-rat">
            <div class="dir-rat-inn dir-rat-title">
              <h3>Write Your Rating Here</h3>
              <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
              <fieldset class="rating">
                <input type="radio" id="star5" name="rating" value="5" />
                <label class="full" for="star5" title="Awesome - 5 stars"></label>
                <input type="radio" id="star4half" name="rating" value="4 and a half" />
                <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                <input type="radio" id="star4" name="rating" value="4" />
                <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                <input type="radio" id="star3half" name="rating" value="3 and a half" />
                <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                <input type="radio" id="star3" name="rating" value="3" />
                <label class="full" for="star3" title="Meh - 3 stars"></label>
                <input type="radio" id="star2half" name="rating" value="2 and a half" />
                <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                <input type="radio" id="star2" name="rating" value="2" />
                <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                <input type="radio" id="star1half" name="rating" value="1 and a half" />
                <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                <input type="radio" id="star1" name="rating" value="1" />
                <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                <input type="radio" id="starhalf" name="rating" value="half" />
                <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
              </fieldset>
            </div>
            <div class="dir-rat-inn">
              <form class="dir-rat-form">
                <div class="form-group col-md-6 pad-left-o">
                  <input type="text" class="form-control" id="email11" placeholder="Enter Name"> </div>
                <div class="form-group col-md-6 pad-left-o">
                  <input type="number" class="form-control" id="email12" placeholder="Enter Mobile"> </div>
                <div class="form-group col-md-6 pad-left-o">
                  <input type="email" class="form-control" id="email13" placeholder="Enter Email id"> </div>
                <div class="form-group col-md-6 pad-left-o">
                  <input type="text" class="form-control" id="email14" placeholder="Enter your City"> </div>
                <div class="form-group col-md-12 pad-left-o">
                  <textarea placeholder="Write your message"></textarea>
                </div>
                <div class="form-group col-md-12 pad-left-o">
                  <input type="submit" value="SUBMIT" class="link-btn"> </div>
              </form>
            </div>
            <!--COMMENT RATING-->
            <div class="dir-rat-inn dir-rat-review">
              <div class="row">
                <div class="col-md-3 dir-rat-left"> <img src="/assets/public/images/reviewer/4.jpeg" alt="">
                  <p>Orange Fab & Weld <span>19th January, 2017</span> </p>
                </div>
                <div class="col-md-9 dir-rat-right">
                  <div class="dir-rat-star"> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
                  <p>Michael & his team have been helping us with our eqiupment finance for the past 5 years - I think that says a quite a lot.. Michael is always ready to go the extra mile, always available, always helpfull that goes the same for his team that work with him - definatley our first phone call.</p>
                  <ul>
                    <li><a href="#"><span>Like</span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><span>Dis-Like</span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><span>Report</span> <i class="fa fa-flag-o" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><span>Comments</span> <i class="fa fa-commenting-o" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><span>Share Now</span>  <i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                  </ul>

                </div>
              </div>
            </div>
            <!--COMMENT RATING-->
            <div class="dir-rat-inn dir-rat-review">
              <div class="row">
                <div class="col-md-3 dir-rat-left"> <img src="/assets/public/images/reviewer/3.jpeg" alt="">
                  <p>Orange Fab & Weld <span>19th January, 2017</span> </p>
                </div>
                <div class="col-md-9 dir-rat-right">
                  <div class="dir-rat-star"> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
                  <p>Michael & his team have been helping us with our eqiupment finance for the past 5 years - I think that says a quite a lot.. Michael is always ready to go the extra mile, always available, always helpfull that goes the same for his team that work with him - definatley our first phone call.</p>
                  <ul>
                    <li><a href="#"><span>Like</span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><span>Dis-Like</span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><span>Report</span> <i class="fa fa-flag-o" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><span>Comments</span> <i class="fa fa-commenting-o" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><span>Share Now</span>  <i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                  </ul>
                </div>
              </div>
            </div>
            <!--COMMENT RATING-->
            <div class="dir-rat-inn dir-rat-review">
              <div class="row">
                <div class="col-md-3 dir-rat-left"> <img src="/assets/public/images/reviewer/1.jpg" alt="">
                  <p>Orange Fab & Weld <span>19th January, 2017</span> </p>
                </div>
                <div class="col-md-9 dir-rat-right">
                  <div class="dir-rat-star"> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
                  <p>Michael & his team have been helping us with our eqiupment finance for the past 5 years - I think that says a quite a lot.. Michael is always ready to go the extra mile, always available, always helpfull that goes the same for his team that work with him - definatley our first phone call.</p>
                  <ul>
                    <li><a href="#"><span>Like</span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><span>Dis-Like</span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><span>Report</span> <i class="fa fa-flag-o" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><span>Comments</span> <i class="fa fa-commenting-o" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><span>Share Now</span>  <i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 tour_r">

        <!--====== TRIP INFORMATION ==========-->
        <div class="tour_right tour_incl tour-ri-com">
          <h3>Reservar</h3>
          <ul>
            <li>Location : Rio,Brazil</li>
            <li>Arrival Date: Nov 12, 2017</li>
            <li>Departure Date: Nov 21, 2017</li>
            <li>Free Sightseeing & Hotel</li>
          </ul>
          <div class="text-center">
            <a href="#" class="link-btn">RESERVAR AHORA</a>
          </br></br>
          </div>


        </div>


        <div class="tour_right tour_incl tour-ri-com">

          <div class="tour_head1 tout-map map-container">
            <h3>Localización</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6290415.157581651!2d-93.99661009218904!3d39.661150926343694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880b2d386f6e2619%3A0x7f15825064115956!2sIllinois%2C+USA!5e0!3m2!1sen!2sin!4v1467884030780" allowfullscreen></iframe>
          </div>

        </div>



        <!--====== PUPULAR TOUR PACKAGES ==========-->
        <div class="tour_right tour_rela tour-ri-com">
          <h3>Paquetes Populares</h3>
          <div class="tour_rela_1"> <img src="/assets/public/images/related1.png" alt="" />
            <h4>Dubai 7Days / 6Nights</h4>
            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p> <a href="#" class="link-btn">Ver Paquete</a> </div>
          <div class="tour_rela_1"> <img src="/assets/public/images/related2.png" alt="" />
            <h4>Mauritius 4Days / 3Nights</h4>
            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p> <a href="#" class="link-btn">Ver Paquete</a> </div>
          <div class="tour_rela_1"> <img src="/assets/public/images/related3.png" alt="" />
            <h4>India 14Days / 13Nights</h4>
            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p> <a href="#" class="link-btn">Ver Paquete</a> </div>
        </div>
      </div>
    </div>
  </div>
</section>




@endsection
