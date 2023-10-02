<?php

namespace App\Http\Controllers;

use App\Models\Studio;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;

class StudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('studios.index', [
            'studios' => Studio::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('studios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCountryRequest $request)
    {
        $input = $request->all();
        Studio::create($input);

        return redirect()->route('studios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Studio $studio)
    {
        return view('studios.show', [
            's' => $studio
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Studio $studio)
    {
        return view('studios.edit', ['s' => $studio]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCountryRequest $request, Studio $studio)
    {
        $input = $request->all();
        $studio->update($input);
        return redirect()->route('studios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Studio $studio)
    {
        $studio->delete();
        return redirect()->route('studios.index');
    }
}
