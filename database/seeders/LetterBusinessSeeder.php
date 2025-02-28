<?php

namespace Database\Seeders;

use App\Http\Services\LetterCounterService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LetterBusinessSeeder extends Seeder
{
    public function __construct(protected LetterCounterService $letterCounterService) {}
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('letter_businesses')->insert([
            // Data for the year 2023
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2023),
                "name" => "Old Man Jenkins",
                "address" => "Bikini Bottom",
                "no_ktp" => "9837463567894873",
                "agriculture" => "Algae Farming",
                "industry" => null,
                "trading" => null,
                "stock_breeding" => null,
                "handicraft" => null,
                "service" => null,
                "other" => null,
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2023,
                "created_at" => "2023-08-15 10:00:00",
                "updated_at" => "2023-08-15 10:00:00",
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2023),
                "name" => "Mrs. Puff",
                "address" => "Bikini Bottom",
                "no_ktp" => "9837463567894873",
                "agriculture" => null,
                "industry" => null,
                "trading" => null,
                "stock_breeding" => null,
                "handicraft" => null,
                "service" => "Boating School",
                "other" => null,
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2023,
                "created_at" => "2023-09-10 12:30:00",
                "updated_at" => "2023-09-10 12:30:00",
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2023),
                "name" => "Man Ray",
                "address" => "Bikini Bottom",
                "no_ktp" => "9837463567894873",
                "agriculture" => null,
                "industry" => null,
                "trading" => null,
                "stock_breeding" => null,
                "handicraft" => null,
                "service" => null,
                "other" => "Supervillain Training",
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2023,
                "created_at" => "2023-10-05 14:00:00",
                "updated_at" => "2023-10-05 14:00:00",
            ],

            // Data for the year 2024
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2024),
                "name" => "Larry the Lobster",
                "address" => "Goo Lagoon",
                "no_ktp" => "9837463567894873",
                "agriculture" => null,
                "industry" => null,
                "trading" => "Protein Supplements",
                "stock_breeding" => null,
                "handicraft" => null,
                "service" => "Gym Trainer",
                "other" => null,
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2024,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2024),
                "name" => "Plankton",
                "address" => "Chum Bucket",
                "no_ktp" => "9837463567894873",
                "agriculture" => null,
                "industry" => "Fast Food",
                "trading" => null,
                "stock_breeding" => null,
                "handicraft" => null,
                "service" => null,
                "other" => "Secret Formula Hunting",
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2024,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2024),
                "name" => "Sandy Cheeks",
                "address" => "Bikini Bottom",
                "no_ktp" => "9837463567894873",
                "agriculture" => "Tree Plantation",
                "industry" => null,
                "trading" => null,
                "stock_breeding" => null,
                "handicraft" => "Squirrel Themed Crafts",
                "service" => null,
                "other" => null,
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2024,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2024),
                "name" => "Patrick Star",
                "address" => "Bikini Bottom",
                "no_ktp" => "9837463567894873",
                "agriculture" => "Diesel 8000cc",
                "industry" => "Industri Genteng",
                "trading" => "Sparepart Motor",
                "stock_breeding" => "Peternakan Babi",
                "handicraft" => "Genteng dan Batu bata",
                "service" => "Angkutan",
                "other" => "Kucing Peduli",
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2024,
                "created_at" => now(),
                "updated_at" => now(),
            ],

            // Data for the year 2025
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2025),
                "name" => "Spongebob Squarepants",
                "address" => "Bikini Bottom",
                "no_ktp" => "9837463567894873",
                "agriculture" => "Tractor 5000cc",
                "industry" => null,
                "trading" => null,
                "stock_breeding" => null,
                "handicraft" => null,
                "service" => null,
                "other" => null,
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2025,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2025),
                "name" => "Eugene Krabs",
                "address" => "Bikini Bottom",
                "no_ktp" => "9837463567894873",
                "agriculture" => "Tractor 5000cc",
                "industry" => null,
                "trading" => null,
                "stock_breeding" => null,
                "handicraft" => null,
                "service" => null,
                "other" => null,
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2025,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2025),
                "name" => "Tom",
                "address" => "Bikini Bottom",
                "no_ktp" => "9837463567894873",
                "agriculture" => null,
                "industry" => null,
                "trading" => null,
                "stock_breeding" => null,
                "handicraft" => null,
                "service" => "Fish Market Services",
                "other" => null,
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2025,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2025),
                "name" => "Pearl Krabs",
                "address" => "Bikini Bottom",
                "no_ktp" => "9837463567894873",
                "agriculture" => null,
                "industry" => null,
                "trading" => "Jewelry Store",
                "stock_breeding" => null,
                "handicraft" => null,
                "service" => "Luxury Goods Advisor",
                "other" => null,
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2025,
                "created_at" => now(),
                "updated_at" => now(),
            ],

            // Data for the year 2026
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2026),
                "name" => "Mermaid Man",
                "address" => "Shady Shoals Rest Home",
                "no_ktp" => "9837463567894873",
                "agriculture" => null,
                "industry" => null,
                "trading" => null,
                "stock_breeding" => null,
                "handicraft" => null,
                "service" => "Superhero Services",
                "other" => null,
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2026,
                "created_at" => "2026-05-20 09:45:00",
                "updated_at" => "2026-05-20 09:45:00",
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2026),
                "name" => "Barnacle Boy",
                "address" => "Shady Shoals Rest Home",
                "no_ktp" => "9837463567894873",
                "agriculture" => null,
                "industry" => null,
                "trading" => null,
                "stock_breeding" => null,
                "handicraft" => null,
                "service" => "Sidekick Consulting",
                "other" => null,
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2026,
                "created_at" => "2026-06-18 11:30:00",
                "updated_at" => "2026-06-18 11:30:00",
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2026),
                "name" => "The Flying Dutchman",
                "address" => "The Ghostly Ship",
                "no_ktp" => "9837463567894873",
                "agriculture" => null,
                "industry" => null,
                "trading" => null,
                "stock_breeding" => null,
                "handicraft" => null,
                "service" => null,
                "other" => "Haunted Ship Tours",
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2026,
                "created_at" => "2026-07-26 17:00:00",
                "updated_at" => "2026-07-26 17:00:00",
            ],

            // Data for the year 2027
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2027),
                "name" => "Perch Perkins",
                "address" => "Bikini Bottom",
                "no_ktp" => "9837463567894873",
                "agriculture" => null,
                "industry" => null,
                "trading" => null,
                "stock_breeding" => null,
                "handicraft" => null,
                "service" => "News Broadcasting",
                "other" => null,
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2027,
                "created_at" => "2027-03-14 08:20:00",
                "updated_at" => "2027-03-14 08:20:00",
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2027),
                "name" => "Harold SquarePants",
                "address" => "Bikini Bottom",
                "no_ktp" => "9837463567894873",
                "agriculture" => null,
                "industry" => "Clothing Manufacturing",
                "trading" => null,
                "stock_breeding" => null,
                "handicraft" => null,
                "service" => null,
                "other" => null,
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2027,
                "created_at" => "2027-04-22 10:10:00",
                "updated_at" => "2027-04-22 10:10:00",
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2027),
                "name" => "Bubble Buddy",
                "address" => "Bikini Bottom",
                "no_ktp" => "9837463567894873",
                "agriculture" => null,
                "industry" => null,
                "trading" => null,
                "stock_breeding" => null,
                "handicraft" => null,
                "service" => "Bubble Blowing Lessons",
                "other" => null,
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2027,
                "created_at" => "2027-05-30 13:55:00",
                "updated_at" => "2027-05-30 13:55:00",
            ],
        ]);
    }
}
