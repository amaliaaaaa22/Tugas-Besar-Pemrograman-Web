<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiketController extends Controller
{
    /**
     * Menampilkan halaman tiket penerbangan.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Menyiapkan data tiket
        $tiket = [
            [
                'id' => 'tiket1',
                'nama' => 'Bali - Jakarta',
                'deskripsi' => 'Tiket penerbangan dari Bali (DPS) ke Jakarta (CGK).',
                'harga' => 'Rp1.500.000',
                'image' => 'https://via.placeholder.com/300x200', // Default image
            ],
            [
                'id' => 'tiket2',
                'nama' => 'Jakarta - Surabaya',
                'deskripsi' => 'Tiket penerbangan dari Jakarta (CGK) ke Surabaya (SUB).',
                'harga' => 'Rp1.200.000',
                'image' => 'https://via.placeholder.com/300x200', // Default image
            ]
        ];

        // Mengirimkan data tiket ke view
        return view('tiket', compact('tiket'));
    }

    /**
     * Mengunggah gambar tiket.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $tiketId
     * @return \Illuminate\Http\Response
     */
    public function uploadImage(Request $request, $tiketId)
    {
        // Validasi gambar
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Mengambil file gambar yang diunggah
        $image = $request->file('image');
        $imageName = $tiketId . '.' . $image->getClientOriginalExtension();
        $imagePath = public_path('images/tiket');

        // Menyimpan gambar ke folder tiket
        $image->move($imagePath, $imageName);

        // Menyimpan path gambar di database atau melakukan hal lain sesuai kebutuhan

        // Mengembalikan response sukses atau redirect ke halaman sebelumnya
        return back()->with('success', 'Gambar tiket berhasil diunggah!');
    }
}
