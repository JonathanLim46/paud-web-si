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

        static $hariKe = 0;
        $namaHari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat'];
        return [
            'nama_hari' => $namaHari[$hariKe],
        ];

        $hariKe++;
    }
}
