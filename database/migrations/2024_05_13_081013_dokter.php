<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dokter', function (Blueprint $table) {
            $table->id('id_dokter');
            $table->string('nama_dokter');
            $table->string('jabatan');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dokter');
    }
};