<?php

namespace Database\Factories;

use App\Models\Pendaftar;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataSekolah>
 */
class DataSekolahFactory extends Factory
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
            'npsn' => fake()->randomNumber(6, true),
            'pendaftaran_id' => Pendaftar::factory(),
            'alamat_sekolah' => fake()->address(),
            'jenjang_sekolah' => fake()->randomElement(['A', 'B'])
        ];
    }
}
