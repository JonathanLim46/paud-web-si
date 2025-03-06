<?php

namespace Database\Factories;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Murid>
 */
class MuridFactory extends Factory
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
            'kelas_id' => Kelas::factory(),
            'nama_lengkap' => fake()->firstName() . ' ' . fake()->lastName(),
            'jenis_kelamin' => fake()->randomElement(['Laki-Laki', 'Perempuan']),
            'tempat_lahir' => fake()->city(),
            'tanggal_lahir' => fake()->date('Y_m_d'),
            'agama' => fake()->randomElement(['Islam', 'Kristen', 'Hindu', 'Budhha', 'Katholik']),
            'nama_ayah' => fake()->name(),
            'nama_ibu' => fake()->name(),
            'nama_wali' => null,
            'berat_badan' => fake()->randomFloat(2, 9, 25),
            'tinggi_badan' => fake()->numberBetween(70,100),
            'lingkar_kepala' => fake()->numberBetween(40, 55)
        ];
    }
}
