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
        Schema::create('dashboard', function (Blueprint $table) {
            $table->id();
            $table->integer('npsn');
            $table->string('nama_sekolah');
            $table->string('nama_kepsek');
            $table->integer('nip');
            $table->string('alamat_jalan');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('tahun_pelajaran');
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dashboard');
    }
};
