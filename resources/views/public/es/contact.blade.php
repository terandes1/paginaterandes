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
				@if(Session::has('flash_message'))
						   <div class="alert alert-success alert-dismissible" role="alert">
						      <button type="button" class="close" data-dismiss="alert" arial-label="Close"><span aria-      hidden="true">x</span></button>
						         {{ Session::get('flash_message') }}	
						    </div>
						@endif
				<div class="succ_mess">Thank you for contacting us we will get back to you soon.</div>
				  	{!! Form::open(['route' => ['contacto-reserva.store'] , 'method' => 'POST']) !!}
					<ul>
						<li>
							<input type="text" name="name"  id="name" value="{{ old('name') }}" placeholder="Escriba su nombre" required>
							<p class="errorValidacion">{{ $errors->first('name') }}</p>
						 </li>
						<li>
							<input type="tel" name="telefono"  id="telefono" value="{{ old('telefono') }}" placeholder="Número de telephone" required> 
							<p class="errorValidacion">{{ $errors->first('telefono') }}</p>
						</li>
						<li>
							<input type="email" name="email"  id="email" placeholder="E-mail" value="{{ old('email') }}" required> 
							<p class="errorValidacion">{{ $errors->first('email') }}</p>
							<input type="hidden" name="idioma"  id="idioma" value="es" value="{{ old('idioma') }}"> 
							<p class="errorValidacion">{{ $errors->first('idioma') }}</p>
						</li>
						<li>
							<input type="text" name="skype"  id="Skype" placeholder="Skype" > 
						</li>
						<!-- <li>
							<select name="tour" class="select2 form-control input-lg" style="border: 2px solid #e6e6e6;">
        						   <option value="" active="true" disabled="disabled">Seleccionar Itinerario</option>
                                   		@foreach($tour as $item)
                                   				<option value="{{$item->name}}">{{$item->name}}</option>
                                   		@endforeach
                                   <option value="Otros">Otros</option>
                            </select></li>
						<li>
							<input type="text" name="ecount" value="" id="ecount" placeholder="Country" required> </li> -->
						<li style="width: 100%;text-align: center;">
							<textarea class="form-control" name="message"  cols="120" rows="3"  placeholder="Ingrese su mensaje">{{ old('message') }}</textarea>
							<p class="errorValidacion">{{ $errors->first('message') }}</p>
							
										{!! Recaptcha::render() !!}
 										<p class="errorValidacion">{{ $errors->first('g-recaptcha-response') }}</p>
							<input  style="text-align: center;" type="submit" value="Enviar" id="send_button">
						</li>							
					</ul>
				{!! Form::close() !!}  <br>
			</div>
			<!--====== COMMON NOTICE ==========-->
			<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="1s">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3879.075194748067!2d-71.95507168573039!3d-13.530976774962138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dd5f812e94329%3A0xb98b5a81432a4fca!2sTierras+de+los+Andes+%7C+Travel+Agency+in+Peru!5e0!3m2!1ses!2spe!4v1532362977765" width="600" height="390" frameborder="0" style="border:0" allowfullscreen></iframe>
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