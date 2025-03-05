<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
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
            'username' => fake()->userName(),
            'nama' => fake()->name(),
            'password' => static::$password ??= Hash::make('password'),
            'email' => fake()->unique()->email(),
            'no_telp' => fake()->unique()->phoneNumber()
        ];
    }
}
