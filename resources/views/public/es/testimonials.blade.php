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

	        <div class="col-md-4">
	            <div class="to-ho-hotel-con p-tesi">
	              <div class="to-ho-hotel-con-1">
	                <div class="hot-page2-hli-3"> <img src="images/hci1.png" alt=""> </div>
	                <div class="hom-hot-av-tic" style="background:#ff5722;"><span class="tour_rat">4.5</span> </div> <img src="/assets/content/testimonio/testimonio.jpg" alt=""> </div>
	              <div class="to-ho-hotel-con-23">
	                <div class="to-ho-hotel-con-2"> <a href="hotel-details.html"><h4>GTC Grand Chola</h4></a> </div>
	                <div class="to-ho-hotel-con-3">
	                  <ul>
	                    <li style="text-align:justify;">Alcatel Group - Lannion. Permanezca del 30 de abril al 11 de mayo. Lima. Arequipa, Chivay, Puno (Titicaca).
	                      <div class="dir-rat-star ho-hot-rat-star"> Votos: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
	                    </li>
	                    <li></li>
	                  </ul>
	                </div>
	              </div>
	            </div>
	        </div>

	        <div class="col-md-4">
	            <div class="to-ho-hotel-con p-tesi">
	              <div class="to-ho-hotel-con-1">
	                <div class="hot-page2-hli-3"> <img src="images/hci1.png" alt=""> </div>
	                <div class="hom-hot-av-tic" style="background:#ff5722;"><span class="tour_rat">4.5</span> </div> <img src="/assets/content/testimonio/testimonio.jpg" alt=""> </div>
	              <div class="to-ho-hotel-con-23">
	                <div class="to-ho-hotel-con-2"> <a href="hotel-details.html"><h4>GTC Grand Chola</h4></a> </div>
	                <div class="to-ho-hotel-con-3">
	                  <ul>
	                    <li style="text-align:justify;">Alcatel Group - Lannion. Permanezca del 30 de abril al 11 de mayo. Lima. Arequipa, Chivay, Puno (Titicaca).
	                      <div class="dir-rat-star ho-hot-rat-star"> Votos: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
	                    </li>
	                    <li></li>
	                  </ul>
	                </div>
	              </div>
	            </div>
	        </div>

	        <div class="col-md-4">
	            <div class="to-ho-hotel-con p-tesi">
	              <div class="to-ho-hotel-con-1">
	                <div class="hot-page2-hli-3"> <img src="images/hci1.png" alt=""> </div>
	                <div class="hom-hot-av-tic" style="background:#ff5722;"><span class="tour_rat">4.5</span> </div> <img src="/assets/content/testimonio/testimonio.jpg" alt=""> </div>
	              <div class="to-ho-hotel-con-23">
	                <div class="to-ho-hotel-con-2"> <a href="hotel-details.html"><h4>GTC Grand Chola</h4></a> </div>
	                <div class="to-ho-hotel-con-3">
	                  <ul>
	                    <li style="text-align:justify;">Alcatel Group - Lannion. Permanezca del 30 de abril al 11 de mayo. Lima. Arequipa, Chivay, Puno (Titicaca).
	                      <div class="dir-rat-star ho-hot-rat-star"> Votos: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
	                    </li>
	                    <li></li>
	                  </ul>
	                </div>
	              </div>
	            </div>
	        </div>

	        <div class="col-md-4">
	            <div class="to-ho-hotel-con p-tesi">
	              <div class="to-ho-hotel-con-1">
	                <div class="hot-page2-hli-3"> <img src="images/hci1.png" alt=""> </div>
	                <div class="hom-hot-av-tic" style="background:#ff5722;"><span class="tour_rat">4.5</span> </div> <img src="/assets/content/testimonio/testimonio.jpg" alt=""> </div>
	              <div class="to-ho-hotel-con-23">
	                <div class="to-ho-hotel-con-2"> <a href="hotel-details.html"><h4>GTC Grand Chola</h4></a> </div>
	                <div class="to-ho-hotel-con-3">
	                  <ul>
	                    <li style="text-align:justify;">Alcatel Group - Lannion. Permanezca del 30 de abril al 11 de mayo. Lima. Arequipa, Chivay, Puno (Titicaca).
	                      <div class="dir-rat-star ho-hot-rat-star"> Votos: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
	                    </li>
	                    <li></li>
	                  </ul>
	                </div>
	              </div>
	            </div>
	        </div>

	        <div class="col-md-4">
	            <div class="to-ho-hotel-con p-tesi">
	              <div class="to-ho-hotel-con-1">
	                <div class="hot-page2-hli-3"> <img src="images/hci1.png" alt=""> </div>
	                <div class="hom-hot-av-tic" style="background:#ff5722;"><span class="tour_rat">4.5</span> </div> <img src="/assets/content/testimonio/testimonio.jpg" alt=""> </div>
	              <div class="to-ho-hotel-con-23">
	                <div class="to-ho-hotel-con-2"> <a href="hotel-details.html"><h4>GTC Grand Chola</h4></a> </div>
	                <div class="to-ho-hotel-con-3">
	                  <ul>
	                    <li style="text-align:justify;">Alcatel Group - Lannion. Permanezca del 30 de abril al 11 de mayo. Lima. Arequipa, Chivay, Puno (Titicaca).
	                      <div class="dir-rat-star ho-hot-rat-star"> Votos: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
	                    </li>
	                    <li></li>
	                  </ul>
	                </div>
	              </div>
	            </div>
	        </div>

	        <div class="col-md-4">
	            <div class="to-ho-hotel-con p-tesi">
	              <div class="to-ho-hotel-con-1">
	                <div class="hot-page2-hli-3"> <img src="images/hci1.png" alt=""> </div>
	                <div class="hom-hot-av-tic" style="background:#ff5722;"><span class="tour_rat">4.5</span> </div> <img src="/assets/content/testimonio/testimonio.jpg" alt=""> </div>
	              <div class="to-ho-hotel-con-23">
	                <div class="to-ho-hotel-con-2"> <a href="hotel-details.html"><h4>GTC Grand Chola</h4></a> </div>
	                <div class="to-ho-hotel-con-3">
	                  <ul>
	                    <li style="text-align:justify;">Alcatel Group - Lannion. Permanezca del 30 de abril al 11 de mayo. Lima. Arequipa, Chivay, Puno (Titicaca).
	                      <div class="dir-rat-star ho-hot-rat-star"> Votos: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
	                    </li>
	                    <li></li>
	                  </ul>
	                </div>
	              </div>
	            </div>
	        </div>
    
      </div>
    </div>
  </div>
</section>
@endsection
