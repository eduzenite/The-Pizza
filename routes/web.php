<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ProductController@home')->name('index');

Route::group([
    "prefix" => "products"
], function () {

    Route::get('/{category?}', 'ProductController@index')->name('products');

    Route::get('/{category?}/{id?}', 'ProductController@show')->name('product');
});

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout')->middleware('auth');

Route::post('/checkout', "PurchaseController@store")->name('checkout')->middleware('auth');

Route::group([
    "prefix" => "user"
], function () {
    Route::get('/profile', function () {
        return view('profile');
    })->name('user-profile')->middleware('auth');

    Route::get('/purchases', 'PurchaseController@index')->name('user-purchases')->middleware('auth');
    Route::get('/purchases/{id?}', 'PurchaseController@show')->name('user-purchase')->middleware('auth');

    Route::post('/change-password', "ProfileController@change_password")->name('change_password')->middleware('auth');
    Route::post('/change-profile', "ProfileController@change_profile")->name('change_profile')->middleware('auth');
    Route::get('/logout', "ProfileController@logout")->name('exit')->middleware('auth');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
