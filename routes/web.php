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

Route::get('/', 'MyController@index');
Route::get('/our-services', 'MyController@ourservices');

Route::get('/rent-a-car-with-driver', 'MyController@rentacar');
Route::get('/chauffeur-service', 'MyController@chauffeurservice');
Route::get('/limousine-service', 'MyController@limousineservice');
Route::get('/luxury-buses-and-coaches', 'MyController@luxurybusesandcoaches');
Route::get('/dubai-city-tours-and-sightseeing', 'MyController@dubaicitytoursandsightseeing');
Route::get('/abu-dhabi-city-tour', 'MyController@abudhabicitytour');
Route::get('/airport-transfer', 'MyController@airporttransfer');
Route::get('/luxury-vans', 'MyController@luxuryvans');
Route::get('/hire-a-drivers-or-Chauffeur', 'MyController@hireadriversorchauffeur');
Route::get('/delivery-vans-and-trucks', 'MyController@deliveryvansandtrucks');

Route::get('/our-fleet', 'MyController@ourfleet');
Route::get('/about-us', 'MyController@aboutus');
Route::get('/offers', 'MyController@offers');
Route::get('/faqs', 'MyController@faqs');
Route::get('/contact-us', 'MyController@contactus');
Route::get('/blog', 'MyController@blog');
Route::get('/test', 'MyController@test');


Route::get('/searchbyhour', 'MyController@searchbyhour');
Route::get('/searchbyway', 'MyController@searchbyway');
