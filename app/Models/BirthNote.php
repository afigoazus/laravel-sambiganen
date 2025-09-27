<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BirthNote extends Model
{
    use HasFactory;

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
        'dad_job',
        'address_dad',
        'place_born_dad',
        'date_born_dad',
        'nationality_dad',
        'name_mom',
        'nik_mom',
        'place_born_mom',
        'mom_job',
        'address_mom',
        'date_born_mom',
        'nationality_mom',
        'no_kk_anak',
        'hub_keluarga',
        'name_child',
        'gender_child',
        'address_child',
        'place_birth_child',
        'place_birth_child2',
        'date_birth_child',
        'hour_birth_child',
        'type_birth_child',
        'no_birth_child',
        'helper_birth',
        'weight_child',
        'height_child',
        'blood_type_child',
        'religion_child',
        'disability',
        'nationality_child',
        'year'
    ];

    protected $cast = [
        'date_born_dad' => 'date',
        'date_born_mom' => 'date',
    ];

    public function getDadAgeAttribute(): int {
        return $this->date_born_dad->age;
    }

    
    public function getMomAgeAttribute(): int {
        return $this->date_born_mom->age;
    }

    protected static function booted(): void
    {
        // Ganti event ke 'creating' untuk semua logika yang hanya berjalan sekali
        static::creating(function ($birthNote) {
            // Tentukan tahun saat ini
            $currentYear = now()->year;
            $birthNote->year = $currentYear;

            // --- LOGIKA UNTUK no_letter (BARU) ---
            // Cari record terakhir di tahun yang sama untuk mendapatkan no_letter berikutnya
            $latestLetter = self::where('year', $currentYear)->latest('no_letter')->first();
            // Jika sudah ada, tambah 1. Jika tidak, mulai dari 1.
            $birthNote->no_letter = $latestLetter ? $latestLetter->no_letter + 1 : 1;

            // --- LOGIKA UNTUK no_dok_journey (YANG SUDAH ADA) ---
            // Logika ini hanya berjalan jika no_dok_journey tidak diisi secara manual
            if (empty($birthNote->no_dok_journey)) {
                $lastJourney = self::where('year', $currentYear)->orderBy('no_dok_journey', 'desc')->first();
                $birthNote->no_dok_journey = $lastJourney ? $lastJourney->no_dok_journey + 1 : 1;
            }
        });
    }
}
