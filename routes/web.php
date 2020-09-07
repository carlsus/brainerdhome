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
<<<<<<< HEAD
Route::get('/buyers', 'BuyersController@index')->name('buyer_search');
Route::get('/buyers/register', 'BuyersController@register')->name('buyer_register');
=======
// Buyer Routes
Route::get('/buyer', 'Buyer\BuyerSearchController@index')->name('buyer.search.index');
Route::get('/buyer/register', 'Buyer\BuyerRegistrationController@show')->name('buyer.register');
Route::post('/buyer/register', 'Buyer\BuyerRegistrationController@create')->name('buyer.register');
Route::get('/buyer/dashboard', 'Buyer\BuyerDashboardController@index')->middleware('auth')->name('buyer.dashboard');
>>>>>>> buyer_registration_feater_test

Route::get('/seller', 'SellerController@index')->name('seller_index');