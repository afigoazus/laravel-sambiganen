<?php

namespace App\Http\Services;

use App\Models\LandPriceNote;

class LandPriceNoteService 
{
    // public function __construct(protected LetterCounterService $letteerCounterService) {}

    public function store(array $data)
    {
        return LandPriceNote::create([
            'name' => $data['nama'],
            'place_born' => $data['tempat-lahir'],
            'date_born' => $data['tanggal-lahir'],
            'job' => $data['pekerjaan'],
            'address' => $data['alamat'],
            'certificate_number' => $data['no-sertifikat'],
            'land_area' => $data['luas-tanah'],
            'land_price' => $data['harga'],
            'north_boundary' => $data['batas-utara'],
            'east_boundary' => $data['batas-timur'],
            'west_boundary' => $data['batas-barat'],
            'south_boundary' => $data['batas-selatan'],
        ]);
    }
}