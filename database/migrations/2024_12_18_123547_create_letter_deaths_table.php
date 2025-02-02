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
        Schema::create('letter_deaths', function (Blueprint $table) {
            $table->id();
            $table->integer('no_letter')->nullable(false);
            $table->string('name', 255)->nullable(false);
            $table->string('nik', 255)->nullable(false);
            $table->string('date_death', 255)->nullable(false);
            $table->string('hour_death', 255)->nullable(false);
            $table->string('cause_death', 255)->nullable(false);
            $table->string('mom_name', 255)->nullable(false);
            $table->string('dad_name', 255)->nullable(false);
            $table->year('year')->nullable(false)->default(now()->year);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('letter_deaths');
    }
};
