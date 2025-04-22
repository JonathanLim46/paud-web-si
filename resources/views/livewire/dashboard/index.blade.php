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
    <table class="mt-4 table table-bordered">
      <thead>
        <th scope="col" class="col">Hari</th>
        @foreach ($jadwals->unique('kelas_id') as $kelas)
        <th scope="col" class="col">{{ $kelas->kelas->tingkat_kelas }}</th>
        @endforeach
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
  @endif
</div>
