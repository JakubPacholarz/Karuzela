<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemperatureController;


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

Route::get('/ASD', function () {
    return 'ASD';
});

Route::get('/greeting', function () {
    return  'hello world';
});

Route::get('/user/{id}', function (string $id) {
    return  'User '.$id;
});

Route::get('/greetings/{name?}', function (string $name = "nieznajomy") {
    return  view('greetings',["name" => $name]);
});

Route::get('/temperature/cft/{celsjusz?}', [TemperatureController::class, 'cft']);
