@section('styles')
    <style>
        .form-nav {
            display: flex;
            margin: 2rem 0;
            gap: 15px;
        }

        .form-nav a {
            padding: 10px 20px;
            font-weight: 500;
            color: #555;
            border: 1px solid #dee2e6;
            border-radius: 25px;
            transition: all 0.3s ease;
            text-align: center;
            min-width: 140px;
        }

        .form-nav a.active {
            background-color: #f6ae2d;
            color: white;
            border-color: #f6ae2d;
            box-shadow: 0 2px 5px rgba(246, 174, 45, 0.3);
        }

        .form-nav a:hover:not(.active) {
            background-color: #f8f9fa;
            color: #f6ae2d;
            border-color: #f6ae2d;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
@endsection

<div>
    @if (Auth::user()->level == 'admin')
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
                                <header>{{ $gurus->count() }}</header>
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

    <section class="mt-3 p-4 info-dashboard shadow-sm rounded-4">
        <header class="fw-bold fs-5 header-info">Jadwal Mengajar</header>
        @if (Auth::user()->level == 'admin')
            <button type="button" class="btn btn-outline-success mt-2" data-bs-toggle="modal"
                data-bs-target="#modalAddKelas" wire:click="openTambah">
                <i class="fa-solid fa-plus"></i>
                Tambah Jadwal
            </button>
            <button type="button" class="btn btn-outline-danger mt-2" data-bs-toggle="modal"
                data-bs-target="#modalDeleteJadwal">
                <i class="fa-solid fa-plus"></i>
                Delete Jadwal
            </button>
        @endif
        <table class="mt-4 table table-bordered text-center align-middle">
            <thead>
                <th scope="col" class="col">Hari</th>
                @foreach ($kelass as $kelas)
                    <th scope="col" class="col">{{ $kelas->nama_kelas }} - {{ $kelas->tingkat_kelas }}</th>
                @endforeach
            </thead>
            <tbody>
                @foreach ($jadwals->groupBy('hari_id')->sortKeys() as $hari_id => $jadwalGroup)
                    <tr>
                        {{-- Baris Hari --}}
                        <td>{{ $jadwalGroup->first()->hari->nama_hari }}</td>

                        {{-- Kolom Kelas --}}
                        @foreach ($kelass as $kelas)
                            <td>
                                @php
                                    // Ambil semua jadwal yang sesuai hari + kelas
                                    $guruList = $jadwalGroup->where('kelas_id', $kelas->id_kelas);
                                @endphp

                                @if ($guruList->isNotEmpty())
                                    @foreach ($guruList as $jadwal)
                                        <p style="display:inline;">
                                            {{ !$loop->first ? '& ' : '' }}{{ $jadwal->guru->user->name }}
                                        </p>
                                    @endforeach
                                @else
                                    {{-- Kalau tidak ada jadwal di hari+kelas ini --}}
                                    <p style="display:inline;">-</p>
                                @endif
                            </td>
                        @endforeach
                    </tr>
                @endforeach
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
        {{-- Step Navigation --}}
        <div class="mb-4">
            <nav class="form-nav" id="minggu">
                <a href="#minggu" wire:click.prevent="setStep('Minggu2')"
                    class="nav-link {{ $step === 'Minggu2' ? 'active' : '' }}">Minggu 2</a>
                <a href="#minggu" wire:click.prevent="setStep('Minggu4')"
                    class="nav-link {{ $step === 'Minggu4' ? 'active' : '' }}">Minggu 4</a>
            </nav>
        </div>

        @if ($step === 'Minggu2')
            <table class="mt-4 table table-bordered table-metode w-50">
                <thead>
                    <tr>
                        <th scope="col" class="col">Hari</th>
                        <th scope="col" class="col">A Mandiri</th>
                        <th scope="col" class="col">A Kreatif</th>
                        <th scope="col" class="col">B Ceria</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Rabu</th>
                        <td style="background-color: #fef2b7">Bahan Alam</td>
                        <td style="background-color: #b6e0f7">Imtak</td>
                        <td style="background-color: #f8d1f4">Persiapan</td>
                    </tr>
                    <tr>
                        <th scope="row">Kamis</th>
                        <td style="background-color: #f8d1f4">Persiapan</td>
                        <td style="background-color: #fef2b7">Bahan Alam</td>
                        <td style="background-color: #b6e0f7">Imtak</td>
                    </tr>
                    <tr>
                        <th scope="row">Jumat</th>
                        <td style="background-color: #b6e0f7">Imtak</td>
                        <td style="background-color: #f8d1f4">Persiapan</td>
                        <td style="background-color: #fef2b7">Bahan Alam</td>
                    </tr>
                </tbody>
            </table>
        @elseif ($step === 'Minggu4')
            <table class="mt-4 table table-bordered table-metode w-50">
                <thead>
                    <tr>
                        <th scope="col" class="col">Hari</th>
                        <th scope="col" class="col">A Mandiri</th>
                        <th scope="col" class="col">A Kreatif</th>
                        <th scope="col" class="col">B Ceria</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Rabu</th>
                        <td style="background-color: #fef2b7">Seni</td>
                        <td style="background-color: #b6e0f7">Masak</td>
                        <td style="background-color: #f8d1f4">Role Play</td>
                    </tr>
                    <tr>
                        <th scope="row">Kamis</th>
                        <td style="background-color: #f8d1f4">Role Play</td>
                        <td style="background-color: #fef2b7">Seni</td>
                        <td style="background-color: #b6e0f7">Masak</td>
                    </tr>
                    <tr>
                        <th scope="row">Jumat</th>
                        <td style="background-color: #b6e0f7">Masak</td>
                        <td style="background-color: #f8d1f4">Role Play</td>
                        <td style="background-color: #fef2b7">Seni</td>
                    </tr>
                </tbody>
            </table>
        @endif
    </section>

    {{-- add modal --}}
    <div wire:ignore.self class="modal fade" id="modalAddKelas" tabindex="-1" aria-labelledby="modalAddKelas"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="filterModalLabel">Tambah Jadwal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="store">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Hari</label>
                                <select class="form-select" wire:model.live="hari_id">
                                    <option value="" selected>Pilih hari</option>
                                    @foreach ($haris as $hari)
                                        <option value="{{ $hari->id_hari }}">{{ $hari->nama_hari }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Nama Kelas</label>
                                <select class="form-select" wire:model.live="kelas_id">
                                    <option value="" selected>Pilih kelas</option>
                                    @foreach ($kelass as $kelas)
                                        <option value="{{ $kelas->id_kelas }}">{{ $kelas->nama_kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Nama Guru</label>
                                <select class="form-select" wire:model.live="guru_id">
                                    <option value="" selected>Pilih kelas</option>
                                    @foreach ($gurus as $guru)
                                        <option value="{{ $guru->id_guru }}">{{ $guru->user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="modalDeleteJadwal" tabindex="-1"
        aria-labelledby="modalDeleteJadwal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="filterModalLabel">Delete Jadwal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">

                            <form wire:submit.prevent="delete">

                                <label class="form-label">Hari</label>
                                <select class="form-select" wire:model.live="hari_id">
                                    <option value="" selected>Pilih hari</option>
                                    @foreach ($haris as $hari)
                                        <option value="{{ $hari->id_hari }}">{{ $hari->nama_hari }}</option>
                                    @endforeach
                                </select>

                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Nama Kelas</label>
                            <select class="form-select" wire:model.live="kelas_id">
                                <option value="" selected>Pilih kelas</option>
                                @if (!empty($filteredKelass))
                                    @foreach ($filteredKelass as $kelas)
                                        <option value="{{ $kelas->id_kelas }}">{{ $kelas->nama_kelas }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Nama Guru</label>
                            <select class="form-select" wire:model.defer="guru_id">
                                <option value="" selected>Pilih kelas</option>
                                @if (!empty($filteredGurus))
                                    @foreach ($filteredGurus as $guru)
                                        <option value="{{ $guru->id_guru }}">{{ $guru->user->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Delete
                                Jadwal</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
