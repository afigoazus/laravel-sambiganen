<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BudgetCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('budget_categories')->insert([
            [
                'name' => "Pendapatan",
            ],
            [
                'name' => "Belanja",
            ],
            [
                'name' => "Prioritas Dana Desa",
            ],
            [
                'name' => "Rencana Kegiatan Pembangunan Infrastruktur",
            ],
        ]);
    }
}
