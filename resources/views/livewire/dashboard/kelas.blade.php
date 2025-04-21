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

<div>
    <section class="mt-4 p-5 info-dashboard shadow-sm">
        <div class="row mb-4 align-items-center">
            <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn btn-outline ms-2">
                    <i class="bi bi-funnel me-1"></i> Filter
                </button>
            </div>
            <div class="col-md-6 d-flex justify-content-between">
                <div class="search-container d-flex">
                    <input type="text" class="form-control search-input" placeholder="Cari nama atau NIS...">
                    <div class="search-icon">
                        <i class="bi bi-search"></i>
                    </div>
                </div>
                <!-- Tombol Tambah Kelas -->
                <button type="button" class="btn btn-outline-success mt-2"
                    data-bs-toggle="modal" data-bs-target="#modalTambahKelas">
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
                    <tr>
                        <td>Ceria</td>
                        <td>A</td>
                        <td>Hera Miranti</td>
                        <td>
                            <a href="{{ route("admin.detail-kelas") }}" class="btn btn-primary"><i class="bi bi-eye"></i> Detail</a>
                            <a href="#" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <!-- Add more rows as necessary -->
                </tbody>
            </table>
        </div>

        <nav aria-label="Page navigation" class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="bi bi-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a></li>
            </ul>
        </nav>
    </section>

    <!-- Modal Tambah Kelas -->
    <div class="modal fade" id="modalTambahKelas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalTambahKelasLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalTambahKelasLabel">Buat Kelas Baru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="namaKelas" class="form-label fw-bold">Nama Kelas</label>
                            <input type="text" class="form-control" id="namaKelas" name="namaKelas" placeholder="contoh. Kelas 1A" required>
                        </div>
                        <div class="mb-4">
                            <label for="kelas" class="form-label fw-bold">Kelas</label>
                            <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas berapa?" required>
                        </div>
                        <div class="mb-4">
                            <label for="pilihGuru" class="form-label fw-bold">Pilih Guru</label>
                            <select class="form-select" id="pilihGuru" name="pilihGuru" required>
                                <option value="" disabled selected>Select</option>
                                <option value="H. Muhammad Zein">H. Muhammad Zein</option>
                                <option value="Irma Kusumawati">Irma Kusumawati</option>
                                <option value="Lulu Zaima Awaly">Lulu Zaima Awaly</option>
                                <option value="Emy Liriyanti">Emy Liriyanti</option>
                                <option value="Hera Miranti">Hera Miranti</option>
                                <option value="Nining Mulyani">Nining Mulyani</option>
                            </select>
                        </div>
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
