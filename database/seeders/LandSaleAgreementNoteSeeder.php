<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LandSaleAgreementNoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Inisialisasi Faker untuk data berbahasa Indonesia
        $faker = Faker::create('id_ID');
        $allData = [];

        $years = [2023, 2024, 2025];

        foreach ($years as $year) {
            // Reset nomor surat untuk setiap tahun
            for ($i = 1; $i <= 4; $i++) {
                $allData[] = [
                    'no_letter' => $i,
                    'buyer_name' => $faker->name(),
                    'buyer_place_born' => $faker->city(),
                    'buyer_date_born' => $faker->date(),
                    'buyer_address' => $faker->address(),
                    'seller_name' => $faker->name(),
                    'seller_place_born' => $faker->city(),
                    'seller_date_born' => $faker->date(),
                    'seller_address' => $faker->address(),
                    'land_area' => $faker->numberBetween(100, 2000),
                    'no_persil' => $faker->numerify('###/IV'),
                    'no_sppt' => '35.10.' . $faker->numerify('###.###.###-#'),
                    'no_certificate' => 'SHM ' . $faker->numerify('#####') . '/Kel. ' . $faker->citySuffix(),
                    'north_boundary' => 'Rumah ' . $faker->name(),
                    'south_boundary' => 'Tanah Milik ' . $faker->name(),
                    'east_boundary' => 'Jalan ' . $faker->streetName(),
                    'west_boundary' => 'Sawah',
                    'land_price' => $faker->numberBetween(100, 999) * 1000000,
                    'witness1_name' => $faker->name(),
                    'witness2_name' => $faker->name(),
                    'witness3_name' => $faker->name(),
                    'witness1_job_position' => $faker->jobTitle(),
                    'witness2_job_position' => $faker->jobTitle(),
                    'witness3_job_position' => 'Kepala Desa',
                    'year' => $year,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        // Masukkan semua data sekaligus untuk efisiensi
        DB::table('land_sale_agreement_notes')->insert($allData);
    }
}