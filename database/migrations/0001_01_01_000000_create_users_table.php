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
        Schema::create('users', function (Blueprint $table) {
            $table->id();  
            $table->string('name');  
            $table->string('email')->unique();  
            $table->timestamp('email_verified_at')->nullable();  
            $table->string('password');  
            $table->string('role')->default('user'); // Menambahkan kolom role
            $table->string('kepengurusan')->nullable(); // Kolom kepengurusan opsional
            $table->enum('sekolah', ['A1', 'A2', 'Guru']); // Kolom sekolah dengan pilihan A1 atau A2
            $table->string('avatar')->nullable(); // Menambahkan kolom avatar yang opsional
            $table->rememberToken();  
            $table->timestamps();  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
