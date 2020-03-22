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

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/order', function () {
    return view('order');
})->name('order');
Route::get('/orders', 'OrderController@allData')->name('orders');
Route::post('/order/submit', 'OrderController@submit')->name('order-form');
