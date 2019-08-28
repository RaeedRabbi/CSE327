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



Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart/{id}/add', 'CartController@store')->name('cart.add');
Route::delete('/cart/{product}/delete', 'CartController@destroy')->name('cart.delete');
Route::post('/cart/{product}/update', 'CartController@update')->name('cart.update');
Route::delete('/cart', 'CartController@clearCart')->name('cart.clear');

Route::middleware(['auth'])->group(function(){
    Route::post('/shop/{product}/review', 'ShopController@storeReview');
    Route::get('/wishlist', 'WishListController@index');
    Route::get('/wishlist/{product}/store', 'WishListController@store');
    Route::delete('/wishlist/{product}/delete', 'WishListController@destroy');

});
Route::prefix('admin')->group(function () {
    Route::resource('productmanager', 'ProductController')->middleware('admin');
});