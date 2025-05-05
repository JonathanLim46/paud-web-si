<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Pendaftar;
use Barryvdh\DomPDF\Facade\Pdf;


class DetailMurid extends Component
{
    public $step = 'DataPribadi';
    public $nilai = [];
    public $aspekTexts = [
        1 => 'Mengenal agama yang dianut',
        2 => 'Menghargai diri sendiri, orang lain dan lingkungan sekitar',
        3 => 'Mencerminkan perilaku jujur, sopan santun sebagai cerminan akhlak mulia',
        4 => 'Menjaga kebersihan diri dan lingkungan',
        5 => 'Terbiasa melafalkan surat-surat pendek, doa-doa harian dan melaksanakan ibadah',
        6 => 'Melakukan gerakan tubuh secara terkoordinasi untuk melatih kelenturan, keseimbangan, dan kelincahan',
        7 => 'Melakukan koordinasi gerakan mata-kaki-tangan-kepala dalam menirukan tarian atau senam',
        8 => 'Melakukan permainan fisik dengan aturan',
        9 => 'Terampil menggunakan tangan kanan dan kiri',
        10 => 'Melakukan kegiatan kebersihan diri',
        11 => 'Mewarnai gambar sesuai imajinasinya',
        12 => 'Meniru berbagai jenis bentuk',
        13 => 'Melakukan eksplorasi dengan berbagai media dan kegiatan',
        14 => 'Memotong kertas sesuai dengan pola yang diinstruksikan',
        15 => 'Menempel gambar dengan tepat dan rapi',
        16 => 'Berat badan sesuai tingkat usia',
        17 => 'Tinggi badan sesuai standar usia',
        18 => 'Berat badan sesuai dengan standar tinggi badan',
        19 => 'Lingkar kepala sesuai tingkat usia',
        20 => 'Menutup hidung dan mulut (misal, ketika batuk dan bersin)',
        21 => 'Membersihkan, dan membereskan tempat bermain',
        22 => 'Menghindari situasi yang membahayakan diri',
        23 => 'Memahami tata cara menyeberang',
        24 => 'Mengenal kebiasaan buruk bagi kesehatan (rokok, minuman keras)',
        25 => 'Menunjukkan aktivitas yang bersifat eksploratif dan menyelidiki',
        26 => 'Memecahkan masalah sederhana dalam kehidupan sehari-hari dengan cara yang fleksibel dan diterima sosial',
        27 => 'Memiliki sikap rasa ingin tahu dan ingin mencoba kegiatan baru',
        28 => 'Menunjukkan sikap kreatif dalam menyelesaikan masalah (ide, gagasan, atau kebiasaan)',
        29 => 'Mengenal perbedaan kecil dan besar, panjang dan pendek',
        30 => 'Menunjukkan inisiatif dalam memilih tema permainan',
        31 => 'Menyusun perencanaan kegiatan yang akan dilakukan',
        32 => 'Menjelaskan sebab-akibat tentang lingkungannya (angin bertiup menyebabkan daun bergerak, air dapat menyebabkan banjir)',
        33 => 'Mengenal pola benda sesuai jenis, warna, ukuran',
        34 => 'Mengenal angka melalui lagu, jari tangan, alat permainan',
        35 => 'Mengelompokkan benda berdasarkan ukuran dari yang paling kecil, sedang hingga yang paling besar',
        36 => 'Mengurutkan benda berdasarkan seriasi dari paling kecil, sedang hingga besar atau sebaliknya',
        37 => 'Menyebutkan lambang bilangan 1–15',
        38 => 'Menghitung benda sekitar dan penjumlahan',
        39 => 'Mencocokkan bilangan dengan lambang bilangan',
        40 => 'Mengenal berbagai macam lambang huruf vokal dan konsonan',
        41 => 'Merepresentasikan berbagai macam benda dalam bentuk gambar atau tulisan',
        42 => 'Melaksanakan perintah yang lebih kompleks sesuai aturan yang disampaikan',
        43 => 'Mengulang kalimat yang lebih kompleks',
        44 => 'Memahami informasi yang didengarnya',
        45 => 'Senang dan menghargai bacaan',
        46 => 'Menjawab pertanyaan yang lebih kompleks',
        47 => 'Mengungkapkan keinginan, perasaan, dan pendapat dengan kalimat sederhana dalam berkomunikasi',
        48 => 'Mengutarakan perasaan, ide dengan pilihan kata yang sesuai ketika berkomunikasi',
        49 => 'Menyusun kalimat sederhana dalam struktur lengkap (pokok kalimat–predikat–keterangan)',
        50 => 'Memiliki lebih banyak kata-kata untuk mengekspresikan ide pada orang lain',
        51 => 'Mampu menyampaikan sebagian cerita/dongeng yang telah diperdengarkan',
        52 => 'Menceritakan pengalaman yang dialami dengan menggunakan bahasa yang sederhana',
        53 => 'Menyebutkan simbol-simbol huruf yang dikenal',
        54 => 'Mengenal suara huruf awal dari nama benda-benda yang ada di sekitarnya',
        55 => 'Menyebutkan kelompok gambar yang memiliki bunyi/huruf awal yang sama',
        56 => 'Memahami hubungan antara bunyi dan bentuk huruf',
        57 => 'Membaca nama sendiri',
        58 => 'Menuliskan nama sendiri',
        59 => 'Menunjukkan kemampuan keaksaraan dalam berbagai bentuk karya',
        60 => 'Memperlihatkan kemampuan mengendalikan diri dengan situasi',
        61 => 'Mengontrol keinginan sesuai dengan kebutuhan dan situasi',
        62 => 'Mengenal perasaan sendiri dan mengelolanya secara wajar',
        63 => 'Tahu akan hak dan kewajibannya',
        64 => 'Mematuhi aturan kelas (kegiatan, bermain)',
        65 => 'Mengatur diri sendiri',
        66 => 'Bertanggung jawab atas perilakunya untuk kebaikan diri sendiri',
        67 => 'Bermain dengan teman sebaya tanpa mendiskriminasi',
        68 => 'Mengetahui perasaan temannya dan merespon secara wajar',
        69 => 'Berbagi dengan orang lain',
        70 => 'Menghargai hak/pendapat/karya orang lain',
        71 => 'Menggunakan cara yang diterima secara sosial dalam menyelesaikan masalah',
        72 => 'Bersikap kooperatif dengan teman',
        73 => 'Menunjukkan sikap toleran',
        74 => 'Mengekspresikan emosi yang sesuai dengan kondisi yang ada',
        75 => 'Mengetahui tata krama dan sopan santun sesuai dengan nilai sosial budaya setempat',
        76 => 'Senang nyanyian dan ikut bersenandung dalam berbagai kegiatan',
        77 => 'Membuat nada suara dari berbagai benda yang ditemui',
        78 => 'Menyanyikan lagu sesuai dengan lantunan',
        79 => 'Menggunakan berbagai warna dan bentuk dalam menyajikan sebuah gambar yang kreatif',
        80 => 'Mengekspresikan imajinasinya melalui kegiatan mewarnai',
        81 => 'Menggambar berbagai macam bentuk yang beragam',
        82 => 'Melukis dengan berbagai cara dan objek',
        83 => 'Membuat karya seperti bentuk sesungguhnya dengan berbagai bahan (kertas, plastisin, balok, dll)',
    ];

    public $semester = 'Ganjil';

    public $kelas_id, $murid_id, $murid;

    public function setSemester($semester)
    {
        $this->semester = $semester;
    }

    public function setStep($step)
    {
        $this->step = $step;
    }
    public function exportPdf()
    {
        $data = [];
        $pendaftar = Pendaftar::with('dataPribadi', 'dataOrangTua', 'dokumen', 'dataSekolah')
            ->where('id_pendaftaran', $this->murid_id)
            ->where('kelas_id', $this->kelas_id)
            ->firstOrFail();
        foreach ($this->nilai as $key => $value) {
            $data['nilai' . $key] = $value;
        }

        // kirim juga aspekTexts
        $pdf = Pdf::loadView('pdf.rapor', [
            'data' => $data,
            'semester' => $this->semester,
            'aspekTexts' => $this->aspekTexts,
            'pendaftar' => $pendaftar
        ])
            ->setPaper('A4', 'portrait');

        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->stream();
        }, 'rapor-anak.pdf');
    }



    public function mount($id_kelas, $id_murid)
    {
        $this->kelas_id = $id_kelas;
        $this->murid_id = $id_murid;

        $this->murid = Pendaftar::with('dataPribadi', 'dataOrangTua', 'dokumen', 'dataSekolah')
            ->where('id_pendaftaran', $id_murid)
            ->where('kelas_id', $id_kelas)
            ->firstOrFail();
    }

    public function render()
    {
        return view('livewire.dashboard.detail-murid')->layout('components.layouts.app', [
            'title' => "Detail Murid",
            'section_title' => "Detail Murid",
        ]);
    }
}
