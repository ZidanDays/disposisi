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
        Schema::create('surat_masuk', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_naskah');
            $table->date('tanggal_naskah');
            $table->string('sifat');
            $table->string('status');
            $table->string('lampiran')->nullable();
            $table->string('jenis');
            $table->string('nomor_agenda')->nullable();
            $table->string('dari');
            $table->string('hal');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_masuk');
    }
};