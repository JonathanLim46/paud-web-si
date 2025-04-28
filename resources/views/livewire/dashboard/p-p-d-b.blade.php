@section("styles")
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
    .search-container {
        position: relative;
    }
    .search-input {
        padding-left: 15px;
        padding-right: 40px;
        border-radius: 10px;
        border: 1px solid var(--gray-300);
        height: 48px;
        transition: all 0.2s;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.03);
    }
    .search-input:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
    }
    .search-icon {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--gray-600);
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
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
@endsection


<div>
    <section class="mt-4 p-5 info-dashboard shadow-sm">
        <div class="row mb-4 align-items-center">
            <div class="col-md-6 mb-3 mb-md-0">
                <a href=""   data-bs-toggle="modal" data-bs-target="#filterModal" class="btn btn-secondary ms-2" >
                    <i class="bi bi-funnel me-1"></i> Filter
                </a>

            </div>
            <div class="col-md-6 d-flex justify-content-between">
                <!-- Search Bar -->
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
        
                <!-- Switch On/Off with Highlighted Status -->
                <div class="form-check form-switch ms-3 d-flex align-items-center">
                    <input wire:click="toggleSwitch" class="form-check-input custom-switch" 
                    type="checkbox" id="customSwitch" @checked($isOn) style="transform: scale(1.3); margin-right: 12px;">
                    <label class="form-check-label" for="customSwitch" wire:click="sendPPDBStatus">
                        <span id="switchStatus" 
                        class="fs-5 fw-bold px-3 py-2 rounded-pill {{ $isOn ? 'bg-success text-white' : 'bg-danger text-white' }} shadow-sm">
                            {{ $isOn ? 'Pendaftaran PPDB Dibuka' : 'Pendaftaran PPDB Ditutup' }}
                        </span>
                    </label>
                </div>
            </div>
        </div>
        

        <div class="table-responsive">
            <table class="table table-custom">
                <thead>
                    <tr>
                        <th>NIK</th>
                        <th>Nama Murid</th>
                        <th>Tanggal Daftar</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($pendaftars as $pendaftar)
                    <tr>
                        <td><span class="fw-medium">{{$pendaftar->dataPribadi->nik}}</span></td>
                        <td>{{ $pendaftar->dataPribadi->nama_lengkap }}</td>
                        <td>{{ $pendaftar->created_at->format('d-m-Y') }}</td>
                        <td>
                            @if ($pendaftar->diterima === 1)
                            <span class="status-badge status-diterima">Diterima</span>
                            @elseif ($pendaftar->diterima === 0)
                            <span class="status-badge status-ditolak">Tidak Diterima</span>
                            @else
                            <span class="status-badge status-pending">Tahap Verifikasi</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.ppdb.detail', $pendaftar->id_pendaftaran) }}" 
                                class="btn btn-warning">
                                <i class="bi bi-eye me-1"></i>
                                Detail
                            </a>
                            @if ($pendaftar->diterima === 0)
                            <a  wire:click="openModal({{ $pendaftar->id_pendaftaran }})" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDeletePendaftar">
                                <i class="bi bi-eye me-1"></i>
                                Hapus
                            </a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $pendaftars->links('custom-pagination-links') }}
    </section>


    {{-- modal filter --}}
    <div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title fw-bold" id="filterModalLabel">Filter Pendaftaran</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- Isi filter: jenis kelamin, status diterima, tanggal, dll -->
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label">Status</label>
                  <select wire:model="filter.status" class="form-select">
                    <option value="">Semua</option>
                    <option value="diterima">Diterima</option>
                    <option value="menunggu">Tahap Verifikasi</option>
                    <option value="ditolak">Ditolak</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Tanggal Daftar</label>
                  <input type="date" wire:model="filter.tanggal" class="form-control">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
              <button type="button" class="btn btn-primary" wire:click="applyFilter" data-bs-dismiss="modal">Terapkan</button>
            </div>
          </div>
        </div>
    </div>

    {{-- modal delete  --}}
    <div wire:ignore.self class="modal fade" id="modalDeletePendaftar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalDeletePendaftar" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalDeletePendaftarLabel">Konfirmasi Hapus</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p class="fs-5">Apakah Anda yakin ingin menghapus data guru ini?</p>
                </div>
                <div class="modal-footer justify-content-center">
                    @if ($selectedIdPendaftar)
                    <form wire:submit="delete({{ $pendaftar->id_pendaftaran }})">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>  
                    @endif
                </div>
            </div>
        </div>
    </div>
    
</div>
