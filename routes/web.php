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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/blog', 'PagesController@blog');

Route::get('/shop', 'ShopController@index');
Route::get('/shop/{product}', 'ShopController@show');

//Route::resource('wishList', 'WishListController')->only('index');
Auth::routes();
Route::get('/dashboard', 'DashboardController@index');

Route::middleware(['auth'])->group(function(){
    Route::post('/shop/{product}/review', 'ShopController@storeReview');

    Route::get('/wishlist', 'WishListController@index');
    Route::get('/wishlist/{product}/store', 'WishListController@store');
    Route::delete('/wishlist/{product}/delete', 'WishListController@destroy');

    Route::get('/cart', 'CartController@index')->name('cart.index');
    Route::post('/cart/{product}/add', 'CartController@store')->name('cart.add');
    Route::delete('/cart/{product}/delete', 'CartController@destroy')->name('cart.delete');

});