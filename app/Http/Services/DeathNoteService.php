<?php

namespace App\Http\Services;

use App\Models\DeathNote;

class DeathNoteService
{
    public function store(array $data)
    {
        $deathNote = DeathNote::create([
            'name' => $data['nama-pelapor'],
            'nik' => $data['nik'],
            'no_dok_journey' => $data['no-dok-perjalanan'],
            'nationality' => $data['kewarganegaraan'],
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
            'nik_death' => $data['nik-kematian'],
            'name_death' => $data['nama-kematian'],
            'date_death' => $data['tanggal-kematian'],
            'hour_death' => $data['jam-kematian'],
            'caused_death' => $data['sebab-kematian'],
            'place_death' => $data['tempat-kematian'],
            'info_death' => $data['yang-menerangkan'],
        ]);
    }
}
