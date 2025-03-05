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
        Schema::create('tb_kelas', function (Blueprint $table) {
            $table->id('id_kelas');
            $table->string('tingkat_kelas');
            $table->unsignedBigInteger('guru_id');
            $table->foreign('guru_id')->references('id_guru')->on('tb_guru')->onDelete('cascade');
            $table->unsignedBigInteger('murid_id');
            $table->foreign('murid_id')->references('id_murid')->on('tb_murid')->onDelete('cascade');
            $table->unsignedBigInteger('pelajaran_id');
            $table->foreign('pelajaran_id')->references('id_pelajaran')->on('tb_mata_pelajaran')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
