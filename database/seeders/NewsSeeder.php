<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Location;
use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Retrive existing categories and locations from the database
        $categories = Category::all();
        $locations = Location::all();

        // Create dummy news article
        News::factory()->count(2)->create()->each(function ($news) use ($categories, $locations) {
            // Attach random categories (1 to 3) and locations (1 to 4)
            $news->categories()->attach($categories->random(rand(1, 3))->pluck('id'));
            $news->locations()->attach($locations->random(1)->pluck('id'));
        });
    }
}
