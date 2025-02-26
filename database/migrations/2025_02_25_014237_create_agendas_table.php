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
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->string('judul'); // Menambahkan kolom judul
            $table->string('pelaksana'); // Menambahkan kolom pelaksana
            $table->text('deskripsi'); // Menambahkan kolom deskripsi
            $table->date('tanggal'); // Menambahkan kolom tanggal
            $table->timestamps(); // Menyertakan created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendas');
    }
};
