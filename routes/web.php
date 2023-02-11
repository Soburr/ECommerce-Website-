<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
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

Route::get('/product/{id}', 'App\Http\Controllers\ProductController@productId')->middleware(['auth'])->name('product.id');

Route::get('/about', 'App\Http\Controllers\DashboardController@about')->middleware(['auth'])->name('about');

Route::get('/contact', 'App\Http\Controllers\DashboardController@contact')->middleware(['auth'])->name('contact');

Route::get('/search', 'App\Http\Controllers\SearchController@search')->middleware(['auth'])->name('search');

Route::get('/cart', 'App\Http\Controllers\CartController@cart')->middleware(['auth'])->name('cart');

Route::get('/add-to-cart/{id}', 'App\Http\Controllers\CartController@addToCart')->middleware(['auth'])->name('add-to-cart');

Route::patch('update-cart', 'App\Http\Controllers\CartController@update')->middleware(['auth'])->name('update.cart');

Route::delete('remove-from-cart', 'App\Http\Controllers\CartController@remove')->middleware(['auth'])->name('remove.from.cart');

Route::delete('clear-all', 'App\Http\Controllers\CartController@clear')->middleware(['auth'])->name('clear');

Route::get('/logout', 'App\Http\Controllers\DashboardController@logout');


// Route::controller(DashboardController::class)->group(function(){
//     Route::get('/dashboard', 'index');
//     Route::get('/product', 'product');
//     Route::get('/about', 'about');
//     Route::get('/contact', 'contact');
//     Route::get('/logout', 'logout');
// });


require __DIR__.'/auth.php';
