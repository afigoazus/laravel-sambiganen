<?php

namespace App\Http\Services;

use App\Models\LetterBusiness;

class LetterBusinessService
{
    public function __construct(protected LetterCounterService $letterCounterService) {}
    public function store(array $data)
    {
        $categories = [
            'pertanian' => "agriculture",
            'perindustrian' => "industry",
            'perdagangan' => "trading",
            'peternakan' => "stock_breeding",
            'kerajinan' => "handicraft",
            'jasa' => "service",
            'lainnya' => "other"
        ];

        foreach ($categories as $category => $item) {
            if ($data['kategori'] == $category) {
                $letterData = [
                    'no_letter' => $this->letterCounterService->getNextLetterNumber(),
                    'name' => $data['name'],
                    'address' => $data['alamat'],
                    'no_ktp' => $data['nik'],
                    'no_wa' => $data['no-wa']
                ];

                $letterData[$item] = $data['nama-usaha'];

                return LetterBusiness::create($letterData);
            }
        }
    }
}
