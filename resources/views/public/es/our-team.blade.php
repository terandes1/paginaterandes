@extends('public.es.layouts.master')

@section('content')

  <section>
    <div class="rows inner_banner inner_banner_5">
      <div class="container" style="background-color: rgba(22, 23, 19, 0.57)">

	        <h2><span style="text-shadow: 2px 2px 4px #000;color: #fff;    font-size: 1.4em; ">Conoce a la familia de Tierras de los Andes </span></h2>
        <p style="text-shadow: 2px 2px 4px #000;color: #fff;    font-size: 1.4em; text-align: center;">" Cada uno de nuestros miembros únicos del equipo "</p>
      </div>
    </div>
  </section>

  <!--====== TIPS BEFORE TRAVEL ==========-->
  <section>
    <div class="rows inn-page-bg com-colo">
      <div class="container inn-page-con-bg tb-space pad-bot-redu" id="inner-page-title">
        <!-- TITLE & DESCRIPTION -->
        <div class="spe-title col-md-12">
          <h2 id="titulo">El equipo de Tierras de los Andes</h2>
          <div class="title-line">
            <div class="tl-1"></div>
            <div class="tl-2"></div>
            <div class="tl-3"></div>
          </div>
          <p id="subtitulo">Experiencia y entusiasmo para crear y ofrecerle los viajes más originales a Perú. Operamos desde el corazón de los Andes, Cusco, donde se encuentra nuestra sede central.</p>
        </div>
        <div class="tourb2-ab-p1 com-colo-abou">
          <div class="col-md-12 col-sm-12">
            <div class="tourb2-ab-p1-right"> <img  src="{{ asset('assets/public/nosotros/equipo.jpg') }}" alt="" /> </div>
          </div>
        </div>
        <div class="tips_travel_1">
          <ul>
            <!--TIPS LIST-->
            <li class="col-md-4 col-sm-4 b_packages">
              <div class="tips_travel_2"><img style="width: 80%;" src="{{ asset('assets/public/nosotros//trabajadores/1.jpg') }}" alt="" /> 
                <h4 id="tituloNosotros">Thomas Pirame Leonce</h4>
                <p id="subtitulo">EJECUTIVO DE VENTAS </p>
              </div>
            </li>
            <!--TIPS LIST-->
            <li class="col-md-4 col-sm-4 b_packages">
              <div class="tips_travel_2"><img style="width: 80%;" src="{{ asset('assets/public/nosotros//trabajadores/2.jpg') }}" alt="" /> 
                <h4 id="tituloNosotros">Justine Weiss Quénéa</h4>
                <p id="subtitulo">EJECUTIVO DE VENTAS </p>
              </div>
            </li>
            <!--TIPS LIST-->
            <li class="col-md-4 col-sm-4 b_packages">
              <div class="tips_travel_2"><img style="width: 80%;" src="{{ asset('assets/public/nosotros//trabajadores/3.jpg') }}" alt="" /> 
                <h4 id="tituloNosotros">Michael Scheneider</h4>
                <p id="subtitulo">EJECUTIVO DE VENTAS </p>
              </div>
            </li>
            <!--TIPS LIST-->
            <li class="col-md-4 col-sm-4 b_packages">
              <div class="tips_travel_2"><img style="width: 80%;" src="{{ asset('assets/public/nosotros//trabajadores/4.jpg') }}" alt="" /> 
                <h4 id="tituloNosotros">Wendy Watson Yamashita</h4>
                <p id="subtitulo">EJECUTIVO DE VENTAS </p>
              </div>
            </li>
            <!--TIPS LIST-->
            <li class="col-md-4 col-sm-4 b_packages">
              <div class="tips_travel_2"><img style="width: 80%;" src="{{ asset('assets/public/nosotros//trabajadores/5.jpg') }}" alt="" /> 
                <h4 id="tituloNosotros">Ronald Hinojosa Guevara</h4>
                <p id="subtitulo">EJECUTIVO DE VENTAS </p>
              </div>
            </li>
            <!--TIPS LIST-->
            <li class="col-md-4 col-sm-4 b_packages">
              <div class="tips_travel_2"><img style="width: 80%;" src="{{ asset('assets/public/nosotros//trabajadores/6.jpg') }}" alt="" /> 
                <h4 id="tituloNosotros">Emma Duvic Robin</h4>
                <p id="subtitulo">EJECUTIVO DE VENTAS </p>
              </div>
            </li>
            <!--TIPS LIST-->
            <li class="col-md-4 col-sm-4 b_packages">
              <div class="tips_travel_2"><img style="width: 80%;" src="{{ asset('assets/public/nosotros//trabajadores/7.jpg') }}" alt="" /> 
                <h4 id="tituloNosotros"></h4>
                <p id="subtitulo"> </p>
              </div>
            </li>
            <!--TIPS LIST-->
            <li class="col-md-4 col-sm-4 b_packages">
              <div class="tips_travel_2"><img style="width: 80%;" src="{{ asset('assets/public/nosotros//trabajadores/8.jpg') }}" alt="" /> 
                <h4 id="tituloNosotros"></h4>
                <p id="subtitulo"></p>
              </div>
            </li>
            <li class="col-md-4 col-sm-4 b_packages">
              <div class="tips_travel_2"><img style="width: 80%;" src="{{ asset('assets/public/nosotros//trabajadores/9.jpg') }}" alt="" /> 
                <h4 id="tituloNosotros"></h4>
                <p id="subtitulo"></p>
              </div>
            </li>
           
          </ul>
        </div>
      </div>
    </div>
  </section>
 

  </section>
@endsection
