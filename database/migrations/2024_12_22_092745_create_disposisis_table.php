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
        Schema::create('disposisis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('surat_id');
            $table->unsignedBigInteger('dari_user_id');
            $table->unsignedBigInteger('kepada_user_id');
            $table->text('catatan');
            $table->timestamps();

            
        // foreign key
            $table->foreign('surat_id')->references('id')->on('surat_masuks')->onDelete('cascade');
            $table->foreign('dari_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('kepada_user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disposisis');
    }
};