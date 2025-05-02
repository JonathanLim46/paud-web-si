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
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
@endsection


<div>
    <section class="mt-4 p-5 info-dashboard shadow-sm">
        <div class="row mb-4 align-items-center">
            <div class="col-md-6 mb-3 mb-md-0">
                <a href="" data-bs-toggle="modal" data-bs-target="#filterModal" class="btn btn-secondary ms-2">

                    <i class="bi bi-funnel me-1"></i> Filter
                </a>
            </div>
            <div class="col-md-6 d-flex justify-content-between">
                <form wire:submit="search" class="search-form">
                    <div class="search-container">
                        <input type="text" wire:model.debounce.300ms="query" class="search-input"
                            placeholder="Cari nama atau nis murid" aria-label="Search" autocomplete="off">
                        <button type="submit" class="search-button">
                            <i class="bi bi-search"></i>
                            <span class="search-button-text">Cari</span>
                        </button>
                    </div>
                </form>
                <!-- Tombol Tambah Murid -->
                @if (Auth::user()->level == 'admin')
                <button type="button" class="btn btn-outline-success mt-2" data-bs-toggle="modal"
                data-bs-target="#modalTambahSiswa" wire:click="resetForm">
                <i class="fa-solid fa-plus"></i>
                Tambah Murid
                </button> 
                @endif
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-custom">
                <thead>
                    <tr>
                        <th>NIS</th>
                        <th>Nama Murid</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($murids as $murid)
                    <tr>
                        <td>{{ $murid->dataPribadi->nis }}</td>
                        <td>{{$murid->dataPribadi->nama_lengkap}}</td>
                        <td>{{$murid->dataPribadi->jenis_kelamin}}</td>
                        <td>{{$murid->dataPribadi->alamat_rumah}}</td>
                        <td>
                            <a wire:click="muridDetail({{ $murid->kelas_id }}, {{ $murid->id_pendaftaran }})" class="btn btn-primary">
                                <i class="bi bi-eye"></i> Detail
                            </a>
                            
                            @if (Auth::user()->level == 'admin')
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalEditSiswa"
                                class="btn btn-warning" wire:click="openModalEdit({{ $murid->id_pendaftaran }})">
                                <i class="bi bi-pencil"></i>
                            </a>
                            @endif

                            @if (Auth::user()->level == 'admin')
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalDeleteMurid"
                                class="btn btn-danger" wire:click="openModal({{ $murid->id_pendaftaran }})">
                                <i class="bi bi-trash"></i>
                            </a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $murids->links('custom-pagination-links') }}

    </section>

    <!-- Modal Tambah Data Siswa -->
    <div wire:ignore.self class="modal fade" id="modalTambahSiswa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="modalTambahSiswaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalTambahSiswaLabel">Form Tambah Data Siswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit="store">
                        <h5 class="mb-3">Data Siswa</h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" class="form-control" id="nik"
                                wire:model.defer="data_murid.nik">
                                @error('data_murid.nik')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                                @if ($errors->has('error'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('error') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama-lengkap"
                                wire:model.defer="data_murid.nama_lengkap">
                                @error('data_murid.nama_lengkap')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="nama-lengkap" class="form-label">No Telepon</label>
                                <input type="text" class="form-control" id="no_telepon"
                                wire:model.defer="no_telp">
                                @error('no_telp')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label class="form-label d-block">Jenis Kelamin</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin"
                                        id="jk-l" value="Laki-laki" wire:model.defer="data_murid.jenis_kelamin">
                                    <label class="form-check-label" for="jk-l">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin"
                                        id="jk-p" value="Perempuan" wire:model.defer="data_murid.jenis_kelamin">
                                    <label class="form-check-label" for="jk-p">Perempuan</label>
                                </div>
                                @error('data_murid.jenis_kelamin')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="tempat-lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat-lahir" wire:model.defer="data_murid.tempat_lahir">
                                @error('data_murid.tempat_lahir')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Tanggal Lahir</label>
                                <div class="d-flex gap-2">
                                    <input type="date" class="form-control" placeholder="Tanggal Lahir" 
                                    max="{{ now()->toDateString() }}" wire:model.defer="data_murid.tanggal_lahir">
                                </div>
                                @error('data_murid.tanggal_lahir')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="agama" class="form-label">Agama</label>
                                <select class="form-select" id="pilihGuru" name="pilihGuru" wire:model.defer="data_murid.agama"
                                    required>
                                    <option value="" disabled selected>Select</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                    <option value="Kristen Katolik">Kristen Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                                @error('data_murid.agama')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="anak-ke" class="form-label">Anak Ke</label>
                                <input type="number" class="form-control" id="anak-ke" wire:model.defer="data_murid.anak_ke">
                                @error('data_murid.anak_ke')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="berat-badan" class="form-label">Berat Badan (kg)</label>
                                <input type="number" class="form-control" id="berat-badan" wire:model.defer="data_murid.berat_badan" min="0">
                                @error('data_murid.berat_badan')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="tinggi-badan" class="form-label">Tinggi Badan (cm)</label>
                                <input type="number" class="form-control" id="tinggi-badan" wire:model.defer="data_murid.tinggi_badan" min="0">
                                @error('data_murid.tinggi_badan')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="lingkar-kepala" class="form-label">Lingkar Kepala (cm)</label>
                                <input type="number" class="form-control" id="lingkar-kepala" wire:model.defer="data_murid.lingkar_kepala" min="0">
                                @error('data_murid.lingkar_kepala')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <hr class="my-4">
                        <h5>Alamat</h5>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Lengkap</label>
                            <input type="text" class="form-control" id="alamat" wire:model.defer="data_murid.alamat_rumah">
                            @error('data_murid.alamat_rumah')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror
                        </div>
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Desa atau Kelurahan" wire:model.defer="data_murid.desa_kelurahan">
                                @error('data_murid.desa_kelurahan')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Kecamatan" wire:model.defer="data_murid.kecamatan">
                                @error('data_murid.kecamatan')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Kabupaten atau Kota" wire:model.defer="data_murid.kota_kabupaten">
                                @error('data_murid.kota_kabupaten')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Provinsi" wire:model.defer="data_murid.provinsi">
                                @error('data_murid.provinsi')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Kode Pos" wire:model.defer="data_murid.kode_pos">
                                @error('data_murid.kode_pos')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <hr class="my-4">
                        <h5>Data Ayah</h5>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <input type="text" class="form-control"
                                    placeholder="Nama Ayah" wire:model.defer="data_orang_tua_wali.nama_ayah">
                                @error('data_orang_tua_wali.nama_ayah')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" 
                                placeholder="NIK Ayah" wire:model.defer="data_orang_tua_wali.nik_ayah">
                                @error('data_orang_tua_wali.nik_ayah')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control"
                                    placeholder="Pekerjaan Ayah" wire:model.defer="data_orang_tua_wali.pekerjaan_ayah">
                                @error('data_orang_tua_wali.pekerjaan_ayah')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <h5 class="mt-4">Data Ibu</h5>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <input type="text" class="form-control" 
                                placeholder="Nama Ibu" wire:model.defer="data_orang_tua_wali.nama_ibu">
                            @error('data_orang_tua_wali.nama_ibu')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" 
                                placeholder="NIK Ibu" wire:model.defer="data_orang_tua_wali.nik_ibu">
                            @error('data_orang_tua_wali.nik_ibu')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control"
                                    placeholder="Pekerjaan Ibu" wire:model.defer="data_orang_tua_wali.pekerjaan_ibu">
                                @error('data_orang_tua_wali.pekerjaan_ibu')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <h5 class="mt-4">Data Wali</h5>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <input type="text" class="form-control"
                                    placeholder="Nama Wali" wire:model.defer="data_orang_tua_wali.nama_wali">
                                @error('data_orang_tua_wali.nama_wali')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" 
                                placeholder="NIK Wali" wire:model.defer="data_orang_tua_wali.nik_wali">
                                @error('data_orang_tua_wali.nik_wali')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control"
                                    placeholder="Pekerjaan Wali" wire:model.defer="data_orang_tua_wali.pekerjaan_wali">
                                @error('data_orang_tua_wali.pekerjaan_wali')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-check mb-3 mt-4">
                            <input class="form-check-input" type="checkbox" id="cekSekolah" 
                            wire:change="sekolahCheck($event.target.checked)">
                            <label class="form-check-label" for="cekSekolah">
                                Apakah memiliki data sekolah sebelumnya?
                            </label>
                        </div>

                        @if ($isSekolahChecked == 'buka')
                        <hr class="my-4">
                        <h5>Data Sekolah</h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="NPSN"
                                wire:model.defer="data_sekolah.npsn">
                                @error('data_sekolah.npsn')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control"
                                    placeholder="Nama Sekolah" wire:model.defer="data_sekolah.nama_sekolah">
                                @error('data_sekolah.nama_sekolah')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <select class="form-select" wire:model.defer="data_sekolah.status_sekolah">
                                    <option selected>Status Sekolah</option>
                                    <option value="Negeri">Negeri</option>
                                    <option value="Swasta">Swasta</option>
                                </select>
                                @error('data_sekolah.status_sekolah')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control"
                                    placeholder="Alamat Sekolah" wire:model.defer="data_sekolah.alamat_sekolah">
                                @error('data_sekolah.alamat_sekolah')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                        </div>
                        @endif

                        <hr class="my-4">
                        <h5>Unggah Dokumen</h5>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload KK</label>
                            <input type="file" class="form-control" placeholder="Upload KK"
                            wire:model.defer="data_dokumen.kartu_keluarga">
                            @error('data_dokumen.kartu_keluarga')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Akta Kelahiran</label>
                            <input type="file" class="form-control"
                                placeholder="Upload Akta Kelahiran" wire:model.defer="data_dokumen.akta_kelahiran">
                            @error('data_dokumen.akta_kelahiran')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload KTP Ayah</label>
                            <input type="file" class="form-control"
                                placeholder="Upload KTP Ayah" wire:model.defer="data_dokumen.ktp_ayah">
                            @error('data_dokumen.ktp_ayah')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload KTP Ibu</label>
                            <input type="file" class="form-control"
                                placeholder="Upload KTP Ibu" wire:model.defer="data_dokumen.ktp_ibu">
                            @error('data_dokumen.ktp_ibu')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Surat Rekomendasi (Opsional)</label>
                            <input type="file" class="form-control"
                                placeholder="Upload Surat Rekomendasi (Opsional)" wire:model.defer="data_dokumen.surat_pindah">
                            @error('data_dokumen.surat_pindah')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Tambah Murid</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- modal edit --}}
    <div class="modal fade" id="modalEditSiswa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="modalEditSiswaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalEditSiswaLabel">Edit Data Siswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    @if ($pendaftar)
                    <form wire:submit="update({{ $pendaftar->id_pendaftaran }})">
                        <h5 class="mb-3">Data Siswa</h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" class="form-control" id="nik"
                                wire:model.defer="data_murid.nik">
                                @error('data_murid.nik')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama-lengkap"
                                wire:model.defer="data_murid.nama_lengkap">
                                @error('data_murid.nama_lengkap')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="nama-lengkap" class="form-label">No Telepon</label>
                                <input type="text" class="form-control" id="no_telepon"
                                wire:model.defer="no_telp">
                                @error('no_telp')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label class="form-label d-block">Jenis Kelamin</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin"
                                        id="jk-l" value="Laki-laki" wire:model.defer="data_murid.jenis_kelamin">
                                    <label class="form-check-label" for="jk-l">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin"
                                        id="jk-p" value="Perempuan" wire:model.defer="data_murid.jenis_kelamin">
                                    <label class="form-check-label" for="jk-p">Perempuan</label>
                                </div>
                                @error('data_murid.jenis_kelamin')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="tempat-lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat-lahir" wire:model.defer="data_murid.tempat_lahir">
                                @error('data_murid.tempat_lahir')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Tanggal Lahir</label>
                                <div class="d-flex gap-2">
                                    <input type="date" class="form-control" placeholder="Tanggal Lahir" 
                                    max="{{ now()->toDateString() }}" wire:model.defer="data_murid.tanggal_lahir">
                                </div>
                                @error('data_murid.tanggal_lahir')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="agama" class="form-label">Agama</label>
                                <input type="text" class="form-control" id="agama" wire:model.defer="data_murid.agama">
                                @error('data_murid.agama')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="anak-ke" class="form-label">Anak Ke</label>
                                <input type="number" class="form-control" id="anak-ke" wire:model.defer="data_murid.anak_ke">
                                @error('data_murid.anak_ke')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="berat-badan" class="form-label">Berat Badan (kg)</label>
                                <input type="number" class="form-control" id="berat-badan" wire:model.defer="data_murid.berat_badan" min="0">
                                @error('data_murid.berat_badan')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="tinggi-badan" class="form-label">Tinggi Badan (cm)</label>
                                <input type="number" class="form-control" id="tinggi-badan" wire:model.defer="data_murid.tinggi_badan" min="0">
                                @error('data_murid.tinggi_badan')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="lingkar-kepala" class="form-label">Lingkar Kepala (cm)</label>
                                <input type="number" class="form-control" id="lingkar-kepala" wire:model.defer="data_murid.lingkar_kepala" min="0">
                                @error('data_murid.lingkar_kepala')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <hr class="my-4">
                        <h5>Alamat</h5>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Lengkap</label>
                            <input type="text" class="form-control" id="alamat" wire:model.defer="data_murid.alamat_rumah">
                            @error('data_murid.alamat_rumah')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror
                        </div>
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Desa atau Kelurahan" wire:model.defer="data_murid.desa_kelurahan">
                                @error('data_murid.desa_kelurahan')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Kecamatan" wire:model.defer="data_murid.kecamatan">
                                @error('data_murid.kecamatan')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Kabupaten atau Kota" wire:model.defer="data_murid.kota_kabupaten">
                                @error('data_murid.kota_kabupaten')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Provinsi" wire:model.defer="data_murid.provinsi">
                                @error('data_murid.provinsi')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Kode Pos" wire:model.defer="data_murid.kode_pos">
                                @error('data_murid.kode_pos')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <hr class="my-4">
                        <h5>Data Ayah</h5>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <input type="text" class="form-control"
                                    placeholder="Nama Ayah" wire:model.defer="data_orang_tua_wali.nama_ayah">
                                @error('data_orang_tua_wali.nama_ayah')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" 
                                placeholder="NIK Ayah" wire:model.defer="data_orang_tua_wali.nik_ayah">
                                @error('data_orang_tua_wali.nik_ayah')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control"
                                    placeholder="Pekerjaan Ayah" wire:model.defer="data_orang_tua_wali.pekerjaan_ayah">
                                @error('data_orang_tua_wali.pekerjaan_ayah')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <h5 class="mt-4">Data Ibu</h5>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <input type="text" class="form-control" 
                                placeholder="Nama Ibu" wire:model.defer="data_orang_tua_wali.nama_ibu">
                            @error('data_orang_tua_wali.nama_ibu')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" 
                                placeholder="NIK Ibu" wire:model.defer="data_orang_tua_wali.nik_ibu">
                            @error('data_orang_tua_wali.nik_ibu')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control"
                                    placeholder="Pekerjaan Ibu" wire:model.defer="data_orang_tua_wali.pekerjaan_ibu">
                                @error('data_orang_tua_wali.pekerjaan_ibu')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <h5 class="mt-4">Data Wali</h5>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <input type="text" class="form-control"
                                    placeholder="Nama Wali" wire:model.defer="data_orang_tua_wali.nama_wali">
                                @error('data_orang_tua_wali.nama_wali')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" 
                                placeholder="NIK Wali" wire:model.defer="data_orang_tua_wali.nik_wali">
                                @error('data_orang_tua_wali.nik_wali')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control"
                                    placeholder="Pekerjaan Wali" wire:model.defer="data_orang_tua_wali.pekerjaan_wali">
                                @error('data_orang_tua_wali.pekerjaan_wali')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-check mb-3 mt-4">
                            <input class="form-check-input" type="checkbox" id="cekSekolah" 
                            wire:change="sekolahCheck($event.target.checked)">
                            <label class="form-check-label" for="cekSekolah">
                                Apakah memiliki data sekolah sebelumnya?
                            </label>
                        </div>

                        @if ($isSekolahChecked == 'buka')
                        <hr class="my-4">
                        <h5>Data Sekolah</h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="NPSN"
                                wire:model.defer="data_sekolah.npsn">
                                @error('data_sekolah.npsn')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control"
                                    placeholder="Nama Sekolah" wire:model.defer="data_sekolah.nama_sekolah">
                                @error('data_sekolah.nama_sekolah')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <select class="form-select" wire:model.defer="data_sekolah.status_sekolah">
                                    <option selected>Status Sekolah</option>
                                    <option value="Negeri">Negeri</option>
                                    <option value="Swasta">Swasta</option>
                                </select>
                                @error('data_sekolah.status_sekolah')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control"
                                    placeholder="Alamat Sekolah" wire:model.defer="data_sekolah.alamat_sekolah">
                                @error('data_sekolah.alamat_sekolah')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                        </div>
                        @endif

                        <hr class="my-4">
                        <h5>Unggah Dokumen</h5>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload KK</label>
                            <input type="file" class="form-control" placeholder="Upload KK"
                            wire:model.defer="data_dokumen.kartu_keluarga">
                            @error('data_dokumen.kartu_keluarga')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Akta Kelahiran</label>
                            <input type="file" class="form-control"
                                placeholder="Upload Akta Kelahiran" wire:model.defer="data_dokumen.akta_kelahiran">
                            @error('data_dokumen.akta_kelahiran')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload KTP Ayah</label>
                            <input type="file" class="form-control"
                                placeholder="Upload KTP Ayah" wire:model.defer="data_dokumen.ktp_ayah">
                            @error('data_dokumen.ktp_ayah')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload KTP Ibu</label>
                            <input type="file" class="form-control"
                                placeholder="Upload KTP Ibu" wire:model.defer="data_dokumen.ktp_ibu">
                            @error('data_dokumen.ktp_ibu')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Surat Rekomendasi (Opsional)</label>
                            <input type="file" class="form-control"
                                placeholder="Upload Surat Rekomendasi (Opsional)" wire:model.defer="data_dokumen.surat_pindah">
                            @error('data_dokumen.surat_pindah')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @enderror
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-warning">Simpan</button>
                        </div>
                    </form>  
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{-- modal filter --}}
    <div wire:ignore.self class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="filterModalLabel">Filter Pendaftaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Jenis Kelamin</label>
                            <select wire:model="filterGender" class="form-select">
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                                <option value="">Reset</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" wire:click="applyFilter"
                        data-bs-dismiss="modal">Terapkan</button>
                </div>
            </div>
        </div>
    </div>

    {{-- modal delete --}}
    <div wire:ignore.self class="modal fade" id="modalDeleteMurid" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="modalDeleteMuridLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalDeleteGuruLabel">Konfirmasi Hapus</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p class="fs-5">Apakah Anda yakin ingin menghapus data murid ini?</p>
                </div>
                <div class="modal-footer justify-content-center">
                    @if ($selectedData)
                    <form wire:submit="delete({{ $selectedData->id_pendaftaran }})">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>

</div>
