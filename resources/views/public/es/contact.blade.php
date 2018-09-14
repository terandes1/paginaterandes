@extends('public.es.layouts.master')

@section('content')



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
							<input type="text" name="ename" value="" id="ename" placeholder="Name" required> </li>
						<li>
							<input type="tel" name="emobile" value="" id="emobile" placeholder="Mobile" required> </li>
						<li>
							<input type="email" name="eemail" value="" id="eemail" placeholder="Email id" required> </li>
						<li>
							<input type="text" name="esubject" value="" id="esubject" placeholder="Subject" required> </li>
						<li>
							<input type="text" name="ecity" value="" id="ecity" placeholder="City" required> </li>
						<li>
							<input type="text" name="ecount" value="" id="ecount" placeholder="Country" required> </li>
						<li>
							<textarea name="emess" cols="40" rows="3" id="text-comment" placeholder="Enter your message"></textarea>
						</li>
						<li>
							<input type="submit" value="Submit" id="send_button"> </li>
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
