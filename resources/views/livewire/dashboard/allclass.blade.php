@section('styles')
<style>
    :root {
        --primary: #4361ee;
        --primary-hover: #3a56d4;
        --gray-100: #f7fafc;
        --gray-200: #edf2f7;
        --gray-300: #e2e8f0;
        --gray-400: #cbd5e0;
        --gray-500: #a0aec0;
        --gray-600: #718096;
        --text-dark: #2d3748;
    }
    .info-dashboard {
        background-color: #fff;
        border-radius: 16px;
        transition: all 0.3s ease;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.04);
    }

    .section-title {
        font-size: 1.75rem;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 1.5rem;
    }

    /* Search styling */
    .search-form {
        max-width: 600px;
        margin: 0 auto;
    }
    
    .search-container {
        display: flex;
        position: relative;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        border-radius: 50px;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    
    .search-container:focus-within {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }
    
    .search-input {
        flex: 1;
        padding: 15px 20px;
        font-size: 1rem;
        border: 1px solid #e2e8f0;
        border-right: none;
        border-radius: 50px 0 0 50px;
        outline: none;
        transition: border 0.3s ease;
    }
    
    .search-input:focus {
        border-color: #4299e1;
    }
    
    .search-button {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0 20px;
        background: #4299e1;
        color: white;
        border: none;
        border-radius: 0 50px 50px 0;
        cursor: pointer;
        transition: background 0.3s ease;
    }
    
    .search-button:hover {
        background: #3182ce;
    }
    
    .search-button i {
        font-size: 1.25rem;
        margin-right: 5px;
    }
    
    /* Responsive adjustments */
    @media (max-width: 576px) {
        .search-button-text {
            display: none;
        }
        
        .search-button {
            padding: 0 15px;
        }
        
        .search-button i {
            margin-right: 0;
        }
        
        .search-input {
            padding: 12px 15px;
        }
    }

    /* Button styling */
    .btn-outline {
        border: 1px solid var(--gray-400);
        background-color: white;
        color: var(--gray-600);
        border-radius: 10px;
        padding: 10px 20px;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-outline:hover {
        border-color: var(--gray-500);
        background-color: var(--gray-100);
    }

    .btn-warning {
        background-color: var(--primary);
        color: white;
        border: none;
        padding: 8px 16px;
        border-radius: 8px;
        transition: 0.3s ease;
    }

    .btn-warning:hover {
        background-color: var(--primary-hover);
        box-shadow: 0 4px 10px rgba(67, 97, 238, 0.2);
    }

    /* Table styling */
    .table-custom {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        background-color: white;
        overflow: hidden;
        border-radius: 12px;
    }

    .table-custom thead th {
        background-color: var(--gray-100);
        color: var(--gray-600);
        font-weight: 600;
        font-size: 13px;
        text-transform: uppercase;
        padding: 16px;
        border-bottom: 2px solid var(--gray-300);
    }

    .table-custom tbody tr {
        transition: background-color 0.3s;
    }

    .table-custom tbody tr:hover {
        background-color: var(--gray-200);
    }

    .table-custom td {
        padding: 16px 14px;
        color: var(--text-dark);
        vertical-align: middle;
    }

    .table-custom tbody tr:nth-child(even) {
        background-color: #fafafa;
    }

    .status-badge {
        padding: 6px 16px;
        font-size: 13px;
        font-weight: 500;
        border-radius: 999px;
    }

    .status-diterima {
        background-color: #c6f6d5;
        color: #276749;
    }

    .status-ditolak {
        background-color: #fed7d7;
        color: #c53030;
    }

    .status-pending {
        background-color: #e9e9e9;
        color: #718096;
    }

    .pagination {
        gap: 5px;
    }

    .page-item .page-link {
        border-radius: 8px;
        padding: 8px 14px;
        border: 1px solid var(--gray-300);
        color: var(--gray-600);
        transition: 0.2s ease;
    }

    .page-item.active .page-link {
        background-color: var(--primary);
        border-color: var(--primary);
        color: white;
    }

    .page-item .page-link:hover:not(.active) {
        background-color: var(--gray-100);
        border-color: var(--gray-400);
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
@endsection


<div>
    <section class="mt-4 p-5 info-dashboard shadow-sm">
        <div class="row mb-4 align-items-center">
            <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn btn-outline-primary ms-2 btn-lg shadow-sm fw-bold px-4 py-2" data-bs-toggle="modal" data-bs-target="#filterModal">
                    <i class="bi bi-funnel me-2 fs-5"></i> Filter
                </button>
            </div>
            <div class="col-md-6 d-flex justify-content-between">
                <form wire:submit="search" class="search-form">
                    <div class="search-container">
                        <input 
                            type="text" 
                            wire:model.debounce.300ms="query"
                            class="search-input" 
                            placeholder="Cari nama atau NIS..." 
                            aria-label="Search"
                            autocomplete="off"
                        >
                        <button type="submit" class="search-button">
                            <i class="bi bi-search"></i>
                            <span class="search-button-text">Cari</span>
                        </button>
                    </div>
                </form>
                <!-- Tombol Tambah Kelas -->
                <button type="button" class="btn btn-outline-success mt-2"
                    data-bs-toggle="modal" data-bs-target="#modalTambahKelas"
                    wire:click="openModal">
                    <i class="fa-solid fa-plus"></i>
                    Buat Kelas
                </button>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-custom">
                <thead>
                    <tr>
                        <th>Nama Kelas</th>
                        <th>Kelas</th>
                        <th>Wali</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($kelass as $kelas)
                    <tr>
                        <td>{{ $kelas->nama_kelas }}</td>
                        <td>{{ $kelas->tingkat_kelas }}</td>
                        <td>{{ $kelas->wali_murid }}</td>
                        <td>
                            <a href="{{ route("admin.detail-kelas") }}" class="btn btn-primary"><i class="bi bi-eye"></i>Detail</a>
                            <a href="#" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $kelass->links('custom-pagination-links') }}
    </section>

    <!-- Modal Tambah Kelas -->
    <div wire:ignore.self class="modal fade" id="modalTambahKelas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalTambahKelasLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalTambahKelasLabel">Buat Kelas Baru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit="store">
                        <div class="mb-4">
                            <label for="namaKelas" class="form-label fw-bold">Nama Kelas</label>
                            <input type="text" class="form-control" id="namaKelas" name="namaKelas" 
                            placeholder="contoh. Kelas 1A" wire:model="nama_kelas" required>
                        </div>
                        <div class="mb-4">
                            <label for="kelas" class="form-label fw-bold">Kelas</label>
                            <input type="text" class="form-control" id="kelas" name="kelas" 
                            placeholder="Kelas berapa?" wire:model="tingkat_kelas" required>
                        </div>
                        @if ($gurus)
                        <div class="mb-4">
                            <label for="pilihGuru" class="form-label fw-bold">Wali Kelas</label>
                            <select class="form-select" id="pilihGuru" name="pilihGuru" wire:model="wali_murid" required>
                                <option value="" disabled selected>Select</option>
                                @foreach ($gurus as $guru)
                                <option value="{{ $guru->user->name }}">{{ $guru->user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @endif
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Buat Kelas</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
