@section('styles')
<link rel="stylesheet" href="{{ asset('css/dashboard_profil_styles.css') }}">
@endsection
<div>
    <button type="button" class="btn btn-outline-success mt-2"
    data-bs-toggle="modal" data-bs-target="#modalTambahGambar">
      <i class="fa-solid fa-plus"></i>
      Tambah Gambar
    </button>
    <div class="row mt-5 pe-3 gy-4 row-cols-4">
      @if ($activitys->count() > 0)
      @foreach ($activitys as $activity)
      <div class="div" wire:key="{{ $activity->id }}">
        <div class="col d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
              <img src="{{ asset('storage/galeri/'.$activitys->foto_aktivitas) }}" class="card-img-top img-card" alt="...">
              <div class="card-body text-center">
                <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapusGambar"
                wire:click="openHapusModal({{ $activity->id }})">Hapus Foto</a>
                <a href="#" class="btn btn-primary ms-4" data-bs-toggle="modal" data-bs-target="#modalEditGambar" 
                wire:click="openEditModal({{ $activity->id }})">Ganti Foto</a>
              </div>
          </div>
      </div>
      </div>
      @endforeach
      @else
      <p>*tambahkan gambar terlebih dahulu.</p>
      @endif
  </div>
</div>
