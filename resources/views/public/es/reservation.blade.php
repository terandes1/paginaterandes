@extends('public.es.layouts.master')

@section('content')

<section>
	 <div style="padding: 50px;background: #a2b4c2;" >
		<div class="db">
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
            
                    <form action="https://www.terandes.com/storeReservation" method="POST">   
                        <div class="form-wrap-two">  
                            <div class="form-group ">
                               	<div class="row">
	                               <div class="col-sm-6">
		                                <h5>Nombre</h5>
		                                <input type="text" class="form-control" name="name" placeholder="Escriba su nombre" value="" required="">
									</div>
									<div class="col-sm-6">
	                                  	  <h5>Email</h5>
	                               		 <input type="email" class="form-control" name="email" placeholder="E-mail" value="" required="">
	                                </div>
	                            </div>
                            </div>
                            
                            <div class="form-group">
	                            <div class="row">
	                            	 <div class="col-sm-6">
		                             	 <h5>Telefono</h5>
	                               		 <input type="text" class="form-control" name="phone" placeholder="Numero de telephone" value="" required="">
									</div>
									<div class="col-sm-6">
	                                  	 <h5>Skype</h5>
	                                     <input type="text" class="form-control" name="skype" placeholder="ID Skype" value="">
	                                </div>
	                             </div>   
                            </div>
                           
                            <div class="form-group">
	                             <div class="row">	
	                            	 <div class="col-sm-6">
		                             	 <h5>Nacionalidad</h5>
	                                	<input type="text" class="form-control" name="nationality" placeholder="Pais" value="" required="">
									</div>
									<div class="col-sm-6">
	                                  	  <h5>Duracion</h5>
	                                   <input type="text" class="form-control" name="skype" placeholder="ID Skype" value="">
	                                </div>
                                </div>
                            </div>
                           
                            <div class="form-group">
                               
                                <div class="row">
                                    <div class="col-sm-6">
                                    	 <h5>Numero de personas</h5>
                                    	<input type="number" name="adults" class="form-control" placeholder="Personnes" value="1">
                                    </div>
                                    <div class="col-sm-6">
                                    	 <h5>Numero de personas</h5>
                                    	<input type="number" name="adults" class="form-control" placeholder="Personnes" value="1">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                               
                                <div class="row">
                                	 <div class="col-sm-3">
                                    	    
                                    </div>
	                                    <div class="col-sm-6">
	                                    		 <button type="button" class="btn btn-primary btn-block">RESERVAR</button> 
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
			<div class="db-3">
				<h4 style="font-family: Lovelo Black;">TOURS RELACIONADOS</h4>
				<ul>
					@foreach($toursRelacionados as $itemp)
					<li>
						<a href="{{ $itemp->slug}}"> <img style="height: 40%;width: 40%;" src="{{URL::asset($itemp->img)}}" alt="" />
							 <h5>25%</h5>
							<p style="font-family: Lovelo Black;text-align: center;">{{$itemp->name}}</p>
						</a>
					</li>
					
					@endforeach
					
				</ul>
			</div>
		</div>
		</div>
	</section>

@endsection
