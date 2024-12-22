<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demographic extends Model
{
    protected $fillable =  [
        'title',
        'content',
        'photo_path',
    ];
}
