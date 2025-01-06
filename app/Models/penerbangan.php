<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penerbangan extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
        'iata_code',
        'nama',
        'image',
        'kota',
        'country'
    ];

    public function segments()
    {
        return $this->belongTo(flight_segmenets::class);
    }
}
