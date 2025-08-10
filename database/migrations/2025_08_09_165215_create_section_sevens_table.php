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
        Schema::create('section_sevens', function (Blueprint $table) {
            $table->id();
            $table->string('building_number');
            $table->string('street');
            $table->string('city');
            $table->string('zip_code');
            $table->string('contact_one');
            $table->string('contact_two');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_sevens');
    }
};
