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
        Schema::create('developer_experiances', function (Blueprint $table) {
            $table->id();
            $table->string('experiance_degree');
            $table->string('experiance_institute');
            $table->date('experiance_starting_date');
            $table->date('experiance_ending_date');
            $table->text('experiance_description');
            $table->unsignedBigInteger('dev_id');
            $table->foreign('dev_id')
                ->references('id')
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
        Schema::dropIfExists('developer_experiances');
    }
};
