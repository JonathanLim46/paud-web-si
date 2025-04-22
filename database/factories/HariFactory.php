<?php

namespace Database\Factories;

use App\Models\Hari;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hari>
 */
class HariFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Hari::class;

    public function definition(): array
    {

        $namaHari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat'];

        static $index = 0;
        return [
            'nama_hari' => $namaHari[$index % 5],
        ];
    }
}
