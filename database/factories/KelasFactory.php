<?php

namespace Database\Factories;

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
            'nama_kelas' => fake()->name(),
            'tingkat_kelas' => $kelas,
            'wali_murid' => fake()->firstNameFemale(),
        ];
    }
}
