<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    
        

        return view('home', compact('users', 'products','categories'));
    }


    public function index2()
    {
        $users = User::all();
        $products = Product::all();
        $categories = Category::all();

        return view('home_logged_in', compact('users', 'products','categories'));
    }

    public function index3()
    {
        return view('info');
    }

}



