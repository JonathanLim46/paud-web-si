<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Murid;
use App\Models\MataPelajaran;
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
        Kelas::factory()
            ->has(Guru::factory(), 'guru')
            ->has(Murid::factory()->count(10), 'murids')
            ->has(MataPelajaran::factory()->count(5), 'pelajarans')
            ->count(2)
            ->create();
    }
}
