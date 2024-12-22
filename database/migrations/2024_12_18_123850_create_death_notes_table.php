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
        Schema::create('death_notes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable(false);
            $table->string('nik', 255)->nullable(false);
            $table->string('no_dok_journey', 255)->nullable(false);
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
            $table->string('nationality_mom', 255)->nullable(false);
            $table->string('nik_death', 255)->nullable(false);
            $table->string('name_death', 255)->nullable(false);
            $table->string('year_death', 255)->nullable(false);
            $table->string('hour_death', 255)->nullable(false);
            $table->string('caused_death', 255)->nullable(false);
            $table->string('place_death', 255)->nullable(false);
            $table->string('info_death', 255)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('death_notes');
    }
};
