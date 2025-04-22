<?php

namespace Database\Factories;

use App\Models\Guru;
use App\Models\Hari;
use App\Models\Kelas;
use App\Models\JadwalPelajaran;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JadwalPelajaran>
 */
class JadwalPelajaranFactory extends Factory
{
    protected $model = JadwalPelajaran::class;

    public function definition(): array
    {
        $hariExists = DB::table('tb_hari')->count();
        
        if ($hariExists == 0) {
            $days = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat'];

            foreach ($days as $day) {
                DB::table('tb_hari')->insert([
                    'nama_hari' => $day
                ]);
            }
        }

        $hari = DB::table('tb_hari')->orderBy('id_hari')->get();

        static $index = 0;
        $hari_id = $hari[$index % 5]->id_hari;

        $index++;

        return [
            'kelas_id' => Kelas::inRandomOrder()->first()?->id ?? Kelas::factory(),
            'guru_id' => Guru::inRandomOrder()->first()?->id ?? Guru::factory(),
            'hari_id' => $hari_id,
        ];
    }
}
