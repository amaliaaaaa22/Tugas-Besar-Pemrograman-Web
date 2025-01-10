<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('transaksi.index', compact('transaksi'));
    }

    public function create()
    {
        return view('transaksi.create');
    }

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

        $data = $request->only([
            'code', 'nama', 'email', 'no_telepon',
            'status_pembayaran', 'subtotal', 'grandtotal'
        ]);

        Transaksi::create($data);
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil ditambahkan.');
    }

    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.show', compact('transaksi'));
    }

    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.edit', compact('transaksi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => 'required|max:10|unique:transaksis,code,' . $id,
            'nama' => 'required|string|max:100',
            'email' => 'required|email',
            'no_telepon' => 'required|string|max:15',
            'status_pembayaran' => 'required|string',
            'subtotal' => 'required|numeric',
            'grandtotal' => 'required|numeric',
        ]);

        $data = $request->only([
            'code', 'nama', 'email', 'no_telepon',
            'status_pembayaran', 'subtotal', 'grandtotal'
        ]);

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->update($data);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus.');
    }
}
