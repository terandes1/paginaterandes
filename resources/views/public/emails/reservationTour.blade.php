@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
 RESERVA DEL TOUR<br>
  " {!! $detalle->nameTour !!} "
@endcomponent
@endslot

![Logo de Programación y más][logo]

{{-- Body --}}

@component('mail::table')
|                   | DETALLE                  	  |
| ------------------|:----------------------------| 
| Nombre            | {{$detalle->nameCategoria}} |
| Pais              | {{$detalle->ciudad}}       | 
| Email             | {{$detalle->email}}        | 
| Teléfono          | {{$detalle->numero}}       |                          

<strong>MENSAJE:</strong></br>
{{$detalle->mensaje}}   
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