<?php

namespace App\Http\Controllers;

use App\Models\flight_class;
use App\Models\PerjalananFlights;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\PerjalananFlight;
use App\Models\FlightClass;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksis = Transaksi::with(['perjalananFlight', 'flightClass'])->get();
        return view('transaksi', compact('transaksis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $perjalananFlights = PerjalananFlights::all();
        $flightClasses = flight_class::all();

        return view('transaksis.create', compact('perjalananFlights', 'flightClasses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|string|unique:transaksis,code',
            'perjalananflights_id' => 'required|exists:perjalanan_flights,id',
            'flight_classes_id' => 'required|exists:flight_classes,id',
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'no_telepon' => 'required|string|max:15',
            'no_passengers' => 'required|integer|min:1',
            'status_pembayaran' => 'required|in:pending,paid,failed',
            'subtotal' => 'nullable|integer|min:0',
            'grandtotal' => 'nullable|integer|min:0',
        ]);

        Transaksi::create($validated);

        return redirect()->route('transaksis.index')->with('success', 'Transaksi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $transaksi = Transaksi::with(['perjalananFlight', 'flightClass'])->findOrFail($id);
        return view('transaksis.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $perjalananFlights = PerjalananFlights::all();
        $flightClasses = flight_class::all();

        return view('transaksis.edit', compact('transaksi', 'perjalananFlights', 'flightClasses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $transaksi = Transaksi::findOrFail($id);

        $validated = $request->validate([
            'code' => 'required|string|unique:transaksis,code,' . $id,
            'perjalananflights_id' => 'required|exists:perjalanan_flights,id',
            'flight_classes_id' => 'required|exists:flight_classes,id',
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'no_telepon' => 'required|string|max:15',
            'no_passengers' => 'required|integer|min:1',
            'status_pembayaran' => 'required|in:pending,paid,failed',
            'subtotal' => 'nullable|integer|min:0',
            'grandtotal' => 'nullable|integer|min:0',
        ]);

        $transaksi->update($validated);

        return redirect()->route('transaksis.index')->with('success', 'Transaksi berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        return redirect()->route('transaksis.index')->with('success', 'Transaksi berhasil dihapus!');
    }
}
