<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sectiontwos', function (Blueprint $table) {
            $table->id();
            $table->string('heading_one')->nullable();
            $table->string('short_about_us')->nullable();
            $table->string('paragraph')->nullable();
            $table->string('experiance')->nullable();
            $table->string('ceo_founder_name')->nullable();
            $table->string('ceo_founder_img')->nullable();
            $table->string('large_img')->nullable();
            $table->string('small_img')->nullable();
            $table->string('contact')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sectiontwos');
    }
};
