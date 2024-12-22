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
        Schema::create('surat_masuks', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_naskah');
            $table->date('tanggal_naskah');
            $table->enum('sifat', ['Umum', 'Rahasia']);
            $table->enum('prioritas', ['Biasa', 'Segera', 'Sangat Segera']);
            $table->string('dari');
            $table->string('hal');
            $table->string('lampiran')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_masuks');
    }
};