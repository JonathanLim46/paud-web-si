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
        $table->id('id_pendaftaran');
        $table->string('no_telp');
        $table->boolean('status_verifikasi')->default(false);
        $table->boolean('diterima')->nullable()->default(false);
        $table->unsignedBigInteger('kelas_id')->nullable()->default(null);
        $table->foreign('kelas_id')->references('id_kelas')->on('tb_kelas')->onDelete('cascade');
        $table->timestamps(); 
        $table->softDeletes();
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
