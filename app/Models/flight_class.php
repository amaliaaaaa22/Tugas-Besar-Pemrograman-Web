<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class flight_class extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'pesawat_id',
        'class_type',
        'harga',
        'total_kursi'
    ];

    public function perjalananflights()
    {
        return $this->belongsTo(perjalananflights::class);
    }
}

    