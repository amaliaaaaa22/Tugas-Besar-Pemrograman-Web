<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Tampilkan daftar transaksi.
     */
    public function index()
    {
        $transaksi = Transaksi::all(); // Mengambil semua data transaksi
        return view('transaksi.index', compact('transaksi'));
    }

    /**
     * Tampilkan form untuk menambahkan transaksi baru.
     */
    public function create()
    {
        return view('transaksi.create');
    }

    /**
     * Simpan transaksi baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:transaksis|max:10',
            'nama' => 'required|string|max:100',
            'email' => 'required|email',
            'no_telepon' => 'required|string|max:15',
            'status_pembayaran' => 'required|string',
            'subtotal' => 'required|numeric',
            'grandtotal' => 'required|numeric',
        ]);

        Transaksi::create($request->all()); // Simpan data
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil ditambahkan.');
    }

    /**
     * Tampilkan detail transaksi.
     */
    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id); // Cari transaksi berdasarkan ID
        return view('transaksi.show', compact('transaksi'));
    }

    /**
     * Tampilkan form untuk mengedit transaksi.
     */
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id); // Cari transaksi berdasarkan ID
        return view('transaksi.edit', compact('transaksi'));
    }

    /**
     * Perbarui transaksi di database.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => 'required|max:10',
            'nama' => 'required|string|max:100',
            'email' => 'required|email',
            'no_telepon' => 'required|string|max:15',
            'status_pembayaran' => 'required|string',
            'subtotal' => 'required|numeric',
            'grandtotal' => 'required|numeric',
        ]);

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->update($request->all()); // Update data
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diperbarui.');
    }

    /**
     * Hapus transaksi dari database.
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete(); // Hapus data
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus.');
    }
}
