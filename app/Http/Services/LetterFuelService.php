<?php

namespace App\Http\Services;

use App\Models\LetterFuel;

class LetterFuelService
{
    public function __construct(protected LetterCounterService $letterCounterService) {}
    public function store(array $data)
    {

        if ($data['tempat-pengambilan'] == 1) {
            $data['spbu'] = "SPBU Sambit";
            $data['nomor-penyalur'] = "54.63411";
            $data['alamat-penyalur'] = "Ds. Besuki, Kec. Sambit Kab. Ponorogo";
        } else {
            $data['spbu'] = "SPBU Nailan";
            $data['nomor-penyalur'] = "54.63412";
            $data['alamat-penyalur'] = "JL. Raya Ds. Balong-Slahung Kab. Ponorogo";
        }
        
        return LetterFuel::create([
            'no_letter' => $this->letterCounterService->getNextLetterNumber(),
            'name' => $data['name'],
            'nik' => $data['nik'],
            'address' => $data['alamat'],
            'business_name' => $data['nama-usaha'],
            'user_consumer_sector' => $data['sektor-pengguna'],
            'business_type' => $data['jenis-usaha'],
            'tool_type' => $data['jenis-alat'],
            'tool_sum' => $data['jumlah-alat'],
            'tool_power' => $data['daya-alat'],
            'tool_use' => $data['fungsi-alat'],
            'tool_time_used_hour' => $data['lama-penggunaan'],
            'tool_time_used_daily' => $data['lama-operasional'],
            'jbt_consumption' => $data['konsumsi'],
            'tool_sum2' => "-",
            'volume_allocation' => $data['alokasi-volume'],
            'pick_up_place' => $data['spbu'],
            'no_distributor' => $data['nomor-penyalur'],
            'address_distributor' => $data['alamat-penyalur'],
            'purchasing_tools_used' => $data['alat-tukar']
        ]);
    }
}
