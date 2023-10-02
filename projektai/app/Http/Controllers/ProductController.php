<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::find($id); // Pobranie produktu z bazy danych na podstawie identyfikatora

        return view('product', compact('product')); // Przekazanie danych produktu do widoku
    }

}

