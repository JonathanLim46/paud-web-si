@section('styles')
    <link rel="stylesheet" href="{{ asset('css/dashboard_profil_styles.css') }}">
@endsection
<div>
    <button type="button" class="btn btn-outline-success mt-2" data-bs-toggle="modal" data-bs-target="#modalTambahFAQ">
        <i class="fa-solid fa-plus"></i>
        Tambah FAQ
    </button>
    <div class="row mt-4 pe-3 gy-4 row-cols-4">
        @if ($faqs->count() > 0)
            @foreach ($faqs as $faq)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $faq->judul_FAQ }}</h5>
                            <p class="card-text">{{ $faq->isi_FAQ }}</p>
                            <a href="#" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#modalHapusFAQ" wire:click="openModal({{ $faq->id }})">Hapus
                                FAQ</a>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modalEditFAQ" wire:click="openModal({{ $faq->id }})">Perbarui
                                FAQ</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>*tambahkan faq terlebih dahulu.</p>
        @endif
    </div>

    <!-- Modal Tambah FAQ -->
    <div wire:ignore.self class="modal fade" id="modalTambahFAQ" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="modalTambahFAQLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalTambahFAQLabel">Tambah FAQ</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit="store" id="form-edit" enctype="multipart/form-data">
                        @error('judul_FAQ')
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                            <div class="mb-4">
                                <label for="judulInputLabel" class="form-label fw-bold">Judul FAQ</label>
                                <input type="text" class="form-control" id="judul_FAQ" name="judul_FAQ"
                                    placeholder="Masukkan judul FAQ" wire:model='judul_FAQ'>
                            </div>
                            @error('isi_FAQ')
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @endif
                                <div class="mb-4">
                                    <label for="isiInputLabel" class="form-label fw-bold">Isi FAQ</label>
                                    <textarea class="form-control" aria-label="With textarea" wire:model='isi_FAQ'></textarea>
                                </div>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">
                                    Tambahkan FAQ
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Edit FAQ -->
            <div wire:ignore.self class="modal fade" id="modalEditFAQ" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="modalEditFAQLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modalEditFAQLabel">Edit FAQ</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            @if ($idFAQ)
                                <form wire:submit="update({{ $idFAQ->id }})" id="form-edit" enctype="multipart/form-data">
                                    @error('judul_FAQ')
                                        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                            <strong>{{ $message }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                @endif
                                <div class="mb-4">
                                    <label for="judulInputLabel" class="form-label fw-bold">Judul FAQ</label>
                                    <input type="text" class="form-control" id="judul_FAQ" name="judul_FAQ"
                                        placeholder="Masukkan judul FAQ" wire:model.defer='judul_FAQ'>
                                </div>
                                @error('isi_FAQ')
                                    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                        <strong>{{ $message }}</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                    @endif
                                    <div class="mb-4">
                                        <label for="isiInputLabel" class="form-label fw-bold">Isi FAQ</label>
                                        <textarea class="form-control" aria-label="With textarea" wire:model.defer='isi_FAQ'></textarea>
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary" wire:click='update({{ $idFAQ->id }})'>
                                        Perbarui FAQ
                                    </button>
                                    </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Modal Hapus Gambar --}}
                    <div wire:ignore.self class="modal fade" id="modalHapusFAQ" tabindex="-1" aria-labelledby="modalHapusFAQLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content modal-content-h">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="modalHapusFAQLabel">Hapus FAQ</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body d-flex justify-content-center align-items-center">
                                    @if ($idFAQ)
                                        <form wire:submit="delete({{ $idFAQ->id }})" id="form-edit"
                                            enctype="multipart/form-data">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-danger ms-4">
                                                Hapus FAQ
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
