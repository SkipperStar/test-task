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

Route::redirect('/', '/booking')->middleware('auth');

Route::get('/booking', ['uses' => 'BookingController@execute', 'as' => 'booking'])->middleware('auth');


// admin/services
Route::group(['prefix' => 'hotels'], function () {

    // hotels/
    Route::get('/', ['uses' => 'HotelController@execute', 'as' => 'hotels'])->middleware('auth');
    // hotels/add
    Route::match(['get','post'], '/add', ['uses' => 'HotelController@store', 'as' => 'hotelAdd'])->middleware('auth');

});

Route::post('/booking', ['uses' => 'ReserveController@reserve', 'as' => 'reserve'])->middleware('auth');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();