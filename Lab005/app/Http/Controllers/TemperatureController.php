<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemperatureController extends Controller
{
    public function cft(float $c)
    {
        if($c == null){
            echo("nie podano wartości".PHP_EOL);
            return null;
        }
        else    return ($c * 9 / 5) + 32;
    }
}
