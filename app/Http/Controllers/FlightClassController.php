<?php

namespace App\Http\Controllers;

use App\Models\flight_class;
use Illuminate\Http\Request;

class FlightClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $flightClasses = flight_class::all();
    return view('flight_class', compact('flightClasses'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $formAction = route('flight_class.store');
    return view('flight_class', compact('formAction'));
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pesawat_id' => 'required|integer',
            'class_type' => 'required|string|max:100',
            'harga' => 'required|numeric',
            'total_kursi' => 'required|integer',
        ]);

        flight_class::create($request->all());

        return redirect()->route('flight_class.index')->with('success', 'Flight Class berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $flightClass = flight_class::findOrFail($id);
    return view('flight_class', compact('flightClass'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $flightClass = flight_class::findOrFail($id);
    $formAction = route('flight_class.update', $id);
    return view('flight_class', compact('flightClass', 'formAction'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'pesawat_id' => 'required|integer',
            'class_type' => 'required|string|max:100',
            'harga' => 'required|numeric',
            'total_kursi' => 'required|integer',
        ]);

        $flightClass = flight_class::findOrFail($id);
        $flightClass->update($request->all());

        return redirect()->route('flight_class.index')->with('success', 'Flight Class berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $flightClass = flight_class::findOrFail($id);
        $flightClass->delete();

        return redirect()->route('flight_class.index')->with('success', 'Flight Class berhasil dihapus.');
    }
}
