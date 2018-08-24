@extends('public.es.layouts.master')

@section('content')
<style type="text/css">


.radio{
        margin-right:20px;
    }
    .card{
        margin:10px !important;
        background: transparent;
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

 
</style>
<!--====== ALL TESTIMONIALS ==========-->

<section>
  <div class="to-ho-hotel">

  <div class="rows inn-page-bg com-colo">
    <div class="container tb-space inn-page-con-bg pad-bot-redu" id="inner-page-title">
      <!-- TITLE & DESCRIPTION -->
      <div class="spe-title">
        <h2>TESTIMONIOS <span> </span></h2>
        <div class="title-line">
          <div class="tl-1"></div>
          <div class="tl-2"></div>
          <div class="tl-3"></div>
        </div>
        <p>Comparte experiencias de viaje con nosotros</p>
        
      </div>

      <div class="p_testimonial">
      	 @if (count($testimonials) == 0)<br>
               <div class="spe-title col-md-12">
					<h2>Lo sentimos</h2>
					<h2> Estamos trabajando para coberturar tus paquetes turísticos<h2>
		@else				
 		@foreach($testimonials as $item)
	        <div class="col-md-4">
	            <div class="to-ho-hotel-con p-tesi">
	              <div class="to-ho-hotel-con-1">
	                <div class="hot-page2-hli-3"> <img src="images/hci1.png" alt=""> </div>
	                <div class="hom-hot-av-tic" style="background:#ff5722;"><span class="tour_rat">4.5</span> </div> <img src="/assets/content/testimonio/{{$item->id}}.{{$item->photo}}" alt=""> </div>
	              <div class="to-ho-hotel-con-23">
	                <div class="to-ho-hotel-con-2"> <a href="hotel-details.html"><h4>{{$item->name}}</h4></a> </div>
	                <div class="to-ho-hotel-con-3">
	                  <ul>
	                    <li style="text-align:justify;">{{$item->date}} <br>{{$item->testimonial}}
	                      <div class="dir-rat-star ho-hot-rat-star"> Votos: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
	                    </li>
	                    <li></li>
	                  </ul>
	                </div>
	              </div>
	            </div>
	        </div>
	         @endforeach
	          @endif
      </div>
    </div>
  </div>
</section>
@endsection
