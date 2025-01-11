<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PerjalananFlights extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'perjalananflights'; // Nama tabel di database
    protected $fillable = [
        'no_penerbangan',
        'pesawat_id',
    ];

    /**
     * Relasi ke model Pesawat
     * Setiap perjalanan flight memiliki satu pesawat
     */
    public function pesawat()
    {
        return $this->belongsTo(Pesawat::class, 'pesawat_id');
    }

    /**
     * Relasi ke model FlightSegments
     * Setiap perjalanan flight memiliki banyak segmen
     */
    public function segments()
    {
        return $this->hasMany(FlightSegment::class, 'flight_id');
    }

    /**
     * Relasi ke model FlightClass
     * Setiap perjalanan flight memiliki banyak kelas
     */
    public function classes()
    {
        return $this->hasMany(FlightClass::class, 'flight_id');
    }

    /**
     * Relasi ke model Transaksi
     * Setiap perjalanan flight memiliki banyak transaksi
     */
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'flight_id');
    }
}