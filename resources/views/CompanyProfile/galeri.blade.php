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
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
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
            <span class="blue">Galeri </span><span class="orange">KB Al-Husna</span>
        </h2>

        <div class="announcement-box">
            <p>Temukan momen keceriaan, eksplorasi, dan pembelajaran anak-anak dalam berbagai aktivitas seru. Setiap
                foto mencerminkan kebersamaan dan kreativitas dalam lingkungan yang menyenangkan.</p>
        </div>
    </div>
    <section class="gallery-section">
        <livewire:company.showgaleri />
    </section>
    @include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
