<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(MovieController::class)->group(function () {
    Route::get('/VR', 'index')->name('movies.index');
    Route::get('/VR/{id}', 'show')->name('movies.show');
    Route::get('/VR/{id}/edit', 'edit')->name('movies.edit');
    Route::put('/vR/{id}', 'update')->name('movies.update');
});

Route::resource('studios', StudioController::class);

Route::controller(AuthController::class)->group(function () {
    Route::get('/auth/login', 'login')->name('login');
    Route::post('/auth/login', 'authenticate')->name('login.authenticate');
    Route::get('/auth/logout', 'logout')->name('logout');
});
