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
    <h3>Nama Siswa</h3>
    <section class="mt-3 p-4 info-dashboard shadow-sm rounded-4">
        <div class="mb-4">
            <nav class="form-nav" id="navDetailMurid">
                <a href="#" wire:click.prevent="setStep('DataPribadi')"
                    class="nav-link {{ $step === 'DataPribadi' ? 'active' : '' }}">Data Siswa</a>
                <a href="#" wire:click.prevent="setStep('Penilaian')"
                    class="nav-link {{ $step === 'Penilaian' ? 'active' : '' }}">Penilaian</a>
            </nav>
        </div>
        @if ($step === 'DataPribadi')
            <h4 class="mb-3">Detail Data Siswa</h4>
            <div class="container my-4">

                <div class="row g-3">
                    <div class="col-md-6"><strong>NIS:</strong> 2025-ABCD</div>
                    <div class="col-md-6"><strong>NIK:</strong> 1234567890123456</div>
                    <div class="col-md-12"><strong>Nama Lengkap:</strong> Nama Siswa</div>
                    <div class="col-md-6"><strong>Jenis Kelamin:</strong> Laki-laki</div>
                    <div class="col-md-6"><strong>Tempat, Tanggal Lahir:</strong> Bogor, 2008-05-21</div>
                    <div class="col-md-4"><strong>Agama:</strong> Islam</div>
                    <div class="col-md-4"><strong>Anak Ke:</strong> 2</div>
                    <div class="col-md-4"><strong>Berat Badan:</strong> 40 kg</div>
                    <div class="col-md-6"><strong>Tinggi Badan:</strong> 150 cm</div>
                    <div class="col-md-6"><strong>Lingkar Kepala:</strong> 45 cm</div>
                </div>

                <hr class="my-4">

                <h5>Alamat</h5>
                <div class="mb-2"><strong>Alamat Lengkap:</strong> Jl. Raya Dramaga No. 1</div>
                <div class="row g-2">
                    <div class="col-md-4"><strong>Desa:</strong> Sukadamai</div>
                    <div class="col-md-4"><strong>Kecamatan:</strong> Dramaga</div>
                    <div class="col-md-4"><strong>Kabupaten:</strong> Bogor</div>
                    <div class="col-md-4"><strong>Provinsi:</strong> Jawa Barat</div>
                    <div class="col-md-4"><strong>Kode Pos:</strong> 16680</div>
                </div>

                <hr class="my-4">

                <h5>Data Orang Tua</h5>
                <div class="row g-3">
                    <div class="col-md-4"><strong>Nama Ayah:</strong> Budi</div>
                    <div class="col-md-4"><strong>NIK Ayah:</strong> 1234567890</div>
                    <div class="col-md-4"><strong>Pekerjaan Ayah:</strong> Petani</div>
                    <div class="col-md-4"><strong>Nama Ibu:</strong> Siti</div>
                    <div class="col-md-4"><strong>NIK Ibu:</strong> 0987654321</div>
                    <div class="col-md-4"><strong>Pekerjaan Ibu:</strong> Ibu Rumah Tangga</div>
                </div>

                <h5 class="mt-4">Data Wali</h5>
                <div class="row g-3">
                    <div class="col-md-4"><strong>Nama Wali:</strong> -</div>
                    <div class="col-md-4"><strong>NIK Wali:</strong> -</div>
                    <div class="col-md-4"><strong>Pekerjaan Wali:</strong> -</div>
                    <div class="col-md-6"><strong>No HP Orang Tua:</strong> 08123456789</div>
                </div>

                <hr class="my-4">

                <h5>Data Sekolah</h5>
                <div class="row g-3">
                    <div class="col-md-6"><strong>Asal Sekolah:</strong> SDN 1 Dramaga</div>
                    <div class="col-md-3"><strong>Jenjang Sekolah:</strong> SD</div>
                    <div class="col-md-3"><strong>Status Sekolah:</strong> Negeri</div>
                    <div class="col-md-6"><strong>NPSN:</strong> 20208888</div>
                    <div class="col-md-6"><strong>Lokasi Sekolah:</strong> Dramaga</div>
                </div>

                <hr class="my-4">

                <h5>Dokumen Terlampir</h5>
                <ul>
                    <li><a href="#">Lihat Kartu Keluarga (KK)</a></li>
                    <li><a href="#">Lihat Akta Kelahiran</a></li>
                    <li><a href="#">Lihat KTP Orang Tua</a></li>
                    <li><a href="#">Lihat Surat Rekomendasi</a></li>
                </ul>
            </div>
        @elseif ($step === 'Penilaian')
            <h1>Penilaian</h1>
        @endif
    </section>
</div>
