<aside class="col-2 pt-4 sidebar content-large">
    <header class="ms-3">
        <p class="header-text">PAUD KB AL-HUSNA</p>
    </header>
    <ul class="nav flex-column mt-3">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">
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
        @if (Auth::user()->level == "admin")
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.profilsekolah') }}">
              <i class="fa-solid fa-bars"></i>
              <span class="ms-2">Profil Sekolah</span>
          </a>
        </li> 
        @endif
    </ul>
</aside>