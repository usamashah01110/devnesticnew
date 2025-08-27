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
        Schema::create('developer_education', function (Blueprint $table) {
            $table->id();
            $table->string('education_degree');
            $table->text('education_institute');
            $table->date('education_starting_date');
            $table->date('education_ending_date');
            $table->foreignId('dev_id')
                ->references('dev_id')
                ->on('section_eights')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('developer_education');
    }
};
