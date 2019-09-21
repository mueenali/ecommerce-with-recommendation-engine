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

Route::Auth();
Route::get('/','HomeController@index')->name('home');
Route::get('shop','ProductsController@getAllProducts')->name('shop.index');
Route::get('shop/category/{id}', 'ProductsController@getAllProductsByCategory')->name('show.category');
Route::get('product/{id}','ProductsController@getProduct')->name('item');
Route::resource('wishList', 'WishListController',['except' => ['show', 'create', 'edit' , 'update']]);
Route::resource('cart', 'ShoppingCartController', ['except' => ['show']]);


Route::prefix('admin')->group(function () {
    Route::resource('user', 'UserController', ['except' => ['show']]);
    Route::resource('category', 'AdminCategoryController', ['except' => ['show']]);
    Route::resource('subCategory', 'AdminSubCategoryController', ['except' =>['show']]);
    Route::resource('product', 'AdminProductController' , ['except' => ['show']]);
    Route::get('dashboard', 'AdminController@index')->name('admin.index');
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});







