<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flight_class extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'pesawat_id',
        'class_type',
        'harga',
        'total_kursi'
    ];
}
