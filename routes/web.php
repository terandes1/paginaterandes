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
Route::prefix('admin')->group(function () {
    Route::view('','admin.index');
    Route::resource('users','UserController');
    Route::resource('languages','LanguageController');
    Route::resource('categories','CategorieController');
    Route::resource('tours','TourController');
    Route::resource('multimedia','MultimediaController');

    Route::post('image/create/{id}','MultimediaController@create_img');
    Route::get('image/view/{id}','MultimediaController@view_img');
    Route::post('image/delete/{id}','MultimediaController@delete_img');

    Route::get('video/view/{id}','MultimediaController@view_video');
    Route::post('video/create/{id}','MultimediaController@create_video');
    Route::get('video/see/{id}','MultimediaController@see_video');
    Route::put('video/update/{id}','MultimediaController@update_video');
    Route::post('video/delete/{id}','MultimediaController@delete_video');
    
    Route::get('intinearie/{id}','ItinerarieController@update')->name('itinerario');


    Route::resource('categories_has_tours','CategorieTourController');

    //trash
    Route::get('trash','TrashController@index');
    //trash
});
//fin de rutas admin

//------------------------------------------------------------------------------
//vistas publicas
Route::view('/','public.es.index1');
Route::view('/index1','public.es.index1');
Route::view('/index2','public.es.index2');
Route::view('contacto','public.es.contact');
Route::view('about','public.es.about');
Route::view('tour','public.es.tour');
Route::view('tour1','public.es.tour1');
Route::view('paquetes','public.es.tours');
Route::view('testimonials','public.es.testimonials');
Route::view('events','public.es.events');
//fin de vistas publicas

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
