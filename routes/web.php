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

// TEST Controller
Route::get('/test', 'Api\APITestController@getMarkets')->name('api.test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Buyer Routes
Route::get('/buyer', 'Buyer\BuyerSearchController@index')->name('buyer.search.index');
Route::get('/buyer/register', 'Buyer\BuyerRegistrationController@show')->name('buyer.register');
Route::post('/buyer/register', 'Buyer\BuyerRegistrationController@create')->name('buyer.register');
Route::get('/buyer/dashboard', 'Buyer\BuyerDashboardController@index')->middleware(['auth', 'buyer'])->name('buyer.dashboard');
// Buyer Comments
Route::get('/buyer/property/{id}', 'Buyer\BuyerCommentsController@show')->middleware(['auth', 'buyer'])->name('buyer.property.comments');
//==================================================================================================================================
// Property
Route::get('/property', 'PropertiesController@index')->middleware('auth')->name('properties.index');
Route::get('/property/create', 'PropertiesController@create')->middleware('auth')->name('properties.create');
Route::post('/property', 'PropertiesController@store')->middleware('auth')->name('properties.store');

Route::get('/seller', 'SellerController@index')->name('seller_index');
