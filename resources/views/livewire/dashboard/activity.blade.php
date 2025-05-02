@section('styles')
    <style>
        .ppdb-closed-container {
            background: linear-gradient(to right, #f8f9fa, #ffffff);
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            padding: 30px;
            margin-top: 80px;
            max-width: 700px;
            border-top: 4px solid #ff0101;
        }

        .ppdb-closed-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .ppdb-icon {
            background-color: #ebf5ff;
            height: 80px;
            width: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .ppdb-icon i {
            font-size: 2.5rem;
            color: #3b82f6;
        }

        .ppdb-title {
            color: #1e3a8a;
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .ppdb-message {
            color: #4b5563;
            font-size: 1.1rem;
            line-height: 1.6;
            max-width: 500px;
            margin: 0 auto;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/dashboard_profil_styles.css') }}">
@endsection
<div>
    <button type="button" class="btn btn-outline-success mt-2" data-bs-toggle="modal" data-bs-target="#modalTambahGambar">
        <i class="fa-solid fa-plus"></i>
        Tambah Gambar
    </button>
    <div class="row mt-5 pe-3 gy-4 row-cols-4">
        @if ($activitys->count() > 0)
            @foreach ($activitys as $activity)
                <div class="div" wire:key="{{ $activity->id }}">
                    <div class="col d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('storage/aktivitas/' . $activity->foto_aktivitas) }}"
                                class="card-img-top img-card" alt="...">
                            <div class="card-body text-center">
                                <a href="#" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#modalHapusGambar" wire:click="openModal({{ $activity->id }})">Hapus
                                    Foto</a>
                                <a href="#" class="btn btn-primary ms-4" data-bs-toggle="modal"
                                    data-bs-target="#modalEditGambar" wire:click="openModal({{ $activity->id }})">Ganti
                                    Foto</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="ppdb-closed-container container text-center">
                <div class="ppdb-closed-content">
                    <h3 class="ppdb-title">Belum ada Aktivitas</h3>
                    <p class="ppdb-message">Silahkan Menambah Aktivitas untuk di tampilkan di Company Profile </p>
                </div>
            </div>
        @endif
    </div>

    <!-- Modal Tambah Gambar -->
    <div wire:ignore.self class="modal fade" id="modalTambahGambar" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="modalTambahGambarLabel" aria-hidden="true">
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
                        <img src="{{ asset('images/dashboard/blankImage.jpg') }}" class="img-thumbnail img-preview"
                            alt="preview">
                    @endif
                    <form wire:submit="store" id="form-edit" enctype="multipart/form-data">
                        @error('image')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                            <input type="file" class="form-control mt-4 mb-4" id="image-input" name="image"
                                wire:model="image">
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
        <div wire:ignore.self class="modal fade" id="modalEditGambar" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="modalEditGambar" aria-hidden="true">
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
                            <img src="{{ asset('storage/aktivitas/' . $idImage->foto_aktivitas) }}"
                                class="img-thumbnail img-preview" alt="preview">
                        @else
                            <img src="{{ asset('images/dashboard/blankImage.jpg') }}" class="img-thumbnail img-preview"
                                alt="preview">
                        @endif
                        @if ($idImage)
                            <form wire:submit="update({{ $idImage->id }})" id="form-edit" enctype="multipart/form-data">
                                @error('image')
                                    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                        <strong>{{ $message }}</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                            @endif
                            <input type="file" class="form-control mt-4 mb-4" id="image-input" name="image"
                                wire:model="image">
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
            <div wire:ignore.self class="modal fade" id="modalHapusGambar" tabindex="-1"
                aria-labelledby="modalHapusGambarLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content modal-content-h">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modalEditHapusGambar">Hapus Gambar</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex justify-content-center align-items-center">
                            @if ($idImage)
                                <form wire:submit="delete({{ $idImage->id }})" id="form-edit"
                                    enctype="multipart/form-data">
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
