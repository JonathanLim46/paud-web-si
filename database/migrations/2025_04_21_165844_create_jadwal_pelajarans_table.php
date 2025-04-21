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
        Schema::create('tb_jadwal_pelajaran', function (Blueprint $table) {
            $table->id('id_jadwal');
            $table->unsignedBigInteger('guru_id');
            $table->foreign('guru_id')->references('id_guru')->on('tb_guru')->onDelete('cascade');
            $table->unsignedBigInteger('kelas_id');
            $table->foreign('kelas_id')->references('id_kelas')->on('tb_kelas')->onDelete('cascade');
            $table->unsignedBigInteger('hari_id');
            $table->foreign('hari_id')->references('id_hari')->on('tb_hari')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_pelajarans');
    }
};
