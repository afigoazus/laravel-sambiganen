<?php

namespace App\Http\Services;

use App\Models\LetterBusiness;
use App\Models\LetterCounter;
use App\Models\LetterDeath;
use App\Models\LetterFuel;
use App\Models\LetterIncapacity;
use App\Models\LetterLost;

class LetterCounterService
{
    public function getNextLetterNumber($year = null): int
    {
        $currentYear = $year ?? now()->year;
        $counter = LetterCounter::firstOrCreate(['year' => $currentYear], ['latest_no' => 0]);
        $counter->increment('latest_no');
        return $counter->latest_no;
    }

    public function resetRecentLetterNumber($year = null)
    {
        $currentYear = $year ?? now()->year;

        // Get the highest `no_letter` from all letter tables for the given year
        $maxNoLetter = max(
            LetterBusiness::whereYear('created_at', $currentYear)->max('no_letter') ?? 0,
            LetterDeath::whereYear('created_at', $currentYear)->max('no_letter') ?? 0,
            LetterIncapacity::whereYear('created_at', $currentYear)->max('no_letter') ?? 0,
            LetterLost::whereYear('created_at', $currentYear)->max('no_letter') ?? 0,
            LetterFuel::whereYear('created_at', $currentYear)->max('no_letter') ?? 0
        );

        // Update the `latest_no` in the `letter_counters` table
        $counter = LetterCounter::firstOrCreate(['year' => $currentYear], ['latest_no' => 0]);
        $counter->latest_no = $maxNoLetter;
        $counter->save();
    }
}
