<?php

namespace App\Http\Services;

use App\Models\BirthNote;

class BirthNoteService
{
    public function __construct(protected LetterCounterService $letterCounterService) {}
    public function store(array $data)
    {
        return BirthNote::create([
            'name' => $data['nama-pelapor'],
            'nik' => $data['nik-pelapor'],
            'no_dok_journey' => $this->letterCounterService->getNextBirthLetterNumber(),
            'nationality' => $data['kewarganegaraan-pelapor'],
            'no_wa' => $data['no-hp'],
            'name_saksi' => $data['nama-saksi-1'],
            'nik_saksi' => $data['nik-saksi-1'],
            'nationality_saksi' => $data['kewarganegaraan-saksi-1'],
            'name_saksi2' => $data['nama-saksi-2'],
            'nik_saksi2' => $data['nik-saksi-2'],
            'nationality_saksi2' => $data['kewarganegaraan-saksi-2'],
            'name_dad' => $data['nama-ayah'],
            'nik_dad' => $data['nik-ayah'],
            'place_born_dad' => $data['tempat-lahir-ayah'],
            'date_born_dad' => $data['tanggal-lahir-ayah'],
            'nationality_dad' => $data['kewarganegaraan-ayah'],
            'name_mom' => $data['nama-ibu'],
            'nik_mom' => $data['nik-ibu'],
            'place_born_mom' => $data['tempat-lahir-ibu'],
            'date_born_mom' => $data['tanggal-lahir-ibu'],
            'nationality_mom' => $data['kewarganegaraan-ibu'],
            'no_kk_anak' => $data['no-kk-anak'],
            'hub_keluarga' => $data['hubungan-keluarga'],
            'name_child' => $data['nama-anak'],
            'gender_child' => $data['gender-anak'],
            'place_birth_child' => $data['tempat-dilahirkan'],
            'place_birth_child2' => $data['tempat-kelahiran'],
            'date_birth_child' => $data['tanggal-kelahiran'],
            'hour_birth_child' => $data['jam-kelahiran'],
            'type_birth_child' => $data['jenis-kelahiran'],
            'no_birth_child' => $data['kelahiran-ke'],
            'helper_birth' => $data['penolong-kelahiran'],
            'weight_child' => $data['berat-bayi'],
            'height_child' => $data['panjang-bayi'],
            'blood_type_child' => $data['golongan-darah'],
            'religion_child' => $data['agama-anak'],
            'disability' => $data['kecacatan'],
            'nationality_child' => $data['kewarganegaraan-anak']
        ]);
    }
}
