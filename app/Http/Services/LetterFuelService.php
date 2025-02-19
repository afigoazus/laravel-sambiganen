<?php

namespace App\Http\Services;

use App\Models\LetterFuel;

class LetterFuelService
{
    public function __construct(protected LetterCounterService $letterCounterService) {}
    public function store(array $data)
    {
        return LetterFuel::create([
            'no_letter' => $this->letterCounterService->getNextLetterNumber(),
            'name' => $data['name'],
            'nik' => $data['nik'],
            'address' => $data['alamat'],
            'business_name' => $data['nama-usaha'],
            'user_consumer_sector' => $data['sektor-pengguna'],
            'business_type' => $data['jenis-usaha'],
            'tool_type' => "-",
            'tool_sum' => "-",
            'tool_power' => "-",
            'tool_use' => "-",
            'tool_time_used_hour' => "-",
            'tool_time_used_daily' => "-",
            'jbt_consumption' => "-",
            'tool_sum2' => "-",
            'volume_allocation' => "-",
            'pick_up_place' => "-",
            'no_distributor' => "-",
            'address_distributor' => "-",
            'purchasing_tools_used' => "-",
        ]);
    }
}
