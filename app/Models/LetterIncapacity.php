<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LetterIncapacity extends Model
{
    protected $fillable = [
        'no_letter',
        'name',
        'tgl_lahir',
        'tempat_lahir',
        'gender',
        'nationality',
        'education',
        'job',
        'marriage',
        'nik',
        'religion',
        'address',
        'name_child',
        'tgl_lahir_child',
        'tempat_lahir_child',
        'gender_child',
        'education_child',
        'address_child',
        'no_wa',
    ];
}
