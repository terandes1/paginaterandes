<div class="modal fade" id="idTestimonio" role="dialog">
        <div class="modal-dialog">
        
          <div class="modal-content">
          	  <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-header">
            
                 <div class="db-2-com db-2-main">
                  	<h4 class="modal-title">INGRESE SU TESTIMONIO</h4>
                </div>
            </div>
            <div class="modal-body" style="width: 100%;">
            	 {!! Form::open(['route' => ['testimonials.store'] , 'method' => 'POST', 'class' => 'form-horizontal','enctype' => 'multipart/form-data' ]) !!}
                  <div class="v2-search-form" style="width: 100%;height: 100%; margin-top: -10px;">
                        <div class="row" style="margin-top: -50px;"></br>
                                <div class="input-field col s6">
                                  <div class="input-field col s12">
                                    <input type="text" id="name" name="name" value="{{ old('name') }}" class="autocomplete validate">
                                    <label for="select-city-1" class="">Nome</label>
                                   
                                     <p class="errorValidacion">{{ $errors->first('name') }}</p>
                                 </div>
                                </div>
                                <div class="input-field col s6">
                                    <div class="input-field col s12">
                                     <input type="text" id="email" name="email" value="{{ old('email') }}" class="autocomplete validate">
                                     <label for="select-city-1" class="">E-mail</label>
                                      <p class="errorValidacion">{{ $errors->first('email') }}</p>
                                    </div>
                                </div>
                      </div>
                      <div class="row">
                      	 
                                <div class="input-field col s6">
                                  <div class="input-field col s12">
                                    <input type="text" id="nacionalidad" name="nacionalidad" value="{{ old('nacionalidad') }}" class="autocomplete validate">
                                    <label for="select-city-1" class="">Nazionalità</label>
                                    <p class="errorValidacion">{{ $errors->first('nacionalidad') }}</p>
                                 </div>
                                </div>
                                <div class="input-field col s6">
                                    <div class="input-field col s12">
                                     <input type="text" id="ciudadReferecia" name="ciudadReferecia" value="{{ old('ciudadReferecia') }}" class="autocomplete validate">
                                     <p class="errorValidacion">{{ $errors->first('ciudadReferecia') }}</p>
                                     <label for="select-city-1" class="">Città</label>
                                    </div>
                                </div>
                      </div>
                      <div class="row">
                                <h5 class="text-center"><strong>STAMPA GLOBALE</strong></h5>
                                <p style="text-align: center;" class="errorValidacion">{{ $errors->first('global') }}</p>
                      </div>
                      <div class="row" style="margin-left: -61px;margin-top:-32px; ">
                            <div class="input-field col s3">
                                
                                    <input type="radio" name="global" id="global1" class="radio input-hidden" value="5">
                                    <label for="global1">
                                        <img src="{{ URL::asset('/assets/public/images/encuestas/smile.png') }}" >
                                        
                                        <div class="ticket">
                                            <ul>
                                                <strong> MOLTO SODDISFATTO </strong>
                                            </ul>
                                        </div>
                                    </label>
                                
                            </div>   
                            <div class="input-field col s3">
                                
                                    <input type="radio" name="global" id="global2" class="radio input-hidden" value="4">
                                        <label for="global2">
                                            <img src="{{ URL::asset('/assets/public/images/encuestas/smile.png') }}" > 
                                            <strong>PIACEVOLE </strong> 
                                       </label>
                                
                            </div>
                            <div class="input-field col s3">
                                
                                    <input type="radio" name="global" id="global3" class="radio input-hidden" value="3">
                                    <label for="global3">
                                        <img src="{{ URL::asset('/assets/public/images/encuestas/serious.png') }}" ><strong>INFELICE</strong>
                                    </label>
                                
                            </div>
                            <div class="input-field col s3" >
                                
                                    <input type="radio" name="global" id="global4" class="radio input-hidden" value="2">
                                     <label for="global4" >
                                        <img src="{{ URL::asset('/assets/public/images/encuestas/sad.png') }}" ><br><span style="font-size: 9px;"><strong>MOLTO NON SODDISFATTO </strong></span> 
                                    </label>
                                
                            </div>
                            	

                      </div>
                       <div class="row">

                          <div class="input-field col s12">
                                <div class="input-field col s12">
                                  <textarea name="testimonial" id="testimonial" class="form-control" rows="4" placeholder="Ingrese su testimonio">{{ old('testimonial') }}</textarea>
                               	  <p class="errorValidacion">{{ $errors->first('testimonial') }}</p>
                               </div>
                          </div>
                                
                      </div>
                      <div class="row">
                            <div class="file-field input-field" style="margin-left: 15px;">
                                <div class="db-up-btn"> <span>Carica immagine</span>
                                    <input type="file" id="Imagen" name="Imagen"> </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text"> </div>
                            </div>
                      </div>
                       <div class="row">
                      	 
                                <div class="input-field col s3">
                                  <div class="input-field col s12">
                                   
                                 </div>
                                </div>
                                <div class="input-field col s6">
                                  <div class="input-field col s12">
                                    {!! Recaptcha::render() !!}
                                      <p class="errorValidacion">{{ $errors->first('g-recaptcha-response') }}</p>
                                 </div>
                                </div>
                               
                      </div>
                     
                    
                        <div class="row">
                        	    <div class="input-field col s4">
                        		</div>
                                <div class="input-field col s4">
							        <input type="text" name="abbr" value="{{$abbr}}" hidden="">
                                    <i class="waves-effect waves-light tourz-sear-btn v2-ser-btn waves-input-wrapper" style=""><input type="submit" id="EnviarTestimonio" name="EnviarTestimonio" value="Invia ora" class="waves-button-input"></i>
                                </div>
                        </div>

                  </div>
                  {!! Form::close() !!}
            </div>
            
          </div>
          
        </div>
  </div>