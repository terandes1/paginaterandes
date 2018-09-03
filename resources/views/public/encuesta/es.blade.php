<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>ENCUESTA</title>


    <style>
   

    	.radio{
    		margin-right:20px;
    	}
    	.card{
    		margin:10px !important;
    		background: transparent;
    	}
    	#cuerpo{
    		background-image: url('https://www.terandes.com/img/perumap.png') !important;
        	background-attachment:fixed; 
    	
    	}


.input-hidden {
position: absolute;
left: -9999px;
}

input[type=radio]:checked + label>img {
  border: 1px solid #fff;
  box-shadow: 0 0 3px 3px #090;
}

input[type=radio]:checked + label {
  color: #090;
}



/* Stuff after this is only to make things more pretty */


input[type=radio] + label>img {
  margin-right: 10px;
  border: 1px dashed #444;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  transition: 500ms all;
  cursor:pointer;
}

input[type=radio]:checked + label>img {
  transform: 
    rotateZ(-10deg) 
    rotateX(10deg);
}

/*
 | //lea.verou.me/css3patterns
 | Because white bgs are boring.
*/
html {
  background-color: #fff;
  background-size: 100% 1.2em;
  background-image: 
    linear-gradient(
      90deg, 
      transparent 79px, 
      #abced4 79px, 
      #abced4 81px, 
      transparent 81px
    ),
    linear-gradient(
      #eee .1em, 
      transparent .1em
    );
}



 
    </style>


    {!!Html::style('assets/public/img/grupo/fileinput/css/fileinput.css')!!}
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  </head>
  <body id="cuerpo">

    <form action="{{('/store/encuesta')}}" method="GET">
       
  	<section id="content">
  		<div class="container">
  			<div class="row">
  				<div class="col-sm-12"><br>
            <img src="https://www.terandes.com/img/grupo/terandes.png" height="100px" alt="">
  					<h1 class="text-center"><strong>ENCUESTA</strong></h1>
            <br>
  					<p>Agradecemos sus comentarios y sugerencias sobre nuestros servicios durante su viaje. Gracias por tomarse el tiempo para responder a esta encuesta rápida.</p>
            <br>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-sm-6">
  					<div class="form-group">
  						<label for="">NOMBRE DE VIAJE</label>
  						<input type="text" class="form-control" name="codigo_viaje">
  					</div>
  				</div>
  				<div class="col-sm-6">
  					<div class="form-group">
  						<label for="">APELLIDOS Y NOMBRES</label>
  						<input type="text" class="form-control" name="nombres_apellidos" required>
  					</div>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-sm-4">
  					<div class="form-group">
  						<label for="">NACIONALIDAD</label>
  						<input type="text" name="nationality" class="form-control"  style="border: 2px solid #e6e6e6;" required>
  					</div>
  				</div>
  				<div class="col-sm-4">
  					<div class="form-group">
  						<label for="">GUIA</label>
  						<input type="text" class="form-control" name="acompanante">
  					</div>
  				</div>

          <div class="col-sm-4">
            <div class="form-group">
              <label for="">EMAIL *</label>
              <input type="email" name="email" placeholder="Ingres su email" class="form-control" required>
            </div>
          </div>


  			</div>
		
  		</div>
  	</section>


  	<section>
  		<div class="container">


			<div class="card">
  				<div class="card-body">
  			<div class="row">
  				<div class="col-sm-12">
  					<h4 class="text-center"><strong>IMPRESION GLOBAL</strong></h4>
  				</div>
  			</div>
			
  			<div class="row">
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="global" id="global1" class="radio input-hidden" value="5">
  						<label for="global1"><img src="https://www.terandes.com/img/grupo/smile.png" alt="I'm sad" />MUY SATISFECHO </label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="global" id="global2" class="radio input-hidden" value="4">
  						<label for="global2"><img src="https://www.terandes.com/img/grupo/smile.png" alt="I'm sad" />SATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="global" id="global3" class="radio input-hidden" value="3">
  						<label for="global3"><img src="https://www.terandes.com/img/grupo/serious.png" alt="I'm sad" />INSATISFECHO </label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="global" id="global4" class="radio input-hidden" value="2">
  						<label for="global4"><img src="https://www.terandes.com/img/grupo/sad.png" alt="I'm sad" />MUY INSATISFECHO </label>
  					</div>
  				</div>
  			</div>

			<br>
  			<div class="row">
  				<div class="col-sm-12">

  					<a class="btn btn-primary" data-toggle="collapse" href="#comment_iglobal" role="button" aria-expanded="false" aria-controls="collapseExample">
						Añadir comentario
					</a>
						<br><br>
					<div class="collapse" id="comment_iglobal">
  					<div class="form-group">
  						<textarea name="ig_comentario" id="" cols="30" rows="5" class="form-control" placeholder="Escriba aqui..."></textarea>
  					</div>
					</div>
  				</div>
  			</div>

			</div>
		</div>




		<div class="card">
  				<div class="card-body">
  			<div class="row">
  				<div class="col-sm-12">
  					<h4 class="text-center"><strong>SOBRE EL ITINERARIO</strong></h4>
  				</div>
  			</div>

		


		<div class="card">
  				<div class="card-body">
  			<div class="row">
  				<div class="col-sm-6">
  					<h5><strong>ORGANIZACION</strong></h5>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="i_organizacion" id="itinerarioO1" class="radio input-hidden" value="5">
  						<label for="itinerarioO1"><img src="https://www.terandes.com/img/grupo/smile.png" alt="I'm sad" />MUY SATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="i_organizacion" id="itinerarioO2" class="radio input-hidden" value="4">
  						<label for="itinerarioO2"><img src="https://www.terandes.com/img/grupo/smile.png" alt="I'm sad" />SATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="i_organizacion" id="itinerarioO3" class="radio input-hidden" value="3">
  						<label for="itinerarioO3"><img src="https://www.terandes.com/img/grupo/serious.png" alt="I'm sad" />INSATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="i_organizacion" id="itinerarioO4" class="radio input-hidden" value="2">
  						<label for="itinerarioO4"><img src="https://www.terandes.com/img/grupo/sad.png" alt="I'm sad" />MUY INSATISFECHO</label>
  					</div>
  				</div>
  			</div>
			</div>
		</div>

		<div class="card">
  				<div class="card-body">
  			<div class="row">
  				<div class="col-sm-6">
  					<h5><strong>TRANSPORTE</strong></h5>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="i_transporte" id="itinerarioT1" class="radio input-hidden" value="5">
  						<label for="itinerarioT1"><img src="https://www.terandes.com/img/grupo/smile.png" alt="I'm sad" />MUY SATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="i_transporte" id="itinerarioT2" class="radio input-hidden" value="4">
  						<label for="itinerarioT2"><img src="https://www.terandes.com/img/grupo/smile.png" alt="I'm sad" />SATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="i_transporte" id="itinerarioT3" class="radio input-hidden" value="3">
  						<label for="itinerarioT3"><img src="https://www.terandes.com/img/grupo/serious.png" alt="I'm sad" />INSATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="i_transporte" id="itinerarioT4" class="radio input-hidden" value="2">
  						<label for="itinerarioT4"><img src="https://www.terandes.com/img/grupo/sad.png" alt="I'm sad" />MUY INSATISFECHO</label>
  					</div>
  				</div>
  			</div>
			</div>
		</div>

		<div class="card">
  				<div class="card-body">
  			<div class="row">
  				<div class="col-sm-6">
  					<h5><strong>CHOFER</strong></h5>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="i_chofer" id="itinerarioC1" class="radio input-hidden" value="5">
  						<label for="itinerarioC1"><img src="https://www.terandes.com/img/grupo/smile.png" alt="I'm sad" />MUY SATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="i_chofer" id="itinerarioC2" class="radio input-hidden" value="4">
  						<label for="itinerarioC2"><img src="https://www.terandes.com/img/grupo/smile.png" alt="I'm sad" />SATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="i_chofer" id="itinerarioC3" class="radio input-hidden" value="3">
  						<label for="itinerarioC3"><img src="https://www.terandes.com/img/grupo/serious.png" alt="I'm sad" />INSATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="i_chofer" id="itinerarioC4" class="radio input-hidden" value="2">
  						<label for="itinerarioC4"><img src="https://www.terandes.com/img/grupo/sad.png" alt="I'm sad" />MUY INSATISFECHO</label>
  					</div>
  				</div>
  			</div>
			</div>
		</div>


		<div class="row">
  				<div class="col-sm-12">

  					<a class="btn btn-primary" data-toggle="collapse" href="#comment_itinerario" role="button" aria-expanded="false" aria-controls="collapseExample">
						Añadir comentario
					</a>
						<br><br>
					<div class="collapse" id="comment_itinerario">
				
						<div class="form-group">
	  						<textarea name="i_comentario" id="" cols="30" rows="5" class="form-control" placeholder="Escriba aqui..."></textarea>
	  					</div>
					
					</div>



  					
  				</div>
  			</div>


			</div>
		</div>





		<div class="card">
  				<div class="card-body">
  			<div class="row">
  				<div class="col-sm-12">
  					<h4 class="text-center"><strong>GUIA</strong></h4>
  				</div>
  			</div>


  			<div class="card">
  				<div class="card-body">
  			<div class="row">
  				<div class="col-sm-6">
  					<h5><strong>CONOCIMIENTO</strong></h5>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="g_conocimiento" id="guiaC1" class="radio input-hidden" value="5">
  						<label for="guiaC1"><img src="https://www.terandes.com/img/grupo/smile.png" alt="I'm sad" />MUY SATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="g_conocimiento" id="guiaC2" class="radio input-hidden" value="4">
  						<label for="guiaC2"><img src="https://www.terandes.com/img/grupo/smile.png" alt="I'm sad" />SATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="g_conocimiento" id="guiaC3" class="radio input-hidden" value="3">
  						<label for="guiaC3"><img src="https://www.terandes.com/img/grupo/serious.png" alt="I'm sad" />INSATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="g_conocimiento" id="guiaC4" class="radio input-hidden" value="2">
  						<label for="guiaC4"><img src="https://www.terandes.com/img/grupo/sad.png" alt="I'm sad" />MUY INSATISFECHO</label>
  					</div>
  				</div>
  			</div>
			</div>
		</div>

			<div class="card">
  				<div class="card-body">
  			<div class="row">
  				<div class="col-sm-6">
  					<h5><strong>SIMPATIA</strong></h5>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="g_simpatia" id="guiaS1" class="radio input-hidden" value="5">
  						<label for="guiaS1"><img src="https://www.terandes.com/img/grupo/smile.png" alt="I'm sad" />MUY SATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="g_simpatia" id="guiaS2" class="radio input-hidden" value="4">
  						<label for="guiaS2"><img src="https://www.terandes.com/img/grupo/smile.png" alt="I'm sad" />SATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="g_simpatia" id="guiaS3" class="radio input-hidden" value="3">
  						<label for="guiaS3"><img src="https://www.terandes.com/img/grupo/serious.png" alt="I'm sad" />INSATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="g_simpatia" id="guiaS4" class="radio input-hidden" value="2">
  						<label for="guiaS4"><img src="https://www.terandes.com/img/grupo/sad.png" alt="I'm sad" />MUY INSATISFECHO</label>
  					</div>
  				</div>
  			</div>
			</div>
		</div>


		<div class="card">
  				<div class="card-body">
  			<div class="row">
  				<div class="col-sm-6">
  					<h5><strong>EFICACIA</strong></h5>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="g_eficacia" id="guiaE1" class="radio input-hidden" value="5">
  						<label for="guiaE1"><img src="https://www.terandes.com/img/grupo/smile.png" alt="I'm sad" />MUY SATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="g_eficacia" id="guiaE2" class="radio input-hidden" value="4">
  						<label for="guiaE2"><img src="https://www.terandes.com/img/grupo/smile.png" alt="I'm sad" />SATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="g_eficacia" id="guiaE3" class="radio input-hidden" value="3">
  						<label for="guiaE3"><img src="https://www.terandes.com/img/grupo/serious.png" alt="I'm sad" />INSATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="g_eficacia" id="guiaE4" class="radio input-hidden" value="2">
  						<label for="guiaE4"><img src="https://www.terandes.com/img/grupo/sad.png" alt="I'm sad" />MUY INSATISFECHO</label>
  					</div>
  				</div>
  			</div>
			</div>
		</div>


		<div class="card">
  				<div class="card-body">
  			<div class="row">
  				<div class="col-sm-6">
  					<h5><strong>NIVEL DE COMUNICACIÓN</strong></h5>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="g_comunicacion" id="guiaCC1" class="radio input-hidden" value="5">
  						<label for="guiaCC1"><img src="https://www.terandes.com/img/grupo/smile.png" alt="I'm sad" />MUY SATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="g_comunicacion" id="guiaCC2" class="radio input-hidden" value="4">
  						<label for="guiaCC2"><img src="https://www.terandes.com/img/grupo/smile.png" alt="I'm sad" />SATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="g_comunicacion" id="guiaCC3" class="radio input-hidden" value="3">
  						<label for="guiaCC3"><img src="https://www.terandes.com/img/grupo/serious.png" alt="I'm sad" />INSATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="g_comunicacion" id="guiaCC4" class="radio input-hidden" value="2">
  						<label for="guiaCC4"><img src="https://www.terandes.com/img/grupo/sad.png" alt="I'm sad" />MUY INSATISFECHO</label>
  					</div>
  				</div>
  			</div>
			</div>
		</div>


		<div class="row">
  				<div class="col-sm-12">

  					<a class="btn btn-primary" data-toggle="collapse" href="#comment_guia" role="button" aria-expanded="false" aria-controls="collapseExample">
						Añadir comentario
					</a>
						<br><br>
					<div class="collapse" id="comment_guia">
				
						<div class="form-group">
  							<textarea name="g_comentario" id="" cols="30" rows="5" class="form-control" placeholder="Escriba aqui..."></textarea>
  						</div>
					
					</div>


  					
  				</div>
  			</div>



 
			</div>
		</div>





	<div class="card">
  		<div class="card-body">
  			<div class="row">
  				<div class="col-sm-12">
  					<h4 class="text-center"><strong>ALOJAMIENTO</strong></h4>
  				</div>
  			</div>


  			<div class="card">
  				<div class="card-body">
  			<div class="row">
  				<div class="col-sm-6">
  					<h5><strong>LIMPIEZA</strong></h5>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="alojamiento_limpieza" id="alojamientoL1" class="radio input-hidden" value="5">
  						<label for="alojamientoL1"><img src="https://www.terandes.com/img/grupo/smile.png" alt="I'm sad" />MUY SATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="alojamiento_limpieza" id="alojamientoL2" class="radio input-hidden" value="4">
  						<label for="alojamientoL2"><img src="https://www.terandes.com/img/grupo/smile.png" alt="I'm sad" />SATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="alojamiento_limpieza" id="alojamientoL3" class="radio input-hidden" value="3">
  						<label for="alojamientoL3"><img src="https://www.terandes.com/img/grupo/serious.png" alt="I'm sad" />INSATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="alojamiento_limpieza" id="alojamientoL4" class="radio input-hidden" value="2">
  						<label for="alojamientoL4"><img src="https://www.terandes.com/img/grupo/sad.png" alt="I'm sad" />MUY INSATISFECHO</label>
  					</div>
  				</div>
  			</div>
			</div>
		</div>

		<div class="card">
  				<div class="card-body">
  			<div class="row">
  				<div class="col-sm-6">
  					<h5><strong>SERVICIO</strong></h5>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="alojamiento_servicio" id="alojamientoS1" class="radio input-hidden" value="5">
  						<label for="alojamientoS1"><img src="https://www.terandes.com/img/grupo/smile.png" alt="I'm sad" />MUY SATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="alojamiento_servicio" id="alojamientoS2" class="radio input-hidden" value="4">
  						<label for="alojamientoS2"><img src="https://www.terandes.com/img/grupo/smile.png" alt="I'm sad" />SATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="alojamiento_servicio" id="alojamientoS3" class="radio input-hidden" value="3">
  						<label for="alojamientoS3"><img src="https://www.terandes.com/img/grupo/serious.png" alt="I'm sad" />INSATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="alojamiento_servicio" id="alojamientoS4" class="radio input-hidden" value="2">
  						<label for="alojamientoS4"><img src="https://www.terandes.com/img/grupo/sad.png" alt="I'm sad" />MUY INSATISFECHO</label>
  					</div>
  				</div>
  			</div>
			</div>
		</div>

		<div class="row">
  				<div class="col-sm-12">

  					<a class="btn btn-primary" data-toggle="collapse" href="#comment_alojamientos" role="button" aria-expanded="false" aria-controls="collapseExample">
						Añadir comentario
					</a>
						<br><br>
					<div class="collapse" id="comment_alojamientos">
				
						<div class="form-group">
  							<textarea name="alojamiento_comentario" id="" cols="30" rows="5" class="form-control" placeholder="Escriba aqui..."></textarea>
  						</div>
					
					</div>
  				</div>
  			</div>

	
		</div>
	</div>





	<div class="card">
  				<div class="card-body">
  			<div class="row">
  				<div class="col-sm-12">
  					<h4 class="text-center"><strong>COMIDAS</strong></h4>
  				</div>
  			</div>



  			<div class="card">
  				<div class="card-body">
  			<div class="row">
  				<div class="col-sm-6">
  					<h5><strong>CALIDAD</strong></h5>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="comida_cantidad" id="comidasC1" class="radio input-hidden" value="5">
  						<label for="comidasC1"><img src="https://www.terandes.com/img/grupo/smile.png" alt="I'm sad" />MUY SATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="comida_cantidad" id="comidasC2" class="radio input-hidden" value="4">
  						<label for="comidasC2"><img src="https://www.terandes.com/img/grupo/smile.png" alt="I'm sad" />SATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="comida_cantidad" id="comidasC3" class="radio input-hidden" value="3">
  						<label for="comidasC3"><img src="https://www.terandes.com/img/grupo/serious.png" alt="I'm sad" />INSATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="comida_cantidad" id="comidasC4" class="radio input-hidden" value="2">
  						<label for="comidasC4"><img src="https://www.terandes.com/img/grupo/sad.png" alt="I'm sad" />MUY INSATISFECHO</label>
  					</div>
  				</div>
  			</div>
			</div>
		</div>



		<div class="card">
  				<div class="card-body">
  			<div class="row">
  				<div class="col-sm-6">
  					<h5><strong>SERVICIO</strong></h5>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="comida_servicio" id="comidaS1" class="radio input-hidden" value="5">
  						<label for="comidaS1"><img src="https://www.terandes.com/img/grupo/smile.png" alt="I'm sad" />MUY SATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="comida_servicio" id="comidaS2" class="radio input-hidden" value="4">
  						<label for="comidaS2"><img src="https://www.terandes.com/img/grupo/smile.png" alt="I'm sad" />SATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="comida_servicio" id="comidaS3" class="radio input-hidden" value="3">
  						<label for="comidaS3"><img src="https://www.terandes.com/img/grupo/serious.png" alt="I'm sad" />INSATISFECHO</label>
  					</div>
  				</div>
  				<div class="col-sm-3">
  					<div class="form-grup">
  						<input type="radio" name="comida_servicio" id="comidaS4" class="radio input-hidden" value="2">
  						<label for="comidaS4"><img src="https://www.terandes.com/img/grupo/sad.png" alt="I'm sad" />MUY INSATISFECHO</label>
  					</div>
  				</div>
  			</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
  					<a class="btn btn-primary" data-toggle="collapse" href="#comment_comidas" role="button" aria-expanded="false" aria-controls="collapseExample">
						Añadir comentario
					</a>
						<br><br>
					<div class="collapse" id="comment_comidas">
				
						<div class="form-group">
  							<textarea name="c_comentario" id="" cols="30" rows="5" class="form-control" placeholder="Escriba aqui..."></textarea>
  						</div>
					
					</div>
			</div>
		</div>


			</div>
		</div>


	

	<div class="card">
  			<div class="card-body">
  				<div class="row">
  					<div class="col-sm-12">
  						<div class="form-group">
  							<label for="">¿Qué le gustó de su viaje?</label>
  							<textarea name="le_gusto" id="" cols="30" rows="5" class="form-control" placeholder="Escriba aqui..."></textarea>
  						</div>
  					</div>
  				</div>
  				<div class="row">
  					<div class="col-sm-12">
  						<div class="form-group">
  							<label for="">¿Qué es lo que menos te gusto de tu viaje?</label>
  							<textarea name="no_le_gusto" id="" cols="30" rows="5" class="form-control" placeholder="Escriba aqui..."></textarea>
  						</div>
  					</div>
  				</div>
          

          <div class="row">
            <div class="col-sm-12">
              <h5><strong>¿Nos recomendarías a tu familia o amigos?</strong></h5>
                <input type="radio" name="recomendaria" id="recomensariasi" value='si'> <label for="recomensariasi">SI</label><br>
                <input type="radio" name="recomendaria" id="recomendariano" value='no'> <label for="recomendariano">NO</label>
            </div>
          </div>
          <br>


          <div class="row">
          <div class="col-sm-12">
                <a class="btn btn-warning" data-toggle="collapse" href="#upload-images" role="button" aria-expanded="false" aria-controls="collapseExample">
                Subir imagenes del recuerdo
              </a>
                <br><br>
              <div class="collapse" id="upload-images">
            
                <div class="file-loading">
                  <input id="images" name="images" type="file" multiple>
                </div>

              </div>
          </div>
        </div>

		<br>
			<div class="row justify-content-sm-center">
				<div class="col-sm-4 ">
					<div class="form-group text-center">
            <input type="checkbox" name="contactar" id="contactar" value='si'> <label for="contactar">¿Quieres ser contactado por nosotros?</label> <br><br>
                <h4><strong>Gracias por su tiempo</strong></h4><br>
            <input type="text" name="lenguaje" value="es" hidden>
						<button class="btn btn-primary form-control">Enviar</button>
					</div>
				</div>
			</div>
			</div>
		</div>

  		</div>
  	</section>

    </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>



  <!-- fileinput js -->
        {!!Html::script('assets/public/img/grupo/fileinput/js/jquery.min.js')!!}
        {!!Html::script('assets/public/img/grupo/fileinput/js/plugins/sortable.js')!!}
        {!!Html::script('assets/public/img/grupo/fileinput/js/fileinput.js')!!}
        {!!Html::script('assets/public/img/grupo/fileinput/js/locales/fr.js')!!}
        {!!Html::script('assets/public/img/grupo/fileinput/js/locales/es.js')!!}
        {!!Html::script('assets/public/img/grupo/fileinput/themes/explorer-fa/theme.js')!!}
        {!!Html::script('assets/public/img/grupo/fileinput/themes/fa/theme.js')!!}        
  



    <script>
    	$(function(){

        $("#images").fileinput({
        uploadUrl: "/encuesta/upload",
        language:"es",
        theme: "fa",
        allowedFileExtensions: ['jpg', 'png', 'gif'],
        maxImageWidth: 600,
        resizeImage: true,
        browseOnZoneClick: true,
        maxFileCount: 5,
        overwriteInitial: false,
          
      });
        
    	});
    </script>




  </body>
</html>