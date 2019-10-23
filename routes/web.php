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

Route::get('/abu-dhabi-city-tour', 'MyController@abudhabicitytour');
Route::get('/airport-transfer', 'MyController@airporttransfer');
Route::get('/bus-rental-dubai', 'MyController@busrentaldubai');
Route::get('/chauffeur-service', 'MyController@chauffeurservice');
Route::get('/delivery-vans', 'MyController@deliveryvans');
Route::get('/driver-or-chauffeur', 'MyController@driverorchauffeur');
Route::get('/dubai-city-tour', 'MyController@dubaicitytour');
Route::get('/limousine-service', 'MyController@limousineservice');
Route::get('/rent-a-car-with-driver', 'MyController@rentacar');
Route::get('/vans', 'MyController@vans');


Route::get('/our-fleet', 'MyController@ourfleet');
Route::get('/about-us', 'MyController@aboutus');
Route::get('/offers', 'MyController@offers');
Route::get('/faqs', 'MyController@faqs');
Route::get('/contact-us', 'MyController@contactus');
Route::get('/blog', 'MyController@blog');
Route::get('/test', 'MyController@test');
Route::get('/select', 'MyController@select');
Route::get('/form', 'MyController@form');
Route::get('/product-form/{type}/{price}/{link}', 'MyController@productform');


Route::get('/searchbyhour', 'MyController@searchbyhour');
Route::get('/searchbyway', 'MyController@searchbyway');

Route::resource('edit', 'PostController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
