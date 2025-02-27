<?php

namespace App\Http\Services;

use App\Models\LetterBusiness;

class LetterBusinessService
{
    public function __construct(protected LetterCounterService $letterCounterService) {}
    public function store(array $data)
    {
        return LetterBusiness::create([
            'no_letter' => $this->letterCounterService->getNextLetterNumber(),
            'name' => $data['name'],
            'address' => $data['alamat'],
            'no_ktp' => $data['nik'],
            'agriculture' => $data['pertanian'],
            'industry' => $data['perindustrian'],
            'trading' => $data['perdagangan'],
            'stock_breeding' => $data['perternakan'],
            'handicraft' => $data['kerajinan'],
            'service' => $data['jasa'],
            'other' => $data['lainnya'],
        ]);
    }
}
