<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DestinasiController extends Controller
{
    /**
     * Menampilkan halaman destinasi penerbangan.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Data destinasi yang akan ditampilkan
        $destinasi = [
            [
                'id' => 'bali',
                'nama' => 'Bali (DPS)',
                'deskripsi' => 'Keindahan pantai dan budaya eksotis.',
                'image' => asset('images/destinasi/bali.jpg'),
            ],
            [
                'id' => 'jakarta',
                'nama' => 'Jakarta (CGK)',
                'deskripsi' => 'Pusat bisnis dan ibu kota Indonesia.',
                'image' => asset('images/destinasi/jakarta.jpg'),
            ],
        ];

        // Mengirimkan data destinasi ke view
        return view('destinasi', compact('destinasi'));
    }

    /**
     * Mengunggah gambar destinasi.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $destinasiId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function uploadImage(Request $request, $destinasiId)
    {
        // Validasi input
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Ambil file gambar yang diunggah
        $image = $request->file('image');
        $imageName = $destinasiId . '.' . $image->getClientOriginalExtension();

        // Path penyimpanan gambar
        $destinationPath = 'images/destinasi';
        
        // Simpan gambar ke storage/public/images/destinasi
        $image->storeAs($destinationPath, $imageName, 'public');

        // Contoh: Menyimpan informasi gambar ke database (opsional)
        // Destinasi::updateOrCreate(['id' => $destinasiId], ['image' => $imageName]);

        // Redirect dengan pesan sukses
        return back()->with('success', 'Gambar berhasil diunggah!');
    }

    public function search(Request $request)
    {
        $searchQuery = $request->input('search');
        // Logika pencarian atau pengolahan data
        return view('destinasi', compact('searchQuery'));
    }
}
