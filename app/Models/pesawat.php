<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesawat extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
        'code',
        'nama',
        'logo',
        
    ];

    public function perjalananflights()
    {
        return $this->hasMany(perjalananflights::class);
    }
}