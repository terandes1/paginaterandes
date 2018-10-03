@extends('public.es.layouts.master')

@section('content')
<style type="text/css">
.select2  {
width:100%!important;

}
.select2-container .select2-selection--single {
    height: 45px !important;
}
.select2-container .select2-choice {
    display: block!important;
    height: 36px!important;
    white-space: nowrap!important;
    line-height: 26px!important;
}
.select2-selection__rendered{
	margin-top: 10px!important;
}

</style>


<!--====== FAQ ==========-->
<section>
	<div class="form form-spac rows">
		<div class="container">
			<!-- TITLE & DESCRIPTION -->
			<div class="spe-title col-md-12">
				<h2 id="titulo">CONTACTENOS</h2>
				<div class="title-line">
					<div class="tl-1"></div>
					<div class="tl-2"></div>
					<div class="tl-3"></div>
				</div>
				<p id="subtitulo">Tierras de los andes  líder mundial en tours, más de 30,000 paquetes en todo el mundo. Reserve paquetes de viaje y disfrute de sus vacaciones con una experiencia única</p>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 form_1 wow fadeInLeft" data-wow-duration="1s">
				<!--====== THANK YOU MESSAGE ==========-->
				<div class="succ_mess">Thank you for contacting us we will get back to you soon.</div>
				<form id="home_form" name="home_form" action="mail/send.php">
					<ul>
						<li>
							<input type="text" name="name" value="" id="name" placeholder="Escriba su nombre" required> </li>
						<li>
							<input type="tel" name="telefono" value="" id="telefono" placeholder="Número de telephone" required> </li>
						<li>
							<input type="email" name="email" value="" id="email" placeholder="E-mail" required> </li>
						<li>
							<input type="text" name="nacionalidad" value="" id="nacionalidad" placeholder="Nacionalidad" required> </li>
						<li>
							<select  class="select2 form-control input-lg" style="border: 2px solid #e6e6e6;">
                            						   <option value="" active="true">Seleccionar Itinerario</option>
                                                       <option value="ASCENDER AL AUSANGATE">ASCENDER AL AUSANGATE</option>
                                                       <option value="TREK CAMINO INKA">TREK CAMINO INKA</option>
                                                       <option value="TREK DE HUCHUY QOSQO">TREK DE HUCHUY QOSQO</option>
                                                       <option value="TREK SALKANTAY">TREK SALKANTAY</option>
                                                       <option value="TREK DEL VALLE DE LARES">TREK DEL VALLE DE LARES</option>
                                                       <option value="ALPAMAYO Y AUSANGATE, CERCA DE LA CUMBRE">ALPAMAYO Y AUSANGATE, CERCA DE LA CUMBRE</option>
                                                       <option value="ALPAMAYO (5947 M) - CHOPICALQUI (6354 M)">ALPAMAYO (5947 M) - CHOPICALQUI (6354 M)</option>
                                                       <option value="DE COLCA AL AUSANGATE">DE COLCA AL AUSANGATE</option>
                                                       <option value="CORDILLERA DE HUAYHUASH">CORDILLERA DE HUAYHUASH</option>
                                                       <option value="DESCUBRIMIENTO DEL ALTIPLANO: PERÚ Y BOLIVIA">DESCUBRIMIENTO DEL ALTIPLANO: PERÚ Y BOLIVIA</option>
                                                       <option value="DESCUBRIMIENTO de paisajes bolivianos">DESCUBRIMIENTO de paisajes bolivianos</option>
                                                       <option value="DE CHOQUEQUIRAO A MACHU PICCHU">DE CHOQUEQUIRAO A MACHU PICCHU</option>
                                                       <option value="DESDE MACHU PICCHU HASTA LA CORDILLERA BLANCA">DESDE MACHU PICCHU HASTA LA CORDILLERA BLANCA</option>
                                                       <option value="LOS ASPECTOS ESENCIALES DEL PERÚ Y DE BOLIVIA">LOS ASPECTOS ESENCIALES DEL PERÚ Y DE BOLIVIA</option>
                                                       <option value="VIAJES DE BOLIVIA">VIAJES DE BOLIVIA</option>
                                                       <option value="EN EL CORAZÓN DE LAS COMUNIDADES ANDINAS">EN EL CORAZÓN DE LAS COMUNIDADES ANDINAS</option>
                                                       <option value="EN EL CORAZÓN DE LAS COMUNIDADES ANDINAS EN FAMILIA">EN EL CORAZÓN DE LAS COMUNIDADES ANDINAS EN FAMILIA</option>
                                                       <option value="PÉROU-BOLIVIE EXPRESS">PÉROU-BOLIVIE EXPRESS</option>
                                                       <option value="SENSACIONES EXTREMAS EN EL PERÚ">SENSACIONES EXTREMAS EN EL PERÚ</option>
                                                       <option value="TESOROS DEL SUR PERÚ - EN GRUPO">TESOROS DEL SUR PERÚ - EN GRUPO</option>
                                                       <option value="PERU EN FAMILIA">PERU EN FAMILIA</option>
                                                       <option value="PERÚ CULTURAL, DEL NORTE AL SUR">PERÚ CULTURAL, DEL NORTE AL SUR</option>
                                                       <option value="VIAJE DE LUNA DE MIEL EN PERÚ">VIAJE DE LUNA DE MIEL EN PERÚ</option>
                                                       <option value="PERÚ Y BOLIVIA EXPRESS">PERÚ Y BOLIVIA EXPRESS</option>
                                                       <option value="TOUR DEL AUSANGATE">TOUR DEL AUSANGATE</option>
                                                       <option value="TRESORS DU SUD PEROU - EN GROUPE">TRESORS DU SUD PEROU - EN GROUPE</option>
                                                       <option value="GRAN VIAJE AL SUR DE PERÚ - EN GRUPO">GRAN VIAJE AL SUR DE PERÚ - EN GRUPO</option>
                                                      <option value="Otros">Autres</option>
                            </select>
						<li>
							<input type="text" name="ecount" value="" id="ecount" placeholder="Country" required> </li>
						<li>
							<textarea name="emess" cols="40" rows="3" id="text-comment" placeholder="Ingrese su mensaje"></textarea>
						</li>
						<li>
							<input type="submit" value="Enviar" id="send_button"> </li>
					</ul>
				</form>
			</div>
			<!--====== COMMON NOTICE ==========-->
			<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="1s">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3879.075194748067!2d-71.95507168573039!3d-13.530976774962138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dd5f812e94329%3A0xb98b5a81432a4fca!2sTierras+de+los+Andes+%7C+Travel+Agency+in+Peru!5e0!3m2!1ses!2spe!4v1532362977765" width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>
@endsection
@section('script')
  
 <script type="text/javascript">
 	$(".select2").select2({
	     selectOnClose: false,
	     width: 'resolve',
	});

 </script>
  

@endsection