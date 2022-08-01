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

Route::get('/product', 'App\Http\Controllers\ProductController@product');

Route::get('/about', 'App\Http\Controllers\DashboardController@about');

Route::get('/contact', 'App\Http\Controllers\DashboardController@contact');

Route::get('/logout', 'App\Http\Controllers\DashboardController@logout');

require __DIR__.'/auth.php';