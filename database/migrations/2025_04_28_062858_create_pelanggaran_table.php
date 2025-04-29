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
            
            // Atribut pelanggaran
            $table->boolean('dasi')->default(1);
            $table->boolean('kacuk')->default(1);
            $table->boolean('kaos_kaki')->default(1);
            $table->boolean('sabuk')->default(1);
            $table->boolean('nametag')->default(1);
            $table->boolean('sepatu')->default(1);
            $table->boolean('jas')->default(1);
            $table->boolean('ring')->default(1);
            $table->boolean('bros')->default(1);
            $table->boolean('makeup')->default(1);
            $table->boolean('telat')->default(1);
            $table->boolean('ciput')->default(1);
            $table->boolean('hijab')->default(1);
            $table->boolean('almamater')->default(1);
            
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
