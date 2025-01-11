<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Perbaiki capitalisasi

class PerjalananFlights extends Model // Perbaiki capitalisasi
{
    use HasFactory, SoftDeletes;

    protected $table = 'perjalananflights';

    protected $fillable = [
        'no_penerbangan',
        'pesawat_id'
    ];

    public function pesawat()
    {
        return $this->belongsTo(Pesawat::class);
    }

    public function segment()
    {
        return $this->hasMany(flight_segmenets::class); // Perbaiki nama model
    }

    public function classes()
    {
        return $this->hasMany(flight_class::class); // Perbaiki nama model
    }

    public function transaksi()
    {
        return $this->hasMany(transaction_passengers::class); // Perbaiki nama model
    }
}