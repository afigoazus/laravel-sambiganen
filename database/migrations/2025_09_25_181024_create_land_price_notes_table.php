<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('land_price_notes', function (Blueprint $table) {
            $table->id();
            $table->integer('no_letter')->nullable(false);
            $table->string('name')->nullable(false);
            $table->string('place_born')->nullable(false);
            $table->date('date_born')->nullable(false);
            $table->string('job')->nullable(false);
            $table->longText('address')->nullable(false);
            $table->string('certificate_number')->nullable(false);
            $table->integer('land_area')->nullable(false);
            $table->string('north_boundary')->nullable(false);
            $table->string('south_boundary')->nullable(false);
            $table->string('east_boundary')->nullable(false);
            $table->string('west_boundary')->nullable(false);
            $table->string('land_price')->nullable(false);
            $table->year('year')->nullable(false)->default(Carbon::now()->year);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('land_price_notes');
    }
};
