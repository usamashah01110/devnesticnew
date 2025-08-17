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
        Schema::create('section_eights', function (Blueprint $table) {
            $table->id();
            $table->string('developer_id')->unique();
            $table->string('name')->nullable();
            $table->string('role')->nullable();
            $table->text('description')->nullable();
            $table->string('tech1')->nullable();
            $table->string('tech2')->nullable();
            $table->string('tech3')->nullable();
            $table->string('tech4')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_eights');
    }
};
