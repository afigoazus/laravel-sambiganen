<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('birth_notes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable(false);
            $table->string('nik', 255)->nullable(false);
            $table->integer('no_dok_journey')->nullable(false);
            $table->string('nationality', 255)->nullable(false);
            $table->string('no_wa', 255)->nullable(false);
            $table->string('name_saksi', 255)->nullable(false);
            $table->string('nik_saksi', 255)->nullable(false);
            $table->string('nationality_saksi', 255)->nullable(false);
            $table->string('name_saksi2', 255)->nullable(false);
            $table->string('nik_saksi2', 255)->nullable(false);
            $table->string('nationality_saksi2', 255)->nullable(false);
            $table->string('name_dad', 255)->nullable(false);
            $table->string('nik_dad', 255)->nullable(false);
            $table->string('place_born_dad', 255)->nullable(false);
            $table->string('date_born_dad', 255)->nullable(false);
            $table->string('nationality_dad', 255)->nullable(false);
            $table->string('name_mom', 255)->nullable(false);
            $table->string('nik_mom', 255)->nullable(false);
            $table->string('place_born_mom', 255)->nullable(false);
            $table->string('date_born_mom', 255)->nullable(false);
            $table->string('nationality_mom', 255)->nullable(false);
            $table->string('no_kk_anak', 255)->nullable(false);
            $table->string('hub_keluarga', 255)->nullable(false);
            $table->string('name_child', 255)->nullable(false);
            $table->string('gender_child', 255)->nullable(false);
            $table->string('place_birth_child', 255)->nullable(false);
            $table->string('place_birth_child2', 255)->nullable(false);
            $table->string('date_birth_child', 255)->nullable(false);
            $table->string('hour_birth_child', 255)->nullable(false);
            $table->string('type_birth_child', 255)->nullable(false);
            $table->string('no_birth_child', 255)->nullable(false);
            $table->string('helper_birth', 255)->nullable(false);
            $table->string('weight_child', 255)->nullable(false);
            $table->string('height_child', 255)->nullable(false);
            $table->string('blood_type_child', 255)->nullable(false);
            $table->string('religion_child', 255)->nullable(false);
            $table->string('nationality_child', 255)->nullable(false);
            $table->string('disability', 255)->nullable(false);
            $table->year('year')->nullable(false)->default(Carbon::now()->year);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('birth_notes');
    }
};
