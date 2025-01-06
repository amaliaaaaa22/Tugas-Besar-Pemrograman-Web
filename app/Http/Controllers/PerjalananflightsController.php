<?php

namespace App\Http\Controllers;

use App\Models\perjalananflights;
use Illuminate\Http\Request;

class PerjalananFlightsController extends Controller
{
    // Menampilkan daftar perjalanan flights
    public function index()
    {
        // Mengambil data perjalananflights beserta relasinya
        $perjalananflights = perjalananflights::with(['pesawat', 'segment', 'classes', 'transaksi'])->get();

        // Mengirim data ke view 'perjalananflights.index'
        return view('perjalananflights.index', compact('perjalananflights'));
    }

    // Menampilkan form untuk menambahkan perjalanan flight baru
    public function create()
    {
        // Menampilkan form input data
        return view('perjalananflights.create');
    }

    // Menyimpan perjalanan flight baru
    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'no_penerbangan' => 'required|string|max:255',
            'pesawat_id' => 'required|exists:pesawat,id',
        ]);

        // Menyimpan data perjalanan flight
        perjalananflights::create($validated);

        // Redirect ke halaman daftar perjalanan flights
        return redirect()->route('perjalananflights.index')->with('success', 'Perjalanan flight berhasil ditambahkan');
    }

    // Menampilkan form untuk mengedit perjalanan flight
    public function edit($id)
    {
        // Mencari data perjalanan flight berdasarkan ID
        $flight = perjalananflights::findOrFail($id);

        // Menampilkan form edit data
        return view('perjalananflights.edit', compact('flight'));
    }

    // Memperbarui data perjalanan flight
    public function update(Request $request, $id)
    {
        // Validasi data
        $validated = $request->validate([
            'no_penerbangan' => 'required|string|max:255',
            'pesawat_id' => 'required|exists:pesawat,id',
        ]);

        // Mencari data perjalanan flight berdasarkan ID
        $flight = perjalananflights::findOrFail($id);

        // Memperbarui data perjalanan flight
        $flight->update($validated);

        // Redirect ke halaman daftar perjalanan flights
        return redirect()->route('perjalananflights.index')->with('success', 'Perjalanan flight berhasil diperbarui');
    }

    // Menghapus perjalanan flight
    public function destroy($id)
    {
        // Mencari data perjalanan flight berdasarkan ID
        $flight = perjalananflights::findOrFail($id);

        // Menghapus data perjalanan flight
        $flight->delete();

        // Redirect ke halaman daftar perjalanan flights
        return redirect()->route('perjalananflights.index')->with('success', 'Perjalanan flight berhasil dihapus');
    }
}
