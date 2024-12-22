<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LetterDeath extends Model
{
    protected $fillable = [
        'no_letter',
        'name',
        'nik',
        'date_death',
        'hour_death',
        'death_cause',
        'mom_name',
        'dad_name',
    ];
}
