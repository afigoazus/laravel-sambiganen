<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LandPriceNoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        DB::table('land_price_notes')->insert([
            // --- Data Tahun 2025 ---
            [
                'no_letter' => 1, // Nomor surat pertama di tahun 2025
                'name' => $faker->name,
                'place_born' => $faker->city,
                'date_born' => $faker->date('Y-m-d', '2000-01-01'),
                'job' => $faker->jobTitle,
                'address' => $faker->address,
                'certificate_number' => 'SHM-' . $faker->numberBetween(1000, 9999),
                'land_area' => $faker->numberBetween(100, 2000),
                'north_boundary' => 'Tanah Milik ' . $faker->name,
                'south_boundary' => 'Jalan Desa',
                'east_boundary' => 'Tanah Milik ' . $faker->name,
                'west_boundary' => 'Sungai',
                'land_price' => $faker->numberBetween(150000, 750000), // Harga per meter (angka)
                'year' => '2025',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'no_letter' => 2, // Nomor surat kedua di tahun 2025
                'name' => $faker->name,
                'place_born' => $faker->city,
                'date_born' => $faker->date('Y-m-d', '2000-01-01'),
                'job' => $faker->jobTitle,
                'address' => $faker->address,
                'certificate_number' => 'SHM-' . $faker->numberBetween(1000, 9999),
                'land_area' => $faker->numberBetween(100, 2000),
                'north_boundary' => 'Perumahan Warga',
                'south_boundary' => 'Tanah Milik ' . $faker->name,
                'east_boundary' => 'Jalan Raya',
                'west_boundary' => 'Tanah Milik ' . $faker->name,
                'land_price' => $faker->numberBetween(150000, 750000), // Harga per meter (angka)
                'year' => '2025',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // --- Data Tahun 2024 ---
            [
                'no_letter' => 1, // Nomor surat direset menjadi 1 untuk tahun 2024
                'name' => $faker->name,
                'place_born' => $faker->city,
                'date_born' => $faker->date('Y-m-d', '2000-01-01'),
                'job' => $faker->jobTitle,
                'address' => $faker->address,
                'certificate_number' => 'SHM-' . $faker->numberBetween(1000, 9999),
                'land_area' => $faker->numberBetween(100, 2000),
                'north_boundary' => 'Jalan Raya',
                'south_boundary' => 'Tanah Milik ' . $faker->name,
                'east_boundary' => 'Area Persawahan',
                'west_boundary' => 'Tanah Milik ' . $faker->name,
                'land_price' => $faker->numberBetween(150000, 750000), // Harga per meter (angka)
                'year' => '2024',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // --- Data Tahun 2023 ---
            [
                'no_letter' => 1, // Nomor surat direset menjadi 1 untuk tahun 2023
                'name' => $faker->name,
                'place_born' => $faker->city,
                'date_born' => $faker->date('Y-m-d', '2000-01-01'),
                'job' => $faker->jobTitle,
                'address' => $faker->address,
                'certificate_number' => 'SHM-' . $faker->numberBetween(1000, 9999),
                'land_area' => $faker->numberBetween(100, 2000),
                'north_boundary' => 'Tanah Kas Desa',
                'south_boundary' => 'Tanah Milik ' . $faker->name,
                'east_boundary' => 'Jalan Setapak',
                'west_boundary' => 'Selokan',
                'land_price' => $faker->numberBetween(150000, 750000), // Harga per meter (angka)
                'year' => '2023',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}