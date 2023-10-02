<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TripController extends Controller
{
    public function index(){
        $trips = Trip::all();
        return view('trips.index', [
            'trips' => $trips,
            'random_trips' => $trips->random(4)
        ]);
    }

    public function show($id)
    {
        return view('trips.show', [
            't' => Trip::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        $trip = Trip::findOrFail($id);
        return view('trips.edit', [
            't' => $trip,
            'countries' => Country::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        if (! Gate::allows('is-admin')) {
            abort(403);
        }

        $request->validate([
            'name' => 'required|string|unique:trips,name,'.$id,
            'continent' => 'required|string',
            'period' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'img' => 'required|string',
            'country_id' => 'required|integer',
        ]);

        $trip = Trip::findOrFail($id);
        $input = $request->all();
        $trip->update($input);
        return redirect()->route('trips.index');
    }
}
