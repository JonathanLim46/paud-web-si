<?php

namespace Database\Seeders;

use App\Models\Dokumen;
use App\Models\Pendaftar;
use App\Models\DataPribadi;
use App\Models\DataOrangTua;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class PendaftarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Pendaftar::factory()
            ->has(DataPribadi::factory(), 'dataPribadi')
            ->has(DataOrangTua::factory(), 'dataOrangTua')
            ->has(Dokumen::factory(), 'dokumen')
            ->count(5)
            ->create();
    }
}
