<?php

namespace App\Http\Services;

use App\Models\LetterDeath;

class LetterDeathService
{
    public function __construct(protected LetterCounterService $letterCounterService) {}
    public function store(array $data)
    {
        return LetterDeath::create([
            'no_letter' => $this->letterCounterService->getNextLetterNumber(),
            'name' => $data['parent-name'],
            'nik' => $data['nik'],
            'date_death' => $data['tanggal-kematian'],
            'hour_death' => $data['jam-kematian'],
            'cause_death' => $data['sebab-kematian'],
            'mom_name' => $data['nama-ibu'],
            'dad_name' => $data['nama-ayah'],
        ]);
    }
}
