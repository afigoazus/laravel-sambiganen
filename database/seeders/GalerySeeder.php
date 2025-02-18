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
        $descriptions = [
            'A grand parade showcasing beautifully decorated vehicles.',
            'An exciting display of creativity and culture in motion.',
            'A wonderful celebration filled with vibrant colors and joy.',
            'A procession of uniquely designed cars and motorcycles.',
            'A festival of moving art bringing excitement to the streets.',
            'A spectacular show of traditional and modern vehicle decorations.',
            'A thrilling event with participants displaying their themed vehicles.',
            'A crowd-pleasing parade filled with dazzling lights and music.',
            'A lively event featuring impressive vehicle modifications.',
            'A colorful convoy capturing the essence of the celebration.',
            'An artistic expression through beautifully adorned automobiles.',
            'A mesmerizing street performance featuring themed floats.',
            'A joyous occasion where vehicles become moving masterpieces.',
            'A cultural spectacle blending tradition and innovation.',
            'A captivating journey of creativity on wheels.',
            'A breathtaking lineup of decorated vehicles bringing smiles to all.'
        ];

        $data = [];

        for ($i = 1; $i <= 16; $i++) {
            $data[] = [
                'id' => $i,
                'name' => 'Pawai Kendaraan',
                'photo_path' => "$i.jpg",
                'description' => $descriptions[$i - 1],
                'created_at' => '2025-02-05 12:54:42',
                'updated_at' => '2025-02-05 12:54:42'
            ];
        }

        DB::table('galeries')->insert($data);
    }
}
