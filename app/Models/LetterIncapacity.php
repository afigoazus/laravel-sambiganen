<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LetterIncapacity extends Model
{
    protected $fillable = [
        'no_letter',
        'name',
        'ttl',
        'gender',
        'nationality',
        'education',
        'job',
        'marriage',
        'nik',
        'religion',
        'address',
        'name_child',
        'ttl_child',
        'gender_child',
        'education_child',
        'address_child',
    ];
}
