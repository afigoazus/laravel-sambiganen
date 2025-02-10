<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('galeries')->insert([
            [
                'id' => 1,
                'name' => 'Pawai Kendaraan',
                'photo_path' => '01JKB33JEQFP4G7P1E9WDXXVZJ.png',
                'description' => 'Pawai Kendaraan pada 17 Agustus pada tahun 2024',
                'created_at' => '2025-02-05 12:54:42',
                'updated_at' => '2025-02-05 12:54:42'
            ]
        ]);
    }
}
