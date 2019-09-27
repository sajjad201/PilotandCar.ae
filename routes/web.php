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
Route::get('/service-one', 'MyController@serviceone');
Route::get('/service-two', 'MyController@servicetwo');
Route::get('/service-three', 'MyController@servicethree');
Route::get('/service-four', 'MyController@servicefour');
Route::get('/service-five', 'MyController@servicefive');
Route::get('/service-six', 'MyController@servicesix');
Route::get('/service-seven', 'MyController@serviceseven');
Route::get('/service-eight', 'MyController@serviceeight');
Route::get('/service-nine', 'MyController@servicenine');
Route::get('/service-ten', 'MyController@serviceten');
Route::get('/our-fleet', 'MyController@ourfleet');
Route::get('/about-us', 'MyController@aboutus');
Route::get('/offers', 'MyController@offers');
Route::get('/faqs', 'MyController@faqs');
Route::get('/contact-us', 'MyController@contactus');
Route::get('/blog', 'MyController@blog');

Route::get('/test', 'MyController@test');
