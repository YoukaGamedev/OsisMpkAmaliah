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
        Schema::create('kandidat', function (Blueprint $table) {
            $table->id();
            $table->string('nisn');
            $table->string('nomor_pasangan_calon');
            $table->string('nama_pasangan_calon');
            $table->string('visi_misi');
            $table->string('foto');
            $table->enum('sekolah', ['A1', 'A2']); // Kolom sekolah dengan pilihan A1 atau A2
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kandidat');
    }
};


