@section("styles")
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
    @if (Auth::user()->level == "admin")
    <section class="mt-3 p-4 info-dashboard shadow-sm rounded-4">
      <header class="fw-bold fs-5 header-info">Total Murid-Guru</header>
      <p class="title-info">PAUD KB AL-HUSNA</p>
      <div class="d-flex flex-row gap-4 flex-wrap mt-4">
        <div class="card rounded-5 mt-4" style="background-color: #F26419">
          <div class="card-body p-0">
            <div class="row h-100">
              <div class="col d-flex flex-column">
                <header>{{ $murids }}</header>
                <p class="mt-auto title-card">Murid</p>
              </div>
              <div class="col d-flex">
                <header class="ms-auto">
                  <i class="fa-solid fa-graduation-cap"></i>
                </header>
              </div>
            </div>
          </div>
        </div>
        <div class="card rounded-5 mt-4" style="background-color: #F6AE2D">
          <div class="card-body p-0">
            <div class="row h-100">
              <div class="col d-flex flex-column">
                <header>{{ $gurus }}</header>
                <p class="mt-auto title-card">Guru</p>
              </div>
              <div class="col d-flex">
                <header class="ms-auto">
                  <i class="fa-solid fa-user"></i>
                </header>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endif

  @if (Auth::user()->level == "guru")
  <section class="mt-3 p-4 info-dashboard shadow-sm rounded-4">
    <header class="fw-bold fs-5 header-info">Jadwal Mengajar</header>
    <button type="button" class="btn btn-outline-success mt-2"
                    data-bs-toggle="modal" data-bs-target="#modalAddKelas">
                    <i class="fa-solid fa-plus"></i>
                    Tambah Jadwal
                </button>
    <table class="mt-4 table table-bordered text-center align-middle" >
      <thead>
        <th scope="col" class="col">Hari</th>
        @foreach ($jadwals->unique('kelas_id') as $kelas)
        <th scope="col" class="col">{{ $kelas->kelas->tingkat_kelas }}</th>
        @endforeach
        <th scope="col" class="col">Aksi</th>
      </thead>
      <tbody>
        @foreach($jadwals->groupBy('hari_id') as $hari_id => $jadwalGroup)
        <tr>
            <td>{{ $jadwals->firstWhere('hari_id', $hari_id)->hari->nama_hari }}</td>
            @foreach($jadwals->unique('kelas_id') as $kelas)
                <td>
                    @foreach($jadwalGroup->where('kelas_id', $kelas->kelas_id) as $jadwal)
                        @if($loop->first)
                            <p style="display:inline;">{{ $jadwal->guru->user->name }}</p>
                        @elseif($loop->parent->first)
                            <p style="display:inline;">& {{ $jadwal->guru->user->name }}</p>
                        @endif
                    @endforeach
                </td>
            @endforeach
            <td>
              <a href="#" data-bs-toggle="modal" data-bs-target="#modalEditKelas"  class="btn btn-warning"><i class="bi bi-pencil"></i></a>
              <a href="#" data-bs-toggle="modal" data-bs-target="#modalDeleteJadwal"  class="btn btn-danger"><i class="bi bi-trash"></i></a>

            </td>
        </tr>
    @endforeach
      </tbody>
    </table>
  </section>

  <section class="mt-3 p-4 info-dashboard shadow-sm rounded-4">
    <header class="fw-bold fs-5 header-info">Metode Pembelajaran Per-Bulan</header>
    <table class="mt-4 table table-bordered table-metode w-50">
      <thead>
        <th scope="col" class="col">Minggu</th>
        <th scope="col" class="col">Metode</th>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>STEAM</td>
        </tr>
          <th scope="row">2</th>
          <td>Sentra (bahan alam, persiapan, imtak)</td>
        </tr>
          <th scope="row">3</th>
          <td>STEAM</td>
        </tr>
          <th scope="row">4</th>
          <td>Sentra (bahan alam, persiapan, imtak)</td>
        </tr>
      </tbody>
    </table>
  </section>

  <section class="mt-3 p-4 info-dashboard shadow-sm rounded-4">
    <header class="fw-bold fs-5 header-info">Jadwal Sastra</header>
    {{-- Step Navigation --}}
    <div class="mb-4">
      <nav class="form-nav" id="minggu">
          <a href="#minggu" wire:click.prevent="setStep('Minggu2')" class="nav-link {{ $step === 'Minggu2' ? 'active' : '' }}">Minggu 2</a>
          <a href="#minggu" wire:click.prevent="setStep('Minggu4')" class="nav-link {{ $step === 'Minggu4' ? 'active' : '' }}">Minggu 4</a>
      </nav>
  </div>

  @if ($step === 'Minggu2')
  <table class="mt-4 table table-bordered table-metode w-50">
    <thead>
      <tr>
        <th scope="col" class="col">Hari</th>
        <th scope="col" class="col">A Mandiri</th>
        <th scope="col" class="col">A Kreatif</th>
        <th scope="col" class="col">B Ceria</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Rabu</th>
        <td style="background-color: #fef2b7">Bahan Alam</td>
        <td style="background-color: #b6e0f7">Imtak</td>
        <td style="background-color: #f8d1f4">Persiapan</td>
      </tr>
      <tr>
        <th scope="row">Kamis</th>
        <td style="background-color: #f8d1f4">Persiapan</td>
        <td style="background-color: #fef2b7">Bahan Alam</td>
        <td style="background-color: #b6e0f7">Imtak</td>
      </tr>
      <tr>
        <th scope="row">Jumat</th>
        <td style="background-color: #b6e0f7">Imtak</td>
        <td style="background-color: #f8d1f4">Persiapan</td>
        <td style="background-color: #fef2b7">Bahan Alam</td>
      </tr>
    </tbody>
  </table>
  
    @elseif ($step === 'Minggu4')
    <table class="mt-4 table table-bordered table-metode w-50">
      <thead>
        <tr>
          <th scope="col" class="col">Hari</th>
          <th scope="col" class="col">A Mandiri</th>
          <th scope="col" class="col">A Kreatif</th>
          <th scope="col" class="col">B Ceria</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Rabu</th>
          <td style="background-color: #fef2b7">Seni</td>
          <td style="background-color: #b6e0f7">Masak</td>
          <td style="background-color: #f8d1f4">Role Play</td>
        </tr>
        <tr>
          <th scope="row">Kamis</th>
          <td style="background-color: #f8d1f4">Role Play</td>
          <td style="background-color: #fef2b7">Seni</td>
          <td style="background-color: #b6e0f7">Masak</td>
        </tr>
        <tr>
          <th scope="row">Jumat</th>
          <td style="background-color: #b6e0f7">Masak</td>
          <td style="background-color: #f8d1f4">Role Play</td>
          <td style="background-color: #fef2b7">Seni</td>
        </tr>
      </tbody>
    </table>
    
    @endif
  </section>
  @endif

{{-- add modal --}}
<div class="modal fade" id="modalAddKelas" tabindex="-1" aria-labelledby="modalAddKelas" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold" id="filterModalLabel">Tambah Jadwal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <div class="row g-3">
          <div class="col-md-6">
            <label class="form-label">Hari</label>
            <select  class="form-select">
              <option value="">Senin</option>
              <option value="">Selasa</option>
              <option value="">Rabu</option>
              <option value="">Kamis</option>
              <option value="">Jumat</option>
              <option value="">Sabtu</option>
              <option value="">Minggu</option>
            </select>
          </div>
          <div class="col-md-6">
            <label class="form-label">Nama Kelas</label>
            <select  class="form-select">
              <option value="">A</option>
              <option value="">B</option>
              <option value="">C</option>
            
            </select>
          </div>
          <div class="col-md-12">
            <label class="form-label">Nama Guru</label>
            <select  class="form-select">
              <option value="">Tirtayasa Kenes Saragih S.Sos</option>
              <option value="">Mustofa Gamblang Rajata S.Pt	</option>
            
            </select>
          </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" wire:click="applyFilter" data-bs-dismiss="modal">Tambah</button>
      </div>
    </div>
  </div>
</div>

{{-- edit modal --}}
<div class="modal fade" id="modalEditKelas" tabindex="-1" aria-labelledby="modalEditKelas" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold" id="filterModalLabel">Edit Jadwal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <div class="row g-3">
          <div class="col-md-12">
            <label class="form-label">Hari</label>
            <select  class="form-select">
              <option value="">Senin</option>
              <option value="">Selasa</option>
              <option value="">Rabu</option>
              <option value="">Kamis</option>
              <option value="">Jumat</option>
              <option value="">Sabtu</option>
              <option value="">Minggu</option>
            </select>
          </div>

          <div class="col-md-12">
            <label class="form-label">Nama Guru Kelas A</label>
            <select  class="form-select">
              <option value="">Tirtayasa Kenes Saragih S.Sos</option>
              <option value="">Mustofa Gamblang Rajata S.Pt	</option>
            </select>
          </div>
          <div class="col-md-12">
            <label class="form-label">Nama Guru Kelas B</label>
            <select  class="form-select">
              <option value="">Tirtayasa Kenes Saragih S.Sos</option>
              <option value="">Mustofa Gamblang Rajata S.Pt	</option>
            </select>
          </div>
          <div class="col-md-12">
            <label class="form-label">Nama Guru Kelas C</label>
            <select  class="form-select">
              <option value="">Tirtayasa Kenes Saragih S.Sos</option>
              <option value="">Mustofa Gamblang Rajata S.Pt	</option>
            </select>
          </div>
          

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" wire:click="applyFilter" data-bs-dismiss="modal">Tambah</button>
      </div>
    </div>
  </div>
</div>
{{-- modal delete --}}
<div class="modal fade" id="modalDeleteJadwal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalDeleteJadwal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalDeleteGuruLabel">Konfirmasi Hapus</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p class="fs-5">Apakah Anda yakin ingin menghapus data Jadwal ini?</p>
                </div>
                <div class="modal-footer justify-content-center">
                    {{-- <form action="{{ route('guru.destroy', ['id' => 'ID_GURU']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form> --}}
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Hapus</button>
                </div>
            </div>
        </div>
    </div>
</div>
