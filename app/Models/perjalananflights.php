<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perjalananflights extends Model
{
    use HasFactory, SoftDeletes;

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
        return $this->hasMany(flight_segmenets::class);
    }

    public function classes()
    {
        return $this->hasMany(flight_class::class);
    }

    public function transaksi()
    {
        return $this->hasMany(transaksi::class);
    }
}
