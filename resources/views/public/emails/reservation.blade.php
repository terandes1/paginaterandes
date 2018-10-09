@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
 RESERVA DEL TOUR<br>
  " {!! $tour->name !!} "
@endcomponent
@endslot

![Logo de Programación y más][logo]

{{-- Body --}}

@component('mail::table')
|                   | DETALLE                  	  |
| ------------------|:----------------------------| 
| Nombre            | {{$detalle->name}}          |
| Pais              | {{$detalle->country}}       | 
| Email             | {{$detalle->email}}         | 
| Skype             | {{$detalle->skype}}         | 
| Teléfono          | {{$detalle->phone}}         | 
| Fecha             | {{$detalle->fecha}}         |                          
| Tipo de viaje     | {{$detalle->travel_type}}   | 
| Número de personas| {{$detalle->numberPersonas}}| 
| Servicios de guia extra | {{$detalle->email}}   | 
<strong>MENSAJE:</strong></br>
{{$detalle->message}}   
@endcomponent
{{-- Footer --}}
@slot('footer')
@component('mail::footer')
	

© {{ date('Y') }} Todos los derechos reservados Empresa de turismo Terandes.com.

[unsubscribe]: {{ url('/configuracion') }}
@endcomponent
@endslot

[logo]: https://www.cantturperu.org/public/images/socios/terandes.png
@endcomponent