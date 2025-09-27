<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandSaleAgreementNote extends Model
{
    use HasFactory;

    protected $fillable = [
        'buyer_name',
        'buyer_place_born',
        'buyer_date_born',
        'buyer_address',
        'seller_name',
        'seller_place_born',
        'seller_date_born',
        'seller_address',
        'land_area',
        'no_persil',
        'no_sppt',
        'no_certificate',
        'north_boundary',
        'south_boundary',
        'east_boundary',
        'west_boundary',
        'land_price',
        'witness1_name',
        'witness2_name',
        'witness3_name',
        'witness1_job_position',
        'witness2_job_position',
        'witness3_job_position',
    ];

    protected static function booted(): void
    {
        // Gunakan event 'creating' untuk semua logika yang hanya berjalan sekali saat pembuatan
        static::creating(function ($landSaleAgreementNote) {
            // Tentukan tahun saat ini
            $currentYear = now()->year;
            $landSaleAgreementNote->year = $currentYear;

            // --- LOGIKA UNTUK no_letter (BARU) ---
            // Cari record terakhir di tahun yang sama untuk mendapatkan no_letter berikutnya
            $latestLetter = self::where('year', $currentYear)->latest('no_letter')->first();
            // Jika sudah ada, tambah 1. Jika tidak, mulai dari 1.
            $landSaleAgreementNote->no_letter = $latestLetter ? $latestLetter->no_letter + 1 : 1;
        });
    }
}
