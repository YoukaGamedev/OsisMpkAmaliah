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
            $table->string('nama');
            $table->string('kelas');
            $table->boolean('dasi_kacu')->default(1); // 1=Ya, 0=Tidak
            $table->boolean('kaos_kaki')->default(1);
            $table->boolean('sabuk')->default(1);
            $table->boolean('nametag')->default(1);
            $table->boolean('sepatu')->default(1);
            $table->boolean('jas')->default(1);
            $table->boolean('ring')->default(1);
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