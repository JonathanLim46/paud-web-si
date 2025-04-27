<?php

namespace Database\Factories;

use App\Models\Pendaftar;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataPribadi>
 */
class DataPribadiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tahun_awal = date('y');
        $tahun_akhir = $tahun_awal + 1;
        $kode_sekolah = 530;

        $no_urut = str_pad(fake()->unique()->numberBetween(1, 999), 3, '0', STR_PAD_LEFT);
        $nis = "{$tahun_awal}{$tahun_akhir}{$kode_sekolah}{$no_urut}";

        return [
            //
            'nik' => fake()->nik(),
            'nis' => $nis,
            'pendaftaran_id' => Pendaftar::factory(),
            'nama_lengkap' => fake()->firstName() . ' ' . fake()->lastName(),
            'jenis_kelamin' => fake()->randomElement(['Laki-Laki', 'Perempuan']),
            'tempat_lahir' => fake()->city(),
            'tanggal_lahir' => fake()->date('Y_m_d'),
            'agama' => fake()->randomElement(['Islam', 'Kristen', 'Hindu', 'Buddha', 'Konghucu']),
            'anak_ke' => fake()->numberBetween(0, 5),
            'berat_badan' => fake()->randomFloat(2, 9, 25),
            'tinggi_badan' => fake()->numberBetween(70,100),
            'lingkar_kepala' => fake()->numberBetween(40, 55),
            'alamat_rumah' => fake()->streetAddress(),
            'desa_kelurahan' => fake()->citySuffix(),
            'kecamatan' => fake()->streetSuffix(),
            'kota_kabupaten' => fake()->city(),
            'provinsi' => fake()->state(),
            'kode_pos' => fake()->postcode(),
        ];
    }
}
