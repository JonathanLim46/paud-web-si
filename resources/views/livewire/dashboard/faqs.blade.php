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
            <div class="ppdb-closed-container container text-center">
                <div class="ppdb-closed-content">
                    <h3 class="ppdb-title">Belum ada FAQ</h3>
                    <p class="ppdb-message">Silahkan menambahkan FAQ (Frequently Ask Question untuk di tampilkan di company profile)</p>
                </div>
            </div>
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
