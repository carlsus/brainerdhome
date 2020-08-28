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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/buyers', 'BuyersController@index')->name('buyer_search');
Route::get('/buyers/register', 'BuyersController@register')->name('buyer_register');

Route::get('/seller', 'SellerController@index')->name('seller_index');