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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('nama');
            $table->string('kelas');
            $table->boolean('dasi_kacu')->default(1); // 1=Ya, 0=Tidak
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
            $table->boolean('wearpack')->default(1);
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
