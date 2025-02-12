<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CreationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('creations')->insert([
            [
                'id'         => 1,
                'title'      => 'Industri Desa Wringinanom',
                'content'    => 'Desa Wringinanom, Kecamatan Sambit, Kabupaten Ponorogo, dikenal sebagai sentra industri genteng dan batu bata. Industri ini telah menjadi tulang punggung perekonomian desa, di mana banyak warga yang terlibat dalam proses produksi hingga distribusi. Genteng dan batu bata buatan Desa Wringinanom terkenal akan kualitasnya yang kokoh dan tahan lama, menjadikannya pilihan utama untuk kebutuhan konstruksi di daerah sekitar.',
                'photo_path' => 'genteng.svg',
                'created_at' => Carbon::parse('2025-02-10 11:34:40'),
                'updated_at' => Carbon::parse('2025-02-10 11:34:40'),
            ],
            [
                'id'         => 2,
                'title'      => 'Kesenian Desa Wringinanom',
                'content'    => 'Desa Wringinanom juga kaya akan seni budaya tradisional yang terus dilestarikan oleh masyarakat. Kesenian seperti Gajah-gajahan dan Reog Songo Mulang Joyo menjadi identitas desa yang selalu ditampilkan dalam berbagai acara adat dan perayaan. Selain itu, seni Karawitan dan Gong Gumbeng menambah keberagaman budaya desa, menghadirkan keindahan harmoni musik tradisional yang diwariskan dari generasi ke generasi. Melalui berbagai kesenian ini, Desa Wringinanom tidak hanya menjaga warisan budaya tetapi juga memperkuat ikatan sosial masyarakat.',
                'photo_path' => 'kesenian.svg',
                'created_at' => Carbon::parse('2025-02-10 11:34:40'),
                'updated_at' => Carbon::parse('2025-02-10 11:34:40'),
            ],
        ]);
    }
}
