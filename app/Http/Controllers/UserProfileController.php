<?php

// app/Http/Controllers/UserProfileController.php
// app/Http/Controllers/UserProfileController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class UserProfileController extends Controller
{
    // Menampilkan form untuk mengedit profil pengguna
    public function edit()
    {
        $user = Auth::user();  // Mengambil data pengguna yang sedang login
        return view('profile.edit', compact('user'));
    }

    // Memperbarui data profil pengguna
    public function update(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'address' => 'required|string|max:255',
        ]);

        // Update data pengguna
        $user = Auth::user();
        $user->update($validated);

        // Redirect kembali ke halaman profil dengan pesan sukses
        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully.');
    }
}
