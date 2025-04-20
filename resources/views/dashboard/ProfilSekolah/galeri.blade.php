<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard_styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard_profil_styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/02c07b0853.js" crossorigin="anonymous"></script>    
    @livewireStyles
    @livewireScripts
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <x-sidebar></x-sidebar>
            <main class="col-lg-10 content">
                <x-navbar-dashboard></x-navbar-dashboard>
                <div class="container-fluid p-4">
                  <header class="d-flex justify-content-between pe-5 align-items-center">
                    <span class="fs-3 fw-bold">Gallery</span>
                    <button type="button" class="btn btn-outline-success mt-2"
                      data-bs-toggle="modal" data-bs-target="#modalTambahGambar">
                        <i class="fa-solid fa-plus"></i>
                        Tambah Gambar
                    </button>
                  </header>
                  @if (session('success'))
                  <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  @if (session('added'))
                  <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <strong>{{ session('added') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  <div class="row mt-5 pe-3 gy-4 row-cols-4">
                    @foreach ($galeris as $galeri)
                    <div class="col d-flex justify-content-center">
                      <div class="card" style="width: 18rem;">
                        <img src="{{ asset('storage/galeri/'.$galeri->foto_galeri) }}" class="card-img-top img-card" alt="...">
                        <div class="card-body text-center">
                          <a href="#" class="btn btn-danger">Hapus Foto</a>
                          <a href="#" class="btn btn-primary ms-4">Ganti Foto</a>
                        </div>
                      </div>
                   </div>
                   @endforeach
                </div>
                <!-- Modal Tambah Gambar -->
                <div class="modal fade" id="modalTambahGambar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalTambahGambarLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalTambahGambarLabel">Tambah Gambar</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <img src="{{ asset('images/dashboard/blankImage.jpg') }}" class="img-thumbnail img-preview" alt="img-preview" id="img-preview">
                        <form action="{{ route('admin.galeri.add') }}" method="POST" id="form-edit" enctype="multipart/form-data">
                          @csrf
                          @method('post')
                          <input type="file" class="form-control mt-4" id="image-input" name="image">
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary"
                          onclick="document.getElementById('form-edit').submit();">
                          Tambahkan Gambar
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal Edit Gambar -->
                {{-- <div class="modal fade" id="modalEditGambar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEditGambarLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalEditGambarLabel">Edit Gambar</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form wire:submit.prevent="updateImage">
                        <div class="modal-body">
                          @if ($foto_galeri)
                            <img src="{{ $foto_galeri->temporaryUrl() }}" class="img-thumbnail img-preview" alt="img-preview" id="img-preview">
                          @elseif ($selectedPhoto?->foto_galeri)
                            <img src="{{ asset('storage/galeri/' . $selectedPhoto->foto_galeri) }}" class="img-thumbnail img-preview" alt="img-preview" id="img-preview">
                          @endif
                          <input type="file" class="form-control mt-4" wire:model="foto_galeri">
                          @error('foto_galeri') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                          <button type="submit" class="btn btn-primary">Perbarui Gambar</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>                 --}}
            </main>
        </div>
    </div>
    <script>
      document.getElementById("image-input").addEventListener("change", function(event){
        const file = event.target.files[0];
        if(file){
          const reader = new FileReader();

          reader.onload = function(e){
            const preview = document.getElementById("img-preview");
            preview.src = e.target.result;
          }
          reader.readAsDataURL(file);
        }
      });
    </script>
</body>
</html>