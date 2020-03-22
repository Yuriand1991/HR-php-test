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

Route::get('/', 'WeatherController@getWeather')->name('home');
Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/order/{id}', 'OrderController@showOrder')->name('order-edit');
Route::post('/order/{id}', 'OrderController@updateOrder')->name('order-update');
Route::get('/orders', 'OrderController@allData')->name('orders');
