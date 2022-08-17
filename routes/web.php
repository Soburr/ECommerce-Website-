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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->middleware(['auth'])->name('dashboard');

Route::get('/product', 'App\Http\Controllers\ProductController@product')->middleware(['auth'])->name('product');

Route::get('/about', 'App\Http\Controllers\DashboardController@about')->middleware(['auth'])->name('about');

Route::get('/contact', 'App\Http\Controllers\DashboardController@contact')->middleware(['auth'])->name('contact');

Route::get('/search', 'App\Http\Controllers\SearchController@search')->middleware(['auth'])->name('search');

Route::get('/cart', 'App\Http\Controllers\CartController@cart')->middleware(['auth'])->name('cart');

Route::get('/addToCart', 'App\Http\Controllers\CartController@addToCart');

Route::get('/logout', 'App\Http\Controllers\DashboardController@logout');

require __DIR__.'/auth.php';
