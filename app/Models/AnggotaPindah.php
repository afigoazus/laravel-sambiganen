<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AnggotaPindah extends Model
{
    protected $table = 'anggota_pindah';

    protected $fillable = [
        'kepindahan_id',
        'nik',
        'nama',
        'status'
    ];

    public function kepindahan(): BelongsTo
    {
        return $this->belongsTo(Kepindahan::class);
    }
}
