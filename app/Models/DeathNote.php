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
        'date_death',
        'hour_death',
        'caused_death',
        'place_death',
        'info_death',
        'year',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($letter) {
            $letterYear = $letter->year ?? now()->year;

            // auto numbering when no_letter is empty
            if (empty($letter->no_dok_journey)) {
                $lastLetter = self::where('year', $letterYear)
                    ->orderBy('no_dok_journey', 'desc')
                    ->first();
                $letter->no_dok_journey = $lastLetter ? $lastLetter->no_dok_journey + 1 : 1;
            }

            // Ensure no duplicate no_letter within the same year
            $exist = self::where('no_dok_journey', $letter->no_dok_journey)
                ->where('year', $letterYear)
                ->where('id', '!=', $letter->id)
                ->exists();

            if ($exist) {
                throw new \Exception('The letter number {$letter->no_letter} already exist for the year {$year}');
            }
        });
    }
}
