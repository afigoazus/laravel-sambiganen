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
                "category_id" => 1,
                "is_total" => false
            ],
            [
                "name" => 'Dana Desa',
                "amount" => 1235203000,
                "year" => 2024,
                "category_id" => 1,
                "is_total" => false
            ],
            [
                "name" => 'Alokasi Dana Desa',
                "amount" => 779650000,
                "year" => 2024,
                "category_id" => 1,
                "is_total" => false
            ],
            [
                "name" => 'Bantuan Keuangan Kabupaten',
                "amount" => 0,
                "year" => 2024,
                "category_id" => 1,
                "is_total" => false
            ],
            [
                "name" => 'Penerima Bagi Hasil Pajak Dan Retribusi',
                "amount" => 0,
                "year" => 2024,
                "category_id" => 1,
                "is_total" => false
            ],
            [
                "name" => 'Lain-lain',
                "amount" => 0,
                "year" => 2024,
                "category_id" => 1,
                "is_total" => false
            ],
            [
                "name" => 'Total',
                "amount" => 2196653000,
                "year" => 2024,
                "category_id" => 1,
                "is_total" => true
            ],

            // Data Belanja Tahun 2024
            [
                "name" => 'Bidang Penyelenggaraan Pemerintah Desa',
                "amount" =>  751684766,
                "year" => 2024,
                "category_id" => 2,
                "is_total" => false
            ],
            [
                "name" => 'Bidang Pelaksaan Pembangunan Desa',
                "amount" =>  682053000,
                "year" => 2024,
                "category_id" => 2,
                "is_total" => false
            ],
            [
                "name" => 'Bidang Pembinaan Kemasyarakatan',
                "amount" =>  349727064,
                "year" => 2024,
                "category_id" => 2,
                "is_total" => false
            ],
            [
                "name" => 'Bidang Penanggulangan Bencana Darurat dan Mendesak Desa',
                "amount" =>  152642224,
                "year" => 2024,
                "category_id" => 2,
                "is_total" => false
            ],
            [
                "name" => 'Jumlah Belanja',
                "amount" =>  2256607055,
                "year" => 2024,
                "category_id" => 2,
                "is_total" => true
            ],
            [
                "name" => 'Surplus/Defisit',
                "amount" =>  59954055,
                "year" => 2024,
                "category_id" => 2,
                "is_total" => false
            ],
            [
                "name" => 'Penerimaan Pembiayaan Penyertaan Modal Desa',
                "amount" =>  64954055,
                "year" => 2024,
                "category_id" => 2,
                "is_total" => false
            ],
            [
                "name" => 'Penerima Pembiayaan Penyertaan Modal Desa',
                "amount" =>  5000000,
                "year" => 2024,
                "category_id" => 2,
                "is_total" => false
            ],
            [
                "name" => 'Pembiayaan Netto',
                "amount" =>  59954055,
                "year" => 2024,
                "category_id" => 2,
                "is_total" => false
            ],

            // Data Prioritas Dana 2024
            [
                "name" => 'Bantuan Langsung Tunai Desa',
                "amount" =>  144000000,
                "year" => 2024,
                "category_id" => 3,
                "is_total" => false
            ],
            [
                "name" => 'Ketahanan Pangan',
                "amount" =>  260000000,
                "year" => 2024,
                "category_id" => 3,
                "is_total" => false
            ],
            [
                "name" => 'Konvergensi Stanting',
                "amount" =>  45250000,
                "year" => 2024,
                "category_id" => 3,
                "is_total" => false
            ],

            // Data Rencana Kegiatan Pembangunan Infrastruktur 2024
            [
                "name" => 'Pavingasi Jalan RT 01 RW 01 Dukuh Krajan',
                "amount" =>  25000000,
                "year" => 2024,
                "category_id" => 4,
                "is_total" => false
            ],
            [
                "name" => 'Pavingasi Jalan RT 05 Rw 01 Dukuh Krajan',
                "amount" =>  75000000,
                "year" => 2024,
                "category_id" => 4,
                "is_total" => false
            ],
            [
                "name" => 'Pemeliharaan/Reham Kantor Desa',
                "amount" =>  100000000,
                "year" => 2024,
                "category_id" => 4,
                "is_total" => false
            ],
            [
                "name" => 'Cadangan boss',
                "amount" =>  0,
                "year" => 2024,
                "category_id" => 4,
                "is_total" => false
            ],
            // Data Pendapatan Desa Tahun 2023
            [
                "name" => 'Pendapatan Asli Desa',
                "amount" => 181065000,
                "year" => 2023,
                "category_id" => 1,
                "is_total" => false
            ],
            [
                "name" => 'Dana Desa',
                "amount" => 1229576000,
                "year" => 2023,
                "category_id" => 1,
                "is_total" => false
            ],
            [
                "name" => 'Alokasi Dana Desa',
                "amount" => 683087566,
                "year" => 2023,
                "category_id" => 1,
                "is_total" => false
            ],
            [
                "name" => 'Bantuan Keuangan Kabupaten',
                "amount" => 450000000,
                "year" => 2023,
                "category_id" => 1,
                "is_total" => false
            ],
            [
                "name" => 'Penerima Bagi Hasil Pajak Dan Retribusi',
                "amount" => 14972047,
                "year" => 2023,
                "category_id" => 1,
                "is_total" => false
            ],
            [
                "name" => 'Lain-lain',
                "amount" => 407106988,
                "year" => 2023,
                "category_id" => 1,
                "is_total" => false
            ],
            [
                "name" => 'Total',
                "amount" => 2965807601,
                "year" => 2023,
                "category_id" => 1,
                "is_total" => true
            ],

            // Data Belanja Tahun 2023
            [
                "name" => 'Bidang Penyelenggaraan Pemerintah Desa',
                "amount" => 787189130,
                "year" => 2023,
                "category_id" => 2,
                "is_total" => false
            ],
            [
                "name" => 'Bidang Pelaksaan Pembangunan Desa',
                "amount" => 1545075505,
                "year" => 2023,
                "category_id" => 2,
                "is_total" => false
            ],
            [
                "name" => 'Bidang Pembinaan Kemasyarakatan',
                "amount" => 314932160,
                "year" => 2023,
                "category_id" => 2,
                "is_total" => false
            ],
            [
                "name" => 'Bidang Penanggulangan Bencana Darurat dan Mendesak Desa',
                "amount" => 151819000,
                "year" => 2023,
                "category_id" => 2,
                "is_total" => false
            ],
            [
                "name" => 'Jumlah Belanja',
                "amount" => 3049172995,
                "year" => 2023,
                "category_id" => 2,
                "is_total" => true
            ],
            [
                "name" => 'Surplus/Defisit',
                "amount" => 83365393,
                "year" => 2023,
                "category_id" => 2,
                "is_total" => false
            ],
            [
                "name" => 'Penerimaan Pembiayaan',
                "amount" => 168319449,
                "year" => 2023,
                "category_id" => 2,
                "is_total" => false
            ],
            [
                "name" => 'Pengeluaran Pembiayaan',
                "amount" => 20000000,
                "year" => 2023,
                "category_id" => 2,
                "is_total" => false
            ],
            [
                "name" => 'Pembiayaan Netto',
                "amount" => 148319449,
                "year" => 2023,
                "category_id" => 2,
                "is_total" => false
            ],
            [
                "name" => 'SILPA/SILPA Tahun Berjalan',
                "amount" => 64954055,
                "year" => 2023,
                "category_id" => 2,
                "is_total" => false
            ],
        ]);
    }
}
