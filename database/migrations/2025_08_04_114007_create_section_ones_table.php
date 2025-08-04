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
        Schema::create('section_ones', function (Blueprint $table) {
            $table->id();
            $table->string('heading_one')->nullable();
            $table->string('paragraph')->nullable();
            $table->string('btn_one_text')->nullable();
            $table->string('years')->nullable();
            $table->string('clients')->nullable();
            $table->string('success_rate')->nullable();
            $table->string('image_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_ones');
    }
};
