<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeathNote extends Model
{
    protected $fillable =  [
        'name',
        'nik',
        'no_dok_journey',
        'nationality',
        'no_wa',
        'name_saksi',
        'nik_saksi',
        'nationality_saksi',
        'name_saksi2',
        'nik_saksi2',
        'nationality_saksi2',
        'name_dad',
        'nik_dad',
        'place_born_dad',
        'date_born_dad',
        'nationality_dad',
        'name_mom',
        'nik_mom',
        'place_born_mom',
        'date_born_mom',
        'nationality_mom',
        'nik_death',
        'name_death',
        'year_death',
        'hour_death',
        'caused_death',
        'place_death',
        'info_death',
    ];
}
