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



Route::group(['namespace'=>'Frontend'],function(){
	Route::get('/','HomeController@showHomePage')->name('frontend.home');
	Route::get('/product/{slug}','HomeController@showDetails')->name('product.details');
	Route::get('/cart','CartController@showCart')->name('cart');
	Route::post('/cart','CartController@addToCart')->name('cart.add');
	Route::post('/cart/remove','CartController@removeToCart')->name('cart.remove');
	
});
