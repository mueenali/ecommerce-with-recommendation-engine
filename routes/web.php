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

Route::get('/','HomeController@index')->name('home');
Route::get('/shop', 'ProductsController@getAllProducts')->name('shop.index');
Route::get('/product/{id}','ProductsController@getProduct')->name('product.index');
Route::resource('/wishList', 'WishListController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
