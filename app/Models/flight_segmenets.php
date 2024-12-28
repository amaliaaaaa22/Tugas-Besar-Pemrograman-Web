<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flight_segmenets extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'sequence',
        'pesawat_id',
        'penerbangan_id',
        'time'
    ];
}
