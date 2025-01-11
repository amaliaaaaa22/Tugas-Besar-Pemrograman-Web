<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class transaction_passengers extends Model
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

    /**
     * Relasi ke tabel perjalananflights.
     */
    public function perjalananFlight()
    {
        return $this->belongsTo(perjalananflights::class);
    }

    /**
     * Relasi ke tabel flight_classes.
     */
    public function flightClass()
    {
        return $this->belongsTo(flight_class::class);
    }

    /**
     * Relasi ke tabel transaction_passengers.
     */
    public function passengers()
    {
        return $this->hasMany(transaction_passengers::class);
    }
}
