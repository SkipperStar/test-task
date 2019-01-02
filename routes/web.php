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

//Route::get('/', function () {
//    return view('welcome');
//})->middleware('auth');

Route::redirect('/', '/booking')->middleware('auth');

Route::get('/booking', ['uses' => 'BookingController@execute', 'as' => 'booking'])->middleware('auth');
Route::post('/booking', ['uses' => 'BookingController@reserve', 'as' => 'reserve'])->middleware('auth');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
