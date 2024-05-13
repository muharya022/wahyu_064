<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('antrian', function (Blueprint $table) {
            $table->id();
            $table->string('no_antrian');
            $table->string('status_antrian');
            $table->unsignedBigInteger('id_pasien');
            $table->foreign('id_pasien')->references('id_pasien')->on('pasien');
            $table->unsignedBigInteger('id_dokter');
            $table->foreign('id_dokter')->references('id_dokter')->on('dokter');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('antrian');
    }
};