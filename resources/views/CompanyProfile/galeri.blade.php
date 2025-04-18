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
    .penerimaan {
        max-width: 800px;
        margin: 100px auto;
        padding: 20px;
        text-align: center
    }
    .blue {
        color: #0099cc;
    }
    
    .orange {
        color: #ff9900;
    }
    .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 20px;
            border: none;
            border-radius: 8px;
            overflow: hidden;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .card-img {
            height: 250px;
            object-fit: cover;
            width: 100%;
        }
        
        .gallery-section {
            padding: 60px 0;
            background-color: #f8f9fa;
        }
        
        .section-title {
            margin-bottom: 40px;
            text-align: center;
        }
</style>
<body>

    @include('layouts.header')

    <div class="container penerimaan mt-5">
        <h2 class="judul">
            <span class="blue">Galeri</span><span class="orange">KB Al-Husna</span>
        </h2>
        
        <div class="announcement-box">
            <p>Temukan momen keceriaan, eksplorasi, dan pembelajaran anak-anak dalam berbagai aktivitas seru. Setiap foto mencerminkan kebersamaan dan kreativitas dalam lingkungan yang menyenangkan.</p>
        </div>
    </div>
    <section class="gallery-section">
        <div class="container">
            <div class="row">
                <!-- Image 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images/page-galeri/background_bergabung.png') }}" class="card-img" alt="Gallery Image 1">
                    </div>
                </div>
                
                <!-- Image 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images/page-galeri/background_bergabung.png') }}" class="card-img" alt="Gallery Image 2">
                    </div>
                </div>
                
                <!-- Image 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images/page-galeri/background_bergabung.png') }}" class="card-img" alt="Gallery Image 3">
                    </div>
                </div>
            </div>
            
            <!-- Second row of images -->
            <div class="row mt-4">
                <!-- Image 4 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images/page-galeri/background_bergabung.png') }}" class="card-img" alt="Gallery Image 4">
                    </div>
                </div>
                
                <!-- Image 5 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images/page-galeri/background_bergabung.png') }}" class="card-img" alt="Gallery Image 5">
                    </div>
                </div>
                
                <!-- Image 6 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images/page-galeri/background_bergabung.png') }}" class="card-img" alt="Gallery Image 6">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container my-5">
        <iframe width="100%" height="630" src="https://www.youtube.com/embed/-cNjpeVgHUA?si=umtlJKlbtg_x-KeR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    @include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>