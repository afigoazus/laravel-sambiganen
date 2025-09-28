<?php

namespace App\Http\Services;

use App\Models\LandSaleAgreementNote;

class LandSaleAgreementNoteService
{
    public function store(array $data)
    {
        return LandSaleAgreementNote::create([
            'buyer_name' => $data['nama-pihak-pertama'],
            'buyer_place_born' => $data['tempat-lahir-pihak-pertama'],
            'buyer_date_born' => $data['tanggal-lahir-pihak-pertama'],
            'buyer_nik' => $data['nik-pihak-pertama'],
            'buyer_address' => $data['alamat-pihak-pertama'],
            'seller_name' => $data['nama-pihak-kedua'],
            'seller_place_born' => $data['tempat-lahir-pihak-kedua'],
            'seller_date_born' => $data['tanggal-lahir-pihak-kedua'],
            'seller_nik' => $data['nik-pihak-kedua'],
            'seller_address' => $data['alamat-pihak-kedua'],
            'land_area' => $data['luas-tanah'],
            'no_persil' => $data['no-persil'],
            'no_sppt' => $data['no-sppt'],
            'no_certificate' => $data['no-sertifikat'],
            'north_boundary' => $data['batas-utara'],
            'south_boundary' => $data['batas-selatan'],
            'east_boundary' => $data['batas-timur'],
            'west_boundary' => $data['batas-barat'],
            'land_price' => $data['harga-tanah'],
            'witness1_name' => $data['nama-saksi-1'],
            'witness2_name' => $data['nama-saksi-2'],
            'witness3_name' => $data['nama-saksi-3'],
            'witness1_job_position' => $data['jabatan-saksi-1'],
            'witness2_job_position' => $data['jabatan-saksi-2'],
            'witness3_job_position' => $data['jabatan-saksi-3'],
        ]);
    }
}