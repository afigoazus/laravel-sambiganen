<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert records
        DB::table('documents')->insert([
            [
                'id' => 1,
                'name' => 'Surat Keterangan Usaha',
                'pdf_path' => '01JJKVPHD6DBE40YZZ2TZZ80AV.pdf',
                'created_at' => '2025-01-27 12:27:35',
                'updated_at' => '2025-01-27 12:27:35',
            ],
            [
                'id' => 2,
                'name' => 'Surat Keterangan Kehilangan',
                'pdf_path' => '01JJKVQ0NFXDV991FDMZKFP4AG.pdf',
                'created_at' => '2025-01-27 12:27:51',
                'updated_at' => '2025-01-27 12:27:51',
            ],
            [
                'id' => 3,
                'name' => 'Surat BBM',
                'pdf_path' => '01JJKVQDKZVEA90Y615HWCDH0E.pdf',
                'created_at' => '2025-01-27 12:28:04',
                'updated_at' => '2025-01-27 12:28:04',
            ],
            [
                'id' => 4,
                'name' => 'Keringanan Sekolah',
                'pdf_path' => '01JJKVQVD2XHKES8BBMDGPP5Z2.pdf',
                'created_at' => '2025-01-27 12:28:18',
                'updated_at' => '2025-01-27 12:28:18',
            ],
            [
                'id' => 5,
                'name' => 'Surat Keterangan Kematian',
                'pdf_path' => '01JJKVRPT832MA5Y8Y4085CQY7.pdf',
                'created_at' => '2025-01-27 12:28:46',
                'updated_at' => '2025-01-27 12:28:46',
            ],
            [
                'id' => 6,
                'name' => 'Capil Kematian',
                'pdf_path' => '01JJKVS72P7C0XCBR1PY3N1T3B.pdf',
                'created_at' => '2025-01-27 12:29:03',
                'updated_at' => '2025-01-27 12:29:03',
            ],
            [
                'id' => 7,
                'name' => 'Capil Kelahiran',
                'pdf_path' => '01JJKVSN8TCR8DE93AWBMJJD2E.pdf',
                'created_at' => '2025-01-27 12:29:17',
                'updated_at' => '2025-01-27 12:29:17',
            ],
        ]);
    }
}
