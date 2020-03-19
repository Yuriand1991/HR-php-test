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
Route::get('/orders', function () {
    return view('orders');
})->name('orders');;
Route::get('/order', function () {
    return view('order');
})->name('order');
Route::post('/order/submit', function () {
     dd(Request::all());
})->name('order-form');
