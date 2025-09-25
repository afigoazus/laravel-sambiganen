<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandPriceNote extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'place_born',
        'date_born',
        'job',
        'address',
        'certificate_number',
        'land_area',
        'north_boundary',
        'south_boundary',
        'east_boundary',
        'west_boundary',
        'land_price',
    ];

    protected static function booted(): void
    {
        // Gunakan event 'creating' untuk semua logika yang hanya berjalan sekali saat pembuatan
        static::creating(function ($landPriceNote) {
            // Tentukan tahun saat ini
            $currentYear = now()->year;
            $landPriceNote->year = $currentYear;

            // --- LOGIKA UNTUK no_letter (BARU) ---
            // Cari record terakhir di tahun yang sama untuk mendapatkan no_letter berikutnya
            $latestLetter = self::where('year', $currentYear)->latest('no_letter')->first();
            // Jika sudah ada, tambah 1. Jika tidak, mulai dari 1.
            $landPriceNote->no_letter = $latestLetter ? $latestLetter->no_letter + 1 : 1;
        });
    }
}
