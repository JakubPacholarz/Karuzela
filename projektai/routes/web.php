<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/register', 'App\Http\Controllers\RegistrationController@register')->name('register');

Route::post('/login', 'App\Http\Controllers\LoginController@login')->name('login');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home_logged_in', [HomeController::class, 'index2'])->name('home_logged_in');
});

Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/info', [App\Http\Controllers\HomeController::class, 'index3'])->name('info');

Route::get('/product/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('product');

Route::get('/store', [App\Http\Controllers\StoreController::class, 'create'])->name('store.create');
Route::post('/store', [App\Http\Controllers\StoreController::class, 'store'])->name('store.store');


