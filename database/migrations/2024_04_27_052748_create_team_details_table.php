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
        Schema::create('team_details', function (Blueprint $table) {
            $table->id('team_detail_id');
            $table->unsignedBigInteger('karyawan_id');
            $table->unsignedBigInteger('team_id'); // Perbaiki penulisan kolom team_id
            $table->foreign('karyawan_id')->references('karyawan_id')->on('karyawans')->onDelete('cascade');
            $table->foreign('team_id')->references('team_id')->on('teams')->onDelete('cascade'); // Perbaiki penulisan kolom team_id
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_details');
    }
};
