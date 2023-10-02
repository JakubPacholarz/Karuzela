<?php


use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemperatureController; 
use Illuminate\Http\Request; 
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

Route::get('/zad9', function (Request $request) 
{     $br = "<br>";     $r = print_r($request->all(), true) . $br .    
         $request->query('a') . $br .         $request->query('b', 'brak b') . $br .
                  print_r($request->query(), true) . $br .         $request->a . $br .  
                         $request->has(['a', 'b']) . $br .         $request->filled(['a']) . $br;  
                            return $r; });

                            Route::get('/zad12', function (Request $request) {    $name = $request->name;     $arr = ['a', 'b', 'c', 'd', 'e'];     return view('zad12', ['name' => $name, 'arr' => $arr]); }); 