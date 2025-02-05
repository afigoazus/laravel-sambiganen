<?php

namespace App\Http\Services;

use App\Models\LetterBusiness;

class LetterBusinessService
{
    public function store(array $data)
    {
        return LetterBusiness::create([
            'name' => $data['name'],
            'address' => $data['alamat'],
            'no_ktp' => $data['nik'],
            'agriculture' => $data['kategori'] == 'Pertanian' ? $data['nama-usaha'] : null,
            'industry' => $data['kategori'] == 'Perindustrian' ? $data['nama-usaha'] : null,
            'trading' => $data['kategori'] == 'Perdagangan' ? $data['nama-usaha'] : null,
            'stock_breeding' => $data['kategori'] == 'Peternakan' ? $data['nama-usaha'] : null,
            'handicraft' => $data['kategori'] == 'Kerajinan' ? $data['nama-usaha'] : null,
            'service' => $data['kategori'] == 'Jasa' ? $data['nama-usaha'] : null,
            'other' => $data['kategori'] == 'Lainnya' ? $data['nama-usaha'] : null,
        ]);
    }
}
