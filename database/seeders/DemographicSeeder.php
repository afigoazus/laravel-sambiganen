<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DemographicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('demographics')->insert([
            [
                'dusun' => 4,
                'rukun_warga' => 9,
                'rukun_tetangga' => 39,
                'jiwa' => 5212,
            ]
        ]);
    }
}
