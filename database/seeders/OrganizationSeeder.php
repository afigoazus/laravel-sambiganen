<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('organizations')->insert([
            [
                'id'         => 1,
                'title'      => 'Karang Taruna',
                'content'    => 'Karang Taruna Anom Mekar Buana adalah organisasi kepemudaan di Desa Wringinanom, Kecamatan Sambit, Kabupaten Ponorogo, yang berperan aktif dalam pemberdayaan pemuda dan pembangunan masyarakat. Organisasi ini mengadakan berbagai kegiatan seperti pelatihan keterampilan, gotong royong, pelestarian seni budaya, serta turnamen olahraga untuk mempererat solidaritas dan meningkatkan kesejahteraan warga. Sebagai mitra pemerintah desa, Anom Mekar Buana menjadi motor penggerak kemajuan melalui inovasi dan semangat kebersamaan.',
                'photo_path' => 'anom_mekar_buana.svg',
                'created_at' => Carbon::parse('2025-02-10 11:34:40'),
                'updated_at' => Carbon::parse('2025-02-10 11:34:40'),
            ],
            [
                'id'         => 2,
                'title'      => 'BPD',
                'content'    => 'Badan Permusyawaratan Desa (BPD) Wringinanom adalah lembaga perwakilan masyarakat yang berfungsi sebagai mitra pemerintah desa dalam menyusun kebijakan, mengawasi pelaksanaan pembangunan, serta menampung dan menyalurkan aspirasi warga. BPD berperan aktif dalam mewujudkan tata kelola pemerintahan desa yang transparan, akuntabel, dan partisipatif untuk mendukung tercapainya kesejahteraan masyarakat Desa Wringinanom.',
                'photo_path' => 'burung.svg',
                'created_at' => Carbon::parse('2025-02-10 11:34:40'),
                'updated_at' => Carbon::parse('2025-02-10 11:34:40'),
            ],
            [
                'id'         => 3,
                'title'      => 'PKK',
                'content'    => 'Pemberdayaan dan Kesejahteraan Keluarga (PKK) Desa Wringinanom merupakan gerakan yang bertujuan memberdayakan keluarga dalam berbagai bidang, seperti pendidikan, kesehatan, dan ekonomi. Melalui 10 Program Pokok PKK, organisasi ini aktif mengadakan kegiatan seperti penyuluhan kesehatan, pelatihan keterampilan bagi ibu-ibu rumah tangga, hingga kegiatan sosial yang mempererat hubungan antarwarga. PKK menjadi mitra strategis pemerintah desa dalam membangun keluarga yang sejahtera dan mandiri.',
                'photo_path' => 'jalu_astronot.svg',
                'created_at' => Carbon::parse('2025-02-10 11:34:40'),
                'updated_at' => Carbon::parse('2025-02-10 11:34:40'),
            ],
            [
                'id'         => 4,
                'title'      => 'BUMDes',
                'content'    => 'Badan Usaha Milik Desa (BUMDes) Wringinanom adalah lembaga ekonomi desa yang bertugas mengelola aset dan potensi lokal untuk meningkatkan pendapatan asli desa dan kesejahteraan masyarakat. BUMDes mengelola berbagai unit usaha, seperti jasa keuangan, perdagangan, dan pengelolaan sumber daya lokal. Sebagai penggerak ekonomi desa, BUMDes berkomitmen menghadirkan inovasi dan pemberdayaan ekonomi yang berkelanjutan bagi warga Desa Wringinanom',
                'photo_path' => 'jalu_batik.svg',
                'created_at' => Carbon::parse('2025-02-10 11:34:40'),
                'updated_at' => Carbon::parse('2025-02-10 11:34:40'),
            ],
        ]);
    }
}
