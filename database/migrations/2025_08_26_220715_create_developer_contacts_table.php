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
        Schema::create('developer_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('developer_email')->nullable();
            $table->string('developer_phone_no')->nllable();
            $table->text('developer_location')->nullable();
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
        Schema::dropIfExists('developer_contacts');
    }
};
