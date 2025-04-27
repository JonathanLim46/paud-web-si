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
        Schema::create('tb_data_sekolah', function (Blueprint $table) {
            $table->string('npsn')->nullable();
            $table->unsignedBigInteger('pendaftaran_id');
            $table->foreign('pendaftaran_id')->references('id_pendaftaran')->on('tb_pendaftar')->onDelete('cascade');
            $table->string('nama_sekolah')->nullable();
            $table->string('status_sekolah')->nullable();
            $table->string('alamat_sekolah')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_sekolahs');
    }
};
