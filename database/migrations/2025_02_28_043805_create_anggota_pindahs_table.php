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
        Schema::create('anggota_pindah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kepindahan_id')->constrained('kepindahan')->onDelete('cascade');
            $table->string('nik', 20);
            $table->string('nama', 100);
            $table->string('status', 50)->comment('Relationship to main applicant');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota_pindahs');
    }
};
