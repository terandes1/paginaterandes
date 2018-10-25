<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/






//------------------------------------------------------------------------------
//comienzo rutas admin
Route::get('logout',['as' =>'logout','uses' => 'Auth\LoginController@logout']);
Route::prefix('admin')->group(function () {
    Route::view('','admin.index');
    Route::resource('users','UserController');
    
    Route::resource('languages','LanguageController');
    Route::resource('categories','CategorieController');
    Route::resource('tours','TourController');
    Route::resource('icons','IconController');
    Route::get('get/categoria/{id}','TourController@get_categoria');
    Route::post('delete/categoria/{id}','TourController@delete_categoria');
    Route::get('publicar/tour/{id}','TourController@publicarPrincipal')->name('publicarTourPrincipal');

    Route::resource('reservations','ReservationController');
    Route::post('reservationTour/','ReservationController@reservartionTour')->name('reservationTour');

    //---------------------------------------------------------------------------------------------------------------------------------------------
    //ruta para los multimedias del tour
    Route::resource('multimedia','MultimediaController');
    Route::post('image/create/{id}','MultimediaController@create_img');
    Route::get('image/view/{id}','MultimediaController@view_img');
    Route::post('image/delete/{id}','MultimediaController@delete_img');
    Route::get('video/view/{id}','MultimediaController@view_video');
    Route::post('video/create/{id}','MultimediaController@create_video');
    Route::get('video/see/{id}','MultimediaController@see_video');
    Route::put('video/update/{id}','MultimediaController@update_video');
    Route::post('video/delete/{id}','MultimediaController@delete_video');
    //---------------------------------------------------------------------------------------------------------------------------------------------
    //ruta para los itinerarios del tours
    Route::get('intinearie/{id}','ItinerarieController@update')->name('itinerario');
    Route::post('intinearie/','ItinerarieController@insert')->name('itinerarioInsert');
    Route::get('intinearie/listar/{id}','ItinerarieController@listar')->name('itinerarioListar');
    Route::get('intinearie/eliminar/{id}','ItinerarieController@eliminar')->name('ItinerarioEliminar');
    Route::post('intinearie/actualizar/','ItinerarieController@actualizar')->name('itinerarioActualizar');
    Route::get('intinearie/ubicacion/{id}','ItinerarieController@ubicacion')->name('itinerarioUbicacion');
    Route::post('intinearie/actualizarUbicacion/','ItinerarieController@ubicacionUpdate')->name('itineUbicacionUpdate');

    //---------------------------------------------------------------------------------------------------------------------------------------------
    //ruta para los precios del tour
    Route::get('price/tour/{id}','PriceController@index');
    Route::get('price/tour/{id}/create','PriceController@create');
    Route::post('price/tour/{id}/create','PriceController@store');
    Route::get('price/{id}','PriceController@show');
    Route::put('price/{id}','PriceController@update');
    Route::delete('price/{id}','PriceController@delete');

    //ruta para las series del tour
    Route::get('serie/tour/{id}','SerieController@index');
    Route::get('serie/tour/{id}/create','SerieController@create');
    Route::post('serie/tour/{id}/create','SerieController@store');
    Route::get('serie/{id}','SerieController@show');
    Route::put('serie/{id}','SerieController@update');
    Route::delete('serie/{id}','SerieController@delete');

    Route::resource('events','EventController');

    Route::resource('categories_has_tours','CategorieTourController');
    //---------------------------------------------------------------------------------------------------------------------------------------------
    //trash
    Route::get('trash','TrashController@index');
    Route::post('trash/restore_user/{id}','TrashController@restore_user');

    //testimonio
    //---------------------------------------------------------------------------------------------------------------------------------------------
    Route::resource('testimonials','TestimonialController');
    Route::get('/testimonials/destroy/{id?}','TestimonialController@destroy')->name('testimonioDestroy'); 
    
    Route::get('/listTestimonioEncuesta/{tipo?}','TestimonialController@listTestimonialEncuesta');
    Route::get('/cambioEstadoTestimonioEncuesta/{id?}','TestimonialController@cambioEstadoTestimonioEncuesta');
    Route::get('/listTourSerie/{tipo_tour?}','TourController@listTourSerie');

    Route::get('/listReservationStatus/{status?}','ReservationController@listReservationsStatus');

});

//fin de rutas admin

//------------------------------------------------------------------------------
//vistas publicas
Auth::routes();

//encuestas
Route::get('/store/encuesta','EncuestaController@store');
Route::get('/encuesta/enviada','EncuestaController@enviado');
Route::post('/encuesta/upload','EncuestaController@upload');
Route::get('encuesta',function(){
    return view('public/encuesta./es');
});
Route::get('enquete',function(){
    return view('public.encuesta.fr');
});

Route::get('survey',function(){
    return view('public.encuesta.en');
});
Route::get('sondaggio',function(){
    return view('public.encuesta.it');
});
//fin encuesta

Route::get('umfrage',function(){
    return view('public.encuesta.de');
});
Route::get('/', [ 'uses' => 'PublicController@index' ]);
Route::get('/{lang?}', [ 'uses' => 'PublicController@lang' ])->name('idiomas');
Route::resource('contacto-reserva','ContactController');

Route::get('/reservations/moverAtendido/{id?}','ReservationController@moverAtendido')->name('moveraAtendido');

//lista de reservas por idiomas
Route::get('{lang?}/reservacion/{idTour?}', [ 'uses' => 'PublicController@reservation' ])->name('reservacion');
Route::get('{lang?}/reservation/{idTour?}', [ 'uses' => 'PublicController@reservation' ])->name('reservation');
//fin

//lista de tours categoria idiomas
Route::get('{lang?}/category/{search?}', [ 'uses' => 'PublicController@tours' ])->name('paquetesCategoriaFr');
Route::get('{lang?}/categoria/{search?}', [ 'uses' => 'PublicController@tours' ])->name('paquetesCategoriaES');
//fin

//lista tours
Route::get('{lang?}/nos-voyages/{search?}', [ 'uses' => 'PublicController@tours' ])->name('paquetesFr');
Route::get('{lang?}/tours/{search?}', [ 'uses' => 'PublicController@tours' ])->name('paquetesEs');
//fin 

//tour por idiomas
Route::get('{lang?}/tour/detalle/{slug?}', ['as' => 'tour','uses' => 'PublicController@tour']);
Route::get('{lang?}/nos-voyages/details/{slug?}', ['as' => 'tour','uses' => 'PublicController@tour']);
//fin

Route::post('toursOpcion/', [ 'uses' => 'PublicController@toursOpcion' ])->name('toursOpcion');
Route::post('toursOpcionPrecio/', [ 'uses' => 'PublicController@toursOpcionPrecio' ])->name('toursOpcionPrecio');




Route::post('listItinerarioMap/', [ 'uses' => 'PublicController@tourItinerario' ])->name('listItinerarioMap');

Route::get('{lang?}/{paginas?}/', [ 'uses' => 'PublicController@paginasIndependientes' ])->name('paginas');//paginas independiente, nosotros ,contacto,etc;
//fin de vistas publicas


Route::get('/home', 'HomeController@index');


