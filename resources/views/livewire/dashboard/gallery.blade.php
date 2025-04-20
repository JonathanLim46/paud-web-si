@section('styles')
<link rel="stylesheet" href="{{ asset('css/dashboard_profil_styles.css') }}">
@endsection
<div>
    @if (session('added'))
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
      <strong>{{ session('added') }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <button type="button" class="btn btn-outline-success mt-2"
    data-bs-toggle="modal" data-bs-target="#modalTambahGambar">
      <i class="fa-solid fa-plus"></i>
      Tambah Gambar
    </button>
    <div class="row mt-5 pe-3 gy-4 row-cols-4">
      @if ($galeris->count() > 0)
      @foreach ($galeris as $galeri)
      <div class="div" wire:key="{{ $galeri->id }}">
        <div class="col d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
              <img src="{{ asset('storage/galeri/'.$galeri->foto_galeri) }}" class="card-img-top img-card" alt="...">
              <div class="card-body text-center">
                <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapusGambar"
                wire:click="openHapusModal({{ $galeri->id }})">Hapus Foto</a>
                <a href="#" class="btn btn-primary ms-4" data-bs-toggle="modal" data-bs-target="#modalEditGambar" 
                wire:click="openEditModal({{ $galeri->id }})">Ganti Foto</a>
              </div>
          </div>
      </div>
      </div>
      @endforeach
      @else
      <p>*tambahkan gambar terlebih dahulu.</p>
      @endif
  </div>
  <!-- Modal Tambah Gambar -->
  <div wire:ignore.self class="modal fade" id="modalTambahGambar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalTambahGambarLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalTambahGambarLabel">Tambah Gambar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        @if ($image)
          <img src="{{ $image->temporaryUrl() }}" class="img-thumbnail img-preview" alt="preview">
        @else
          <img src="{{ asset('images/dashboard/blankImage.jpg') }}" class="img-thumbnail img-preview" alt="preview">
        @endif
          <form wire:submit="store" id="form-edit" enctype="multipart/form-data">
            @error('image')
            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
              <strong>{{ $message }}</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>                  @endif
            <input type="file" class="form-control mt-4 mb-4" id="image-input" name="image" wire:model="image">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">
              Tambahkan Gambar
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Edit Gambar -->
  <div wire:ignore.self class="modal fade" id="modalEditGambar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEditGambar" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalEditGambarLabel">Edit Gambar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        @if ($image)
          <img src="{{ $image->temporaryUrl() }}" class="img-thumbnail img-preview" alt="preview">
        @elseif ($idImage)
          <img src="{{ asset('storage/galeri/'.$idImage->foto_galeri) }}" class="img-thumbnail img-preview" alt="preview">
        @else 
          <img src="{{ asset('images/dashboard/blankImage.jpg') }}" class="img-thumbnail img-preview" alt="preview">
        @endif
        @if ($idImage)
        <form wire:submit="update({{$idImage->id}})" id="form-edit" enctype="multipart/form-data">
          @error('image')
          <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>                  @endif
          <input type="file" class="form-control mt-4 mb-4" id="image-input" name="image" wire:model="image">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">
            Perbarui Gambar
          </button>
        </form>
        @endif
        </div>
      </div>
    </div>
  </div>

  {{-- Modal Hapus Gambar --}}
      <!-- Modal Hapus Gambar -->
  <div wire:ignore.self class="modal fade" id="modalHapusGambar" tabindex="-1" aria-labelledby="modalHapusGambarLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content modal-content-h">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalEditHapusGambar">Hapus Gambar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex justify-content-center align-items-center">
          @if ($idImage)
          <form wire:submit="delete({{ $idImage->id }})" id="form-edit" enctype="multipart/form-data">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-danger ms-4">
              Hapus Gambar
            </button>
          </form>
          @endif
        </div>
      </div>
    </div>
  </div>

</div>
