<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard_styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard_profil_styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/02c07b0853.js" crossorigin="anonymous"></script>    
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <x-sidebar></x-sidebar>
            <main class="col-lg-10 content">
                <x-navbar-dashboard></x-navbar-dashboard>
                <div class="container-fluid p-4">
                  <header class="fs-3 fw-bold">Profil Sekolah</header>
                  @if (session('success'))
                  <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  <div class="row mt-5 pe-3">
                    <div class="col text-center shadow-sm rounded border border-secondary-subtle p-4 menu"
                        style="cursor: pointer;">
                        <i class="fa-solid fa-question fa-5x"></i>
                        <header class="fw-300 fs-2 mt-2">FAQ</header>
                        <p class="mt-2">Gunakan menu ini untuk melakukan perubahan dan pembaruan pada bagian FAQ situs PAUD KB AL-HUSNA.</p>
                    </div>
                    <div class="col text-center shadow-sm rounded border border-secondary-subtle me-2 ms-2 p-4 menu"
                        style="cursor: pointer;" onclick="window.location.href='{{ route('admin.profilsekolah.galeri') }}'">
                        <i class="fa-solid fa-image fa-5x"></i>
                        <header class="fw-300 fs-2 mt-2">Gallery</header>
                        <p class="mt-2">Gunakan menu ini untuk melakukan perubahan dan pembaruan koleksi gambar pada bagian Gallery situs PAUD KB AL-HUSNA.</p>
                    </div>
                    <div class="col text-center shadow-sm rounded border border-secondary-subtle p-4 menu"
                        style="cursor: pointer;">
                        <i class="fa-solid fa-inbox fa-5x"></i>
                        <header class="fw-300 fs-2 mt-2">FAQ</header>
                        <p class="mt-2">Gunakan menu ini untuk melakukan perubahan dan pembaruan koleksi gambar pada bagian FAQ situs PAUD KB AL-HUSNA.</p>
                    </div>
                  </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>