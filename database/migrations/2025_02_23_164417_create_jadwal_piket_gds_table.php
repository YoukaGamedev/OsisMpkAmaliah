<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('jadwal_piket_gds', function (Blueprint $table) {
            $table->id();
            $table->string('hari');
            $table->string('Minggu')->nullable();
            $table->string('pj');
            $table->string('petugas_1');
            $table->string('petugas_2')->nullable();
            $table->string('petugas_3')->nullable();
            $table->string('petugas_4')->nullable();
            $table->string('petugas_5')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('jadwal_piket_gds');
    }
};

