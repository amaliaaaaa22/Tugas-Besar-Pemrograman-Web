<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RescheduleController extends Controller
{
    // Menampilkan form reschedule
    public function showForm()
    {
        return view('reschedule');
    }

    // Proses reschedule
    public function processReschedule(Request $request)
    {
        // Validasi input
        $request->validate([
            'ticket_number' => 'required|string|max:50',
            'new_date' => 'required|date|after:today',
            'new_time' => 'required|date_format:H:i',
        ]);

        // Ambil data dari input
        $ticketNumber = $request->input('ticket_number');
        $newDate = $request->input('new_date');
        $newTime = $request->input('new_time');

        // Cek keberadaan tiket (contoh dengan query ke database)
        $ticket = \DB::table('tickets')->where('ticket_number', $ticketNumber)->first();

        if (!$ticket) {
            return redirect()->back()->withErrors(['ticket_number' => 'Nomor tiket tidak ditemukan.']);
        }

        // Update data tiket di database
        \DB::table('tickets')
            ->where('ticket_number', $ticketNumber)
            ->update([
                'reschedule_date' => $newDate,
                'reschedule_time' => $newTime,
                'updated_at' => now(),
            ]);

        // Redirect dengan pesan sukses
        return redirect()->route('reschedule.success')->with('success', 'Tiket berhasil di-reschedule.');
    }

    // Menampilkan halaman sukses
    public function success()
    {
        return view('reschedule_success');
    }
}
