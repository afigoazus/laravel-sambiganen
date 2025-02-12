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
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable(false);
            $table->bigInteger('amount')->nullable(false);
            $table->year('year')->nullable(false);
            $table->unsignedBigInteger('category_id')->nullable(false);
            $table->boolean('is_total')->nullable(false)->default(false);

            // Define category_id constraint
            $table->foreign('category_id')->on('budget_categories')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budgets');
    }
};
