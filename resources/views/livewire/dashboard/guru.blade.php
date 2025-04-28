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

    form img {
        width: 16vw;
        height: 12vh;
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
                <a href=""  data-bs-toggle="modal" data-bs-target="#filterGuruModal"class="btn btn-secondary ms-2" >
                    <i class="bi bi-funnel me-1"></i> Filters
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
                            placeholder="Cari nama guru" 
                            aria-label="Search"
                            autocomplete="off"
                        >
                        <button type="submit" class="search-button">
                            <i class="bi bi-search"></i>
                            <span class="search-button-text">Cari</span>
                        </button>
                    </div>
                </form>
                <!-- Tombol Tambah Guru -->
                <button type="button" class="btn btn-outline-success mt-2"
                    data-bs-toggle="modal" data-bs-target="#modalTambahGuru">
                    <i class="fa-solid fa-plus"></i>
                    Tambah Guru
                </button>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-custom">
                <thead>
                    <tr>
                        <th>Nama Guru</th>
                        <th>Jabatan</th>
                        <th>Alamat</th>
                        <th>Pendidikan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($gurus as $guru)
                    <tr wire:key="{{ $guru->id_guru }}">
                        <td><span class="fw-medium">{{ $guru->user->name }}</span></td>
                        <td>{{ $guru->jabatan }}</td>
                        <td>{{ $guru->alamat_guru }}</td>
                        <td>{{ $guru->pendidikan }}</td>
                        <td>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalEditGuru" 
                            class="btn btn-warning" wire:click="openModal({{ $guru->id_guru }})">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalDeleteGuru" 
                            class="btn btn-danger" wire:click="openModal({{ $guru->id_guru }})">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $gurus->links('custom-pagination-links') }}

    </section>

    {{-- modal tambah guru --}}
    <div wire:ignore.self class="modal fade" id="modalTambahGuru" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalTambahGuruLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalTambahGuruLabel">Tambah Guru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit="store">
                        <div class="mb-4">
                            @if ($imageGuru)
                                <img src="{{ $imageGuru->temporaryUrl() }}" class="img-thumbnail img-preview" alt="preview">
                            @else
                                <img src="{{ asset('images/dashboard/blankImage.jpg') }}" class="img-thumbnail img-preview"
                                alt="preview">
                            @endif
                        </div>
                        <div class="mb-4">
                            @error('imageGuru')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror
                            <input type="file" class="form-control mt-4 mb-4" id="image-input" name="image"
                                wire:model="imageGuru">
                        </div>
                        <div class="mb-4">
                            <label for="usernameGuru" class="form-label fw-bold">Username Guru</label>
                            <input type="text" class="form-control" id="usernameGuru" name="usernameGuru" placeholder="Masukkan username guru" required
                                wire:model="usernameGuru">
                            @error('usernameGuru')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="namaGuru" class="form-label fw-bold">Nama Guru</label>
                            <input type="text" class="form-control" id="namaGuru" name="namaGuru" placeholder="Masukkan nama guru" required
                                wire:model="namaGuru">
                            @error('namaGuru')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="emailGuru" class="form-label fw-bold">Email Guru</label>
                            <input type="email" class="form-control" id="emailGuru" name="emailGuru" placeholder="Masukkan Email Guru" required
                                wire:model="emailGuru">
                            @error('emailGuru')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="jabatan" class="form-label fw-bold">Jabatan</label>
                            <select wire:model="jabatanGuru" class="form-select">
                                <option value="" selected>Pilih Jabatan</option>
                                <option value="Guru">Guru</option>
                            </select>
                            @error('jabatanGuru')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="alamat" class="form-label fw-bold">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat" required
                                wire:model="alamatGuru">
                            @error('alamatGuru')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="pendidikan" class="form-label fw-bold">Pendidikan</label>
                            <select wire:model="pendidikanGuru" class="form-select">
                                <option value="" selected>Pilih Pendidikan</option>
                                <option value="SMA">SMA</option>
                                <option value="D3">D3</option>
                                <option value="D4">D4</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                            </select>      
                            @error('pendidikanGuru')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror                 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Tambah Guru</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- modal edit guru --}}
    <div wire:ignore.self class="modal fade" id="modalEditGuru" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEditGuruLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalTambahGuruLabel">Edit Guru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if ($selectedIdGuru)
                    <form wire:submit="update({{ $selectedIdGuru->id_guru }})">
                        <div class="mb-4">
                            @if ($imageGuru)
                                <img src="{{ $imageGuru->temporaryUrl() }}" class="img-thumbnail img-preview" alt="preview">
                            @elseif($selectedIdGuru)
                                <img src="{{ asset('storage/user/'.$selectedIdGuru->user->id.'/'.$selectedIdGuru->user->image) }}" class="img-thumbnail img-preview"
                                alt="preview">
                            @else
                            <img src="{{ asset('images/dashboard/blankImage.jpg') }}" class="img-thumbnail img-preview"
                            alt="preview">
                            @endif
                        </div>
                        <div class="mb-4">
                            @error('imageGuru')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror
                            <input type="file" class="form-control mt-4 mb-4" id="image-input" name="image"
                                wire:model="imageGuru">
                        </div>
                        <div class="mb-4">
                            <label for="usernameGuru" class="form-label fw-bold">Username Guru</label>
                            <input type="text" class="form-control" id="usernameGuru" name="usernameGuru" placeholder="Masukkan username guru" required
                                wire:model="usernameGuru">
                            @error('usernameGuru')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="namaGuru" class="form-label fw-bold">Nama Guru</label>
                            <input type="text" class="form-control" id="namaGuru" name="namaGuru" placeholder="Masukkan nama guru" required
                                wire:model="namaGuru">
                            @error('namaGuru')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="emailGuru" class="form-label fw-bold">Email Guru</label>
                            <input type="email" class="form-control" id="emailGuru" name="emailGuru" placeholder="Masukkan Email Guru" required
                                wire:model="emailGuru">
                            @error('emailGuru')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="jabatan" class="form-label fw-bold">Jabatan</label>
                            <select wire:model="jabatanGuru" class="form-select">
                                <option value="" selected>Pilih Jabatan</option>
                                <option value="Guru">Guru</option>
                            </select>
                            @error('jabatanGuru')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="alamat" class="form-label fw-bold">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat" required
                                wire:model="alamatGuru">
                            @error('alamatGuru')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="pendidikan" class="form-label fw-bold">Pendidikan</label>
                            <select wire:model="pendidikanGuru" class="form-select">
                                <option value="" selected>Pilih Pendidikan</option>
                                <option value="SMA">SMA</option>
                                <option value="D3">D3</option>
                                <option value="D4">D4</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                            </select>      
                            @error('pendidikanGuru')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror                 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-warning">Simpan</button>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{-- modal delete  --}}
    <div wire:ignore.self class="modal fade" id="modalDeleteGuru" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalDeleteGuru" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalDeleteGuruLabel">Konfirmasi Hapus</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p class="fs-5">Apakah Anda yakin ingin menghapus data guru ini?</p>
                </div>
                <div class="modal-footer justify-content-center">
                    @if ($selectedIdGuru)
                    <form wire:submit="delete({{ $selectedIdGuru->id_guru }})">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>  
                    @endif
                </div>
            </div>
        </div>
    </div>
    
    {{-- modal filter --}}
    <div class="modal fade" id="filterGuruModal" tabindex="-1" aria-labelledby="filterGuruModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title fw-bold" id="filterModalLabel">Filter Guru</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label">Jabatan</label>
                  <select wire:model="jabatan" class="form-select">
                    <option value="">Semua</option>
                    <option value="KetuaYayasan">Ketua yayasan</option>
                    <option value="Guru">Guru</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Pendidikan</label>
                  <select wire:model="pendidikan" class="form-select">
                    <option value="">Semua</option>
                    <option value="SMA">SMA</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                  </select>
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
    
</div>

