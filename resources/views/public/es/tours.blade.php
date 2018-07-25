@extends('public.es.layouts.master')

@section('content')



<section class="container">
  <div class="row">
    <div class="col-md-12">
      <br><br>
    </div>
  </div>
  <div class="row">
    <div class="hot-page2-alp-con">
      <!--LEFT LISTINGS-->
      <div class="col-md-3 hot-page2-alp-con-left">

        <!--PART 7 : LEFT LISTINGS-->
        <div class="hot-page2-alp-l3 hot-page2-alp-l-com">
          <h4><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Travel Available Check</h4>
          <div class="hot-page2-alp-l-com1 hot-room-ava-check">
          <form class="v2-search-form package-form">
          <div class="row">
            <div class="input-field col s12">
              <input type="text" id="select-city-1" class="autocomplete validate">
              <label for="select-city-1">Select City or Place</label>
            </div>
            <div class="input-field col s12">
              <select>
                <option value="" disabled selected>Select your package</option>
                <option value="1">Honeymoon Package</option>
                <option value="2">Family Package</option>
                <option value="3">Holiday Package</option>
                <option value="1">Group Package</option>
                <option value="1">Regular Package</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input type="text" id="from" name="from">
              <label for="from">Arrival Date</label>
            </div>
            <div class="input-field col s6">
              <input type="text" id="to" name="to">
              <label for="to">Departure Date</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <select>
                <option value="" disabled selected>No of adults</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="1">4</option>
                <option value="1">5</option>
                <option value="1">6</option>
              </select>
            </div>
            <div class="input-field col s6">
              <select>
                <option value="" disabled selected>No of childrens</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="1">4</option>
                <option value="1">5</option>
                <option value="1">6</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
              <select>
                <option value="" disabled selected>Min Price</option>
                <option value="1">$200</option>
                <option value="2">$500</option>
                <option value="3">$1000</option>
                <option value="1">$5000</option>
                <option value="1">$10,000</option>
                <option value="1">$50,000</option>
              </select>
            </div>
            <div class="input-field col s6">
              <select>
                <option value="" disabled selected>Max Price</option>
                <option value="1">$200</option>
                <option value="2">$500</option>
                <option value="3">$1000</option>
                <option value="1">$5000</option>
                <option value="1">$10,000</option>
                <option value="1">$50,000</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn v2-ser-btn">
            </div>
          </div>
        </form>
          </div>
        </div>
        <!--PART 4 : LEFT LISTINGS-->
        <div class="hot-page2-alp-l3 hot-page2-alp-l-com">
          <h4><i class="fa fa-map-marker" aria-hidden="true"></i> Select City & Country</h4>
          <div class="hot-page2-alp-l-com1 hot-page2-alp-p4">
            <form>
              <ul>
                <li>
                  <div class="checkbox checkbox-info checkbox-circle">
                    <input id="chp41" class="styled" type="checkbox" checked="">
                    <label for="chp41"> Nashville, USA </label>
                  </div>
                </li>
                <li>
                  <div class="checkbox checkbox-info checkbox-circle">
                    <input id="chp42" class="styled" type="checkbox">
                    <label for="chp42"> Hull, England </label>
                  </div>
                </li>
                <li>
                  <div class="checkbox checkbox-info checkbox-circle">
                    <input id="chp43" class="styled" type="checkbox">
                    <label for="chp43"> Seoul, South Korea </label>
                  </div>
                </li>
                <li>
                  <div class="checkbox checkbox-info checkbox-circle">
                    <input id="chp44" class="styled" type="checkbox">
                    <label for="chp44"> Ljubljana, Slovenia </label>
                  </div>
                </li>
                <li>
                  <div class="checkbox checkbox-info checkbox-circle">
                    <input id="chp45" class="styled" type="checkbox">
                    <label for="chp45"> Wroclaw, Poland </label>
                  </div>
                </li>
              </ul>
            </form> <a href="javascript:void(0);" class="hot-page2-alp-p4-btn-s">view more</a> </div>
        </div>
        <!--END PART 4 : LEFT LISTINGS-->
        <!--PART 5 : LEFT LISTINGS-->
        <div class="hot-page2-alp-l3 hot-page2-alp-l-com">
          <h4><i class="fa fa-dollar" aria-hidden="true"></i> Select Price Range</h4>
          <div class="hot-page2-alp-l-com1 hot-page2-alp-p5">
            <form>
              <ul>
                <li>
                  <div class="checkbox checkbox-info checkbox-circle">
                    <input id="chp51" class="styled" type="checkbox" checked="">
                    <label for="chp51"> $5000 - Above </label>
                  </div>
                </li>
                <li>
                  <div class="checkbox checkbox-info checkbox-circle">
                    <input id="chp52" class="styled" type="checkbox">
                    <label for="chp52"> $4000 - $5000 </label>
                  </div>
                </li>
                <li>
                  <div class="checkbox checkbox-info checkbox-circle">
                    <input id="chp53" class="styled" type="checkbox">
                    <label for="chp53"> $3000 - $4000 </label>
                  </div>
                </li>
                <li>
                  <div class="checkbox checkbox-info checkbox-circle">
                    <input id="chp54" class="styled" type="checkbox">
                    <label for="chp54"> $2000 - $3000 </label>
                  </div>
                </li>
                <li>
                  <div class="checkbox checkbox-info checkbox-circle">
                    <input id="chp55" class="styled" type="checkbox">
                    <label for="chp55"> $2000 - Below </label>
                  </div>
                </li>
              </ul>
            </form> <a href="javascript:void(0);" class="hot-page2-alp-p5-btn-s">view more</a> </div>
        </div>
        <!--END PART 5 : LEFT LISTINGS-->

    
      </div>
      <!--END LEFT LISTINGS-->
      <!--RIGHT LISTINGS-->
      <div class="col-md-9 hot-page2-alp-con-right">
        <div class="hot-page2-alp-con-right-1">
          <!--LISTINGS-->
          <div class="row">
            <!--LISTINGS START-->
            <div class="hot-page2-alp-r-list">
              <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                <a href="javascript:void(0);">
                  <div class="hotel-list-score">4.5</div>
                  <div class="hot-page2-hli-1"> <img src="/imagenesprueba/1.jpg" alt=""> </div>
                </a>
              </div>
              <div class="col-md-6">
                <div class="trav-list-bod">
                <a href="{{('tour')}}"><h3>EN EL CORAZÓN DE LAS COMUNIDADES ANDINAS</h3></a>
                <p>Un curso diferente, fuera de los caminos trillados, reuniones de las comunidades Un curso diferente, fuera de los caminos trillados, </p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
                  <div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Prices Starting</span> <span class="hot-list-p3-2">$650</span><span class="hot-list-p3-4">
                    <a href="{{('tour')}}" class="hot-page2-alp-quot-btn">RESERVAR</a>
                  </span> </div>
              </div>
              <div>
                <div class="trav-ami">
                  <h4>Detail and Includes</h4>
                  <ul>
                    <li><img src="/assets/public/images/icon/a14.png" alt=""> <span>Sightseeing</span></li>
                    <li><img src="/assets/public/images/icon/a15.png" alt=""> <span>Hotel</span></li>
                    <li><img src="/assets/public/images/icon/a16.png" alt=""> <span>Transfer</span></li>
                    <li><img src="/assets/public/images/icon/a17.png" alt=""> <span>Luggage</span></li>
                    <li><img src="/assets/public/images/icon/a18.png" alt=""> <span>Duration 8N/9D</span></li>
                    <li><img src="/assets/public/images/icon/a19.png" alt=""> <span>Location : Rio,Brazil</span></li>
                    <li><img src="/assets/public/images/icon/dbl4.png" alt=""> <span>Stay Plan</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <!--END LISTINGS-->
            <!--LISTINGS START-->
            <div class="hot-page2-alp-r-list">
              <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                <a href="javascript:void(0);">
                  <div class="hotel-list-score">4.3</div>
                  <div class="hot-page2-hli-1"> <img src="/imagenesprueba/6.png" alt=""> </div>
                </a>
              </div>
              <div class="col-md-6">
                <div class="trav-list-bod">
                <a href="{{('tour')}}"><h3>PÉROU-BOLIVIE EXPRESS</h3></a>
                <p>Ce combiné « express » Pérou & Bolivie vous permettra de découvrir en peu de temps les sites majeurs et les paysages les..</p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
                  <div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Prices Starting</span> <span class="hot-list-p3-2">$420</span><span class="hot-list-p3-4">
                    <a href="{{('tour')}}" class="hot-page2-alp-quot-btn">RESERVAR</a>
                  </span> </div>
              </div>
              <div>
                <div class="trav-ami">
                  <h4>Detail and Includes</h4>
                  <ul>
                    <li><img src="/assets/public/images/icon/a14.png" alt=""> <span>Sightseeing</span></li>
                    <li><img src="/assets/public/images/icon/a15.png" alt=""> <span>Hotel</span></li>
                    <li><img src="/assets/public/images/icon/a16.png" alt=""> <span>Transfer</span></li>
                    <li><img src="/assets/public/images/icon/a17.png" alt=""> <span>Luggage</span></li>
                    <li><img src="/assets/public/images/icon/a18.png" alt=""> <span>Duration 8N/9D</span></li>
                    <li><img src="/assets/public/images/icon/a19.png" alt=""> <span>Location : Rio,Brazil</span></li>
                    <li><img src="/assets/public/images/icon/dbl4.png" alt=""> <span>Stay Plan</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <!--END LISTINGS-->
            <!--LISTINGS START-->
            <div class="hot-page2-alp-r-list">
              <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                <a href="javascript:void(0);">
                  <div class="hotel-list-score">4.0</div>
                  <div class="hot-page2-hli-1"> <img src="imagenesprueba/7.png" alt=""> </div>
                </a>
              </div>
              <div class="col-md-6">
                <div class="trav-list-bod">
                <a href="{{('tour')}}"><h3>TESOROS DEL SUR PERÚ - EN GRUPO</h3></a>
                <p>Desde la costa hasta Machu Picchu, esta estancia le ofrece descubrimientos tan variados como completos. Desde la costa .</p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
                  <div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Prices Starting</span> <span class="hot-list-p3-2">$720</span><span class="hot-list-p3-4">
                    <a href="{{('tour')}}" class="hot-page2-alp-quot-btn">RESERVAR</a>
                  </span> </div>
              </div>
              <div>
                <div class="trav-ami">
                  <h4>Detail and Includes</h4>
                  <ul>
                    <li><img src="/assets/public/images/icon/a14.png" alt=""> <span>Sightseeing</span></li>
                    <li><img src="/assets/public/images/icon/a15.png" alt=""> <span>Hotel</span></li>
                    <li><img src="/assets/public/images/icon/a16.png" alt=""> <span>Transfer</span></li>
                    <li><img src="/assets/public/images/icon/a17.png" alt=""> <span>Luggage</span></li>
                    <li><img src="/assets/public/images/icon/a18.png" alt=""> <span>Duration 8N/9D</span></li>
                    <li><img src="/assets/public/images/icon/a19.png" alt=""> <span>Location : Rio,Brazil</span></li>
                    <li><img src="/assets/public/images/icon/dbl4.png" alt=""> <span>Stay Plan</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <!--END LISTINGS-->
            <!--LISTINGS START-->
            <div class="hot-page2-alp-r-list">
              <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                <a href="javascript:void(0);">
                  <div class="hotel-list-score">4.8</div>
                  <div class="hot-page2-hli-1"> <img src="imagenesprueba/8.png" alt=""> </div>
                </a>
              </div>
              <div class="col-md-6">
                <div class="trav-list-bod">
                <a href="{{('tour')}}"><h3>PERU EN FAMILIA</h3></a>
                <p>Este viaje hará las delicias tanto de los jóvenes como de los mayores. Venga y descubra el Perú de una manera divertida...</p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
                  <div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Prices Starting</span> <span class="hot-list-p3-2">$860</span><span class="hot-list-p3-4">
                    <a href="{{('tour')}}" class="hot-page2-alp-quot-btn">RESERVAR</a>
                  </span> </div>
              </div>
              <div>
                <div class="trav-ami">
                  <h4>Detail and Includes</h4>
                  <ul>
                    <li><img src="/assets/public/images/icon/a14.png" alt=""> <span>Sightseeing</span></li>
                    <li><img src="/assets/public/images/icon/a15.png" alt=""> <span>Hotel</span></li>
                    <li><img src="/assets/public/images/icon/a16.png" alt=""> <span>Transfer</span></li>
                    <li><img src="/assets/public/images/icon/a17.png" alt=""> <span>Luggage</span></li>
                    <li><img src="/assets/public/images/icon/a18.png" alt=""> <span>Duration 8N/9D</span></li>
                    <li><img src="/assets/public/images/icon/a19.png" alt=""> <span>Location : Rio,Brazil</span></li>
                    <li><img src="/assets/public/images/icon/dbl4.png" alt=""> <span>Stay Plan</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <!--END LISTINGS-->
            <!--LISTINGS START-->
            <div class="hot-page2-alp-r-list">
              <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                <a href="javascript:void(0);">
                  <div class="hotel-list-score">4.4</div>
                  <div class="hot-page2-hli-1"> <img src="imagenesprueba/9.png" alt=""> </div>
                </a>
              </div>
              <div class="col-md-6">
                <div class="trav-list-bod">
                <a href="{{('tour')}}"><h3>PERÚ CULTURAL, DEL NORTE AL SUR</h3></a>
                <p>De norte a sur, esta estancia le ofrece descubrimientos llenos de historia tan variada como completa. Perú es un país cargado de .</p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
                  <div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Prices Starting</span> <span class="hot-list-p3-2">$480</span><span class="hot-list-p3-4">
                    <a href="{{('tour')}}" class="hot-page2-alp-quot-btn">RESERVAR</a>
                  </span> </div>
              </div>
              <div>
                <div class="trav-ami">
                  <h4>Detail and Includes</h4>
                  <ul>
                    <li><img src="/assets/public/images/icon/a14.png" alt=""> <span>Sightseeing</span></li>
                    <li><img src="/assets/public/images/icon/a15.png" alt=""> <span>Hotel</span></li>
                    <li><img src="/assets/public/images/icon/a16.png" alt=""> <span>Transfer</span></li>
                    <li><img src="/assets/public/images/icon/a17.png" alt=""> <span>Luggage</span></li>
                    <li><img src="/assets/public/images/icon/a18.png" alt=""> <span>Duration 8N/9D</span></li>
                    <li><img src="/assets/public/images/icon/a19.png" alt=""> <span>Location : Rio,Brazil</span></li>
                    <li><img src="/assets/public/images/icon/dbl4.png" alt=""> <span>Stay Plan</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <!--END LISTINGS-->
            <!--LISTINGS START-->
            <div class="hot-page2-alp-r-list">
              <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                <a href="javascript:void(0);">
                  <div class="hotel-list-score">4.2</div>
                  <div class="hot-page2-hli-1"> <img src="imagenesprueba/10.png" alt=""> </div>
                </a>
              </div>
              <div class="col-md-6">
                <div class="trav-list-bod">
                <a href="{{('tour')}}"><h3>VIAJE DE LUNA DE MIEL EN PERÚ</h3></a>
                <p>Venga a celebrar su unión en Perú: país mágico y místico. En el programa: visitas completas a los sitios más emblemáticos,</p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
                  <div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Prices Starting</span> <span class="hot-list-p3-2">$1200</span><span class="hot-list-p3-4">
                    <a href="{{('tour')}}" class="hot-page2-alp-quot-btn">RESERVAR</a>
                  </span> </div>
              </div>
              <div>
                <div class="trav-ami">
                  <h4>Detail and Includes</h4>
                  <ul>
                    <li><img src="/assets/public/images/icon/a14.png" alt=""> <span>Sightseeing</span></li>
                    <li><img src="/assets/public/images/icon/a15.png" alt=""> <span>Hotel</span></li>
                    <li><img src="/assets/public/images/icon/a16.png" alt=""> <span>Transfer</span></li>
                    <li><img src="/assets/public/images/icon/a17.png" alt=""> <span>Luggage</span></li>
                    <li><img src="/assets/public/images/icon/a18.png" alt=""> <span>Duration 8N/9D</span></li>
                    <li><img src="/assets/public/images/icon/a19.png" alt=""> <span>Location : Rio,Brazil</span></li>
                    <li><img src="/assets/public/images/icon/dbl4.png" alt=""> <span>Stay Plan</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <!--END LISTINGS-->
            <!--LISTINGS START-->
            <div class="hot-page2-alp-r-list">
              <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                <a href="javascript:void(0);">
                  <div class="hotel-list-score">4.9</div>
                  <div class="hot-page2-hli-1"> <img src="imagenesprueba/6.png" alt=""> </div>
                </a>
              </div>
              <div class="col-md-6">
                <div class="trav-list-bod">
                <a href="{{('tour')}}"><h3>PERÚ Y BOLIVIA EXPRESS</h3></a>
                <p>Este tour "expreso" Perú & Bolivia le permitirá descubrir en poco tiempo los principales sitios y los paisajes más impresionantes de .</p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
                  <div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Prices Starting</span> <span class="hot-list-p3-2">$1350</span><span class="hot-list-p3-4">
                    <a href="{{('tour')}}" class="hot-page2-alp-quot-btn">RESERVAR</a>
                  </span> </div>
              </div>
              <div>
                <div class="trav-ami">
                  <h4>Detail and Includes</h4>
                  <ul>
                    <li><img src="/assets/public/images/icon/a14.png" alt=""> <span>Sightseeing</span></li>
                    <li><img src="/assets/public/images/icon/a15.png" alt=""> <span>Hotel</span></li>
                    <li><img src="/assets/public/images/icon/a16.png" alt=""> <span>Transfer</span></li>
                    <li><img src="/assets/public/images/icon/a17.png" alt=""> <span>Luggage</span></li>
                    <li><img src="/assets/public/images/icon/a18.png" alt=""> <span>Duration 8N/9D</span></li>
                    <li><img src="/assets/public/images/icon/a19.png" alt=""> <span>Location : Rio,Brazil</span></li>
                    <li><img src="/assets/public/images/icon/dbl4.png" alt=""> <span>Stay Plan</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <!--END LISTINGS-->
            <!--LISTINGS START-->
            <div class="hot-page2-alp-r-list">
              <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                <a href="javascript:void(0);">
                  <div class="hotel-list-score">4.5</div>
                  <div class="hot-page2-hli-1"> <img src="imagenesprueba/10.png" alt=""> </div>
                </a>
              </div>
              <div class="col-md-6">
                <div class="trav-list-bod">
                <a href="{{('tour')}}"><h3>PERÚ CULTURAL, DEL NORTE AL SUR</h3></a>
                <p>De norte a sur, esta estancia le ofrece descubrimientos llenos de historia tan variada como completa. Perú es un país cargado de .</p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
                  <div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Prices Starting</span> <span class="hot-list-p3-2">$650</span><span class="hot-list-p3-4">
                    <a href="{{('tour')}}" class="hot-page2-alp-quot-btn">RESERVAR</a>
                  </span> </div>
              </div>
              <div>
                <div class="trav-ami">
                  <h4>Detail and Includes</h4>
                  <ul>
                    <li><img src="/assets/public/images/icon/a14.png" alt=""> <span>Sightseeing</span></li>
                    <li><img src="/assets/public/images/icon/a15.png" alt=""> <span>Hotel</span></li>
                    <li><img src="/assets/public/images/icon/a16.png" alt=""> <span>Transfer</span></li>
                    <li><img src="/assets/public/images/icon/a17.png" alt=""> <span>Luggage</span></li>
                    <li><img src="/assets/public/images/icon/a18.png" alt=""> <span>Duration 8N/9D</span></li>
                    <li><img src="/assets/public/images/icon/a19.png" alt=""> <span>Location : Rio,Brazil</span></li>
                    <li><img src="/assets/public/images/icon/dbl4.png" alt=""> <span>Stay Plan</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <!--END LISTINGS-->
            <!--END LISTINGS-->
          </div>
        </div>
      </div>
      <!--END RIGHT LISTINGS-->
    </div>
  </div>
</section>

@endsection
