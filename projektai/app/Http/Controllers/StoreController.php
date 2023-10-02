<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{

    public function create()
    {
        $categories = Category::all();

        return view('store', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'condition' => 'required|in:new,used',
            'category' => 'nullable|exists:categories,id',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Utworzenie nowego produktu na podstawie przesłanych danych
        $product = new Product();
        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->product_condition = $validatedData['condition'];
        $product->category_id = $validatedData['category'];
        $product->price = $validatedData['price'];
        $product->save();


        // Zapisanie obrazka, jeśli został przesłany
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $product->id . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName);
        }


        // Przekierowanie użytkownika na stronę formularza dodawania produktu
        return redirect()->route('home_logged_in');
    }
}


