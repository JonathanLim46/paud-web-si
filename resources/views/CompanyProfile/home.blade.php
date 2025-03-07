<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
    <style>
        body {
            font-family: 'Brash One', sans-serif;
        }
        .hero-section {
            background-color: #42a5f5;
            color: white;
            padding: 80px 0;
            position: relative;
            text-align: left;
            overflow: hidden;
            height: 87vh;
        }
        .hero-text {
            max-width: 500px;
            margin-left: 50px;
        }
        .hero-title {
            font-weight: bold;
            font-size: 2rem;
        }
        .hero-subtitle {
            font-size: 1.2rem;
        }
        .hero-image {
            position: absolute;
            bottom: 0;
            right: 50px;
            max-width: 300px;
        }
        .decorative {
            position: absolute;
        }
        .cloud {
            width: 100px;
        }
        .rocket {
            width: 80px;
            top: 20px;
            right: 20px;
        }
        .tentang-section {
            padding: 50px 0;
        }
        
        .section-title {
            margin-bottom: 25px;
        }
        
        .section-title .blue {
            color: #00bcd4;
            font-size: 36px;
            font-weight: 700;
        }
        
        .section-title .orange {
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
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
    </style>


<body>
    @include('layouts.header')
    <section class="hero-section">
        <div class="container position-relative">
            <div class="hero-text">
                <h1 class="hero-title">Selamat Datang Di <br> <span class="text-warning">PAUD KB AL-HUSNA</span></h1>
                <p class="hero-subtitle">Membuat Anak Bahagia, dengan Permainan yang Bermakna</p>
            </div>
        </div>
    </section>
{{-- tentang --}}
    <div class="container tentang-section">
        <div class="row">
            <!-- text-->
            <div class="col-lg-6">
                <div class="section-title">
                    <span class="blue">Tentang</span> <span class="orange">KB Al-Husna</span>
                </div>
                
                <div class="content-text">
                    <p>PAUD AL HUSNA berdiri pada tahun 2006 dan resmi mendapatkan izin operasional pada tahun 2016. Dengan dukungan tenaga pendidik profesional dan berpengalaman, kami berkomitmen memberikan pendidikan yang berkarakter bagi setiap anak didik.</p>
                    
                    <p>Kami menghadirkan metode pembelajaran yang menyenangkan dan sesuai dengan tahapan perkembangan anak, sehingga mereka dapat tumbuh menjadi pribadi yang mandiri, kreatif, dan berkarakter.</p>
                    
                    <p>Sebagai bentuk dedikasi kami dalam dunia pendidikan, PAUD AL HUSNA telah meraih akreditasi B dari BAN PAUD Nasional. Kami terus berupaya meningkatkan kualitas pendidikan dan mengembangkan lembaga agar selalu menjadi tempat belajar terbaik bagi anak-anak.</p>
                </div>
                
                <a href="#" class="btn btn-lihat">Lihat Selengkapnya</a>
            </div>
            
            <!-- gambar-->
            <div class="col-lg-6">
                <div class="gallery-container">
                    <div class="row">
                        <div class="col-6">
                            <div class="img-wrapper">
                                <img src="{{ asset('images/tentang1.png') }}" alt="Gedung KB Al-Husna" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="img-wrapper">
                                <img src="{{ asset('images/tentang2.png') }}" alt="Aktivitas kelas KB Al-Husna" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="img-wrapper">
                                <img src="{{ asset('images/tentang3.png') }}" alt="Aktivitas bermain KB Al-Husna" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="img-wrapper">
                                <img src="{{ asset('images/tentang4.png') }}" alt="Aktivitas outdoor KB Al-Husna" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.join')

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>