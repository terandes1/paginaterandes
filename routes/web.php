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
    //trash
    Route::get('trash','TrashController@index');
    //trash
});
//fin de rutas admin

//------------------------------------------------------------------------------
//vistas publicas
Route::view('','public.es.index');
Route::view('/index1','public.es.index1');
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
