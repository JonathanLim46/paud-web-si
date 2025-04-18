<style>
    /* Navbar Styling */
    .navbar {
        padding: 30px 0;
        transition: all 0.3s ease;
    }
    
    .navbar.scrolled {
        padding: 8px 0;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }
    
    .navbar-brand img {
        height: 50px; 
        transition: height 0.3s ease;
    }
    
    .navbar.scrolled .navbar-brand img {
        height: 40px;
    }
    
    /* Navigation Links */
    .nav-link {
        color: #333 !important;
        font-weight: 500;
        position: relative;
        padding: 10px 0;
        margin: 0 8px;
        transition: color 0.3s ease;
    }
    
    /* Underline Animation for Links */
    .nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background-color: #f26522;
        transition: width 0.3s ease;
    }
    
    .nav-link:hover::after,
    .nav-link.active::after {
        width: 100%;
    }
    
    .nav-link:hover, 
    .nav-link.active {
        color: #f26522 !important;
    }
    
    /* Dropdown Menu */
    .dropdown-menu {
        border-radius: 8px;
        margin-top: 10px;
        padding: 0.5rem 0;
    }
    
    /* Add arrow to dropdown */
    .dropdown-menu::before {
        content: '';
        position: absolute;
        top: -8px;
        left: 20px;
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        border-bottom: 8px solid white;
    }
    
    .dropdown-item {
        padding: 10px 16px;
        transition: all 0.3s ease-in-out;
        border-left: 3px solid transparent;
    }
    
    .dropdown-item:hover {
        color: #F26419 !important;
        background-color: rgba(242, 100, 25, 0.05);
        padding-left: 20px;
        border-left: 3px solid #f26522;
    }
    
    /* Registration Button */
    .btn-daftar {
        background-color: #f26522;
        color: white;
        font-weight: bold;
        padding: 10px 20px;
        border-radius: 8px;
        border: 2px solid #f26522;
        transition: all 0.3s ease;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        font-size: 14px;
    }
    
    .btn-daftar:hover {
        background-color: #d3541f;
        border-color: #d3541f;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(242, 101, 34, 0.3);
    }
    
    /* Responsive Adjustments */
    @media (max-width: 991.98px) {
        .navbar-nav {
            text-align: center;
            padding: 20px 0;
        }
        
        .nav-link {
            padding: 10px;
            margin: 5px 0;
        }
        
        .nav-link::after {
            bottom: 5px;
        }
        
        .dropdown-menu {
            text-align: center;
            border: none;
            box-shadow: none;
            background-color: rgba(242, 101, 34, 0.05);
            border-radius: 5px;
        }
        
        .dropdown-menu::before {
            display: none;
        }
    }
</style>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('images/page-layout/logo_dengan_text.png') }}" alt="Logo Sekolah" height="50">
        </a>

        <!-- Toggle Button (Mobile) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse flex-grow-1 justify-content-center" id="navbarNav">
            <ul class="navbar-nav gap-4">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="tentangKamiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tentang Kami
                    </a>
                    <ul class="dropdown-menu shadow border-0" aria-labelledby="tentangKamiDropdown">
                        <li><a class="dropdown-item py-2" href="/profil">Profil Sekolah</a></li>
                        <li><a class="dropdown-item py-2" href="/kurikulum">Kurikulum</a></li>
                        <li><a class="dropdown-item py-2" href="/galeri">Galeri</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pendaftaran">Pendaftaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kontak">Kontak</a>
                </li>
            </ul>
        </div>

        <!-- Tombol Daftar -->
        <a href="/daftar" class="btn btn-daftar d-none d-lg-block">DAFTAR MURID</a>
        <a href="/daftar" class="btn btn-daftar w-100 mt-3 d-lg-none">DAFTAR MURID</a>
    </div>
</nav>


<script>
    // Add shrink effect on scroll
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
    
    // Highlight current page in navigation
    document.addEventListener('DOMContentLoaded', function() {
        const currentLocation = location.pathname;
        const menuItems = document.querySelectorAll('.navbar-nav .nav-link');
        const menuLength = menuItems.length;
        
        for (let i = 0; i < menuLength; i++) {
            if (menuItems[i].getAttribute('href') === currentLocation) {
                menuItems[i].classList.add('active');
            }
        }
        
        // Add accessibility for dropdown menu
        const dropdownToggle = document.querySelector('.dropdown-toggle');
        const dropdownMenu = document.querySelector('.dropdown-menu');
        
        dropdownToggle.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                dropdownMenu.classList.toggle('show');
                dropdownToggle.setAttribute('aria-expanded', 
                    dropdownToggle.getAttribute('aria-expanded') === 'true' ? 'false' : 'true');
            }
        });
    });
</script>