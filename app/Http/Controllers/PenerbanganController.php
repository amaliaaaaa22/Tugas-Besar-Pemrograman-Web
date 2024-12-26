<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenerbanganController extends Controller
{
    public function index()
    {
        $dataPenerbangan = [
            [
                'nomor' => 'GA123',
                'asal' => 'Jakarta (CGK)',
                'tujuan' => 'Bali (DPS)',
                'waktu_keberangkatan' => '10:00 WIB',
                'waktu_kedatangan' => '12:00 WITA'
            ],
        ];
        return view('penerbangan', ['penerbangan' => $dataPenerbangan]);
    }
}
