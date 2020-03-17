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
    return view('welcome');
});
//	Страница с информацией о погоде
Route::get('/order/weather', 'OrderProduct@weather')->name('orders.weather');

Route::get('/order', 'OrderProduct@index')->name('orders.index');
//	Редактирования заказа
Route::get('/order/{id}/edit', 'OrderProduct@edit')->name('orders.edit');
Route::get('/order/{id}', 'OrderProduct@update')->name('orders.update');


