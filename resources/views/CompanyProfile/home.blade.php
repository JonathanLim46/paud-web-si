<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PAUD KB AL-HUSNA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Base styles */
        body {
            font-family: 'Brash One', sans-serif;
        }

        p {
            font-size: 19px;
            color: #333;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        /* Hero section */
        .hero-section {
            position: relative;
            overflow: hidden;
        }

        .cloud {
            position: absolute;
            width: 400px;
            z-index: 1;
        }

        .cloud-left {
            top: -100px;
            left: -50px;
        }

        .cloud-right {
            top: 300px;
            right: -50px;
        }

        .cloud-right-top {
            top: -50px;
            right: 10%;
        }

        .rocket {
            position: absolute;
            top: -20px;
            right: 5%;
            width: 300px;
            z-index: 1;
            animation: float 5s ease-in-out infinite;
        }

        .star {
            position: absolute;
            width: 30px;
            z-index: 1;
        }

        .star-1 {
            top: 40%;
            left: 60%;
            width: 70px;
        }

        .star-2 {
            top: 22%;
            right: 18%;
            width: 60px;
        }

        .star-3 {
            top: 35%;
            right: 0;
            width: 60px;
        }

        .hill {
            position: absolute;
            bottom: 0;
            right: 0;
            left: auto;
            width: 70%;
            z-index: 0;
        }

        .plant {
            position: absolute;
            bottom: 0;
            left: 45%;
            width: 500px;
            z-index: 2;
        }

        .floating-kids {
            position: absolute;
            bottom: 0;
            right: 0;
            z-index: 3;
            max-height: 70vh;
        }

        /* Tentang section */
        .tentang-section {
            padding: 50px 0;
        }

        .section-title {
            margin-bottom: 25px;
            text-align: center;
        }

        .section-title .blue,
        .section-title .highlight {
            color: #00bcd4;
            font-size: 36px;
            font-weight: 700;
        }

        .section-title .orange,
        .section-title .accent {
            color: #f8a51c;
            font-size: 36px;
            font-weight: 700;
        }

        .content-text p {
            color: #333;
            line-height: 1.8;
            margin-bottom: 20px;
            font-size: 16px;
        }

        .btn-lihat {
            background-color: #ff6d00;
            border: none;
            color: white;
            padding: 12px 28px;
            font-weight: 600;
            border-radius: 6px;
            transition: background-color 0.3s;
            font-size: 16px;
            text-decoration: none;
            display: inline-block;
        }

        .btn-lihat:hover {
            background-color: #e55a16;
            color: white;
        }

        /* Gallery */
        .gallery-container img {
            border-radius: 12px;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .gallery-container .row {
            --bs-gutter-x: 20px;
        }

        .img-wrapper {
            overflow: hidden;
            margin-bottom: 20px;
            height: 250px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-size: cover;
        }

        /* Logos slider */
        .logos {
            overflow: hidden;
            white-space: nowrap;
        }

        .logos-slide {
            display: inline-block;
            animation: 15s slide infinite linear;
        }

        .logos-slide img {
            height: 300px;
            width: 400px;
            margin: 0 10px;
            border-radius: 10px;
        }

        @keyframes slide {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-100%);
            }
        }

        /* Activities section */
        .activities-header {
            width: 100%;
            text-align: center;
            margin: 30px 0;
            position: relative;
        }

        .activities-title {
            display: inline-block;
            padding: 5px 15px;
            position: relative;
        }

        .our-text {
            color: #0099cc;
            font-size: 28px;
            font-weight: bold;
            margin-right: 8px;
        }

        .activities-text {
            color: #ff9900;
            font-size: 28px;
            font-weight: bold;
        }

        .bee-icon {
            width: 30px;
            height: 30px;
            position: absolute;
            right: -20px;
            top: 10%;
            transform: translateY(-50%);
        }

        /* Program section */
        .program-section {
            background-color: #fffdf5;
            padding: 4rem 0;
        }

        .program-card {
            text-align: center;
            margin: 0 0.5rem;
            padding-top: 20px;
        }

        .program-img-container {
            width: 220px;
            height: 220px;
            margin: 0 auto 1.5rem;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .program-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .program-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: #444;
            margin-bottom: 1rem;
        }

        .program-description {
            font-size: 0.9rem;
            color: #666;
            line-height: 1.5;
        }

        /* Carousel controls */
        .carousel-control-prev,
        .carousel-control-next {
            width: 50px;
            height: 50px;
            background-color: #F9A825;
            border-radius: 50%;
            top: 40%;
            opacity: 1;
        }

        .carousel-control-prev {
            left: -15px;
        }

        .carousel-control-next {
            right: -15px;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 24px;
            height: 24px;
        }

        .caroude {
            padding-top: 250px !important;
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .program-img-container {
                width: 180px;
                height: 180px;
            }
        }
    </style>
</head>

<body>
    @include('layouts.header')

    <!-- Hero Section -->
    <section class="hero-section position-relative overflow-hidden text-white"
        style="background-color: #2bb7df; height: 90vh;">
        <!-- Background decorations -->
        <img src="{{ asset('images/page-home/awan-kiri.png') }}" class="cloud cloud-left" alt="">
        <img src="{{ asset('images/page-home/awan-kanan.png') }}" class="cloud cloud-right" alt="">
        <img src="{{ asset('images/page-home/awan-kanan.png') }}" class="cloud cloud-right-top" alt="">
        <img src="{{ asset('images/page-home/rokey.png') }}" class="rocket" alt="">
        <img src="{{ asset('images/page-home/bintang.png') }}" class="star star-1" alt="">
        <img src="{{ asset('images/page-home/bintang.png') }}" class="star star-2" alt="">
        <img src="{{ asset('images/page-home/bintang.png') }}" class="star star-3" alt="">
        <img src="{{ asset('images/page-home/tanaman.png') }}" class="plant" alt="">
        <img src="{{ asset('images/page-home/bukit.png') }}" class="hill" alt="">
        <img src="{{ asset('images/page-home/foto-anak.png') }}" alt="Kids Reading" class="img-fluid floating-kids">
        <!-- Main content -->
        <div class="container h-100 d-flex align-items-center">
            <div class="row w-100">
                <div class="col-md-6 d-flex flex-column justify-content-center">
                    <h1 class="fw-bold display-5">Selamat Datang Di<br>PAUD KB AL-HUSNA</h1>
                    <p class="fs-5 text-white mt-3">Membuat Anak Bahagia, dengan Permainan yang Bermakna</p>
                </div>
            </div>
        </div>
    </section>



    <!-- Tentang Section -->
    <div class="container tentang-section">
        <div class="row">
            <!-- Text -->
            <div class="col-lg-6">
                <div class="section-title">
                    <span class="blue">Tentang</span> <span class="orange">KB Al-Husna</span>
                </div>

                <div class="content-text">
                    <p>PAUD AL HUSNA berdiri pada tahun 2006 dan resmi mendapatkan izin operasional pada tahun 2016.
                        Dengan dukungan tenaga pendidik profesional dan berpengalaman, kami berkomitmen memberikan
                        pendidikan yang berkarakter bagi setiap anak didik.</p>

                    <p>Kami menghadirkan metode pembelajaran yang menyenangkan dan sesuai dengan tahapan perkembangan
                        anak, sehingga mereka dapat tumbuh menjadi pribadi yang mandiri, kreatif, dan berkarakter.</p>

                    <p>Sebagai bentuk dedikasi kami dalam dunia pendidikan, PAUD AL HUSNA telah meraih akreditasi B dari
                        BAN PAUD Nasional. Kami terus berupaya meningkatkan kualitas pendidikan dan mengembangkan
                        lembaga agar selalu menjadi tempat belajar terbaik bagi anak-anak.</p>
                </div>

                <a href="#" class="btn btn-lihat">Lihat Selengkapnya</a>
            </div>

            <!-- Gallery -->
            <div class="col-lg-6">
                <div class="gallery-container">
                    <div class="row">
                        <div class="col-6">
                            <div class="img-wrapper">
                                <img src="{{ asset('images/page-home/tentang1.png') }}" alt="Gedung KB Al-Husna"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="img-wrapper">
                                <img src="{{ asset('images/page-home/tentang2.png') }}"
                                    alt="Aktivitas kelas KB Al-Husna" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="img-wrapper">
                                <img src="{{ asset('images/page-home/tentang3.png') }}"
                                    alt="Aktivitas bermain KB Al-Husna" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="img-wrapper">
                                <img src="{{ asset('images/page-home/tentang4.png') }}"
                                    alt="Aktivitas outdoor KB Al-Husna" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Program Unggulan Section -->
    <div class="program-section">
        <div class="container">
            <div class="section-title">
                <h2><span class="highlight">Program</span> <span class="accent">Unggulan</span></h2>
            </div>

            <div id="programCarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- First slide -->
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-md-4 mb-4 mb-md-0">
                                <div class="program-card">
                                    <div class="program-img-container">
                                        <img src="{{ asset('images/page-home/kelas_sentra.png') }}" class="program-img"
                                            alt="Kelas Sentra">
                                    </div>
                                    <h3 class="program-title">Kelas Sentra</h3>
                                    <p class="program-description">
                                        Model pembelajaran sentra memberikan kesempatan bagi anak untuk belajar melalui
                                        pengalaman langsung di berbagai area tematik.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 mb-md-0">
                                <div class="program-card">
                                    <div class="program-img-container">
                                        <img src="{{ asset('images/page-home/kelas_kamis_nyunda.png') }}"
                                            class="program-img" alt="Kamis Nyunda">
                                    </div>
                                    <h3 class="program-title">Kamis Nyunda</h3>
                                    <p class="program-description">
                                        Kegiatan ini tujuannya adalah mengenalkan budaya Sunda melalui bahasa, pakaian
                                        adat, seni, dan permainan tradisional untuk menanamkan kecintaan terhadap
                                        warisan budaya sejak dini.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="program-card">
                                    <div class="program-img-container">
                                        <img src="{{ asset('images/page-home/kelas_adventure.png') }}"
                                            class="program-img" alt="Adventure Class">
                                    </div>
                                    <h3 class="program-title">Adventure Class</h3>
                                    <p class="program-description">
                                        Kegiatan ini mengajak anak-anak belajar sambil bermain melalui eksplorasi alam,
                                        tantangan motorik, dan permainan edukatif untuk mengembangkan kemandirian serta
                                        kreativitas mereka.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Second slide -->
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-md-4 mb-4 mb-md-0">
                                <div class="program-card">
                                    <div class="program-img-container">
                                        <img src="{{ asset('images/page-home/kelas_sentra.png') }}"
                                            class="program-img" alt="Kelas Sentra">
                                    </div>
                                    <h3 class="program-title">Kelas Sentra</h3>
                                    <p class="program-description">
                                        Model pembelajaran sentra memberikan kesempatan bagi anak untuk belajar melalui
                                        pengalaman langsung di berbagai area tematik.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 mb-md-0">
                                <div class="program-card">
                                    <div class="program-img-container">
                                        <img src="{{ asset('images/page-home/kelas_kamis_nyunda.png') }}"
                                            class="program-img" alt="Kamis Nyunda">
                                    </div>
                                    <h3 class="program-title">Kamis Nyunda</h3>
                                    <p class="program-description">
                                        Kegiatan ini tujuannya adalah mengenalkan budaya Sunda melalui bahasa, pakaian
                                        adat, seni, dan permainan tradisional untuk menanamkan kecintaan terhadap
                                        warisan budaya sejak dini.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="program-card">
                                    <div class="program-img-container">
                                        <img src="{{ asset('images/page-home/kelas_adventure.png') }}"
                                            class="program-img" alt="Adventure Class">
                                    </div>
                                    <h3 class="program-title">Adventure Class</h3>
                                    <p class="program-description">
                                        Kegiatan ini mengajak anak-anak belajar sambil bermain melalui eksplorasi alam,
                                        tantangan motorik, dan permainan edukatif untuk mengembangkan kemandirian serta
                                        kreativitas mereka.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carousel controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#programCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#programCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Activities Section -->
    <div class="activities-header mt-4">
        <div class="activities-title">
            <span class="our-text">OUR</span>
            <span class="activities-text">ACTIVITIES</span>
            <div class="bee-icon"><img src="{{ asset('images/page-home/lebah_aktifitas.png') }}" width="60px"
                    height="60px" alt="Bee Icon"></div>
        </div>
    </div>

    <livewire:company.showactivity />

    <!-- Fasilitas Section -->
    <div class="container tentang-section">
        <div class="row align-items-center">
            <!-- Gallery -->
            <div class="col-lg-6">
                <div class="gallery-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="img-wrapper">
                                <img src="{{ asset('images/page-home/gambar_fasilitas1.png') }}"
                                    alt="Gedung KB Al-Husna" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="img-wrapper">
                                <img src="{{ asset('images/page-home/gambar_fasilitas2.png') }}"
                                    alt="Aktivitas bermain KB Al-Husna" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="img-wrapper">
                                <img src="{{ asset('images/page-home/gambar_fasilitas2.png') }}"
                                    alt="Aktivitas outdoor KB Al-Husna" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Text -->
            <div class="col-lg-6">
                <div class="d-flex flex-column justify-content-center h-100">
                    <div class="section-title">
                        <span class="blue">FASILITAS</span> <span class="orange">KB Al-Husna</span>
                    </div>

                    <div class="content-text">
                        <p>Dengan fasilitas yang lengkap dan mendukung proses belajar, PAUD KB AL-HUSNA menciptakan
                            lingkungan yang aman, nyaman, dan menyenangkan bagi anak-anak untuk tumbuh dan berkembang.
                        </p>
                    </div>
                </div>
                <a href="#" class="btn btn-lihat">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>

    @include('layouts.join')
    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
