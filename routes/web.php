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
//vistas publicas
Route::view('','public.es.index');
Route::view('contacto','public.es.contact');
Route::view('about','public.es.about');
Route::view('tour','public.es.tour');
Route::view('tour1','public.es.tour1');
Route::view('paquetes','public.es.tours');
Route::view('testimonials','public.es.testimonials');
//fin de vistas publicas
