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

});
//fin de rutas admin

//------------------------------------------------------------------------------
//vistas publicas
Auth::routes();

Route::get('/', [ 'uses' => 'PublicController@index' ]);
Route::get('/{lang?}', [ 'uses' => 'PublicController@lang' ])->name('idiomas');
Route::get('{lang?}/contact/', [ 'uses' => 'PublicController@contact' ])->name('contact');
Route::get('{lang?}/tours/{search?}', [ 'uses' => 'PublicController@tours' ])->name('paquetes');

Route::post('toursOpcion/', [ 'uses' => 'PublicController@toursOpcion' ])->name('toursOpcion');
Route::post('toursOpcionPrecio/', [ 'uses' => 'PublicController@toursOpcionPrecio' ])->name('toursOpcionPrecio');


Route::get('/tour/{lang?}/{slug?}', ['as' => 'tour','uses' => 'PublicController@tour']);
Route::post('listItinerarioMap/', [ 'uses' => 'PublicController@tourItinerario' ])->name('listItinerarioMap');
//Route::get('/tour/{tour?}/{lang?}', [ 'uses' => 'PublicController@tour' ])->name('tour');
Route::get('{lang?}/testimonials/', [ 'uses' => 'PublicController@testimonials' ])->name('testimonials');
Route::get('{lang?}/events/', [ 'uses' => 'PublicController@events' ])->name('events');
Route::get('{lang?}/our-team/', [ 'uses' => 'PublicController@our_team' ])->name('our-team');

//fin de vistas publicas


Route::get('/home', 'HomeController@index');


