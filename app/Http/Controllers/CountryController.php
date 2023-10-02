<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;

class CountryController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Country::class, 'country');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('countries.index', [
            'countries' => Country::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('countries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCountryRequest $request)
    {
        $input = $request->all();
        Country::create($input);

        return redirect()->route('countries.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        return view('countries.show', [
            'c' => $country
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $country)
    {
        return view('countries.edit', ['c' => $country]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCountryRequest $request, Country $country)
    {
        // if ($request->user()->cannot('update', User::class, Country::class)) {
        //    abort(403);
        // }

        //$this->authorize('update', $country);

        $input = $request->all();
        $country->update($input);
        return redirect()->route('countries.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        $country->delete();
        return redirect()->route('countries.index');
    }
}
