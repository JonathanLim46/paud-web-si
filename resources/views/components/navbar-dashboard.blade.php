<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
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