<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    public function index()
    {
        return view('login');
    }

    public function store($request)
    {
        return view('login');
    }
}
