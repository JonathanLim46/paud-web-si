<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\Hari;
use App\Models\Kelas;
use App\Models\Murid;
use App\Models\Dokumen;
use App\Models\Pendaftar;
use App\Models\DataPribadi;
use App\Models\DataOrangTua;
use App\Models\MataPelajaran;
use App\Models\JadwalPelajaran;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $kelasList = Kelas::factory()
        ->count(3)
        ->has(
            Pendaftar::factory()
                ->count(8)
                ->state(['diterima' => true, 'status_verifikasi' => true,])
                ->has(DataPribadi::factory(), 'dataPribadi')
                ->has(DataOrangTua::factory(), 'dataOrangTua')
                ->has(Dokumen::factory(), 'dokumen'),
            'murids'
        )
        ->has(MataPelajaran::factory()->count(5), 'pelajarans')
        ->create();
        
        foreach ($kelasList as $kelas) {
            JadwalPelajaran::factory()
                ->count(5)
                ->for($kelas)
                ->create();
        }
    }
}
