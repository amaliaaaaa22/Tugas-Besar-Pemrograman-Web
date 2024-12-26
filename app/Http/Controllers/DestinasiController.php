<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    /**
     * Menampilkan halaman destinasi penerbangan.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Menyiapkan data destinasi
        $destinasi = [
            [
                'id' => 'bali',
                'nama' => 'Bali (DPS)',
                'deskripsi' => 'Keindahan pantai dan budaya eksotis.',
                'image' => 'https://via.placeholder.com/300x200', // Default image
            ],
            [
                'id' => 'jakarta',
                'nama' => 'Jakarta (CGK)',
                'deskripsi' => 'Pusat bisnis dan ibu kota Indonesia.',
                'image' => 'https://via.placeholder.com/300x200', // Default image
            ]
        ];

        // Mengirimkan data destinasi ke view
        return view('destinasi', compact('destinasi'));
    }

    /**
     * Mengunggah gambar destinasi.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $destinasiId
     * @return \Illuminate\Http\Response
     */
    public function uploadImage(Request $request, $destinasiId)
    {
        // Validasi gambar
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Mengambil file gambar yang diunggah
        $image = $request->file('image');
        $imageName = $destinasiId . '.' . $image->getClientOriginalExtension();
        $imagePath = public_path('images/destinasi');
        
        // Menyimpan gambar ke folder destinasi
        $image->move($imagePath, $imageName);

        // Menyimpan path gambar di database atau melakukan hal lain sesuai kebutuhan
        
        // Mengembalikan response sukses atau redirect ke halaman sebelumnya
        return back()->with('success', 'Gambar berhasil diunggah!');
    }
}
