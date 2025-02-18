<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('hasilpemilihan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kandidat_id')->constrained('datakandidat')->onDelete('cascade');
            $table->integer('jumlah_suara')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hasilpemilihan');
    }
};

