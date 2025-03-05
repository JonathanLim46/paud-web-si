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
    Schema::create('pendaftars', function (Blueprint $table) {
        $table->id();
        $table->string('nik');
        $table->foreign('nik')->references('nik')->on('data_pribadis')->onDelete('cascade');
        $table->unsignedBigInteger('orangTua_id');
        $table->foreign('orangTua_id')->references('id_orangTua')->on('data_orang_tuas')->onDelete('cascade');
        $table->string('no_telp');
        $table->unsignedBigInteger('dokumen_id');
        $table->foreign('dokumen_id')->references('id_dokumen')->on('dokumens')->onDelete('cascade');
        $table->string('npsn')->nullable();
        $table->foreign('npsn')->references('npsn')->on('data_sekolahs')->onDelete('cascade');
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
