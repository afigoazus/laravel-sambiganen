<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BudgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('budgets')->insert([
            // Data Pendapatan Desa Tahun 2024
            [
                "name" => 'Pendapatan Asli Desa',
                "amount" => 181800000,
                "year" => 2024,
                "category_id" => 1
            ],
            [
                "name" => 'Dana Desa',
                "amount" => 1235203000,
                "year" => 2024,
                "category_id" => 1
            ],
            [
                "name" => 'Alokasi Dana Desa',
                "amount" => 779650000,
                "year" => 2024,
                "category_id" => 1
            ],
            [
                "name" => 'Bantuan Keuangan Kabupaten',
                "amount" => 0,
                "year" => 2024,
                "category_id" => 1
            ],
            [
                "name" => 'Penerima Bagi Hasil Pajak Dan Retribusi',
                "amount" => 0,
                "year" => 2024,
                "category_id" => 1
            ],
            [
                "name" => 'Lain-lain',
                "amount" => 0,
                "year" => 2024,
                "category_id" => 1
            ],

            // Data Belanja Tahun 2024
            [
                "name" => 'Bidang Penyelenggaraan Pemerintah Desa',
                "amount" =>  751684766,
                "year" => 2024,
                "category_id" => 2
            ],
            [
                "name" => 'Bidang Pelaksaan Pembangunan Desa',
                "amount" =>  682053000,
                "year" => 2024,
                "category_id" => 2
            ],
            [
                "name" => 'Bidang Pembinaan Kemasyarakatan',
                "amount" =>  349727064,
                "year" => 2024,
                "category_id" => 2
            ],
            [
                "name" => 'Bidang Penanggulangan Bencana Darurat dan Mendesak Desa',
                "amount" =>  152642224,
                "year" => 2024,
                "category_id" => 2
            ],
            [
                "name" => 'Surplus/Defisit',
                "amount" =>  59954055,
                "year" => 2024,
                "category_id" => 2
            ],
            [
                "name" => 'Penerimaan Pembiayaan Penyertaan Modal Desa',
                "amount" =>  64954055,
                "year" => 2024,
                "category_id" => 2
            ],
            [
                "name" => 'Penerima Pembiayaan Penyertaan Modal Desa',
                "amount" =>  5000000,
                "year" => 2024,
                "category_id" => 2
            ],
            [
                "name" => 'Pembiayaan Netto',
                "amount" =>  59954055,
                "year" => 2024,
                "category_id" => 2
            ],

            // Data Prioritas Dana 2024
            [
                "name" => 'Bantuan Langsung Tunai Desa',
                "amount" =>  144000000,
                "year" => 2024,
                "category_id" => 3
            ],
            [
                "name" => 'Ketahanan Pangan',
                "amount" =>  260000000,
                "year" => 2024,
                "category_id" => 3
            ],
            [
                "name" => 'Konvergensi Stanting',
                "amount" =>  45250000,
                "year" => 2024,
                "category_id" => 3
            ],

            // Data Rencana Kegiatan Pembangunan Infrastruktur 2024
            [
                "name" => 'Pavingasi Jalan RT 01 RW 01 Dukuh Krajan',
                "amount" =>  25000000,
                "year" => 2024,
                "category_id" => 4
            ],
            [
                "name" => 'Pavingasi Jalan RT 05 Rw 01 Dukuh Krajan',
                "amount" =>  75000000,
                "year" => 2024,
                "category_id" => 4
            ],
            [
                "name" => 'Pemeliharaan/Reham Kantor Desa',
                "amount" =>  100000000,
                "year" => 2024,
                "category_id" => 4
            ],
            [
                "name" => 'Cadangan boss',
                "amount" =>  0,
                "year" => 2024,
                "category_id" => 4
            ],
            // Data Pendapatan Desa Tahun 2025
            [
                "name" => 'Pendapatan Asli Desa',
                "amount" => 190890000,
                "year" => 2025,
                "category_id" => 1
            ],
            [
                "name" => 'Dana Desa',
                "amount" => 1296963150,
                "year" => 2025,
                "category_id" => 1
            ],
            [
                "name" => 'Alokasi Dana Desa',
                "amount" => 818632500,
                "year" => 2025,
                "category_id" => 1
            ],
            [
                "name" => 'Bantuan Keuangan Kabupaten',
                "amount" => 0,
                "year" => 2025,
                "category_id" => 1
            ],
            [
                "name" => 'Penerima Bagi Hasil Pajak Dan Retribusi',
                "amount" => 0,
                "year" => 2025,
                "category_id" => 1
            ],
            [
                "name" => 'Lain-lain',
                "amount" => 0,
                "year" => 2025,
                "category_id" => 1
            ],

            // Data Belanja Tahun 2025
            [
                "name" => 'Bidang Penyelenggaraan Pemerintah Desa',
                "amount" => 789269004,
                "year" => 2025,
                "category_id" => 2
            ],
            [
                "name" => 'Bidang Pelaksaan Pembangunan Desa',
                "amount" => 716155650,
                "year" => 2025,
                "category_id" => 2
            ],
            [
                "name" => 'Bidang Pembinaan Kemasyarakatan',
                "amount" => 367213417,
                "year" => 2025,
                "category_id" => 2
            ],
            [
                "name" => 'Bidang Penanggulangan Bencana Darurat dan Mendesak Desa',
                "amount" => 160274335,
                "year" => 2025,
                "category_id" => 2
            ],
            [
                "name" => 'Surplus/Defisit',
                "amount" => 62951758,
                "year" => 2025,
                "category_id" => 2
            ],
            [
                "name" => 'Penerimaan Pembiayaan Penyertaan Modal Desa',
                "amount" => 68201758,
                "year" => 2025,
                "category_id" => 2
            ],
            [
                "name" => 'Penerima Pembiayaan Penyertaan Modal Desa',
                "amount" => 5250000,
                "year" => 2025,
                "category_id" => 2
            ],
            [
                "name" => 'Pembiayaan Netto',
                "amount" => 62951758,
                "year" => 2025,
                "category_id" => 2
            ],

            // Data Prioritas Dana 2025
            [
                "name" => 'Bantuan Langsung Tunai Desa',
                "amount" => 151200000,
                "year" => 2025,
                "category_id" => 3
            ],
            [
                "name" => 'Ketahanan Pangan',
                "amount" => 273000000,
                "year" => 2025,
                "category_id" => 3
            ],
            [
                "name" => 'Konvergensi Stanting',
                "amount" => 47512500,
                "year" => 2025,
                "category_id" => 3
            ],

            // Data Rencana Kegiatan Pembangunan Infrastruktur 2025
            [
                "name" => 'Pavingasi Jalan RT 01 RW 01 Dukuh Krajan',
                "amount" => 26250000,
                "year" => 2025,
                "category_id" => 4
            ],
            [
                "name" => 'Pavingasi Jalan RT 05 Rw 01 Dukuh Krajan',
                "amount" => 78750000,
                "year" => 2025,
                "category_id" => 4
            ],
            [
                "name" => 'Pemeliharaan/Reham Kantor Desa',
                "amount" => 105000000,
                "year" => 2025,
                "category_id" => 4
            ],
            [
                "name" => 'Cadangan boss',
                "amount" => 0,
                "year" => 2025,
                "category_id" => 4
            ],
        ]);
    }
}
