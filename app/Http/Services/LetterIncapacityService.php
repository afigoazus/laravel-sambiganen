<?php

namespace App\Http\Services;

use App\Models\LetterIncapacity;

class LetterIncapacityService
{
    public function __construct(protected LetterCounterService $letterCounterService) {}
    public function store(array $data)
    {
        return LetterIncapacity::create([
            'no_letter' => $this->letterCounterService->getNextLetterNumber(),
            'name' => $data['nama-ortu'],
            'tgl_lahir' => $data['tanggal-lahir-ortu'],
            'tempat_lahir' => $data['tempat-lahir-ortu'],
            'gender' => $data['gender-ortu'],
            'nationality' => $data['kewarganegaraan'],
            'education' => $data['parent-education'],
            'job' => $data['job'],
            'marriage' => $data['status-perkawinan'],
            'nik' => $data['no-ktp'],
            'religion' => $data['agama'],
            'address' => $data['alamat-ortu'],
            'name_child' => $data['child-name'],
            'tgl_lahir_child' => $data['tanggal-lahir-anak'],
            'tempat_lahir_child' => $data['tempat-lahir-anak'],
            'gender_child' => $data['gender-anak'],
            'education_child' => $data['child-education'],
            'address_child' => $data['alamat-anak'],
            'no_wa' => $data['no-wa'],
        ]);
    }
}
