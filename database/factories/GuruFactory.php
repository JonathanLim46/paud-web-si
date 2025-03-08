<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Kelas;
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
            'kelas_id' => Kelas::factory(),
            'user_id' => User::factory()->guru()
        ];
    }
}
