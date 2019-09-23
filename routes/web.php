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
Route::resource('cart', 'ShoppingCartController', ['except' => ['show', 'destroy', 'update']]);
Route::put('cart/update', 'ShoppingCartController@update')->name('cart.item.update');
Route::get('cart/remove/{id}', 'ShoppingCartController@destroy')->name('cart.item.remove');
Route::get('checkout', 'CheckoutController@index')->name('checkout.index');
Route::get('checkout/payment/', 'CheckoutController@payment')->name('payment.index');
Route::post('checkout/payment/charge', 'CheckoutController@charge')->name('charge.store');

Route::prefix('user')->group(function () {
    Route::get('dashboard', 'UserController@index')->name('userDash.index');
    Route::resource('address', 'AddressController', ['except' => 'show', 'index', 'destroy']);
    Route::get('address/remove/{id}', 'AddressController@destroy')->name('address.destroy');
    Route::get('order/{id}','UserController@viewOrder')->name('order.show');
});

Route::prefix('admin')->group(function () {
    Route::resource('user', 'AdminUserController', ['except' => ['show']]);
    Route::resource('category', 'AdminCategoryController', ['except' => ['show']]);
    Route::resource('subCategory', 'AdminSubCategoryController', ['except' =>['show']]);
    Route::resource('product', 'AdminProductController' , ['except' => ['show']]);
    Route::resource('product/photos', 'PhotoController');
    Route::get('dashboard', 'AdminController@index')->name('admin.index');
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});







