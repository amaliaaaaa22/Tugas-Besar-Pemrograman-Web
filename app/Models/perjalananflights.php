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
}
