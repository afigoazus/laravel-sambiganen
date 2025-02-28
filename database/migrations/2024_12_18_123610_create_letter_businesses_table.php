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
        Schema::create('letter_businesses', function (Blueprint $table) {
            $table->id();
            $table->integer('no_letter')->nullable(false);
            $table->string('name', 255)->nullable(false);
            $table->string('address', 255)->nullable(false);
            $table->string('no_ktp', 255)->nullable(false);
            $table->string('agriculture', 255)->nullable(true);
            $table->string('industry', 255)->nullable(true);
            $table->string('trading', 255)->nullable(true);
            $table->string('stock_breeding', 255)->nullable(true);
            $table->string('handicraft', 255)->nullable(true);
            $table->string('service', 255)->nullable(true);
            $table->string('other', 255)->nullable(true);
            $table->string('no_wa', 255)->nullable(false);
            $table->year('year')->nullable(false)->default(Carbon::now()->year);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('letter_businesses');
    }
};
