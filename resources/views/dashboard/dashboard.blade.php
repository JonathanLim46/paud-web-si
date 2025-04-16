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
    <div class="container-fluid content-large">
        <div class="row">
            <aside class="col-2 pt-4 sidebar">
                <header class="ms-3">
                    <p class="header-text">PAUD KB AL-HUSNA</p>
                </header>
                <ul class="nav flex-column mt-3">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">
                        <i class="fa-solid fa-grip"></i>
                        <span class="ms-2">Dashboard</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <i class="fa-solid fa-table-cells-large"></i>
                        <span class="ms-2">PPDB</span>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" 
                        data-bs-toggle="dropdown" href="#" 
                        role="button" aria-expanded="false">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span class="ms-2">Data Sekolah</span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Content 1</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="">Content 2</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="">Content 3</a></li>
                      </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa-solid fa-bars"></i>
                            <span class="ms-2">Profil Sekolah</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa-solid fa-gear"></i>
                            <span class="ms-2">Pengaturan</span>
                        </a>
                    </li>
                </ul>
            </aside>
            <main class="col-10 content">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                      <form class="d-flex" role="search">
                        <input class="form-control me-2 rounded-pill search-bar" type="search" placeholder="Search" aria-label="Search">
                        <span class="search-icon">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                      </form>
                      <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown me-4">
                            <a class="nav-link dropdown-toggle d-flex align-items-center nav-profil" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="fa-solid fa-circle-user fs-3 me-3"></i>
                              <span class="me-5">Admin1</span>
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                            <li class="nav-item me-4">
                                <a class="nav-link" href="#">
                                    <i class="fa-solid fa-bell"></i>
                                </a>
                            </li>
                        </li>
                    </ul>
                    </div>
                </nav>
                <div class="container-fluid m-4">
                  <header class="fs-3 fw-bold">Dashboard</header>
                  <section class="mt-3 p-4 info-dashboard shadow-sm rounded-4">
                    <header class="fw-bold fs-5 header-info">Total Murid-Guru</header>
                    <p class="title-info">PAUD KB AL-HUSNA</p>
                    <div class="d-flex gap-4 flex-wrap mt-4">
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
                </div>
            </main>
        </div>
    </div>
</body>
</html>