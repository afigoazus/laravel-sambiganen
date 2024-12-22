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
        Schema::create('letter_fuels', function (Blueprint $table) {
            $table->id();
            $table->integer('no_letter')->nullable(false);
            $table->string('name', 255)->nullable(false);
            $table->string('nik', 255)->nullable(false);
            $table->string('address', 255)->nullable(false);
            $table->string('business_name', 255)->nullable(true);
            $table->string('user_consumer_sector', 255)->nullable(false);
            $table->string('business_type', 255)->nullable(false);
            $table->string('tool_type', 255)->nullable(false);
            $table->string('tool_sum', 255)->nullable(false);
            $table->string('tool_power', 255)->nullable(false);
            $table->string('tool_use', 255)->nullable(false);
            $table->string('tool_time_used_hour', 255)->nullable(false);
            $table->string('tool_time_used_daily', 255)->nullable(false);
            $table->string('jbt_consumption', 255)->nullable(false);
            $table->string('tool_sum2', 255)->nullable(false);
            $table->string('volume_application', 255)->nullable(false);
            $table->string('pick_up_place', 255)->nullable(false);
            $table->string('no_distributor', 255)->nullable(false);
            $table->string('address_distributor', 255)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('letter_fuels');
    }
};
