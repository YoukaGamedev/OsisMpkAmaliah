<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelanggaranTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pelanggaran', function (Blueprint $table) {
            $table->id('id_pelanggaran');
            $table->unsignedBigInteger('siswa_id');
            $table->date('tanggal_pelanggaran');
        
            // Atribut pelanggaran - default ke 0 (tidak terpenuhi)
            $table->boolean('dasi')->default(0);
            $table->boolean('kacuk')->default(0);
            $table->boolean('kaos_kaki')->default(0);
            $table->boolean('sabuk')->default(0);
            $table->boolean('nametag')->default(0);
            $table->boolean('sepatu')->default(0);
            $table->boolean('jas')->default(0);
            $table->boolean('ring')->default(0);
            $table->boolean('bros')->default(0);
            $table->boolean('makeup')->default(0);
            $table->boolean('telat')->default(0);
            $table->boolean('ciput')->default(0);
            $table->boolean('hijab')->default(0);
            $table->boolean('almamater')->default(0);
        
            $table->timestamps();
        
            $table->foreign('siswa_id')->references('id')->on('siswas')->onDelete('cascade');
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggaran');
    }
}
