<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Kontak</title>

</head>
<style>
    .content-section {
        padding: 4rem 0;
    }

    .text-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100%;
    }

    .ketua-yayasan {
        text-align: center;
        margin-top: 100px;
    }

    .ketua-yayasan img {
        width: 70%;
        height: auto;
        object-fit: cover;
        border-radius: 6px;
    }

    .visi-misi {
        background-color: #38B6CE;
        position: relative;
    }

    .visi-column {
        position: relative;
    }

    .visi-column:after {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        width: 1px;
        height: 100%;
        background-color: white;
    }

    .btn-warning {
        color: white;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-warning:hover {
        background-color: #E64A19 !important;
        transform: translateY(-2px);
        color: white;
    }

    .guru-section {
        padding: 4rem 0;
    }

    .section-title {
        text-align: center;
        margin-bottom: 3rem;
    }

    .section-title h2 {
        font-size: 2.5rem;
        font-weight: 600;
    }

    .section-title .highlight {
        color: #38B6CE;
    }

    .section-title .accent {
        color: #F9A825;
    }

    .guru-card {
        border-radius: 10px;
        overflow: hidden;
        margin-bottom: 1.5rem;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .guru-card:hover {
        transform: translateY(-5px);
    }

    .guru-image {
        height: 380px;
        width: 100%;
        object-fit: cover;
        background-color: #f5f5f5;
    }

    .guru-name {
        background-color: #5B7FBD;
        color: white;
        padding: 0.8rem;
        text-align: center;
        font-weight: 500;
        margin: 0;
    }

    .status-section {
        background-color: #f0f0f0;
        padding: 2rem 0;
        text-align: center;
    }

    .status-title {
        color: #38B6CE;
        font-weight: 600;
        margin-bottom: 1rem;
    }

    .status-description {
        max-width: 900px;
        margin: 0 auto;
        font-size: 15px;
        line-height: 1.5;
        margin-bottom: 1.5rem;
    }

    .facility-section {
        padding: 2rem 0;
        background-color: white;
    }

    .facility-title {
        color: #38B6CE;
        text-align: center;
        font-weight: 600;
        margin-bottom: 2rem;
    }

    .facility-card {
        border-radius: 15px;
        overflow: hidden;
        margin-bottom: 1.5rem;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .facility-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border: 4px solid #38B6CE;
        border-radius: 15px 15px 0 0;
    }

    .facility-name {
        background-color: #F9A825;
        color: white;
        padding: 0.8rem;
        text-align: center;
        font-weight: 500;
        margin: 0;
    }

    @media (max-width: 768px) {
        .text-content {
            margin-top: 2rem;
        }

        .visi-column:after {
            display: none;

        }

        .visi-column {
            margin-bottom: 2rem;
        }

        .col-md-6:first-child {
            margin-bottom: 2rem;
        }

        .border-end-md {
            border-right: 1px solid #dee2e6;
            padding-right: 15px;
        }
    }

    @media (max-width: 576px) {
        .guru-section .row {
            padding-left: 50px !important;
            padding-right: 50px !important;
        }
        .penjelasan{
            padding-left: 20px !important;
            padding-right: 20px !important;
        }
        .guru-card {
            margin-left: 0;
            margin-right: 0;
            border-radius: 12px;
        }
    }
</style>

<body>

    @include('layouts.header')

    <div class="container content-section">
        <div class="row">
            <!-- Left side: Image -->
            <div class="col-md-6 align-center ketua-yayasan">
                <img src="{{ asset('images/page-profile/Ketuayayasan.png') }}" alt="Featured image">
            </div>

            <!-- Right side: Text content -->
            <div class="col-md-6 penjelasan">
                <div class="text-content">
                    <h3 class="mb-4">Sejarah KB AL-HUSNA</h3>

                    <div class="bg-light p-4 rounded mb-4">
                        <p class="lead">KB AL-HUSNA didirikan pada tahun 2013 dibawah naungan Yayasan Al Husna dengan
                            menggunakan gedung yang sangat minimalis.</p>
                    </div>

                    <p class="mb-3">KB AL-HUSNA melayani anak usia 3 – 6 tahun disekitar Desa Sukamanah, Kec.
                        Megamendung, Bogor dengan menggunakan metode klasikal dan alat peraga seadanya.</p>

                    <p class="mb-3">Langkah berikutnya KB Al Husna mengajukan perizinan ke Dinas Kabupaten Bogor
                        sebagai bentuk legalitas lembaga. Guru dan pengelola KB AL-HUSNA terus berbenah dan
                        mengembangkan diri dengan mengikuti pelatihan dan belajar mandiri.</p>

                    <div class="timeline mt-4 mb-4">
                        <div class="timeline-item d-flex">
                            <div class="timeline-marker bg-primary text-white p-2 rounded-circle me-3">2013</div>
                            <div class="timeline-content">
                                <p class="m-0">Pendirian KB AL-HUSNA</p>
                            </div>
                        </div>
                        <div class="timeline-item d-flex mt-3">
                            <div class="timeline-marker bg-primary text-white p-2 rounded-circle me-3">2016</div>
                            <div class="timeline-content">
                                <p class="m-0">KB AL-HUSNA resmi mendapatkan izin operasional</p>
                            </div>
                        </div>
                        <div class="timeline-item d-flex mt-3">
                            <div class="timeline-marker bg-primary text-white p-2 rounded-circle me-3">2019</div>
                            <div class="timeline-content">
                                <p class="m-0">KB AL-HUSNA mendapatkan akreditasi B dari BAN PNF</p>
                            </div>
                        </div>
                    </div>
                    <div class="border-start border-primary border-4 ps-3 mb-3">
                        <p>Yayasan Pendidikan Islam AL Husna berupaya memberi warna bagi pengembangan dunia pendidikan
                            Islam bagi anak didik dan lulusannya yang membutuhkan perubahan, khususnya bagi anak yang
                            belum mendapatkan kesempatan belajar karena masalah ekonomi dan finansial.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- visi misi --}}
    <div class="container-fluid visi-misi py-5">
        <div class="container">
            <div class="row">
                <!-- Left column: Visi -->
                <div class="col-md-6 visi-column">
                    <h3 class="mb-4 text-white">VISI</h3>
                    <p class="text-white">
                        "Unggul dalam prestasi, kreatif, mandiri, dan menjunjung tinggi pendidikan karakter yang
                        dilandasi keimanan dan ketakwaan dengan proses belajar yang menyenangkan"
                    </p>
                </div>

                <!-- Right column: Misi -->
                <div class="col-md-6 misi-column">
                    <h3 class="mb-4 text-white">MISI</h3>
                    <ul class="text-white ps-3">
                        <li class="mb-2">Menciptakan anak kreatif melalui proses belajar yang menyenangkan</li>
                        <li class="mb-2">Mendidik dan menanamkan budi pekerti untuk menciptakan anak yang beriman dan
                            bertaqwa terhadap Allah SWT</li>
                        <li class="mb-2">Mengokohkan fondasi kepribadian anak agar anak memiliki rasa cinta tanah air,
                            budaya bangsa serta menumbuhkan penghayatan agama demi terbentuknya kepribadian berkarakter
                            sejak dini</li>
                        <li class="mb-2">Melaksanakan program pembelajaran dan bimbingan yang efektif sesuai tahap
                            perkembangan anak</li>
                        <li class="mb-2">Menciptakan sekolah yang kondusif serta peka terhadap lingkungan</li>
                        <li class="mb-2">Mengembangkan partisipasi warga sekolah sesuai dengan tugas dan fungsi</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- end visi-misi --}}

    {{-- struktr --}}
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left column: Text content -->
                <div class="col-md-6">
                    <h2 class="mb-3">
                        <span style="color: #38B6CE;">Struktur Kepengurusan</span><br>
                        <span style="color: #38B6CE;">Satuan Lembaga</span> <span style="color: #F9A825;">KB
                            Al-Husna</span>
                    </h2>

                    <p class="mt-4 mb-4">
                        "Unggul dalam prestasi, kreatif, mandiri, dan menjunjung tinggi pendidikan karakter yang
                        dilandasi keimanan dan ketakwaan dengan proses belajar yang menyenangkan"
                    </p>

                    <a href="#" class="btn btn-warning px-4 py-2 mt-3"
                        style="background-color: #ff6d00; border: none;">LIHAT SELENGKAPNYA</a>
                </div>

                <!-- Right column: Image -->
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/page-profile/profil_strukturKepengurusan.png') }}"
                        alt="Struktur Kepengurusan KB Al-Husna" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    {{-- end struktur --}}

    <div class="container guru-section">
        <div class="section-title">
            <h2><span class="highlight">Guru</span> <span class="accent">kami</span></h2>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="guru-card">
                    <img src="{{ asset('images/page-profile/guru_heraMiranti.png') }}" alt="Hera Miranti"
                        class="guru-image">
                    <h5 class="guru-name">Hera Miranti</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="guru-card">
                    <img src="{{ asset('images/page-profile/guru_niningMulyani.png') }}" alt="Nining Mulyani"
                        class="guru-image">
                    <h5 class="guru-name">Nining Mulyani</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="guru-card">
                    <img src="{{ asset('images/page-profile/guru_lulu.png') }}" alt="Lulu Zaima Awaly S.pd"
                        class="guru-image">
                    <h5 class="guru-name">Lulu Zaima Awaly S.pd</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="guru-card">
                    <img src="{{ asset('images/page-profile/guru_emi.png') }}" alt="Emi Liriyanti" class="guru-image">
                    <h5 class="guru-name">Emi Liriyanti</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="status-section">
        <div class="container">
            <h2 class="status-title">Status Satuan Lembaga</h2>
            <p class="status-description">
                KB AL-HUSNA merupakan satuan PAUD yang dikelola dengan manajement berbasis masyarakat dibawah naungan
                yayasan Al-husna. Telah memiliki ijin operasional dari dinas pendidikan Kabupaten Bogor Nomor
                421/624/Kpts/PAUDNI/Kec/2014 (Tgl. 22/09/2014) diperbaharui.
            </p>
            <p class="status-description">
                Untuk Program Pendidikan Anak Usia Dini dan telah lulus Akreditasi dari BAN PAUD dan PNF dengan Nomor
                sertifikat PAUD-KB/255030/0284/06/2021
            </p>
        </div>
    </div>

    <div class="facility-section">
        <div class="container">
            <h2 class="facility-title">FASILITAS KB AL-HUSNA</h2>

            <div class="row">
                <!-- Facility 1 -->
                <div class="col-md-6">
                    <div class="facility-card">
                        <img src="{{ asset('images/page-profile/placeholder.jpg') }}"
                            alt="Ruang Guru dan Administrasi" class="facility-image">
                        <h5 class="facility-name">RUANG GURU DAN ADMINISTRASI</h5>
                    </div>
                </div>

                <!-- Facility 2 -->
                <div class="col-md-6">
                    <div class="facility-card">
                        <img src="{{ asset('images/page-profile/placeholder.jpg') }}" alt="Ruang Kelas"
                            class="facility-image">
                        <h5 class="facility-name">RUANG KELAS</h5>
                    </div>
                </div>

                <!-- Facility 3 -->
                <div class="col-md-6">
                    <div class="facility-card">
                        <img src="{{ asset('images/page-profile/placeholder.jpg') }}" alt="Aula"
                            class="facility-image">
                        <h5 class="facility-name">AULA</h5>
                    </div>
                </div>

                <!-- Facility 4 -->
                <div class="col-md-6">
                    <div class="facility-card">
                        <img src="{{ asset('images/page-profile/placeholder.jpg') }}" alt="Halaman"
                            class="facility-image">
                        <h5 class="facility-name">HALAMAN</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
