<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kepindahan', function (Blueprint $table) {
            $table->id();
            $table->string('no_kk', 20)->comment('Family card number');
            $table->string('nama_lengkap', 100)->comment('Main applicant name');
            $table->string('nik', 20)->comment('National ID number');
            $table->string('no_wa', 15)->nullable()->comment('WhatsApp number');
            $table->text('alamat_asal')->comment('Original address');
            $table->string('rt_asal', 5);
            $table->string('rw_asal', 5);
            $table->string('kode_pos_asal', 10);
            $table->unsignedTinyInteger('klasifikasi_kepindahan')->comment('1-4 classification type');
            $table->text('alamat_pindah')->comment('Destination address');
            $table->string('rt_pindah', 5);
            $table->string('rw_pindah', 5);
            $table->string('desa', 100);
            $table->string('kecamatan', 100);
            $table->string('kabupaten', 100);
            $table->string('provinsi', 100);
            $table->string('kode_pos_pindah', 10);
            $table->string('no_telp', 15)->nullable()->comment('Phone number');
            $table->unsignedTinyInteger('alasan_pindah')->comment('1-7 reason code');
            $table->unsignedTinyInteger('jenis_kepindahan')->comment('1-4 type code');
            $table->unsignedTinyInteger('anggota_tidak_pindah')->comment('Number of members not moving');
            $table->unsignedTinyInteger('anggota_pindah')->comment('Number of members moving');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kepindahan');
    }
};
