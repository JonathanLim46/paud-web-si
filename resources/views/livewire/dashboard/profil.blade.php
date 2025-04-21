@section('styles')
<link rel="stylesheet" href="{{ asset('css/dashboard_profil_styles.css') }}">
@endsection

<div>
    <div class="row mt-5 pe-3">
        <div class="col text-center shadow-sm rounded border border-secondary-subtle p-4 menu"
            style="cursor: pointer;" onclick="window.location.href='{{ route('admin.profilsekolah.faq') }}'">
            <i class="fa-solid fa-question fa-5x"></i>
            <header class="fw-300 fs-2 mt-2">FAQ</header>
            <p class="mt-2">Gunakan menu ini untuk melakukan perubahan dan pembaruan pada bagian FAQ situs PAUD KB AL-HUSNA.</p>
        </div>
        <div class="col text-center shadow-sm rounded border border-secondary-subtle me-2 ms-2 p-4 menu"
            style="cursor: pointer;" onclick="window.location.href='{{ route('admin.profilsekolah.gallery') }}'">
            <i class="fa-solid fa-image fa-5x"></i>
            <header class="fw-300 fs-2 mt-2">Galeri</header>
            <p class="mt-2">Gunakan menu ini untuk melakukan perubahan dan pembaruan koleksi gambar pada bagian Galeri situs PAUD KB AL-HUSNA.</p>
        </div>
        <div class="col text-center shadow-sm rounded border border-secondary-subtle p-4 menu"
            style="cursor: pointer;" onclick="window.location.href='{{ route('admin.profilsekolah.aktivitas') }}'">
            <i class="fa-solid fa-inbox fa-5x"></i>
            <header class="fw-300 fs-2 mt-2">Aktivitas</header>
            <p class="mt-2">Gunakan menu ini untuk melakukan perubahan dan pembaruan koleksi gambar pada bagian Aktivitas situs PAUD KB AL-HUSNA.</p>
        </div>
    </div>
</div>
