<style>
    .sidebar {
        min-height: 100vh;
        border-right: 1px solid rgba(0, 0, 0, 0.05);
        overflow-y: auto;
    }

    .divider-custom {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 8px 0;
    }

    .divider-custom-line {
        height: 2px;
        width: 30px;
        background-color: #0d6efd;
        opacity: 0.3;
    }

    .divider-custom-icon {
        color: #0d6efd;
        margin: 0 8px;
        font-size: 12px;
    }

    /* Sidebar Main Link */
    .sidebar-link {
        color: #495057;
        transition: 0.2s;
        display: flex;
        align-items: center;
    }

    .sidebar-link:hover {
        background-color: rgba(13, 110, 253, 0.05);
        color: #0d6efd;
    }

    .sidebar-link.active {
        background-color: #0d6efd;
        color: #fff;
    }

    .sidebar-link.active i {
        color: #fff;
    }

    /* Sidebar Sub Link */
    .sidebar-sublink {
        color: #6c757d;
        font-size: 14px;
        transition: 0.2s;
    }

    .sidebar-sublink:hover {
        color: #0d6efd;
    }

    .sidebar-sublink.active {
        color: #0d6efd;
        font-weight: 500;
    }

    /* Admin Info */
    .admin-info {
        background-color: #f8f9fa;
        border: 1px solid rgba(0, 0, 0, 0.05);
        transition: 0.2s;
    }

    .admin-info:hover {
        background-color: #e9ecef;
    }

    /* Responsive */
    @media (max-width: 992px) {
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 250px;
            transform: translateX(-100%);
            transition: 0.3s;
        }

        .sidebar.show {
            transform: translateX(0);
        }
    }
</style>

<aside class="col-2 pt-4 sidebar bg-white shadow-sm">
    <header class="text-center mb-4">
        <div class="px-3">
            <h5 class="fw-bold text-primary mb-0">PAUD KB AL-HUSNA</h5>
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fa-solid fa-school fa-sm"></i></div>
                <div class="divider-custom-line"></div>
            </div>
        </div>
    </header>

    <ul class="nav flex-column nav-pills nav-flush">

        <!-- Dashboard -->
        <li class="nav-item mb-2">
            <a class="nav-link sidebar-link d-flex align-items-center rounded-pill ps-3 py-3 {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                href="{{ route('dashboard') }}">
                <i class="fa-solid fa-grip"></i>
                <span class="ms-3 fw-medium">Dashboard</span>
            </a>
        </li>

        @if (Auth::user()->level == 'admin')
        <!-- PPDB -->
        <li class="nav-item mb-2">
            <a class="nav-link sidebar-link d-flex align-items-center rounded-pill ps-3 py-3 {{ request()->routeIs('admin.PPDB') ? 'active' : '' }}"
                href="{{ route('admin.PPDB') }}">
                <i class="fa-solid fa-table-cells-large"></i>
                <span class="ms-3 fw-medium">PPDB</span>
            </a>
        </li>
        @endif

        <!-- Data Sekolah Expand -->
        <li class="nav-item mb-2">
            <a class="nav-link sidebar-link d-flex align-items-center rounded-pill ps-3 py-3 toggle-submenu"
                href="javascript:void(0);">
                <i class="fa-solid fa-graduation-cap"></i>
                <span class="ms-3 fw-medium">Data Sekolah</span>
                <i class="fa-solid fa-chevron-down ms-auto"></i>
            </a>
            <ul class="submenu ps-4 mt-2" style="display: none;">
                @if (Auth::user()->level == 'admin')
                <li>
                    <a class="nav-link sidebar-sublink d-flex align-items-center {{ request()->routeIs('admin.guru') ? 'active' : '' }}"
                        href="{{ route('admin.guru') }}">
                        <i class="fa-solid fa-user-tie fa-sm me-2"></i>Guru
                    </a>
                </li>
                <li class="mt-2">
                    <a class="nav-link sidebar-sublink d-flex align-items-center {{ request()->routeIs('admin.kelas') ? 'active' : '' }}"
                        href="{{ route('admin.kelas') }}">
                        <i class="fa-solid fa-door-open fa-sm me-2"></i>Kelas
                    </a>
                </li>
                @endif
                @if (Auth::user()->level == 'guru')
                <li class="mt-2">
                    <a class="nav-link sidebar-sublink d-flex align-items-center {{ request()->routeIs('admin.kelas') ? 'active' : '' }}"
                        href="{{ route('admin.kelas') }}">
                        <i class="fa-solid fa-door-open fa-sm me-2"></i>Kelas
                    </a>
                </li> 
                @endif
            </ul>
        </li>

        <!-- Profil Sekolah -->
        @if (Auth::user()->level == 'admin')
            <li class="nav-item mb-2">
                <a class="nav-link sidebar-link d-flex align-items-center rounded-pill ps-3 py-3 {{ request()->routeIs('admin.profilsekolah') ? 'active' : '' }}"
                    href="{{ route('admin.profilsekolah') }}">
                    <i class="fa-solid fa-bars"></i>
                    <span class="ms-3 fw-medium">Profil Sekolah</span>
                </a>
            </li>
        @endif

    </ul>

    <div class="mt-5 text-center px-3">
        <div class="admin-info rounded-3 p-3">
            <div class="small text-muted">Admin Panel</div>
            <div class="text-primary fw-medium">{{ Auth::user()->name ?? 'Admin' }}</div>
        </div>
    </div>
</aside>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggles = document.querySelectorAll('.toggle-submenu');

        toggles.forEach(function(toggle) {
            toggle.addEventListener('click', function() {
                const submenu = toggle.nextElementSibling;
                if (submenu.style.display === 'none' || submenu.style.display === '') {
                    submenu.style.display = 'block';
                } else {
                    submenu.style.display = 'none';
                }
            });
        });
    });
</script>
