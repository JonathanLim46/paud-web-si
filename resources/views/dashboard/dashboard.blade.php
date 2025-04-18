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
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                      <form class="d-flex" role="search">
                        <div class="search-container d-flex">
                          <input class="form-control me-2 rounded-pill search-bar" type="search" placeholder="Search" aria-label="Search">
                          <span class="search-icon">
                              <i class="fa-solid fa-magnifying-glass"></i>
                          </span>
                        </div>
                      </form>
                      <ul class="navbar-nav ms-auto d-flex flex-row">
                        <li class="nav-item dropdown me-4">
                            <a class="nav-link dropdown-toggle d-flex align-items-center nav-profil" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              @if (Auth::user()->image != null)
                              <img src="{{ asset(Auth::user()->image) }}" alt="" class="img-profile me-3">
                              @else
                              <i class="fa-solid fa-circle-user fs-3 me-3"></i>
                              @endif
                              <span class="me-5">{{Auth::user()->name}}</span>
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="{{ route('ubah_akun', Auth::user()->id) }}">Ubah Akun</a></li>
                              <li>
                                <form action="{{ route('logout') }}" method="POST" class="dropdown-item" id="logout">
                                  @csrf
                                  <a href="#" onclick="document.getElementById('logout').submit(); return false" style="text-decoration: none; color: black;">Keluar</a>
                                </form>
                              </li>
                            </ul>
                        </li>
                        <li class="nav-item me-4">
                          <a class="nav-link" href="#">
                              <i class="fa-solid fa-bell"></i>
                          </a>
                        </li>
                    </ul>
                    </div>
                </nav>
                <div class="container-fluid p-4">
                  <header class="fs-3 fw-bold">Dashboard</header>
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
                  GURU
                  @endif
                </div>
            </main>
        </div>
    </div>
</body>
</html>