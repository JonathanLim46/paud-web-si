<?php

namespace Database\Factories;

use App\Models\Pendaftar;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataOrangTua>
 */
class DataOrangTuaFactory extends Factory
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
            'pendaftaran_id' => Pendaftar::factory(),
            'nama_ayah' => fake()->name($gender = 'male'),
            'nik_ayah' => fake()->nik(),
            'pekerjaan_ayah' => fake()->jobTitle(),
            'nama_ibu' => fake()->name($gender = 'female'),
            'nik_ibu' => fake()->nik(),
            'pekerjaan_ibu' => fake()->jobTitle(),
            'nama_wali' => fake()->name(),
            'nik_wali' => fake()->nik(),
            'pekerjaan_wali' => fake()->jobTitle()
        ];
    }
}
