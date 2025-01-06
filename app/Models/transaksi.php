<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaksi extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'code',
        'perjalananflights_id',
        'flight_classes_id',
        'nama',
        'email',
        'no_telepon',
        'no_passengers',
        'status_pembayaran',
        'subtotal',
        'grandtotal',
    ];

    public function perjalananFlight()
    {
        return $this->belongsTo(PerjalananFlight::class);
    }

    public function flightClass()
    {
        return $this->belongsTo(FlightClass::class);
    }

    public function passengers()
    {
        return $this->hasMany(TransactionPassenger::class);
    }
}
