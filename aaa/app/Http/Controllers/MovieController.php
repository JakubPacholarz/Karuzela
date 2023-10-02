<?php

namespace App\Http\Controllers;

use App\Models\Studio;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        return view('movies.index', [
            'movies' => Movie::all(),
            'cheap_movies' => Movie::orderBy('price')->take(4)->get(),
            'random_movies' => Movie::inRandomOrder()->limit(4)->get()
        ]);
    }

    public function show($id)
    {
        return view('movies.show', [
            'm' => Movie::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.edit', [
            'm' => $movie,
            'studios' => Studio::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|unique:movies,name,'.$id,
            'Gatunek' => 'required|string',
            'Odcinki' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'img' => 'required|string',
            'id_studia' => 'integer',
        ]);

        $movie = Movie::findOrFail($id);
        $input = $request->all();
        $movie->update($input);
        return redirect()->route('movies.index');
    }
}
