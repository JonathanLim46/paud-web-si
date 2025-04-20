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
                          <img src="{{ asset('storage/user/'.Auth::user()->id.'/'.Auth::user()->image) }}" alt="" class="img-profile me-3">
                          @else
                          <i class="fa-solid fa-circle-user fs-3 me-3"></i>
                          @endif
                          <span class="me-5">{{Auth::user()->name}}</span>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{ route('akun.edit', Auth::user()->id) }}">Ubah Akun</a></li>
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
                  <section class="mt-3 p-4 shadow-sm rounded-4" style="background-color: white;">
                    <header class="fw-bold fs-5 header-info">Edit Profile</header>
                    <form action="{{ route('akun.update', $user->id) }}" method="POST" class="form-edit-profile mt-4 w-50" id="form-edit" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <div class="mb-4 mt-4">
                        @if (old('image', $user->image) != null)
                        <img src="{{ asset('storage/user/'.$user->id.'/'.$user->image) }}" alt="" id="img-edit">
                        @else
                        <img src="{{ asset('images/dashboard/defaultImage.jpg')}}" alt="" id="img-edit">
                        @endif
                        <input type="file" class="form-control mt-4" id="image-input" name="image">
                      </div>
                      <div class="mb-4">
                        <label for="nameInputLabel" class="form-label">Nama</label>
                        <input type="name" class="form-control" id="name" name="name" placeholder="Masukkan nama anda" value="{{ old('name', $user->name) }}" required>
                      </div>
                      <div class="mb-4">
                        <label for="username" class="form-label">Nama Pengguna</label>
                        <input type="username" class="form-control" id="username" name="username" placeholder="Masukkan username anda" value="{{ old('username', $user->username) }}" required>
                      </div>
                      <div class="mb-4">
                        <label for="emailInputLabel" class="form-label">Alamat Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email anda" value="{{ old('email', $user->email) }}" required>
                      </div>
                    </form>
                    <button type="button" class="btn btn-outline-dark me-2 ps-3 pe-3" onclick="window.location='{{ url()->previous() }}'">
                      Batal
                    </button>
                    <button type="button" class="btn btn-primary ps-3 pe-3" onclick="document.getElementById('form-edit').submit();">
                      Simpan Perubahan
                    </button>
                  </section>
                </div>
            </main>
        </div>
    </div>

    <script>
        document.getElementById("image-input").addEventListener("change", function(event) {
          const file = event.target.files[0];

          if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
              const preview = document.getElementById("img-edit");
              preview.src = e.target.result;
            }
            reader.readAsDataURL(file);
          }
        });
    </script>
</body>
</html>