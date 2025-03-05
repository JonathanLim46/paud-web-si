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
    Schema::create('tb_pendaftar', function (Blueprint $table) {
        $table->id();
        $table->string('nik');
        $table->foreign('nik')->references('nik')->on('tb_data_pribadi')->onDelete('cascade');
        $table->unsignedBigInteger('orangTua_id');
        $table->foreign('orangTua_id')->references('id_orangTua')->on('tb_data_orang_tua')->onDelete('cascade');
        $table->string('no_telp');
        $table->unsignedBigInteger('dokumen_id');
        $table->foreign('dokumen_id')->references('id_dokumen')->on('tb_dokumen')->onDelete('cascade');
        $table->string('npsn')->nullable();
        $table->foreign('npsn')->references('npsn')->on('tb_data_sekolah')->onDelete('cascade');
        $table->boolean('status_verifikasi')->default(false);
        $table->timestamps(); 
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftars');
    }
};
