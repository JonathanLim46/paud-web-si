<div>
    {{-- Step Navigation --}}
    <div class="text-center mb-4 mt-5">
        <h2 class="judul">FORM PENDAFTARAN ONLINE</h2>
        <h2 class="judul">PAID KB AL HUSNA</h2>

        @if ($statusPPDB === 0)
            <div class="ppdb-closed-container container text-center">
                <div class="ppdb-closed-content">
                    <div class="ppdb-icon">
                        <i class="bi bi-lock"></i>
                    </div>
                    <h3 class="ppdb-title">PPDB Belum Dibuka</h3>
                    <p class="ppdb-message">Pendaftaran Peserta Didik Baru saat ini belum dibuka. Silahkan kembali lagi
                        nanti.</p>
                </div>
            </div>
            <div class="container text-center mt-5">
                <img src="{{ asset('images/page-pendaftaran/pendaftaran_poster.png') }}" class="penerimaan-img"
                    alt="">
            </div>
        @else
            <nav class="form-nav">
                <a href="#" wire:click.prevent="setStep('ketentuan')"
                    class="nav-link {{ $step === 'ketentuan' ? 'active' : '' }}">Ketentuan</a>
                <a href="#" wire:click.prevent="setStep('data')"
                    class="nav-link {{ $step === 'data' ? 'active' : '' }}">Data Siswa</a>
                <a href="#" wire:click.prevent="setStep('konfirmasi')"
                    class="nav-link {{ $step === 'konfirmasi' ? 'active' : '' }}">Konfirmasi</a>
            </nav>
    </div>
    {{-- Step Content --}}
    @if ($step === 'ketentuan')
        <div class="container text-center">
            <img src="{{ asset('images/page-pendaftaran/pendaftaran_poster.png') }}" class="penerimaan-img"
                alt="">
        </div>
    @elseif ($step === 'data')
        {{-- form --}}
        <div class="container mt-5 mb-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="form-container">
                        <h3 class="text-center mb-4">Data Calon Siswa</h3>
                        <form>
                            <!-- NIS and NIK -->
                            <div class="mb-3">
                                <label for="nis" class="form-label">NIS</label>
                                <input type="text" class="form-control" id="nis" placeholder="2025-ABCD"
                                    wire:model="form.nis">
                                @error('form.nis')
                                    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                        <strong>{{ $message }}</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
        @endif
    </div>
    <div class="mb-3">
        <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama_lengkap" wire:model="form.nama_lengkap">
        @error('form.nama_lengkap')
            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik" wire:model="form.nik">
            @error('form.nik')
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
            <!-- Jenis Kelamin -->
            <div class="mb-3">
                <label class="form-label d-block">Jenis Kelamin</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="jk-l" value="Laki-laki" wire:model="form.jenis_kelamin">
                    <label class="form-check-label" for="jk-l">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="jk-p" value="Perempuan" wire:model="form.jenis_kelamin">
                    <label class="form-check-label" for="jk-p">Perempuan</label>
                </div>
            </div>

            <!-- Tempat Lahir -->
            <div class="mb-3">
                <label for="tempat-lahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat-lahir" wire:model="form.tempat_lahir">
            </div>

            <!-- Tanggal Lahir (Tahun, Bulan, Tanggal) -->
            <div class="mb-3">
                <label class="form-label d-block">Tanggal Lahir</label>
                <div class="d-flex gap-2">
                    <input type="text" class="form-control" placeholder="Tahun" wire:model="form.tahun_lahir">
                    <input type="text" class="form-control" placeholder="Bulan" wire:model="form.bulan_lahir">
                    <input type="text" class="form-control" placeholder="Tanggal" wire:model="form.tanggal_lahir">
                </div>
            </div>

            <!-- Agama -->
            <div class="mb-3">
                <label for="agama" class="form-label">Agama</label>
                <input type="text" class="form-control" id="agama" wire:model="form.agama"
                    placeholder="Pilih agama yang dianut">
            </div>

            <!-- Anak ke -->
            <div class="mb-3">
                <label for="anak-ke" class="form-label">Anak Ke</label>
                <input type="number" class="form-control" id="anak-ke" wire:model="form.anak_ke">
            </div>

            <!-- Berat Badan -->
            <div class="mb-3">
                <label for="berat-badan" class="form-label">Berat Badan</label>
                <input type="text" class="form-control" id="berat-badan" wire:model="form.berat_badan">
            </div>

            <!-- Tinggi Badan -->
            <div class="mb-3">
                <label for="tinggi-badan" class="form-label">Tinggi Badan</label>
                <input type="text" class="form-control" id="tinggi-badan" wire:model="form.tinggi_badan">
            </div>

            <!-- Lingkar Kepala -->
            <div class="mb-3">
                <label for="lingkar-kepala" class="form-label">Lingkar Kepala</label>
                <input type="text" class="form-control" id="lingkar-kepala" wire:model="form.lingkar_kepala">
            </div>

            <!-- Alamat -->
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" wire:model="form.alamat">
            </div>

            <div class="mb-3">
                <div class="row g-2">
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Desa" wire:model="form.desa">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Kecamatan" wire:model="form.kecamatan">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Kabupaten" wire:model="form.kabupaten">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Provinsi" wire:model="form.provinsi">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Kode Pos" wire:model="form.kode_pos">
                    </div>
                </div>
            </div>
            <h4>Data Ayah</h4>
            <div class="mb-3">
                <label for="nama-ibu" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama-ibu">
            </div>
            <div class="mb-3">
                <label for="nik-ibu" class="form-label">NIK</label>
                <input type="text" class="form-control" id="nik-ibu">
            </div>
            <div class="mb-3">
                <label for="pekerjaan-ibu" class="form-label">Pekerjaan</label>
                <input type="text" class="form-control" id="pekerjaan-ibu">
            </div>

            <!-- Data Ibu -->
            <h4>Data Ibu</h4>
            <div class="mb-3">
                <label for="nama-ibu" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama-ibu">
            </div>
            <div class="mb-3">
                <label for="nik-ibu" class="form-label">NIK</label>
                <input type="text" class="form-control" id="nik-ibu">
            </div>
            <div class="mb-3">
                <label for="pekerjaan-ibu" class="form-label">Pekerjaan</label>
                <input type="text" class="form-control" id="pekerjaan-ibu">
            </div>

            <!-- Data Wali -->
            <h4>Data Wali</h4>
            <div class="mb-3">
                <label for="nama-wali" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama-wali">
            </div>
            <div class="mb-3">
                <label for="nik-wali" class="form-label">NIK</label>
                <input type="text" class="form-control" id="nik-wali">
            </div>
            <div class="mb-3">
                <label for="pekerjaan-wali" class="form-label">Pekerjaan</label>
                <input type="text" class="form-control" id="pekerjaan-wali">
            </div>
            <div class="mb-3">
                <label for="no-hp-orang-tua" class="form-label">No HP Orang Tua</label>
                <input type="text" class="form-control" id="no-hp-orang-tua">
            </div>

            <!-- Data Sekolah -->
            <h4>Data Sekolah</h4>
            <div class="mb-3">
                <label for="asal-sekolah" class="form-label">Asal Sekolah</label>
                <input type="text" class="form-control" id="asal-sekolah">
            </div>
            <div class="mb-3">
                <label for="jenjang-sekolah" class="form-label">Pilih Jenjang Sekolah</label>
                <select class="form-select" id="jenjang-sekolah">
                    <option selected>Pilih Jenjang Sekolah</option>
                    <option value="1">TK</option>
                    <option value="2">SD</option>
                    <option value="3">SMP</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="status-sekolah" class="form-label">Pilih Status Sekolah</label>
                <select class="form-select" id="status-sekolah">
                    <option selected>Pilih Status Sekolah</option>
                    <option value="1">Negeri</option>
                    <option value="2">Swasta</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="npsn" class="form-label">NPSN</label>
                <input type="text" class="form-control" id="npsn">
            </div>
            <div class="mb-3">
                <label for="npsn" class="form-label">Lokasi Sekolah</label>
                <input type="text" class="form-control" id="npsn">
            </div>

            <!-- File Uploads -->
            <h4>Unggah Dokumen Persyaratan</h4>
            <div class="mb-3">
                <label for="kk-upload" class="form-label">Upload Kartu Keluarga (KK)</label>
                <input type="file" class="form-control file-input" id="kk-upload">
                <small class="form-text text-muted">Format: PDF, Maks 2MB</small>
            </div>
            <div class="mb-3">
                <label for="akta-kelahiran-upload" class="form-label">Upload Akta Kelahiran</label>
                <input type="file" class="form-control file-input" id="akta-kelahiran-upload">
                <small class="form-text text-muted">Format: PDF, Maks 2MB</small>
            </div>
            <div class="mb-3">
                <label for="ktp-orang-tua-upload" class="form-label">Upload KTP Orang Tua</label>
                <input type="file" class="form-control file-input" id="ktp-orang-tua-upload">
                <small class="form-text text-muted">Format: PDF, Maks 2MB</small>
            </div>
            <div class="mb-3">
                <label for="surat-rekomendasi-upload" class="form-label">Upload Surat Rekomendasi Pindah (Optional)</label>
                <input type="file" class="form-control file-input" id="surat-rekomendasi-upload">
                <small class="form-text text-muted">Format: PDF, Maks 2MB</small>
            </div>
            </form>
            </div>
            </div>
            </div>
            </div>
            {{-- form --}}
        @elseif ($step === 'konfirmasi')
            <div class="container py-5">
                <div class="card confirm-card p-4 mx-auto" style="max-width: 750px;">
                    <div class="card-body text-center">
                        <h4 class="card-title fw-bold mb-1">KONFIRMASI</h4>
                        <h5 class="card-subtitle mb-4">DATA CALON SISWA</h5>

                        <div class="text-start mb-4">
                            <p class="mb-0">Proses pendaftaran online PAUD KB Al Husna Tahun Pelajaran 2025-2026 hampir selesai.
                                Silahkan periksa kembali data yang sudah anda masukkan. Klik Kembali untuk melihat data yang anda
                                masukkan</p>
                        </div>

                        <div class="text-start mb-3">
                            <p class="confirmation-text">Apakah data yang anda masukkan sudah sesuai?</p>
                        </div>

                        <div class="confirmation-box text-start">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="confirmation" id="confirmYes" checked>
                                <label class="form-check-label" for="confirmYes">
                                    Ya, data yang saya masukkan sudah sesuai syarat & ketentuan pendaftaran online PAUD KB Al-Husna
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            {{-- Navigasi Tombol --}}
            <div class="container mt-4">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="button-container d-flex justify-content-between">
                            @if ($step !== 'ketentuan')
                                <button type="button" class="btn button-next" wire:click="prevStep">← Kembali</button>
                            @endif

                            @if ($step !== 'konfirmasi')
                                <button type="button" class="btn button-next" wire:click="nextStep">Selanjutnya →</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endif
            </div>
