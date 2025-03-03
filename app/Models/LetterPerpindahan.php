<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LetterPerpindahan extends Model
{
    protected $table = 'kepindahan';

    protected $fillable = [
        'no_kk',
        'nama_lengkap',
        'nik',
        'no_wa',
        'alamat_asal',
        'rt_asal',
        'rw_asal',
        'kode_pos_asal',
        'klasifikasi_kepindahan',
        'alamat_pindah',
        'rt_pindah',
        'rw_pindah',
        'desa',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'kode_pos_pindah',
        'no_telp',
        'alasan_pindah',
        'jenis_kepindahan',
        'anggota_tidak_pindah',
        'anggota_pindah'
    ];

    public function anggotaPindah(): HasMany
    {
        return $this->hasMany(AnggotaPindah::class);
    }
}
