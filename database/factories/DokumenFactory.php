<?php

namespace Database\Factories;

use App\Models\Pendaftar;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dokumen>
 */
class DokumenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'kartu_keluarga' => fake()->filePath(),
            'pendaftaran_id' => Pendaftar::factory(),
            'akta_kelahiran' => fake()->filePath(),
            'surat_pindah' => fake()->filePath(),
            'ktp_ayah' => fake()->filePath(),
            'ktp_ibu' => fake()->filePath(),
        ];
    }
}
