<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function proses(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'dari' => 'required',
            'ke' => 'required',
            'tanggal_berangkat' => 'required|date',
            'tanggal_kembali' => 'nullable|date',
            'jumlah_penumpang' => 'required',
            'kelas_penerbangan' => 'required',
            'durasi' => 'required',
            'harga' => 'required',
        ]);

        // Simpan data ke session
        session()->put('booking_data', $validatedData);

        // Redirect ke halaman transaksi
        return redirect()->route('transaksi');
    }
}