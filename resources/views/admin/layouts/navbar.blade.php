<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <a class="navbar-brand" href="{{('/admin')}}">TERANDES</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

      @if(auth()->user()->hasRoles(['admin']))
	        <li class="nav-item active">
	          <a class="nav-link" href="{{('/admin/users')}}">Usuarios <span class="sr-only">(current)</span></a>
	        </li>
	    @endif
	    @if(auth()->user()->hasRoles(['admin']))
        <li class="nav-item">
          <a class="nav-link" href="{{('/admin/languages')}}">Lenguaje</a>
        </li>
      @endif
        <li class="nav-item">
          <a class="nav-link" href="{{('/admin/categories')}}">Categorias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{('/admin/listTourSerie')}}/tour">Tour</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{('/admin/icons')}}">Icons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{('/admin/reservations')}}">Reserva</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{('/admin/multimedia')}}">Multimedia</a>
        </li>

        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Multimedia
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Slider</a>
            <a class="dropdown-item" href="#">Videos</a>

          </div>
        </li> -->

        <li class="nav-item">
          <a class="nav-link" href="{{('/admin/listTestimonioEncuesta')}}/testimonio">Testimonios</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{('/admin/events')}}">Eventos</a>
        </li>
        @if(auth()->check())
	        @if(auth()->user()->hasRoles(['admin']))
		        <li class="nav-item">
		          <a class="nav-link" href="{{('/admin/trash')}}">Papelera</a>
		        </li>
	        @endif
	    @endif
      </ul>
       @if(auth()->check())
        <ul class="navbar-nav my-lg-1">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <strong>Bienvenido : </strong> &nbsp;{{ auth()->user()->name }}  
                           
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Perfil</a>
                        <a class="dropdown-item" href="{{route('logout')}}">Cerra Sesion</a>
                    </div>
                </li>
        </ul>
        @endif
      <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
    </div>
  </nav>
