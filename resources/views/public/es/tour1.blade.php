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





          <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#sectionA">ITINERARIO</a></li>
          <li><a data-toggle="tab" href="#sectionB">ORGANIZACION</a></li>

      </ul>


      <div class="tab-content">
          <div id="sectionA" class="tab-pane fade in active">
          <br>
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-plus"></span><span>&nbsp;&nbsp;&nbsp;Day : 1</span> <strong>Llegada a Lima</strong> </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Llegada al aeropuerto de Lima, recepción y traslado al hotel. Noche libre. Alojamiento en hotel en Lima</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-plus"></span><span>&nbsp;&nbsp;&nbsp;Day : 2</span><strong>Lima - Arequipa (2400m)</strong> </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Por la mañana, vuelo a Arequipa. A su llegada, recepción y traslado al hotel. Resto del día libre para aclimatarse tranquilamente a la altitud. Alojamiento en hotel en Arequipa.</p>
                        </div>
                    </div>
                </div>

                @for($i = 0 ; $i < 5 ; $i++)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}}"><span class="glyphicon glyphicon-plus"></span> <span>&nbsp;&nbsp;&nbsp;Day : 3</span><strong>Arequipa (2400m)</strong> </a>
                        </h4>
                    </div>
                    <div id="collapse{{$i}}" class="panel-collapse collapse">
                        <div class="panel-body">
                            Por la mañana, descubra la ciudad blanca y su centro colonial, incluyendo el Museo Santuarios Andinos, el Convento de Santa Catalina y las torres de vigilancia de Yanahuara y Cayma, ofreciendo una vista panorámica de los volcanes circundantes. Tarde libre. Alojamiento en hotel en Arequipa.</p>
                        </div>
                    </div>
                </div>
                @endfor

            </div>

          </div>
          <div id="sectionB" class="tab-pane fade">
                <div class="row">
                    <div class="col-sm-12">
                      <br>
                          <h5>GENERAL</h5>
                          <p>Viaje acompañado de un guía privado peruano de habla francesa en cada etapa. En otras palabras, tendrá una guía diferente en cada región visitada, dadas sus especificidades. El nivel de francés de las guías difiere de una región a otra. Durante las transferencias, se beneficia de la asistencia de habla francesa.

                          </p>
                          <br>
                      </div>
                      <div class="col-sm-12">
                          <h5>ALOJAMIENTO</h5>
                          <p>En Perú, los estándares del hotel son diferentes de los que usted puede conocer. Aquí hay algunos detalles útiles sobre cada tipo de alojamiento: - Campamento: gracias a la perfecta organización de nuestro (s) cocinero (s) y arriero (s), ¡puede relajarse realmente después de un buen día de caminata! Tenga la certeza de que tenemos una carpa de cocina, una carpa para las comidas, un baño de campaña. Para dos personas, ofrecemos una carpa de 3 plazas para mayor comodidad. También le ofrecemos un colchón cómodo y un recipiente con agua caliente al comienzo y al final del día para su inodoro; y, por supuesto, preparamos comidas calientes y completas. - Hoteles de 2 * y 3 * (estándares locales): habitaciones cómodas, sencillas y limpias, baño privado con ducha de agua caliente; algunos hoteles ofrecen habitaciones equipadas con caja de seguridad, sistema de calefacción, mini bar ... En la medida de nuestras posibilidades, elegimos hoteles cuya situación geográfica le permita aprovechar al máximo la ciudad y de sus atracciones.

                        </p>
                          <br>
                      </div>
                        <div class="col-sm-12">
                          <h5>COMIDAS</h5>
                          <p>Para permitirle disfrutar de más libertad durante su viaje, solo se incluyen algunas comidas en nuestros programas: generalmente se trata de comidas durante el trekking (almuerzo frío y calor en la noche) y durante ciertas excursiones, cuando la situación se presta a ello (en la carretera Puno-Cusco, en el Valle Sagrado, etc.). Para las comidas no incluidas, espere un promedio de $ 5 a $ 10 por persona. ¡Esto le permite elegir la hora, el lugar y el menú, dependiendo de su inspiración!

                          </p>
                          <br>
                      </div>
                      <div class="col-sm-12">
                          <h5>TRANSPORTE</h5>
                          <p>Sus viajes se realizarán en transporte privado durante la mayor parte de su viaje: tendrá a su servicio un vehículo privado conducido por un conductor de habla hispana que se adapta a su ritmo (foto, compras, etc.). Algunas excepciones: Los viajes Lima - Huaraz - Mancos y Huaraz - Lima se realizarán en bus cómodo y seguro.

                            </p>
                          <br>
                      </div>
                    </div>
          </div>

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


@section('script')


<script>
    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.in").each(function(){
        	$(this).siblings(".panel-heading").find(".glyphicon").addClass("glyphicon-minus").removeClass("glyphicon-plus");
        });

        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        	$(this).parent().find(".glyphicon").removeClass("glyphicon-plus").addClass("glyphicon-minus");
        }).on('hide.bs.collapse', function(){
        	$(this).parent().find(".glyphicon").removeClass("glyphicon-minus").addClass("glyphicon-plus");
        });
    });
</script>


@endsection
