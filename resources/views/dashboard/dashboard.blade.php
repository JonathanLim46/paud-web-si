<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard_styles.css') }}">
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
                  <header class="fs-3 fw-bold">Dashboard</header>
                  @if (session('success'))
                  <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>                  @endif
                  @if (Auth::user()->level == "admin")
                    <section class="mt-3 p-4 info-dashboard shadow-sm rounded-4">
                      <header class="fw-bold fs-5 header-info">Total Murid-Guru</header>
                      <p class="title-info">PAUD KB AL-HUSNA</p>
                      <div class="d-flex flex-row gap-4 flex-wrap mt-4">
                        <div class="card rounded-5 mt-4" style="background-color: #F26419">
                          <div class="card-body p-0">
                            <div class="row h-100">
                              <div class="col d-flex flex-column">
                                <header>{{ $murids }}</header>
                                <p class="mt-auto title-card">Murid</p>
                              </div>
                              <div class="col d-flex">
                                <header class="ms-auto">
                                  <i class="fa-solid fa-graduation-cap"></i>
                                </header>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card rounded-5 mt-4" style="background-color: #F6AE2D">
                          <div class="card-body p-0">
                            <div class="row h-100">
                              <div class="col d-flex flex-column">
                                <header>{{ $gurus }}</header>
                                <p class="mt-auto title-card">Guru</p>
                              </div>
                              <div class="col d-flex">
                                <header class="ms-auto">
                                  <i class="fa-solid fa-user"></i>
                                </header>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                  @endif
                  @if (Auth::user()->level == "guru")
                  <section class="mt-3 p-4 info-dashboard shadow-sm rounded-4">
                    <header class="fw-bold fs-5 header-info">Jadwal Mengajar</header>
                    <table class="mt-4 table table-bordered">
                      <thead>
                        <th scope="col" class="col">Hari</th>
                        <th scope="col" class="col">A Mandiri</th>
                        <th scope="col" class="col">A Kreatif</th>
                        <th scope="col" class="col">B Ceria</th>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">Senin</th>
                          <td>Bu Hera & Bu Nining</td>
                          <td>Bu Lulu</td>
                          <td>Bu Emy</td>
                        </tr>
                        <tr>
                          <th scope="row">Selasa</th>
                          <td>Bu Hera & Bu Nining</td>
                          <td>Bu Lulu</td>
                          <td>Bu Emy</td>
                        </tr>
                        <tr>
                          <th scope="row">Rabu</th>
                          <td>Bu Hera & Bu Nining</td>
                          <td>Bu Lulu</td>
                          <td>Bu Emy</td>
                        </tr>
                        <tr>
                          <th scope="row">Kamis</th>
                          <td>Bu Emy</td>
                          <td>Bu Hera & Bu Nining</td>
                          <td>Bu Lulu</td>
                        </tr>
                        <tr>
                          <th scope="row">Jumat</th>
                          <td>Bu Lulu</td>
                          <td>Bu Emy</td>
                          <td>Bu Hera & Bu Nining</td>
                        </tr>
                      </tbody>
                    </table>
                  </section>
                  <section class="mt-3 p-4 info-dashboard shadow-sm rounded-4">
                    <header class="fw-bold fs-5 header-info">Metode Pembelajaran Per-Bulan</header>
                    <table class="mt-4 table table-bordered table-metode w-50">
                      <thead>
                        <th scope="col" class="col">Minggu</th>
                        <th scope="col" class="col">Metode</th>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>STEAM</td>
                        </tr>
                          <th scope="row">2</th>
                          <td>Sentra (bahan alam, persiapan, imtak)</td>
                        </tr>
                          <th scope="row">3</th>
                          <td>STEAM</td>
                        </tr>
                          <th scope="row">4</th>
                          <td>Sentra (bahan alam, persiapan, imtak)</td>
                        </tr>
                      </tbody>
                    </table>
                  </section>
                  <section class="mt-3 p-4 info-dashboard shadow-sm rounded-4">
                    <header class="fw-bold fs-5 header-info">Jadwal Sastra</header>
                    <table class="mt-4 table table-bordered table-metode w-50">
                      <thead>
                        <th scope="col" class="col">Minggu</th>
                        <th scope="col" class="col">Metode</th>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>STEAM</td>
                        </tr>
                          <th scope="row">2</th>
                          <td>Sentra (bahan alam, persiapan, imtak)</td>
                        </tr>
                          <th scope="row">3</th>
                          <td>STEAM</td>
                        </tr>
                          <th scope="row">4</th>
                          <td>Sentra (bahan alam, persiapan, imtak)</td>
                        </tr>
                      </tbody>
                    </table>
                  </section>
                  @endif
                </div>
            </main>
        </div>
    </div>
</body>
</html>