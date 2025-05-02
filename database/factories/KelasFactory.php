<?php

namespace Database\Factories;

use App\Models\Guru;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kelas>
 */
class KelasFactory extends Factory
{
    protected static $toggle = false;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $kelas = self::$toggle ? 'B' : 'A';

        self::$toggle = !self::$toggle;
        return [
            //
            'nama_kelas' => fake()->randomElement(['Mandiri', 'Kreatif', 'Ceria']),
            'tingkat_kelas' => $kelas,
            'guru_id' => Guru::factory(),
        ];
    }
}
