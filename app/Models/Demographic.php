<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demographic extends Model
{
    protected $fillable =  [
        'dusun',
        'rukun_warga',
        'rukun_tetangga',
        'jiwa',
    ];

    public $timestamps = false;
}
