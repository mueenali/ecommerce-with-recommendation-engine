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
Route::get('/shop','ProductsController@getAllProducts')->name('shop.index');
Route::get('/product/{id}','ProductsController@getProduct')->name('product');
Route::resource('/wishList', 'WishListController',['except' => ['show', 'create', 'edit' , 'update', 'destroy']]);
Route::get('/wishList/remove/{id}', 'WishListController@destroy')->name("wishList.item.remove");







Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');


Route::get('/my-account', function () {
    return view('my-account');
})->name('my-account');





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







