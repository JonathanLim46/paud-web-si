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
        Schema::create('tb_data_orang_tua', function (Blueprint $table) {
            $table->id('id_orangTua');
            $table->unsignedBigInteger('pendaftaran_id');
            $table->foreign('pendaftaran_id')->references('id_pendaftaran')->on('tb_pendaftar')->onDelete('cascade');
            $table->string('nama_ayah')->nullable();
            $table->string('nik_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('nik_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('nama_wali')->nullable();
            $table->string('nik_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_orang_tuas');
    }
};
