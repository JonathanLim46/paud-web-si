@section('styles')
    <style>
        .card-profile {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.04);
        }

        .section-title {
            font-weight: 600;
            margin-top: 2rem;
            font-size: 1.1rem;
            color: #1a202c;
        }

        .data-label {
            color: #6b7280;
            font-size: 0.85rem;
        }

        .data-value {
            font-weight: 500;
        }

        .status-btn {
            background-color: #e2e8f0;
            color: #4a5568;
            border: none;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 14px;
        }

        .link-blue {
            color: #3b82f6;
            text-decoration: none;
            font-weight: 500;
        }

        .link-blue:hover {
            text-decoration: underline;
        }

        .data-row {
            margin-bottom: 0.75rem;
        }

        .status-diterima {
            background-color: #c6f6d5 !important;
            color: #276749 !important;
        }

        .status-ditolak {
            background-color: #fed7d7 !important;
            color: #c53030 !important;
        }

        .status-pending {
            background-color: #e9e9e9 !important;
            color: #718096 !important;
        }
    </style>
@endsection
<div>
    @if ($success_status)
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            <strong>{{ $message_status_error }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if ($error_status)
        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            <strong>{{ $message_status_error }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <section class="mt-4 p-5 info-dashboard shadow-sm">
        <div class="card-profile">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="fw-semibold mb-0">Data Pribadi</h4>
                <div class="ms-auto d-flex gap-2">
                    <a href="https://wa.me/62{{ $pendaftar->no_telp }}?text=Halo,%20terima%20kasih%20telah%20mendaftar%20PPDB%20di%20PAUD%20KB%20AL%20HUSNA.%20Kami%20ingin%20mengonfirmasi%20bahwa%20data%20pendaftaran%20Anda%20telah%20kami%20terima.%20Apakah%20Bapak/Ibu%20bersedia%20melanjutkan%20ke%20proses%20pendaftaran%20ulang?" target="_blank" class="btn btn-success">Whatsapp</a>
                    
                    @if ($status == 'Diterima')
                    <div class="dropdown">
                        <button
                            class="btn dropdown-toggle btn-outline-secondary"
                            type="button" id="statusDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            Kelas: {{ $pendaftar->kelas->nama_kelas ?? 'Tentukan Kelas' }}
                        </button>

                        <ul class="dropdown-menu" aria-labelledby="statusDropdown">
                            @foreach ($all_kelas as $kelas)
                            <li><a class="dropdown-item"
                                    wire:click="setKelas({{ $kelas->id_kelas }}, {{ $pendaftar->id_pendaftaran }})">
                                    {{ $kelas->nama_kelas }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="dropdown">
                        <button
                            class="btn dropdown-toggle {{ $status === 'Diterima' ? 'status-diterima' : ($status === 'Ditolak' ? 'status-ditolak' : 'status-pending') }}"
                            type="button" id="statusDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            Status: {{ $status ?? '--' }}
                        </button>

                        <ul class="dropdown-menu" aria-labelledby="statusDropdown">
                            <li><a class="dropdown-item"
                                    wire:click="setStatus('Diterima', {{ $pendaftar->id_pendaftaran }})">Diterima</a>
                            </li>
                            <li><a class="dropdown-item"
                                    wire:click="setStatus('Ditolak', {{ $pendaftar->id_pendaftaran }})">Ditolak</a></li>
                            <li><a class="dropdown-item"
                                    wire:click="setStatus('Tahap Verifikasi', {{ $pendaftar->id_pendaftaran }})">Tahap
                                    Verifikasi</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- Data Pribadi -->
            <div class="row">
                <div class="col-md-6 data-row"><span class="data-label">NIS</span><br><span
                        class="data-value">{{ $pendaftar->dataPribadi->nis }}</span></div>
                <div class="col-md-6 data-row"><span class="data-label">Nama Lengkap</span><br><span
                        class="data-value">{{ $pendaftar->dataPribadi->nama_lengkap }}</span></div>
                <div class="col-md-6 data-row"><span class="data-label">NIK</span><br><span
                        class="data-value">{{ $pendaftar->dataPribadi->nik }}</span></div>
                <div class="col-md-6 data-row"><span class="data-label">Jenis Kelamin</span><br><span
                        class="data-value">{{ $pendaftar->dataPribadi->jenis_kelamin }}</span></div>
                <div class="col-md-6 data-row"><span class="data-label">Tempat Lahir</span><br><span
                        class="data-value">{{ $pendaftar->dataPribadi->tempat_lahir }}</span></div>
                <div class="col-md-6 data-row">
                    <span class="data-label">Tanggal Lahir</span><br>
                    <span
                        class="data-value">{{ \Carbon\Carbon::parse($pendaftar->dataPribadi->tanggal_lahir)->translatedFormat('F d, Y') }}</span>
                </div>
                <div class="col-md-6 data-row"><span class="data-label">Agama</span><br>
                    <span class="data-value">{{ $pendaftar->dataPribadi->agama }}</span>
                </div>
                <div class="col-md-6 data-row"><span class="data-label">Anak Ke</span><br>
                    <span class="data-value">{{ $pendaftar->dataPribadi->anak_ke }}</span>
                </div>
                <div class="col-md-6 data-row"><span class="data-label">Berat Badan</span><br>
                    <span class="data-value">{{ $pendaftar->dataPribadi->berat_badan }} kg</span>
                </div>
                <div class="col-md-6 data-row"><span class="data-label">Tinggi Badan</span><br>
                    <span class="data-value">
                        {{ $pendaftar->dataPribadi->tinggi_badan }} cm
                    </span>
                </div>
                <div class="col-md-6 data-row"><span class="data-label">Lingkar Kepala</span><br>
                    <span class="data-value">
                        {{ $pendaftar->dataPribadi->lingkar_kepala }} cm
                    </span>
                </div>
                <div class="col-md-12 data-row"><span class="data-label">Alamat</span><br>
                    <span class="data-value">{{ $pendaftar->dataPribadi->alamat_rumah }}</span>
                </div>
                <div class="col-md-3 data-row"><span class="data-label">Desa atau Kelurahan</span><br>
                    <span class="data-value">{{ $pendaftar->dataPribadi->desa_kelurahan }}</span>
                </div>
                <div class="col-md-3 data-row"><span class="data-label">Kecamatan</span><br>
                    <span class="data-value">{{ $pendaftar->dataPribadi->kecamatan }}</span>
                </div>
                <div class="col-md-3 data-row"><span class="data-label">Kabupaten atau Kota</span><br>
                    <span class="data-value">{{ $pendaftar->dataPribadi->kota_kabupaten }}</span>
                </div>
                <div class="col-md-3 data-row"><span class="data-label">Provinsi</span><br>
                    <span class="data-value">
                        {{ $pendaftar->dataPribadi->provinsi }}
                    </span>
                </div>
            </div>

            <!-- Orang Tua -->
            <div class="section-title">Orang Tua</div>
            <div class="row">
                <div class="col-md-6">
                    <div class="data-row"><span class="data-label">Nama Ayah</span><br>
                        <span class="data-value">
                            {{ $pendaftar->dataOrangTua->nama_ayah }}
                        </span>
                    </div>
                    <div class="data-row"><span class="data-label">NIK Ayah</span><br>
                        <span class="data-value">
                            {{ $pendaftar->dataOrangTua->nik_ayah }}
                        </span>
                    </div>
                    <div class="data-row"><span class="data-label">Pekerjaan Ayah</span><br>
                        <span class="data-value">
                            {{ $pendaftar->dataOrangTua->pekerjaan_ayah }}
                        </span>
                    </div>
                    <div class="data-row"><span class="data-label">Nomer Whatsapp</span><br>
                        <span class="data-value">
                            {{ $pendaftar->no_telp }}
                        </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="data-row"><span class="data-label">Nama Ibu</span><br>
                        <span class="data-value">
                            {{ $pendaftar->dataOrangTua->nama_ibu }}
                        </span>
                    </div>
                    <div class="data-row"><span class="data-label">NIK Ibu</span><br>
                        <span class="data-value">
                            {{ $pendaftar->dataOrangTua->nik_ibu }}
                        </span>
                    </div>
                    <div class="data-row"><span class="data-label">Pekerjaan Ibu</span><br>
                        <span class="data-value">
                            {{ $pendaftar->dataOrangTua->pekerjaan_ibu }}
                        </span>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="data-row"><span class="data-label">Nama Wali</span><br>
                        <span class="data-value">
                            {{ $pendaftar->dataOrangTua->nama_wali }}
                        </span>
                    </div>
                    <div class="data-row"><span class="data-label">NIK Wali</span><br>
                        <span class="data-value">
                            {{ $pendaftar->dataOrangTua->nik_wali }}
                        </span>
                    </div>
                    <div class="data-row"><span class="data-label">Pekerjaan Wali</span><br>
                        <span class="data-value">
                            {{ $pendaftar->dataOrangTua->pekerjaan_wali }}
                        </span>
                    </div>
                </div>
            </div>

            <!-- Data Sekolah -->
            @if ($pendaftar->dataSekolah)
                <div class="section-title">Data Sekolah</div>
                <div class="row">
                    <div class="col-md-4 data-row"><span class="data-label">NPSN</span><br><span
                            class="data-value">{{ $pendaftar->dataSekolah->npsn }}</span></div>
                    <div class="col-md-4 data-row"><span class="data-label">Nama Sekolah</span><br><span
                            class="data-value">{{ $pendaftar->dataSekolah->nama_sekolah }}</span></div>
                    <div class="col-md-4 data-row"><span class="data-label">Status Sekolah</span><br><span
                            class="data-value">{{ $pendaftar->dataSekolah->status_sekolah }}</span></div>
                    <div class="col-md-6 data-row"><span class="data-label">Alamat Sekolah</span><br><span
                            class="data-value">{{ $pendaftar->dataSekolah->alamat_sekolah }}</span></div>
                </div>
            @endif

            <!-- Dokumen Persyaratan -->
            <div class="section-title">Dokumen Persyaratan</div>
            <div class="row">
                <div class="col-md-6 data-row"><span class="data-label">Kartu Keluarga (KK)</span><br>
                    <a href="{{ asset('storage/data_pendaftar/' . $pendaftar->dataPribadi->nik . '/dokumen/' . $pendaftar->dokumen->kartu_keluarga) }}"
                        class="link-blue">Lihat
                    </a>
                </div>
                <div class="col-md-6 data-row"><span class="data-label">Akta Kelahiran</span><br>
                    <a href="{{ asset('storage/data_pendaftar/' . $pendaftar->dataPribadi->nik . '/dokumen/' . $pendaftar->dokumen->akta_kelahiran) }}"
                        class="link-blue">Lihat</a>
                </div>
                <div class="col-md-6 data-row"><span class="data-label">KTP Ayah</span><br>
                    <a href="{{ asset('storage/data_pendaftar/' . $pendaftar->dataPribadi->nik . '/dokumen/' . $pendaftar->dokumen->ktp_ayah) }}"
                        class="link-blue">Lihat</a>
                </div>
                <div class="col-md-6 data-row"><span class="data-label">KTP Ibu</span><br>
                    <a href="{{ asset('storage/data_pendaftar/' . $pendaftar->dataPribadi->nik . '/dokumen/' . $pendaftar->dokumen->ktp_ibu) }}"
                        class="link-blue" target="_blank">Lihat</a>
                </div>
                @if ($pendaftar->dokumen->surat_pindah)
                    <div class="col-md-6 data-row"><span class="data-label">Surat Pindah</span><br>
                        <a href="{{ asset('storage/data_pendaftar/' . $pendaftar->dataPribadi->nik . '/dokumen/' . $pendaftar->dokumen->surat_pindah) }}"
                            class="link-blue" target="_blank">Lihat</a>
                    </div>
                @endif
            </div>
        </div>
    </section>
</div>
