<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <title>Kontak</title>
</head>

<style>
    h2 {
        font-size: 2.5rem;
    }

    ul {
        padding-left: 0;
    }

    li {
        font-size: 1rem;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    .map-container {
        position: relative;
        width: 100%;
        padding-bottom: 56.25%;
        height: 0;
    }

    .map-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 80%;
        border: 0;
    }

    .blue {
        color: #29B5D8;

    }

    .orange {
        color: #f8a51c;
    }

    .container-hubungi {
        margin-top: 100px;
        margin-bottom: 50px;
    }

    @media (max-width: 768px) {
        .map-container {
            padding-bottom: 40% !important;
            min-height: 230px !important;
        }

        .map-container iframe {
            height: 100% !important;
            min-height: 230px !important;
            border-radius: 16px !important;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.09);
        }
    }

    @media (max-width: 576px) {
        .map-container {
            padding-bottom: 60% !important;
            min-height: 200px !important;
        }

        .map-container iframe {
            min-height: 200px !important;
            border-radius: 12px !important;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.12);
        }

        .container-hubungi {
            margin-top: 18px !important;
            /* Dari 100px jadi 18px */
            margin-bottom: 16px !important;
            padding-top: 14px !important;
            padding-bottom: 8px !important;
        }

        .fw-bold.mb-5 {
            margin-bottom: 14px !important;
        }
    }
</style>

<body>

    @include('layouts.header')

    <div class="container container-hubungi py-5">
        <div class="row">
            <div class="col-md-6">
                <h2 class="fw-bold mb-5">
                    <span class="blue">Hubungi</span> <span class=" orange">Kami</span>
                </h2>
                <ul class="list-unstyled mt-3">
                    <li class="d-flex align-items-center mb-3">
                        <i class="bi bi-geo-alt-fill text-primary me-2 fs-5"></i>
                        <span>Kp. Pasir Muncang RT 01 RW 03 Desa Sukamanah, Kecamatan Megamendung, Kabupaten
                            Bogor</span>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <i class="bi bi-whatsapp text-success me-2 fs-5"></i>
                        <span>62857 7782 6075</span>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <i class="bi bi-envelope-fill text-danger me-2 fs-5"></i>
                        <span>Paud.alhusna2209@gmail.com</span>
                    </li>
                </ul>

                <h5 class="fw-bold mt-4">Sosial Media</h5>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center">
                        <i class="bi bi-instagram text-danger me-2 fs-5"></i>
                        <span>paud_kbalhusna</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/page-kontak/gambar_kontak.png') }}" class="img-fluid rounded shadow-sm"
                    alt="Sekolah">
            </div>
        </div>
    </div>
    <div class="container mb-4">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card shadow-sm rounded-4 border-0 mb-2">
                    <div class="card-body d-flex align-items-center">
                        <i class="bi bi-geo-alt-fill fs-3 text-primary me-3"></i>
                        <div>
                            <h6 class="mb-1 fw-bold">Lokasi PAUD KB AL-HUSNA</h6>
                            <div class="small text-muted mb-2">
                                Kp. Pasir Muncang RT 01 RW 03 Desa Sukamanah, Megamendung, Bogor
                            </div>
                            <a href="https://maps.app.goo.gl/74GkKuGZgf14iif9A" target="_blank" rel="noopener"
                                class="btn btn-sm btn-primary rounded-3 px-3">
                                <i class="bi bi-map"></i> Lihat di Google Maps
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.7127483542963!2d106.89709169999999!3d-6.6824626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c99fd5777dab%3A0x6ce9b3ccde6926ae!2sGg.%20Haji%20Zein!5e0!3m2!1sid!2sid!4v1747982886599!5m2!1sid!2sid"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
