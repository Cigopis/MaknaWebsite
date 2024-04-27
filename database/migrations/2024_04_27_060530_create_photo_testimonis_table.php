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
        Schema::create('photo_testimonis', function (Blueprint $table) {
            $table->id('photo_testimoni_id');
            $table->unsignedBigInteger('testimoni_id');
            $table->string('photo_name');
            $table->foreign('testimoni_id')->references('testimoni_id')->on('testimonis')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photo_testimonis');
    }
};
