<?php

use Carbon\Carbon;
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
        Schema::create('land_sale_agreement_notes', function (Blueprint $table) {
            $table->id();
            $table->integer('no_letter')->nullable(false);
            $table->string('buyer_name')->nullable(false);
            $table->string('buyer_place_born')->nullable(false);
            $table->date('buyer_date_born')->nullable(false);
            $table->longText('buyer_address')->nullable(false);
            $table->string('seller_name')->nullable(false);
            $table->string('seller_place_born')->nullable(false);
            $table->date('seller_date_born')->nullable(false);
            $table->longText('seller_address')->nullable(false);
            $table->integer('land_area')->nullable(false);
            $table->string('no_persil')->nullable(false);
            $table->string('no_sppt')->nullable(false);
            $table->string('no_certificate')->nullable(false);
            $table->string('north_boundary')->nullable(false);
            $table->string('south_boundary')->nullable(false);
            $table->string('east_boundary')->nullable(false);
            $table->string('west_boundary')->nullable(false);
            $table->integer('land_price')->nullable(false);
            $table->string('witness1_name')->nullable(false);
            $table->string('witness2_name')->nullable(false);
            $table->string('witness3_name')->nullable(false);
            $table->string('witness1_job_position')->nullable(false);
            $table->string('witness2_job_position')->nullable(false);
            $table->string('witness3_job_position')->nullable(false);
            $table->year('year')->nullable(false)->default(Carbon::now()->year);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('land_sale_agreement_notes');
    }
};
