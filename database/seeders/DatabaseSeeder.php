<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            BirthNoteSeeder::class,
            DeathNoteSeeder::class,
            DocumentSeeder::class,
            LetterDeathSeeder::class,
            LetterBusinessSeeder::class,
            LetterFuelSeeder::class,
            LetterIncapacitiesSeeder::class,
            LetterLostSeeder::class,
            BudgetCategorySeeder::class,
            BudgetSeeder::class,
            DemographicSeeder::class,
            CategorySeeder::class,
            LocationSeeder::class,
            NewsSeeder::class,
        ]);
    }
}
