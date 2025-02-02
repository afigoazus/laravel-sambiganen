<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LetterFuel extends Model
{
    protected $fillable = [
        'no_letter',
        'name',
        'nik',
        'address',
        'business_name',
        'user_consumer_sector',
        'business_type',
        'tool_type',
        'tool_sum',
        'tool_power',
        'tool_use',
        'tool_time_used_hour',
        'tool_time_used_daily',
        'jbt_consumption',
        'tool_sum2',
        'volume_allocation',
        'pick_up_place',
        'no_distributor',
        'address_distributor',
        'purchasing_tools_used',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($letter) {
            $currentYear = $letter->year ?? now()->year;

            // auto numbering when no_letter is empty
            if (empty($letter->no_letter)) {
                $lastLetter = self::where('year', $currentYear)
                    ->orderBy('no_letter', 'desc')
                    ->first();

                $letter->no_letter = $lastLetter ? $lastLetter->no_letter + 1 : 1;
            }

            // Ensure no duplicate no_letter within the same year
            $exist = self::where('no_letter', $letter->no_letter)
                ->where('year', $currentYear)
                ->where('id', '!=', $letter->id)
                ->exists();

            if ($exist) {
                throw new \Exception('The letter number {$letter->no_letter} already exist for the year {$year}');
            }
        });
    }
}
