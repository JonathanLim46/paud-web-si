<?php

namespace Database\Factories;

use App\Models\Guru;
use App\Models\Hari;
use App\Models\Kelas;
use App\Models\JadwalPelajaran;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JadwalPelajaran>
 */
class JadwalPelajaranFactory extends Factory
{
    protected $model = JadwalPelajaran::class;

    public function definition(): array
    {
        return [
            'kelas_id' => Kelas::inRandomOrder()->first()?->id ?? Kelas::factory(),
            'guru_id' => Guru::inRandomOrder()->first()?->id ?? Guru::factory(),
            'hari_id' => Hari::inRandomOrder()->first()?->id ?? Hari::factory(),
        ];
    }
}
