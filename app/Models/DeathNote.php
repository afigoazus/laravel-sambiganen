<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DeathNote extends Model
{
    use HasFactory;

    // Pastikan 'no_letter' dan 'year' tidak ada di sini
    protected $fillable =  [
        'name',
        'nik',
        'no_dok_journey', // no_dok_journey bisa diisi manual, jadi tetap di fillable
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
        'place_born_death',
        'date_born_death',
        'date_death',
        'hour_death',
        'caused_death',
        'place_death',
        'info_death',
        'order_death',
    ];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted(): void
    {
        // Gunakan event 'creating' untuk semua logika yang hanya berjalan sekali saat pembuatan
        static::creating(function ($deathNote) {
            // Tentukan tahun saat ini
            $currentYear = now()->year;
            $deathNote->year = $currentYear;

            // --- LOGIKA UNTUK no_letter (BARU) ---
            // Cari record terakhir di tahun yang sama untuk mendapatkan no_letter berikutnya
            $latestLetter = self::where('year', $currentYear)->latest('no_letter')->first();
            // Jika sudah ada, tambah 1. Jika tidak, mulai dari 1.
            $deathNote->no_letter = $latestLetter ? $latestLetter->no_letter + 1 : 1;

            // --- LOGIKA UNTUK no_dok_journey (YANG SUDAH ADA) ---
            // Logika ini hanya berjalan jika no_dok_journey tidak diisi manual
            if (empty($deathNote->no_dok_journey)) {
                // Cari record terakhir di tahun yang sama untuk mendapatkan no_dok_journey berikutnya
                $lastJourney = self::where('year', $currentYear)->orderBy('no_dok_journey', 'desc')->first();
                // Jika sudah ada, tambah 1. Jika tidak, mulai dari 1.
                $deathNote->no_dok_journey = $lastJourney ? $lastJourney->no_dok_journey + 1 : 1;
            }
        });
    }
}