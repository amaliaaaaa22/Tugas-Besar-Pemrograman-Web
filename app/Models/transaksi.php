<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
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
        'grandtotal'
    ];
}
