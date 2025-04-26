<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guru>
 */
class GuruFactory extends Factory
{
    protected static ?string $password;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'user_id' => User::factory()->guru(),
            'jabatan' => fake()->randomElement([
                'Guru', 'Staff'
            ]),
            'alamat_guru' => fake()->streetAddress(),
            'pendidikan' => fake()->randomElement([
                'S1', 'S2', 'SMA', 'D4', 'D3'
            ]),
        ];
    }
}
