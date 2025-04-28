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
    body {
        height: 100vh;
    }

    .judul {
        color: #0099cc;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .subtitle {
        color: #0099cc;
        font-weight: 600;
        margin-bottom: 1.5rem;
    }

    .penerimaan-img {
        width: 80%;
        height: 70%;
        object-fit: cover;
    }

    .form-nav {
        display: flex;
        justify-content: center;
        margin: 2rem 0;
        gap: 15px;
    }

    .form-container {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        padding: 2rem;
        margin-bottom: 3rem;
        border: 1px solid #e1e1e1;
    }

    .form-container h3,
    .form-container h4 {
        color: #0099cc;
        font-weight: 700;
        margin-bottom: 1.5rem;
    }

    .form-container .form-label {
        font-weight: 600;
        color: #333;
    }

    .form-container .form-control {
        border-radius: 10px;
        padding: 12px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
    }

    .form-container .form-control:focus {
        border-color: #0099cc;
        box-shadow: 0 0 5px rgba(0, 153, 204, 0.3);
    }

    .form-container .btn {
        border-radius: 25px;
        padding: 10px 25px;
    }

    .form-container .btn-primary {
        background-color: #0099cc;
        border-color: #0099cc;
    }

    .form-container .btn-primary:hover {
        background-color: #007bb5;
        border-color: #007bb5;
    }

    .form-container .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .form-container .btn-secondary:hover {
        background-color: #5a6268;
        border-color: #545b62;
    }

    .form-container .file-input {
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .form-container .file-input:focus {
        border-color: #0099cc;
        box-shadow: 0 0 5px rgba(0, 153, 204, 0.3);
    }

    /* File Upload Info Text */
    .form-container small {
        font-size: 0.8rem;
        color: #888;
    }

    /* Progress Bar */
    .progress-bar {
        background-color: #f6ae2d;
    }

    /* Header Styles */
    .form-container .text-center h1 {
        color: #0099cc;
        font-weight: 700;
    }

    .form-container .form-nav {
        display: flex;
        justify-content: center;
        margin: 2rem 0;
        gap: 15px;
    }

    .form-container .nav-link {
        padding: 10px 20px;
        border-radius: 25px;
        transition: all 0.3s ease;
        font-weight: 500;
        color: #555;
        border: 1px solid #dee2e6;
        min-width: 140px;
        text-align: center;
    }

    .form-container .nav-link.active {
        background-color: #f6ae2d;
        color: white;
        border-color: #f6ae2d;
        box-shadow: 0 2px 5px rgba(246, 174, 45, 0.3);
    }

    .form-container .nav-link:hover:not(.active) {
        background-color: #f8f9fa;
        color: #f6ae2d;
        border-color: #f6ae2d;
    }

    .button-container {
        display: inline;
        justify-content: space-between;
        margin-top: 2rem;
    }

    .button-next {
        background-color: #F26419;
        color: white
    }

    .button-next:hover {
        background-color: #c74400 !important;
        color: white !important;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .form-container {
            padding: 1rem;
        }

        .form-container .form-nav {
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .form-container .nav-link {
            width: 80%;
            max-width: 250px;
        }
    }

    .confirm-card {
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        border: none;
        margin-top: 40px;
    }

    .confirmation-text {
        color: #dc3545;
        font-weight: 500;
    }

    .form-check-input:checked {
        background-color: #198754;
        border-color: #198754;
    }

    .confirmation-box {
        background-color: #e8f5e9;
        border-radius: 5px;
        padding: 15px;
    }

    .ppdb-closed-container {
        background: linear-gradient(to right, #f8f9fa, #ffffff);
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        padding: 30px;
        margin-top: 80px;
        max-width: 700px;
        border-top: 4px solid #ff0101;
    }

    .ppdb-closed-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .ppdb-icon {
        background-color: #ebf5ff;
        height: 80px;
        width: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }

    .ppdb-icon i {
        font-size: 2.5rem;
        color: #3b82f6;
    }

    .ppdb-title {
        color: #1e3a8a;
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .ppdb-message {
        color: #4b5563;
        font-size: 1.1rem;
        line-height: 1.6;
        max-width: 500px;
        margin: 0 auto;
    }

    /* Animation for subtle attention */
    @keyframes pulse {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.05);
        }

        100% {
            transform: scale(1);
        }
    }

    .ppdb-icon {
        animation: pulse 2s infinite ease-in-out;
    }
</style>
@livewireStyles

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<body>
    @include('layouts.header')
    <div class="mb-5">
        
        <livewire:pendaftaran-form />
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalThankYou">
        <i class="bi bi-send-check me-1"></i> Lihat Konfirmasi Pendaftaran
    </button>
    <div class="modal fade" id="modalThankYou" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="modalThankYouLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow">
                <!-- Header dengan warna latar belakang yang lebih menarik -->
                <div class="modal-header bg-success text-white">
                    <h1 class="modal-title fs-5" id="modalThankYouLabel">Pendaftaran Berhasil</h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <!-- Body dengan animasi dan pesan yang lebih menarik -->
                <div class="modal-body text-center py-4">
                    <div class="mb-3">
                        <i class="bi bi-check-circle-fill text-success" style="font-size: 3rem;"></i>
                    </div>
                    <h4 class="mb-2">Selamat!</h4>
                    <p class="fs-5 mb-1">Terimakasih telah mendaftar ke PAUD KB-AL Husna</p>
                    <p class="text-muted">Data pendaftaran Anda telah kami terima dan akan segera diproses</p>
                </div>
                <!-- Footer dengan tombol yang lebih menarik -->
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-success px-4" data-bs-dismiss="modal" onclick="window.location.href='{{ route('company.home') }}'">
                        <i class="bi bi-house-door me-1"></i> Kembali ke Beranda
                    </button>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    @include('layouts.footer')

    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    @if (session('berhasilDaftar'))
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const myModal = new bootstrap.Modal(document.getElementById('modalThankYou'));
        myModal.show();
    });
    </script>
    @endif

    @livewireScripts
</body>

</html>
