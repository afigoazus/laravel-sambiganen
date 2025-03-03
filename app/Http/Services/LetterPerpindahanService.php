<?php

namespace App\Http\Services;

use App\Models\AnggotaPindah;
use App\Models\LetterPerpindahan;
use Illuminate\Support\Facades\Log;

class LetterPerpindahanService
{
    public function store($data)
    {
        // 1. Save the main letter data
        $letter = LetterPerpindahan::create([
            'no_kk' => $data["no_kk"],
            'nama_lengkap' => $data["nama_lengkap"],
            'nik' => $data["nik"],
            'no_wa' => $data["no_wa"],
            'alamat_asal' => $data["alamat_asal"],
            'rt_asal' => $data["rt_asal"],
            'rw_asal' => $data["rw_asal"],
            'kode_pos_asal' => $data["kode_pos_asal"],
            'klasifikasi_kepindahan' => $data["klasifikasi_kepindahan"],
            'alamat_pindah' => $data["alamat_pindah"],
            'rt_pindah' => $data["rt_pindah"],
            'rw_pindah' => $data["rw_pindah"],
            'desa' => $data["desa"],
            'kecamatan' => $data["kecamatan"],
            'kabupaten' => $data["kabupaten"],
            'provinsi' => $data["provinsi"],
            'kode_pos_pindah' => $data["kode_pos_pindah"],
            'no_telp' => $data["no_telp"],
            'alasan_pindah' => $data["alasan_pindah"],
            'jenis_kepindahan' => $data["jenis_kepindahan"],
            'anggota_tidak_pindah' => $data["anggota_tidak_pindah"],
            'anggota_pindah' => $data["anggota_pindah"],
        ]);

        // 2. Process family members (nik_fam, nama_fam, status_fam)
        for ($i = 1; $i <= 5; $i++) {
            $nikField = "nik_fam{$i}";
            $namaField = "nama_fam{$i}";
            $statusField = "status_fam{$i}";

            // Only save if NIK exists
            if (isset($data[(string) $nikField])) {
                AnggotaPindah::create([
                    'letter_perpindahan_id' => $letter->id, // Foreign key
                    'nik' => $data[(string) $nikField],
                    'nama' => $data[(string) $namaField],
                    'status' => $data[(string) $statusField],
                ]);
            }
        }
    }
}
