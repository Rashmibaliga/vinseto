<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/','HomeController@index');
Route::get('/bookings','RouteController@getBookings');
Route::get('/dashboard','RouteController@getDashboard');
Route::get('/event','EventBookController@index');

//Route::get('/home', function () {
   // return view('home');
//});
Route::post('/event','EventBookController@index');
Route::post('book','EventBookController@store');

Route::get('dashboard','RouteController@index');
// Route::get('event', 'RouteController@getEvent')->name('event');

