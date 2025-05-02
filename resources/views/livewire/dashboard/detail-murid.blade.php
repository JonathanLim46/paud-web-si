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
    <h3>Nama Siswa : {{ $murid->dataPribadi->nama_lengkap }}</h3>
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
                    <div class="col-md-6"><strong>NIS:</strong>
                        {{ $murid->dataPribadi->nis }}
                    </div>
                    <div class="col-md-6"><strong>NIK:</strong>
                        {{ $murid->dataPribadi->nik }}
                    </div>
                    <div class="col-md-12"><strong>Nama Lengkap:</strong>
                        {{ $murid->dataPribadi->nama_lengkap }}
                    </div>
                    <div class="col-md-6"><strong>Jenis Kelamin:</strong>
                        {{ $murid->dataPribadi->jenis_kelamin }}
                    </div>
                    <div class="col-md-6"><strong>Tempat, Tanggal Lahir:</strong>
                        {{ $murid->dataPribadi->tempat_lahir }},
                        {{ \Carbon\Carbon::parse($murid->tanggal_lahir)->format('d-m-Y') }}
                    </div>
                    <div class="col-md-4"><strong>Agama:</strong>
                        {{ $murid->dataPribadi->agama }}
                    </div>
                    <div class="col-md-4"><strong>Anak Ke:</strong>
                        {{ $murid->dataPribadi->anak_ke }}
                    </div>
                    <div class="col-md-4"><strong>Berat Badan:</strong>
                        {{ $murid->dataPribadi->berat_badan }} kg
                    </div>
                    <div class="col-md-6"><strong>Tinggi Badan:</strong>
                        {{ $murid->dataPribadi->tinggi_badan }} cm
                    </div>
                    <div class="col-md-6"><strong>Lingkar Kepala:</strong>
                        {{ $murid->dataPribadi->lingkar_kepala }} cm
                    </div>
                </div>

                <hr class="my-4">

                <h5>Alamat</h5>
                <div class="mb-2"><strong>Alamat Lengkap:</strong> {{ $murid->dataPribadi->alamat_rumah }}</div>
                <div class="row g-2">
                    <div class="col-md-4"><strong>Desa atau Kelurahan:</strong>
                        {{ $murid->dataPribadi->desa_kelurahan }}</div>
                    <div class="col-md-4"><strong>Kecamatan:</strong> {{ $murid->dataPribadi->kecamatan }}</div>
                    <div class="col-md-4"><strong>Kabupaten atau Kota:</strong>
                        {{ $murid->dataPribadi->kota_kabupaten }}</div>
                    <div class="col-md-4"><strong>Provinsi:</strong> {{ $murid->dataPribadi->provinsi }}</div>
                    <div class="col-md-4"><strong>Kode Pos:</strong> {{ $murid->dataPribadi->kode_pos }}</div>
                </div>

                <hr class="my-4">

                <h5>Data Orang Tua</h5>
                <div class="row g-3">
                    <div class="col-md-4"><strong>Nama Ayah:</strong> {{ $murid->dataOrangTua->nama_ayah }}</div>
                    <div class="col-md-4"><strong>NIK Ayah:</strong> {{ $murid->dataOrangTua->nik_ayah }}</div>
                    <div class="col-md-4"><strong>Pekerjaan Ayah:</strong> {{ $murid->dataOrangTua->pekerjaan_ayah }}
                    </div>
                    <div class="col-md-4"><strong>Nama Ibu:</strong> {{ $murid->dataOrangTua->nama_ibu }}</div>
                    <div class="col-md-4"><strong>NIK Ibu:</strong> {{ $murid->dataOrangTua->nik_ibu }}</div>
                    <div class="col-md-4"><strong>Pekerjaan Ibu:</strong> {{ $murid->dataOrangTua->pekerjaan_ibu }}
                    </div>
                </div>

                <h5 class="mt-4">Data Wali</h5>
                <div class="row g-3">
                    <div class="col-md-4"><strong>Nama Wali:</strong>
                        {{ $murid->dataOrangTua->nama_wali }}
                    </div>
                    <div class="col-md-4"><strong>NIK Wali:</strong>
                        {{ $murid->dataOrangTua->nik_wali }}
                    </div>
                    <div class="col-md-4"><strong>Pekerjaan Wali:</strong>
                        {{ $murid->dataOrangTua->pekerjaan_wali }}
                    </div>
                    <div class="col-md-6"><strong>No HP Orang Tua:</strong> {{ $murid->no_telp }}</div>
                </div>

                <hr class="my-4">

                <h5>Data Sekolah</h5>
                <div class="row g-3">
                    @if ($murid->dataSekolah)
                        <div class="col-md-6">
                            <strong>Nama Sekolah:</strong> {{ $murid->dataSekolah->nama_sekolah }}
                        </div>
                        <div class="col-md-3">
                            <strong>Status Sekolah:</strong> {{ $murid->dataSekolah->status_sekolah }}
                        </div>
                        <div class="col-md-3">
                            <strong>Alamat Sekolah:</strong> {{ $murid->dataSekolah->alamat_sekolah }}
                        </div>
                    @else
                        <div class="col-md-12">
                            <em>Belum ada data sekolah.</em>
                        </div>
                    @endif
                </div>

                <hr class="my-4">

                <h5>Dokumen Terlampir</h5>
                <ul>
                    <li>
                        <a href="{{ asset('storage/data_pendaftar/' . $murid->dataPribadi->nik . '/dokumen/' . $murid->dokumen->kartu_keluarga) }}"
                            target="_blank">
                            Lihat Kartu Keluarga
                        </a>
                    </li>
                    <li>
                        <a href="{{ asset('storage/data_pendaftar/' . $murid->dataPribadi->nik . '/dokumen/' . $murid->dokumen->ktp_ayah) }}"
                            target="_blank">
                            Lihat KTP Ayah
                        </a>
                    </li>
                    <li>
                        <a href="{{ asset('storage/data_pendaftar/' . $murid->dataPribadi->nik . '/dokumen/' . $murid->dokumen->ktp_ibu) }}"
                            target="_blank">
                            Lihat KTP Ibu
                        </a>
                    </li>
                    <li>
                        <a href="{{ asset('storage/data_pendaftar/' . $murid->dataPribadi->nik . '/dokumen/' . $murid->dokumen->akta_kelahiran) }}"
                            target="_blank">
                            Lihat Akta Kelahiran
                        </a>
                    </li>
                    @if ($murid->dokumen->surat_pindah)
                        <li>
                            <a href="{{ asset('storage/data_pendaftar/' . $murid->dataPribadi->nik . '/dokumen/' . $murid->dokumen->surat_pindah) }}"
                                target="_blank">
                                Lihat Surat Pindah
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        @elseif ($step === 'Penilaian')
            <style>
                table {
                    width: 100%;
                    border-collapse: collapse;
                    margin-top: 2rem;
                    font-family: 'Poppins', sans-serif;
                }

                th,
                td {
                    border: 1px solid #333;
                    padding: 10px;
                    text-align: left;
                }

                th {
                    background-color: #dbefff;
                    text-align: center;
                }

                .judul-seksi {
                    background-color: #f0f8ff;
                    font-weight: 600;
                }

                .penilaian {
                    text-align: center;
                }

                .radio-group input[type="radio"] {
                    transform: scale(1.2);
                    accent-color: #101C36;
                    cursor: pointer;
                    text-align: center;
                }
            </style>
            <div>
                <table border="1" style="width: 100%; border-collapse: collapse; text-align: center;">
                    <thead class="sticky-top">
                        <tr>
                            <th>No</th>
                            <th>Aspek Perkembangan</th>
                            <th>Baik</th>
                            <th>Cukup</th>
                            <th>Perlu Dilatih</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($aspekTexts as $key => $aspek)
                            {{-- HEADER BESAR & SUBHEADER --}}
                            @if ($key == 1)
                                <tr>
                                    <td colspan="5" class="judul-seksi">I. NILAI-NILAI AGAMA DAN MORAL</td>
                                </tr>
                            @endif

                            @if ($key == 6)
                                <tr>
                                    <td colspan="5" class="judul-seksi">II. FISIK MOTORIK</td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="judul-seksi">1. Motorik Kasar</td>
                                </tr>
                            @endif

                            @if ($key == 11)
                                <tr>
                                    <td colspan="5" class="judul-seksi">2. Motorik Halus</td>
                                </tr>
                            @endif

                            @if ($key == 16)
                                <tr>
                                    <td colspan="5" class="judul-seksi">3. Kesehatan dan Perilaku Keselamatan</td>
                                </tr>
                            @endif

                            @if ($key == 25)
                                <tr>
                                    <td colspan="5" class="judul-seksi">III. KOGNITIF</td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="judul-seksi">1. Belajar dan Pemecahan Masalah</td>
                                </tr>
                            @endif

                            @if ($key == 29)
                                <tr>
                                    <td colspan="5" class="judul-seksi">2. Berpikir Logis</td>
                                </tr>
                            @endif

                            @if ($key == 37)
                                <tr>
                                    <td colspan="5" class="judul-seksi">3. Berpikir Simbolik</td>
                                </tr>
                            @endif

                            {{-- Soal --}}
                            <tr>
                                <td>{{ $key }}</td>
                                <td style="text-align: left;">{{ $aspek }}</td>
                                <td onclick="this.querySelector('input').click()"
                                    style="cursor: pointer; text-align: center;">
                                    <input type="radio" wire:model="nilai.{{ $key }}" value="baik">
                                </td>
                                <td onclick="this.querySelector('input').click()"
                                    style="cursor: pointer; text-align: center;">
                                    <input type="radio" wire:model="nilai.{{ $key }}" value="cukup">
                                </td>
                                <td onclick="this.querySelector('input').click()"
                                    style="cursor: pointer; text-align: center;">
                                    <input type="radio" wire:model="nilai.{{ $key }}"
                                        value="perlu_dilatih">
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

                <button wire:click="exportPdf"
                    style="
                    margin-top: 20px; 
                    padding: 10px 20px; 
                    background-color: #4F46E5; 
                    color: white; 
                    border: none; 
                    border-radius: 4px; 
                    font-weight: 500;
                    cursor: pointer;
                    transition: background-color 0.2s;
                "
                    onmouseover="this.style.backgroundColor='#4338CA'"
                    onmouseout="this.style.backgroundColor='#4F46E5'">
                    Export ke PDF
                </button>
            </div>
        @endif
    </section>
</div>
