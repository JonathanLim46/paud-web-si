<?php

namespace Database\Seeders;

use App\Models\Hari;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Kelas;
use Illuminate\Support\Str;
use App\Models\JadwalPelajaran;
use Illuminate\Database\Seeder;
use Database\Seeders\AdminSeeder;
use Database\Seeders\KelasSeeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\PendaftarSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->count(3)->create();

        // DB::table('tb_hari')->insert([
        //     [
        //         'nama_hari' => 'Senin',
        //     ],
        //     [
        //         'nama_hari' => 'Selasa',
        //     ],
        //     [
        //         'nama_hari' => 'Rabu',
        //     ],
        //     [
        //         'nama_hari' => 'Kamis',
        //     ],
        //     [
        //         'nama_hari' => 'Jumat',
        //     ],
        // ]);

        DB::table('users')->insert([
            [
                'name' => fake()->name(),
                'username' => 'admin',
                'level' => 'admin',
                'email' => 'admin@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => fake()->name(),
                'username' => 'guru',
                'level' => 'guru',
                'email' => 'guru@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123'),
                'remember_token' => Str::random(10),
            ]
        ]);

        $guruUser = DB::table('users')->where('username', 'guru')->first();

        DB::table('tb_guru')->insert([
            'user_id' => $guruUser->id, 
            'jabatan' => 'Guru', 
            'alamat_guru' => 'Jl. Pendidikan No. 1', 
            'pendidikan' => 'S1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tb_statusppdb')->insert([
            'status' => false,
        ]);

        $this->call([
            PendaftarSeeder::class,
            KelasSeeder::class,
        ]);
    }
}
