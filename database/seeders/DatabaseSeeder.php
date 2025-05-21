<?php

namespace Database\Seeders;

use App\Models\Guru;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Hari;
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

        $images = [
            'aktivitas_1.png',
            'aktivitas_2.png',
            'aktivitas_3.png',
            'aktivitas_4.png',
            'aktivitas_5.png',
            'aktivitas_6.png',
        ];

        foreach($images as $image){
            DB::table('tb_galeri')->insert([
                'foto_galeri' => $image,
            ]);
        }
        
        foreach($images as $image){
            DB::table('tb_aktivitas')->insert([
                'foto_aktivitas' => $image,
            ]);
        }

        // FAQ

        $data_faq = [
            ['judul_FAQ' => "Bagaimana jika saya mengalami kesulitan saat mengisi formulir pendaftaran online?",
            'isi_FAQ' => "Jika mengalami kendala saat mengisi formulir, silakan hubungi tim administrasi 
            PAUD KB AL-HUSNA melalui nomor WhatsApp atau email yang tercantum di website."]
            ,
            ['judul_FAQ' => "Apakah ada batasan usia untuk mendaftar?",
            'isi_FAQ' => "PAUD KB AL-HUSNA menerima peserta didik sesuai dengan kategori usia yang telah ditentukan. 
            Informasi lebih lanjut mengenai batasan usia dapat dilihat di halaman pendaftaran."]
            ,
            ['judul_FAQ' => "Apakah PAUD KB AL-HUSNA menerima peserta didik dari berbagai latar belakang agama?",
            'isi_FAQ' => "Ya, PAUD KB AL-HUSNA adalah lembaga pendidikan inklusif yang menerima peserta didik dari berbagai latar belakang agama, 
            dengan tetap mengedepankan nilai-nilai keislaman dalam pembelajaran."]
        ];

        DB::table('tb_faq')->insert($data_faq);

        // END FAQ

        $data_guru = [
            ['username' => "zeinhusna", 'name' => "H. Muhammad Zein", 'jabatan' => "Ketua Yayasan", 'alamat' => "Kp. Pasir Muncang", 'pendidikan' => "S1"],
            ['username' => "irmahusna", 'name' => "Irma Kusumawati", 'jabatan' => "Kepala Sekolah", 'alamat' => "Kp. Pasir Muncang", 'pendidikan' => "S1"],
            ['username' => "luluhusna", 'name' => "Lulu Zaima Awaly", 'jabatan' => "Guru", 'alamat' => "Kp. Pasir Muncang", 'pendidikan' => "S1"],
            ['username' => "emyhusna", 'name' => "Emy Liriyanti", 'jabatan' => "Guru", 'alamat' => "Kp. Pasir Muncang", 'pendidikan' => "SMA"],
            ['username' => "herahusna", 'name' => "Hera Miranti", 'jabatan' => "Guru", 'alamat' => "Kp. Pasir Muncang", 'pendidikan' => "S1"],
            ['username' => "nininghusna", 'name' => "Nining Mulyani", 'jabatan' => "Guru", 'alamat' => "Kp. Maleber", 'pendidikan' => "SMA"],
        ];

        foreach($data_guru as $data){
            $user_add = DB::table('users')->insertGetId([
                'name' => $data['name'],
                'username' => $data['username'],
                'level' => "guru",
                'email' => $data['username'].'@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123'),
                'remember_token' => Str::random(10),
            ]);

            DB::table('tb_guru')->insert([
                'user_id' => $user_add, 
                'jabatan' => $data['jabatan'], 
                'alamat_guru' => $data['alamat'], 
                'pendidikan' => $data['pendidikan'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

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

        // KELAS 
        
        $data_kelas = [
            ['nama_kelas' => "Mandiri", 'tingkat_kelas' => 'A'],
            ['nama_kelas' => "Kreatif", 'tingkat_kelas' => 'A'],
            ['nama_kelas' => "Ceria", 'tingkat_kelas' => 'B'],
        ];
        
        $guru_ids = DB::table('tb_guru')->pluck('id_guru')->toArray();

        foreach($data_kelas as $kelas){
            $wali_kelas_id = $guru_ids[array_rand($guru_ids)];
            DB::table('tb_kelas')->insert([
                'nama_kelas'   => $kelas['nama_kelas'],
                'tingkat_kelas'=> $kelas['tingkat_kelas'],
                'guru_id'   => $wali_kelas_id,
                'created_at'   => now(),
                'updated_at'   => now(),
            ]);
        }

        // END KELAS

        $namaHari = [['nama_hari' => 'Senin'], ['nama_hari' => 'Selasa'], ['nama_hari' => 'Rabu'], ['nama_hari' => 'Kamis'], ['nama_hari' => 'Jumat']];
        DB::table('tb_hari')->insert($namaHari);

        $data_jadwal = [
            ['username' => 'herahusna', 'hari' => 'senin', 'kelas' => 'mandiri'],
            ['username' => 'nininghusna', 'hari' => 'senin', 'kelas' => 'mandiri'],
            ['username' => 'herahusna', 'hari' => 'selasa', 'kelas' => 'mandiri'],
            ['username' => 'nininghusna', 'hari' => 'selasa', 'kelas' => 'mandiri'],
            ['username' => 'herahusna', 'hari' => 'rabu', 'kelas' => 'mandiri'],
            ['username' => 'nininghusna', 'hari' => 'rabu', 'kelas' => 'mandiri'],
            ['username' => 'emyhusna', 'hari' => 'kamis', 'kelas' => 'mandiri'],
            ['username' => 'luluhusna', 'hari' => 'jumat', 'kelas' => 'mandiri'],
            ['username' => 'luluhusna', 'hari' => 'senin', 'kelas' => 'kreatif'],
            ['username' => 'luluhusna', 'hari' => 'selasa', 'kelas' => 'kreatif'],
            ['username' => 'luluhusna', 'hari' => 'rabu', 'kelas' => 'kreatif'],
            ['username' => 'herahusna', 'hari' => 'kamis', 'kelas' => 'kreatif'],
            ['username' => 'nininghusna', 'hari' => 'kamis', 'kelas' => 'kreatif'],
            ['username' => 'emyhusna', 'hari' => 'jumat', 'kelas' => 'kreatif'],
            ['username' => 'emyhusna', 'hari' => 'senin', 'kelas' => 'ceria'],
            ['username' => 'emyhusna', 'hari' => 'selasa', 'kelas' => 'ceria'],
            ['username' => 'emyhusna', 'hari' => 'rabu', 'kelas' => 'ceria'],
            ['username' => 'luluhusna', 'hari' => 'kamis', 'kelas' => 'ceria'],
            ['username' => 'herahusna', 'hari' => 'jumat', 'kelas' => 'ceria'],
            ['username' => 'nininghusna', 'hari' => 'jumat', 'kelas' => 'ceria'],
        ];

        foreach($data_jadwal as $jadwal){
            $guru_id = User::where('username', $jadwal['username'])->first();
            $kelas_id = Kelas::where('nama_kelas', $jadwal['kelas'])->first();
            $hari_id = Hari::where('nama_hari', $jadwal['hari'])->first();
            DB::table('tb_jadwal_pelajaran')->insert([
                'guru_id' => $guru_id->guru->id_guru,
                'kelas_id' => $kelas_id->id_kelas ,
                'hari_id' => $hari_id->id_hari,
            ]);
        }

        DB::table('tb_statusppdb')->insert([
            'status' => false,
        ]);

        $this->call([
            PendaftarSeeder::class,
        ]);
    }
}
