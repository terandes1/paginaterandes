@extends('public.es.layouts.master')

@section('content')

<section>
		<div class="db"  style="padding: 50px;background: #a2b4c2;">
			<!--LEFT SECTION-->
			<div class="db-l">
				<div class="db-l-1">
					<ul>
						<li><img src="{{URL::asset($tour->img)}}" alt="" /> </li>
						<li><span>25%</span> Descuento</li>
						<li><span>18</span> Interesados</li>
					</ul>
				</div>
				<div class="db-l-2">
					<ul>
						<li>
							<a href="{{route('paquetes','es')}}" style="font-size: 0.8em;font-family: Lovelo Black;">Todas los tours</a>
						</li>
						<li>
							<a href="{{route('paquetes','es')}}/Descubrir" style="font-size: 0.8em;font-family: Lovelo Black;"><img src="{{URL::asset('assets/public/icons/tours/Descubrimiento.png')}}" alt="" /> Descubrimiento</a>
						</li>
						<li>
							<a href="{{route('paquetes','es')}}/Aventura" style="font-size: 0.8em;font-family: Lovelo Black;"><img src="{{URL::asset('assets/public/icons/tours/Aventura.png')}}" alt="" /> Aventura</a>
						</li>
						<li>
							<a href="{{route('paquetes','es')}}/alta-Montania" style="font-size: 0.8em;font-family: Lovelo Black;"><img src="{{URL::asset('assets/public/icons/tours/AltaMontania.png')}}" alt="" /> Alta Montaña</a>
						</li>
						<li>
							<a href="{{route('paquetes','es')}}/Excursiones" style="font-size: 0.8em;font-family: Lovelo Black;"><img src="{{URL::asset('assets/public/icons/tours/Excursiones.png')}}" alt="" /> Excursiones</a>
						</li>
						
					</ul>
				</div>
			</div>
			<!--CENTER SECTION-->
			<div class="db-2">
				
				<div class="db-2-com db-2-main">
					<h4 style="font-family: Lovelo Black;">{!! $tour->name !!} </h4>
					<div class="db-2-main-com">
            
                    <form>   
                        <div class="form-wrap-two">  
                            <div class="form-group ">
                               	<div class="row">
	                               <div class="col-sm-6">
		                                <h5 id="tituloReserva">Nombre</h5>
		                                <input type="text" class="form-control" name="name" placeholder="Escriba su nombre" value="" required="">
									</div>
									<div class="col-sm-6">
	                                  	  <h5 id="tituloReserva">Email</h5>
	                               		 <input type="email" class="form-control" name="email" placeholder="E-mail" value="" required="">
	                                </div>
	                            </div>
                            </div>
                            
                            <div class="form-group">
	                            <div class="row">
	                            	 <div class="col-sm-4">
		                             	 <h5 id="tituloReserva">Teléfono</h5>
	                               		 <input type="text" class="form-control" name="phone" placeholder="Numero de telephone" value="" required="">
									</div>
									<div class="col-sm-4">
	                                  	 <h5 id="tituloReserva">Skype</h5>
	                                     <input type="text" class="form-control" name="skype" placeholder="Skype" value="">
	                                </div>
	                                <div class="col-sm-4">
		                             	 <h5 id="tituloReserva">Nacionalidad</h5>
	                                	<input type="text" class="form-control" name="nationality" placeholder="Pais" value="" required="">
									</div>
									
	                             </div>   
                            </div>
                           
                             <div class="form-group">
	                             <div class="row">	
	                            	 <div class="col-sm-4">
		                             	 <h5 id="tituloReserva">Fecha</h5>
	                                	<input type="date" class="form-control" name="nationality" placeholder="Pais" value="" required="">
									</div>
									<div class="col-sm-4">
	                                  	  <h5 id="tituloReserva">Duración</h5>
	                                  <input type="number" name="adults" class="form-control" placeholder="Personnes" value="1">
	                                </div>
	                                <div class="col-sm-4">
                                    	 <h5 id="tituloReserva">Numero de personas</h5>
                                    	<input type="number" name="adults" class="form-control" placeholder="Personnes" value="1">
                                    </div>
                                </div>
                            </div>
                           
                            <div class="form-group">
                               
                                <div class="row">
                                    
                                    <div class="col-sm-4">
                                    	<h5 id="tituloReserva">Tipo de viaje</h5>
                                    	  <select  class="js-example-placeholder-single js-states form-control" sty>
												  <option> Luna de miel </option>
												  <option> Vacaciones</option>
												  <option> En grupo</option>
												  <option> Otros</option>

										</select>
                                    </div>
                                    <div class="col-sm-4">
                                    	<h5 id="tituloReserva">Tipo de habitaciones</h5>
                                    	  <select  class="js-example-placeholder-single js-states form-control" sty>
												  <option> Maison Habitante</option>
												  <option> Standard(2**/B&B)</option>
												  <option> Confort / Chame 3**</option>
												  <option> Luxe 4**** +</option>
										</select>
                                    </div>
                                    <div class="col-sm-4">
                                    	<h5 id="tituloReserva">Servicios de guia extra</h5>
                                    	  <select  class="js-example-placeholder-single js-states form-control" sty>
												  <option> Francophone</option>
												  <option> Anglophone</option>
												  <option> Hispanophone</option>
												  <option> Otros servicios extra</option>
										</select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                               
                                <div class="row">
                                    
                                    <div class="col-sm-12">
                                    	<h5 id="tituloReserva">Describe tu viaje</h5>
                                    	 <textarea class="form-control" rows="5" id="comment"></textarea>
                                    </div>
                                   
                                </div>
                            </div>
                            
                          
                            <div class="form-group">
                               
                                <div class="row">
                                	 <div class="col-sm-3">
                                    	    
                                    </div>
	                                    <div class="col-sm-6">
	                                    		 <button type="button" class="btn btn-primary btn-block" id="tituloReserva">RESERVAR</button> 
	                                    </div>
                                    
                                    <div class="col-sm-3">
                                    	    
                                    </div>
                                   </div> 
                             </div>
                        </div>

                      
                    </form>
           
  
					</div>
				</div>
			</div>
			
			
			<!--RIGHT SECTION-->
			<div class="db-3" style="border: 1px solid #a2b4c2;">
				<h4 style="font-family: Lovelo Black;">TOURS RELACIONADOS</h4>
				<ul>
					@foreach($toursRelacionados as $itemp)
					<li>
						<a href="{{ $itemp->slug}}"> <img  src="{{URL::asset($itemp->img)}}" alt="" />
							
							<p style="font-family: Lovelo Black;margin-left: -7px;">{{$itemp->name}}</p>
						</a>
						
					</li>
					
					@endforeach
					
				</ul>
			</div>
			
		</div>
	</section>

@endsection
@section('script')
  
 <script type="text/javascript">
 	$(".js-example-placeholder-single").select2({
	     tags: true,
	     width: 'resolve'
	});
 </script>
  

@endsection
