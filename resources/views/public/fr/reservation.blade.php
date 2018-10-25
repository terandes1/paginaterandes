@extends('public.fr.layouts.master')

@section('content')
<style type="text/css">
.select2  {
width:100%!important;

}
.select2-container .select2-selection--single {
    height: 40px !important;
}
.select2-container .select2-choice {
    display: block!important;
    height: 36px!important;
    white-space: nowrap!important;
    line-height: 26px!important;
}
.select2-selection__rendered{
	margin-top: 5px!important;
}
#tamanio {
    height: 40px;
}
</style>
<section>
		<div class="db"  style="padding: 20px;background: #abb0b4;;">
			<!--LEFT SECTION-->
			<div class="db-l">
				<div class="db-l-1">
					<ul>
						<li><img src="{{URL::asset($tour->img)}}" alt="" /> </li>
						<li><span>25%</span> Remise</li>
						<li><span>18</span> Intéressé</li>
					</ul>
				</div>
				<div class="db-l-2">
					<ul>
						<li>
							<a href="{{route('paquetesCategoriaFr','fr')}}" style="font-size: 0.8em;font-family: Lovelo Black;">Catégorie</a>
						</li>
						<li>
							<a href="{{route('paquetesCategoriaFr','fr')}}/decouvrir" style="font-size: 0.8em;font-family: Lovelo Black;"><img src="{{URL::asset('assets/public/images/icons/tours/Descubrimiento.png')}}" alt="" /> Découverte</a>
						</li>
						<li>
							<a href="{{route('paquetesCategoriaFr','fr')}}/aventure" style="font-size: 0.8em;font-family: Lovelo Black;"><img src="{{URL::asset('assets/public/images/icons/tours/Aventura.png')}}" alt="" /> Aventure</a>
						</li>
						<li>
							<a href="{{route('paquetesCategoriaFr','fr')}}/haute-montagne" style="font-size: 0.8em;font-family: Lovelo Black;"><img src="{{URL::asset('assets/public/images/icons/tours/AltaMontania.png')}}" alt="" /> Haute montagne</a>
						</li>
						<li>
							<a href="{{route('paquetesCategoriaFr','fr')}}/excursions" style="font-size: 0.8em;font-family: Lovelo Black;"><img src="{{URL::asset('assets/public/images/icons/tours/Excursiones.png')}}" alt="" /> Excursions</a>
						</li>
						<li>
							<a href="{{route('paquetesCategoriaFr','fr')}}/voyage-en-groupe" style="font-size: 0.8em;font-family: Lovelo Black;">Voyage de groupe</a>
						</li>
						
						
					</ul>
				</div>

			</div>
			<!--CENTER SECTION-->
			<div class="db-2">
				
				<div class="db-2-com db-2-main">
					<h4 style="font-family: Lovelo Black;">Livre : {!! $tour->name !!}. <span class="db-pay-amount" style="font-family: Lovelo Black;font-size: 15px;"> <span class="fa fa-clock-o"></span> {{ $dia}} Jours: / {{ $dia-1 }} Les nuits </span> </h4>
					<div class="db-2-main-com">
            			@if(Session::has('flash_message'))
						   <div class="alert alert-success alert-dismissible" role="alert">
						      <button type="button" class="close" data-dismiss="alert" arial-label="Close"><span aria-      hidden="true">x</span></button>
						         {{ Session::get('flash_message') }}	
						    </div>
						@endif
  					{!! Form::open(['route' => ['reservations.store'] , 'method' => 'POST']) !!}
                        <div class="form-wrap-two">  
                            <div class="form-group ">
                               	<div class="row">
	                               <div class="col-sm-6">
		                                <h5 id="tituloReserva">Nom complet</h5>
		                                <input type="text" class="form-control"  id="tamanio" name="name" value="{{ old('name') }}" placeholder="Écris ton nom" value="" required="">
										<p class="errorValidacion">{{ $errors->first('name') }}</p>
									</div>
									<div class="col-sm-6">
	                                  	  <h5 id="tituloReserva">Email</h5>
	                               		 <input type="email" class="form-control" id="tamanio" name="email" placeholder="E-mail" value="{{ old('email') }}" required="">
	                               		 <p class="errorValidacion">{{ $errors->first('email') }}</p>
	                                </div>
	                            </div>
	                             <input type="hidden" class="form-control" name="tour_id" value="{{$tour->id}}">
	                             <input type="hidden" class="form-control" name="abbr" value="{{$abbr}}">
                            </div>
                            
                            <div class="form-group">
	                            <div class="row">
	                            	 <div class="col-sm-4">
		                             	 <h5 id="tituloReserva">Téléphone</h5>
	                               		 <input type="text" class="form-control" id="tamanio" name="phone" placeholder="Numéro de téléphone" value="{{ old('phone') }}" required="">
	                               		 <p class="errorValidacion">{{ $errors->first('phone') }}</p>
									</div>
									<div class="col-sm-4">
	                                  	 <h5 id="tituloReserva">Skype</h5>
	                                     <input type="text" class="form-control" id="tamanio" name="skype" placeholder="Skype" value="">
	                                </div>
	                                <div class="col-sm-4">
		                             	 <h5 id="tituloReserva">Pays</h5>
	                                	 <select  class="select2 js-states	form-control"  name="country">
												@foreach($paises as $itemp)
												 	 <option value="{{$itemp->pais}}" {{(old('country') == $itemp->pais?'selected':'')}}> 
												 	 	{{$itemp->pais}}
												 	 </option>
												 @endforeach
										</select>
										<p class="errorValidacion">{{ $errors->first('country') }}</p>
									</div>
									
	                             </div>   
                            </div>
                           
                             <div class="form-group">
	                             <div class="row">	
	                            	 <div class="col-sm-4">
		                             	 <h5 id="tituloReserva">Date</h5>
	                                	 <input type="date" class="form-control" name="fecha"  id="tamanio" value="{{ old('fecha') }}" required="">
	                                	 <p class="errorValidacion">{{ $errors->first('fecha') }}</p>
									</div>
									<div class="col-sm-4">
                                    	<h5 id="tituloReserva">Type de voyage</h5>
                                    	  <select  class="select2 form-control"  name="travel_type">
												  <option value="Luna de miel" {{ old('travel_type') == 'Luna de miel' ? 'selected' : '' }}> lune de miel </option>
												  <option value="Vacaciones" {{ old('travel_type') == 'Vacaciones' ? 'selected' : '' }}> Des vacances</option>
												  <option value="En grupo" {{ old('travel_type') == 'En grupo' ? 'selected' : '' }}> En groupe</option>
												  <option value="Otros" {{ old('travel_type') == 'Otros' ? 'selected' : '' }}> Autres</option>

										</select>
										<p class="errorValidacion">{{ $errors->first('travel_type') }}</p>
                                    </div>
	                                <div class="col-sm-4">
                                    	 <h5 id="tituloReserva">Nombre de personnes</h5>
                                    	<input type="number" name="numberPersonas" class="form-control" id="tamanio" placeholder="1" value="{{ old('numberPersonas') }}" >
                                    	<p class="errorValidacion">{{ $errors->first('numberPersonas') }}</p>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="form-group">
                               
                                <div class="row">
                                    
                                    
                                    <div class="col-sm-6">
                                    	<h5 id="tituloReserva">Type de chambres</h5>
                                    	  <select  class="select2 form-control" name="room_type" value="{{ old('room_type') }}">
												  <option value="Maison Habitante" {{ old('travel_type') == 'Maison Habitante' ? 'selected' : '' }}> Maison Habitante</option>
												  <option value="Standard(2**/B&B)" {{ old('travel_type') == 'Standard(2**/B&B)' ? 'selected' : '' }}> Standard(2**/B&B)</option>
												  <option value="Confort / Chame 3**" {{ old('travel_type') == 'Confort / Chame 3**' ? 'selected' : '' }}> Confort / Chame 3**</option>
												  <option value="Luxe 4**** +" {{ old('travel_type') == 'Luna de miel' ? 'selected' : 'Luxe 4**** +' }}> Luxe 4**** +</option>
										</select>
										<p class="errorValidacion">{{ $errors->first('room_type') }}</p>
                                    </div>
                                    <div class="col-sm-6">
                                    	  <h5 id="tituloReserva">Services de guide supplémentaires</h5>
                                    	  <select  class="select2 form-control" name="guide_service" value="{{ old('guide_service') }}">
												  <option value="Francophone" {{ old('travel_type') == 'Francophone' ? 'selected' : 'Luxe 4**** +' }}> Francophone</option>
												  <option value="Anglophone" {{ old('travel_type') == 'Anglophone' ? 'selected' : 'Luxe 4**** +' }}> Anglophone</option>
												  <option value="Hispanophone" {{ old('travel_type') == 'Hispanophone' ? 'selected' : 'Luxe 4**** +' }}> Hispanophone</option>
												  <option value="Otros servicios extra" {{ old('travel_type') == 'Otros servicios extra' ? 'selected' : 'Luxe 4**** +' }}> Autres services supplémentaires</option>
										</select>
										<p class="errorValidacion">{{ $errors->first('guide_service') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                               
                                <div class="row">
                                    
                                    <div class="col-sm-12">
                                    	<h5 id="tituloReserva">Décrivez votre voyage</h5>
                                    	 <textarea class="form-control" rows="5" name="message">{{ old('message') }}</textarea>
                                    	 <p class="errorValidacion">{{ $errors->first('message') }}</p>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="form-group">
                               
                                <div class="row">
                                    
                                     <div class="col-sm-4">
                                    	 
                                    </div>
                                    <div class="col-sm-4">
                                    	{!! Recaptcha::render() !!}
 										<p class="errorValidacion">{{ $errors->first('g-recaptcha-response') }}</p>
                                    </div>
                                     <div class="col-sm-4">
                                    	 
                                    </div>
                                   
                                </div>
                            </div>
                          
                            <div class="form-group">
                               
                                <div class="row">
                                	 <div class="col-sm-3">
                                    	    
                                    </div>
	                                    <div class="col-sm-6">
	                                    		 <button class="btn btn-primary btn-block" id="tituloReserva">RESERVER</button> 
	                                    </div>
                                    
                                    <div class="col-sm-3">
          
                                    </div>
                                   </div> 
                             </div>
                        </div>

                      
					{!! Form::close() !!}           
  
					</div>
				</div>
			</div>
			
			
			<!--RIGHT SECTION-->
			
			<div class="db-3" style="border: 1px solid #a2b4c2;">
					
					
						<div class="tour_right tour_rela tour-ri-com">
							<h3 style="font-family: Lovelo Black;">VISITES CONNEXES</h3>
							@foreach($toursRelacionados as $itemp)
							<a href="{{url('fr/nos-voyages/details',['slug' => $itemp->slug])}}">
								<div class="tour_rela_1"> <img  src="{{URL::asset($itemp->img)}}" alt="" />
									<h4 style="font-family: Lovelo Black;text-align: center;">{{$itemp->name}}<br>
									<span class="tour_star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i></span>
									<span class="tour_rat" style="text-shadow: 2px 2px 4px #000;color: #fff;">4.5</span>
									</h4>

								</div>
							</a>
							@endforeach
						
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
