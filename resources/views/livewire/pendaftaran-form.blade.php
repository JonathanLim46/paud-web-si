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
                        <form id="formDaftar">
                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" class="form-control" id="nik" placeholder="NIK"
                                    wire:model.defer="data_murid.nik">
                                @error('data_murid.nik')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap"
                                wire:model.defer="data_murid.nama_lengkap">
                                @error('data_murid.nama_lengkap')
                                    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                        <strong>{{ $message }}</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="no-hp-orang-tua" class="form-label">No HP Orang Tua</label>
                                <input type="text" class="form-control" id="no-hp-orang-tua" wire:model.defer="no_telp">
                            </div>
                            <!-- Jenis Kelamin -->
                            <div class="mb-3">
                                <label class="form-label d-block">Jenis Kelamin</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="jk-l" value="Laki-laki" 
                                    wire:model.defer="data_murid.jenis_kelamin">
                                    <label class="form-check-label" for="jk-l">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="jk-p" value="Perempuan"
                                    wire:model.defer="data_murid.jenis_kelamin">
                                    <label class="form-check-label" for="jk-p">Perempuan</label>
                                </div>
                                @error('data_murid.jenis_kelamin')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>

                            <!-- Tempat Lahir -->
                            <div class="mb-3">
                                <label for="tempat-lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat-lahir" wire:model.defer="data_murid.tempat_lahir">
                                @error('data_murid.tempat_lahir')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>

                            <!-- Tanggal Lahir (Tahun, Bulan, Tanggal) -->
                            <div class="mb-3">
                                <label class="form-label d-block">Tanggal Lahir</label>
                                <div class="d-flex gap-2">
                                    <input type="date" class="form-control" placeholder="Tanggal Lahir" 
                                    max="{{ now()->toDateString() }}" wire:model.defer="data_murid.tanggal_lahir">
                                </div>
                                @error('data_murid.tanggal_lahir')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>

                            <!-- Agama -->
                            <div class="mb-3">
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
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>

                            <!-- Anak ke -->
                            <div class="mb-3">
                                <label for="anak-ke" class="form-label">Anak Ke</label>
                                <input type="number" class="form-control" id="anak-ke" wire:model.defer="data_murid.anak_ke">
                                @error('data_murid.anak_ke')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>

                            <!-- Berat Badan -->
                            <div class="mb-3">
                                <label for="berat-badan" class="form-label">Berat Badan</label>
                                <input type="number" class="form-control" id="berat-badan" wire:model.defer="data_murid.berat_badan" min="0">
                                @error('data_murid.berat_badan')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>

                            <!-- Tinggi Badan -->
                            <div class="mb-3">
                                <label for="tinggi-badan" class="form-label">Tinggi Badan</label>
                                <input type="number" class="form-control" id="tinggi-badan" wire:model.defer="data_murid.tinggi_badan" min="0">
                                @error('data_murid.tinggi_badan')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>

                            <!-- Lingkar Kepala -->
                            <div class="mb-3">
                                <label for="lingkar-kepala" class="form-label">Lingkar Kepala</label>
                                <input type="number" class="form-control" id="lingkar-kepala" wire:model.defer="data_murid.lingkar_kepala" min="0">
                                @error('data_murid.lingkar_kepala')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>

                            <!-- Alamat -->
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" wire:model.defer="data_murid.alamat_rumah">
                                @error('data_murid.alamat_rumah')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
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
                            </div>

                            <h4>Data Ayah</h4>
                            <div class="mb-3">
                                <label for="nama-ayah" class="form-label">Nama Lengkap Ayah</label>
                                <input type="text" class="form-control" id="nama-ayah" wire:model.defer="data_orang_tua_wali.nama_ayah">
                                @error('data_orang_tua_wali.nama_ayah')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nik-ayah" class="form-label">NIK Ayah</label>
                                <input type="text" class="form-control" id="nik-ayah" wire:model.defer="data_orang_tua_wali.nik_ayah">
                                @error('data_orang_tua_wali.nik_ayah')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="pekerjaan-ayah" class="form-label">Pekerjaan Ayah</label>
                                <input type="text" class="form-control" id="pekerjaan-ayah" wire:model.defer="data_orang_tua_wali.pekerjaan_ayah">
                                @error('data_orang_tua_wali.pekerjaan_ayah')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>

                            <!-- Data Ibu -->
                            <h4>Data Ibu</h4>
                            <div class="mb-3">
                                <label for="nama-ibu" class="form-label">Nama Lengkap Ibu</label>
                                <input type="text" class="form-control" id="nama-ibu" wire:model.defer="data_orang_tua_wali.nama_ibu">
                                @error('data_orang_tua_wali.nama_ibu')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nik-ibu" class="form-label">NIK Ibu</label>
                                <input type="text" class="form-control" id="nik-ibu" wire:model.defer="data_orang_tua_wali.nik_ibu">
                                @error('data_orang_tua_wali.nik_ibu')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="pekerjaan-ibu" class="form-label">Pekerjaan Ibu</label>
                                <input type="text" class="form-control" id="pekerjaan-ibu" wire:model.defer="data_orang_tua_wali.pekerjaan_ibu">
                                @error('data_orang_tua_wali.pekerjaan_ibu')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>

                            <!-- Data Wali -->
                            <h4>Data Wali</h4>
                            <div class="mb-3">
                                <label for="nama-wali" class="form-label">Nama Lengkap Wali</label>
                                <input type="text" class="form-control" id="nama-wali" wire:model.defer="data_orang_tua_wali.nama_wali">
                                @error('data_orang_tua_wali.nama_wali')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nik-wali" class="form-label">NIK Wali</label>
                                <input type="text" class="form-control" id="nik-wali" wire:model.defer="data_orang_tua_wali.nik_wali">
                                @error('data_orang_tua_wali.nik_wali')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="pekerjaan-wali" class="form-label">Pekerjaan Wali</label>
                                <input type="text" class="form-control" id="pekerjaan-wali" wire:model.defer="data_orang_tua_wali.pekerjaan_wali">
                                @error('data_orang_tua_wali.pekerjaan_wali')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>


                            <div class="form-check mb-3 mt-4">
                                <input class="form-check-input" type="checkbox" id="cekSekolah" 
                                wire:change="sekolahCheck($event.target.checked)">
                                <label class="form-check-label" for="cekSekolah">
                                    Apakah memiliki data sekolah sebelumnya?
                                </label>
                            </div>

                            @if ($isSekolahChecked == 'buka')
                            <!-- Data Sekolah -->
                            <h4>Data Sekolah</h4>
                            <div class="mb-3">
                                <label for="npsn" class="form-label">NPSN</label>
                                <input type="text" class="form-control" id="NPSN" wire:model.defer="data_sekolah.npsn">
                                @error('data_sekolah.npsn')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div> 
                            <div class="mb-3">
                                <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
                                <input type="text" class="form-control" id="nama_sekolah" wire:model.defer="data_sekolah.nama_sekolah">
                                @error('data_sekolah.nama_sekolah')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="status-sekolah" class="form-label">Pilih Status Sekolah</label>
                                <select class="form-select" id="status-sekolah" wire:model.defer="data_sekolah.status_sekolah">
                                    <option selected>Pilih Status Sekolah</option>
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
                            <div class="mb-3">
                                <label for="alamat_sekolah" class="form-label">Alamat Sekolah</label>
                                <input type="text" class="form-control" id="alamat_sekolah" wire:model.defer="data_sekolah.alamat_sekolah">
                                @error('data_sekolah.alamat_sekolah')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            @endif

                            <!-- File Uploads -->
                            <h4>Unggah Dokumen Persyaratan</h4>
                            <div class="mb-3">
                                <label for="kk-upload" class="form-label">Upload Kartu Keluarga (KK)</label>
                                <input type="file" class="form-control file-input" id="kk-upload"
                                wire:model.defer="data_dokumen.kartu_keluarga">
                                <small class="form-text text-muted">Format: PDF, Maks 2MB</small>
                                @error('data_dokumen.kartu_keluarga')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="akta-kelahiran-upload" class="form-label">Upload Akta Kelahiran</label>
                                <input type="file" class="form-control file-input" id="akta-kelahiran-upload"
                                wire:model.defer="data_dokumen.akta_kelahiran">
                                <small class="form-text text-muted">Format: PDF, Maks 2MB</small>
                                @error('data_dokumen.akta_kelahiran')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="ktp-orang-tua-upload" class="form-label">Upload KTP Ayah</label>
                                <input type="file" class="form-control file-input" id="ktp-orang-tua-upload"
                                wire:model.defer="data_dokumen.ktp_ayah">
                                <small class="form-text text-muted">Format: PDF, Maks 2MB</small>
                                @error('data_dokumen.ktp_ayah')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="ktp-orang-tua-upload" class="form-label">Upload KTP Ibu</label>
                                <input type="file" class="form-control file-input" id="ktp-orang-tua-upload"
                                wire:model.defer="data_dokumen.ktp_ibu">
                                <small class="form-text text-muted">Format: PDF, Maks 2MB</small>
                                @error('data_dokumen.ktp_ibu')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="surat-rekomendasi-upload" class="form-label">Upload Surat Rekomendasi Pindah (Optional)</label>
                                <input type="file" class="form-control file-input" id="surat-rekomendasi-upload"
                                wire:model.defer="data_dokumen.surat_pindah">
                                <small class="form-text text-muted">Format: PDF, Maks 2MB</small>
                                @error('data_dokumen.surat_pindah')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @enderror
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
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
                        <button type="button" wire:click="store" class="btn col-md-5 btn-success mt-3">Kirim</button>
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
