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
                <div class="search-container d-flex">
                    <input type="text" class="form-control search-input" placeholder="Cari nama atau NIS...">
                    <div class="search-icon">
                        <i class="bi bi-search"></i>
                    </div>
                </div>
                <!-- Tombol Tambah Murid -->
                <button type="button" class="btn btn-outline-success mt-2" data-bs-toggle="modal"
                    data-bs-target="#modalTambahSiswa">
                    <i class="fa-solid fa-plus"></i>
                    Tambah Murid
                </button>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-custom">
                <thead>
                    <tr>
                        <th>NIS</th>
                        <th>Nama Murid</th>
                        <th>Kelas</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>2025-001A</td>
                        <td>Steve Guy</td>
                        <td>A</td>
                        <td>Laki-Laki</td>
                        <td>Jl. Deket Rumah</td>
                        <td>
                            <a href="{{ route('admin.detail-murid') }}" class="btn btn-primary"><i
                                    class="bi bi-eye"></i> Detail</a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalEditSiswa"
                                class="btn btn-warning"><i class="bi bi-pencil"></i></a>

                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalDeleteMurid"
                                class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <!-- Add more rows as necessary -->
                </tbody>
            </table>
        </div>

        <nav aria-label="Page navigation" class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i
                            class="bi bi-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a></li>
            </ul>
        </nav>
    </section>

    <!-- Modal Tambah Data Siswa -->
    <div class="modal fade" id="modalTambahSiswa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="modalTambahSiswaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalTambahSiswaLabel">Form Tambah Data Siswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <h5 class="mb-3">Data Siswa</h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="nis" class="form-label">NIS</label>
                                <input type="text" class="form-control" id="nis" placeholder="2025-ABCD">
                            </div>
                            <div class="col-md-6">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" class="form-control" id="nik">
                            </div>
                            <div class="col-md-12">
                                <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama-lengkap">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label d-block">Jenis Kelamin</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin"
                                        id="jk-l" value="Laki-laki">
                                    <label class="form-check-label" for="jk-l">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin"
                                        id="jk-p" value="Perempuan">
                                    <label class="form-check-label" for="jk-p">Perempuan</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="tempat-lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat-lahir">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Tanggal Lahir</label>
                                <div class="d-flex gap-2">
                                    <input type="text" class="form-control" placeholder="Tahun">
                                    <input type="text" class="form-control" placeholder="Bulan">
                                    <input type="text" class="form-control" placeholder="Tanggal">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="agama" class="form-label">Agama</label>
                                <input type="text" class="form-control" id="agama">
                            </div>
                            <div class="col-md-4">
                                <label for="anak-ke" class="form-label">Anak Ke</label>
                                <input type="number" class="form-control" id="anak-ke">
                            </div>
                            <div class="col-md-4">
                                <label for="berat-badan" class="form-label">Berat Badan (kg)</label>
                                <input type="text" class="form-control" id="berat-badan">
                            </div>
                            <div class="col-md-6">
                                <label for="tinggi-badan" class="form-label">Tinggi Badan (cm)</label>
                                <input type="text" class="form-control" id="tinggi-badan">
                            </div>
                            <div class="col-md-6">
                                <label for="lingkar-kepala" class="form-label">Lingkar Kepala (cm)</label>
                                <input type="text" class="form-control" id="lingkar-kepala">
                            </div>
                        </div>

                        <hr class="my-4">
                        <h5>Alamat</h5>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Lengkap</label>
                            <input type="text" class="form-control" id="alamat">
                        </div>
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Desa">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Kecamatan">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Kabupaten">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Provinsi">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Kode Pos">
                            </div>
                        </div>

                        <hr class="my-4">
                        <h5>Data Ayah</h5>
                        <div class="row g-3">
                            <div class="col-md-4"><input type="text" class="form-control"
                                    placeholder="Nama Ayah"></div>
                            <div class="col-md-4"><input type="text" class="form-control" placeholder="NIK Ayah">
                            </div>
                            <div class="col-md-4"><input type="text" class="form-control"
                                    placeholder="Pekerjaan Ayah"></div>
                        </div>

                        <h5 class="mt-4">Data Ibu</h5>
                        <div class="row g-3">
                            <div class="col-md-4"><input type="text" class="form-control" placeholder="Nama Ibu">
                            </div>
                            <div class="col-md-4"><input type="text" class="form-control" placeholder="NIK Ibu">
                            </div>
                            <div class="col-md-4"><input type="text" class="form-control"
                                    placeholder="Pekerjaan Ibu"></div>
                        </div>

                        <h5 class="mt-4">Data Wali</h5>
                        <div class="row g-3">
                            <div class="col-md-4"><input type="text" class="form-control"
                                    placeholder="Nama Wali"></div>
                            <div class="col-md-4"><input type="text" class="form-control" placeholder="NIK Wali">
                            </div>
                            <div class="col-md-4"><input type="text" class="form-control"
                                    placeholder="Pekerjaan Wali"></div>
                            <div class="col-md-6"><input type="text" class="form-control"
                                    placeholder="No HP Orang Tua"></div>
                        </div>

                        <hr class="my-4">
                        <h5>Data Sekolah</h5>
                        <div class="row g-3">
                            <div class="col-md-6"><input type="text" class="form-control"
                                    placeholder="Asal Sekolah"></div>
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option selected>Jenjang Sekolah</option>
                                    <option value="TK">TK</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option selected>Status Sekolah</option>
                                    <option value="Negeri">Negeri</option>
                                    <option value="Swasta">Swasta</option>
                                </select>
                            </div>
                            <div class="col-md-6"><input type="text" class="form-control" placeholder="NPSN">
                            </div>
                            <div class="col-md-6"><input type="text" class="form-control"
                                    placeholder="Lokasi Sekolah"></div>
                        </div>

                        <hr class="my-4">
                        <h5>Unggah Dokumen</h5>
                        <div class="mb-3"><input type="file" class="form-control" placeholder="Upload KK">
                        </div>
                        <div class="mb-3"><input type="file" class="form-control"
                                placeholder="Upload Akta Kelahiran"></div>
                        <div class="mb-3"><input type="file" class="form-control"
                                placeholder="Upload KTP Orang Tua"></div>
                        <div class="mb-3"><input type="file" class="form-control"
                                placeholder="Upload Surat Rekomendasi (Opsional)"></div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
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
                    <h1 class="modal-title fs-5" id="modalTambahSiswaLabel">Edit Data Siswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <h5 class="mb-3">Data Siswa</h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="nis" class="form-label">NIS</label>
                                <input type="text" class="form-control" id="nis" placeholder="2025-ABCD">
                            </div>
                            <div class="col-md-6">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" class="form-control" id="nik">
                            </div>
                            <div class="col-md-12">
                                <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama-lengkap">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label d-block">Jenis Kelamin</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin"
                                        id="jk-l" value="Laki-laki">
                                    <label class="form-check-label" for="jk-l">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin"
                                        id="jk-p" value="Perempuan">
                                    <label class="form-check-label" for="jk-p">Perempuan</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="tempat-lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat-lahir">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Tanggal Lahir</label>
                                <div class="d-flex gap-2">
                                    <input type="text" class="form-control" placeholder="Tahun">
                                    <input type="text" class="form-control" placeholder="Bulan">
                                    <input type="text" class="form-control" placeholder="Tanggal">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="agama" class="form-label">Agama</label>
                                <input type="text" class="form-control" id="agama">
                            </div>
                            <div class="col-md-4">
                                <label for="anak-ke" class="form-label">Anak Ke</label>
                                <input type="number" class="form-control" id="anak-ke">
                            </div>
                            <div class="col-md-4">
                                <label for="berat-badan" class="form-label">Berat Badan (kg)</label>
                                <input type="text" class="form-control" id="berat-badan">
                            </div>
                            <div class="col-md-6">
                                <label for="tinggi-badan" class="form-label">Tinggi Badan (cm)</label>
                                <input type="text" class="form-control" id="tinggi-badan">
                            </div>
                            <div class="col-md-6">
                                <label for="lingkar-kepala" class="form-label">Lingkar Kepala (cm)</label>
                                <input type="text" class="form-control" id="lingkar-kepala">
                            </div>
                        </div>

                        <hr class="my-4">
                        <h5>Alamat</h5>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Lengkap</label>
                            <input type="text" class="form-control" id="alamat">
                        </div>
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Desa">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Kecamatan">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Kabupaten">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Provinsi">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Kode Pos">
                            </div>
                        </div>

                        <hr class="my-4">
                        <h5>Data Ayah</h5>
                        <div class="row g-3">
                            <div class="col-md-4"><input type="text" class="form-control"
                                    placeholder="Nama Ayah"></div>
                            <div class="col-md-4"><input type="text" class="form-control" placeholder="NIK Ayah">
                            </div>
                            <div class="col-md-4"><input type="text" class="form-control"
                                    placeholder="Pekerjaan Ayah"></div>
                        </div>

                        <h5 class="mt-4">Data Ibu</h5>
                        <div class="row g-3">
                            <div class="col-md-4"><input type="text" class="form-control" placeholder="Nama Ibu">
                            </div>
                            <div class="col-md-4"><input type="text" class="form-control" placeholder="NIK Ibu">
                            </div>
                            <div class="col-md-4"><input type="text" class="form-control"
                                    placeholder="Pekerjaan Ibu"></div>
                        </div>

                        <h5 class="mt-4">Data Wali</h5>
                        <div class="row g-3">
                            <div class="col-md-4"><input type="text" class="form-control"
                                    placeholder="Nama Wali"></div>
                            <div class="col-md-4"><input type="text" class="form-control" placeholder="NIK Wali">
                            </div>
                            <div class="col-md-4"><input type="text" class="form-control"
                                    placeholder="Pekerjaan Wali"></div>
                            <div class="col-md-6"><input type="text" class="form-control"
                                    placeholder="No HP Orang Tua"></div>
                        </div>

                        <hr class="my-4">
                        <h5>Data Sekolah</h5>
                        <div class="row g-3">
                            <div class="col-md-6"><input type="text" class="form-control"
                                    placeholder="Asal Sekolah"></div>
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option selected>Jenjang Sekolah</option>
                                    <option value="TK">TK</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option selected>Status Sekolah</option>
                                    <option value="Negeri">Negeri</option>
                                    <option value="Swasta">Swasta</option>
                                </select>
                            </div>
                            <div class="col-md-6"><input type="text" class="form-control" placeholder="NPSN">
                            </div>
                            <div class="col-md-6"><input type="text" class="form-control"
                                    placeholder="Lokasi Sekolah"></div>
                        </div>

                        <hr class="my-4">
                        <h5>Unggah Dokumen</h5>
                        <div class="mb-3"><input type="file" class="form-control" placeholder="Upload KK">
                        </div>
                        <div class="mb-3"><input type="file" class="form-control"
                                placeholder="Upload Akta Kelahiran"></div>
                        <div class="mb-3"><input type="file" class="form-control"
                                placeholder="Upload KTP Orang Tua"></div>
                        <div class="mb-3"><input type="file" class="form-control"
                                placeholder="Upload Surat Rekomendasi (Opsional)"></div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
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
                            <label class="form-label">Kelas</label>
                            <select wire:model="filter.status" class="form-select">
                                <option value="">Semua</option>
                                <option value="">A</option>
                                <option value="">B</option>
                                <option value="">C</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Jenis Kelamin</label>
                            <select wire:model="filter.status" class="form-select">
                                <option value="">Laki - Laki</option>
                                <option value="">Perempuan</option>
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
    <div class="modal fade" id="modalDeleteMurid" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
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
                    {{-- <form action="{{ route('guru.destroy', ['id' => 'ID_GURU']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form> --}}
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </div>
        </div>
    </div>

</div>
