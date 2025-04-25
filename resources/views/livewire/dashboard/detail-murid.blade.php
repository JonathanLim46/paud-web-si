@section('styles')
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
    <h3>Nama Siswa</h3>
    <section class="mt-3 p-4 info-dashboard shadow-sm rounded-4">
        <div class="mb-4">
            <nav class="form-nav" id="navDetailMurid">
                <a href="#" wire:click.prevent="setStep('DataPribadi')"
                    class="nav-link {{ $step === 'DataPribadi' ? 'active' : '' }}">Data Siswa</a>
                <a href="#" wire:click.prevent="setStep('Penilaian')"
                    class="nav-link {{ $step === 'Penilaian' ? 'active' : '' }}">Penilaian</a>
            </nav>
        </div>
        @if ($step === 'DataPribadi')
            <h4 class="mb-3">Detail Data Siswa</h4>
            <div class="container my-4">

                <div class="row g-3">
                    <div class="col-md-6"><strong>NIS:</strong> 2025-ABCD</div>
                    <div class="col-md-6"><strong>NIK:</strong> 1234567890123456</div>
                    <div class="col-md-12"><strong>Nama Lengkap:</strong> Nama Siswa</div>
                    <div class="col-md-6"><strong>Jenis Kelamin:</strong> Laki-laki</div>
                    <div class="col-md-6"><strong>Tempat, Tanggal Lahir:</strong> Bogor, 2008-05-21</div>
                    <div class="col-md-4"><strong>Agama:</strong> Islam</div>
                    <div class="col-md-4"><strong>Anak Ke:</strong> 2</div>
                    <div class="col-md-4"><strong>Berat Badan:</strong> 40 kg</div>
                    <div class="col-md-6"><strong>Tinggi Badan:</strong> 150 cm</div>
                    <div class="col-md-6"><strong>Lingkar Kepala:</strong> 45 cm</div>
                </div>

                <hr class="my-4">

                <h5>Alamat</h5>
                <div class="mb-2"><strong>Alamat Lengkap:</strong> Jl. Raya Dramaga No. 1</div>
                <div class="row g-2">
                    <div class="col-md-4"><strong>Desa:</strong> Sukadamai</div>
                    <div class="col-md-4"><strong>Kecamatan:</strong> Dramaga</div>
                    <div class="col-md-4"><strong>Kabupaten:</strong> Bogor</div>
                    <div class="col-md-4"><strong>Provinsi:</strong> Jawa Barat</div>
                    <div class="col-md-4"><strong>Kode Pos:</strong> 16680</div>
                </div>

                <hr class="my-4">

                <h5>Data Orang Tua</h5>
                <div class="row g-3">
                    <div class="col-md-4"><strong>Nama Ayah:</strong> Budi</div>
                    <div class="col-md-4"><strong>NIK Ayah:</strong> 1234567890</div>
                    <div class="col-md-4"><strong>Pekerjaan Ayah:</strong> Petani</div>
                    <div class="col-md-4"><strong>Nama Ibu:</strong> Siti</div>
                    <div class="col-md-4"><strong>NIK Ibu:</strong> 0987654321</div>
                    <div class="col-md-4"><strong>Pekerjaan Ibu:</strong> Ibu Rumah Tangga</div>
                </div>

                <h5 class="mt-4">Data Wali</h5>
                <div class="row g-3">
                    <div class="col-md-4"><strong>Nama Wali:</strong> -</div>
                    <div class="col-md-4"><strong>NIK Wali:</strong> -</div>
                    <div class="col-md-4"><strong>Pekerjaan Wali:</strong> -</div>
                    <div class="col-md-6"><strong>No HP Orang Tua:</strong> 08123456789</div>
                </div>

                <hr class="my-4">

                <h5>Data Sekolah</h5>
                <div class="row g-3">
                    <div class="col-md-6"><strong>Asal Sekolah:</strong> SDN 1 Dramaga</div>
                    <div class="col-md-3"><strong>Jenjang Sekolah:</strong> SD</div>
                    <div class="col-md-3"><strong>Status Sekolah:</strong> Negeri</div>
                    <div class="col-md-6"><strong>NPSN:</strong> 20208888</div>
                    <div class="col-md-6"><strong>Lokasi Sekolah:</strong> Dramaga</div>
                </div>

                <hr class="my-4">

                <h5>Dokumen Terlampir</h5>
                <ul>
                    <li><a href="#">Lihat Kartu Keluarga (KK)</a></li>
                    <li><a href="#">Lihat Akta Kelahiran</a></li>
                    <li><a href="#">Lihat KTP Orang Tua</a></li>
                    <li><a href="#">Lihat Surat Rekomendasi</a></li>
                </ul>
            </div>
        @elseif ($step === 'Penilaian')
            <style>
                table {
                    width: 100%;
                    border-collapse: collapse;
                    margin-top: 2rem;
                    font-family: 'Poppins', sans-serif;
                }

                th,
                td {
                    border: 1px solid #333;
                    padding: 10px;
                    text-align: left;
                }

                th {
                    background-color: #dbefff;
                    text-align: center;
                }

                .judul-seksi {
                    background-color: #f0f8ff;
                    font-weight: 600;
                }

                .penilaian {
                    text-align: center;
                }

                .radio-group input[type="radio"] {
                    transform: scale(1.2);
                    accent-color: #101C36;
                    cursor: pointer;
                }
            </style>
            <div class="container mb-4">
                <div class="text-center mb-3">
                    <h5 class="fw-bold mb-1">PERKEMBANGAN ANAK DIDIK</h5>
                    <h6 class="fw-bold">SEMESTER GANJIL</h6>
                </div>
                <div class="row mb-2">
                    <div class="col-md-3 fw-bold">Nama Anak</div>
                    <div class="col-md-3">: MUHAMMAD ABYANSYAHPUTRA</div>
                    <div class="col-md-3 fw-bold">Nomor Induk</div>
                    <div class="col-md-3">: 2260530009</div>
                </div>
                <div class="row">
                    <div class="col-md-3 fw-bold">Berat Badan</div>
                    <div class="col-md-3">: 15 KG</div>
                    <div class="col-md-3 fw-bold">Tinggi Badan</div>
                    <div class="col-md-3">: 98 CM</div>
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Aspek Perkembangan</th>
                        <th>Baik</th>
                        <th>Cukup</th>
                        <th>Perlu Dilatih</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="5" class="judul-seksi">I. NILAI-NILAI AGAMA DAN MORAL</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Mengenal agama yang dianut</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai1" value="baik">
                        </td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai1" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai1" value="perlu_dilatih">
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Menghargai diri sendiri, orang lain dan lingkungan sekitar</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai2" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai2" value="cukup">
                        </td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai2" value="perlu_dilatih">
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Mencerminkan perilaku jujur, sopan santun sebagai cerminan akhlak mulia</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai3" value="baik">
                        </td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai3" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai3"
                                value="perlu_dilatih">
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Menjaga kebersihan diri dan lingkungan</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai4" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai4" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai4"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Terbiasa melafalkan surat-surat pendek, doa-doa harian dan melaksanakan ibadah</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai5" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai5" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai5"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="judul-seksi">II. FISIK MOTORIK</td>
                    </tr>
                    <tr>
                        <td colspan="5" class="judul-seksi">1. Motorik Kasar</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Melakukan gerakan tubuh secara terkoordinasi untuk melatih kelenturan, keseimbangan, dan
                            kelincahan</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai6" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai6" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai6"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Melakukan koordinasi gerakan mata-kaki-tangan-kepala dalam menirukan tarian atau senam</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai7" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai7" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai7"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Melakukan permainan fisik dengan aturan</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai8" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai8" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai8"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Terampil menggunakan tangan kanan dan kiri</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai9" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai9" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai9"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Melakukan kegiatan kebersihan diri</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai10" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai10" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai10"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="judul-seksi">2. Motorik Halus</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Mewarnai gambar sesuai imajinasinya</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai11" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai11" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai11"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Meniru berbagai jenis bentuk</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai12" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai12" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai12"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Melakukan eksplorasi dengan berbagai media dan kegiatan</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai13" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai13" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai13"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Memotong kertas sesuai dengan pola yang diinstruksikan</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai14" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai14" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai14"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Menempel gambar dengan tepat dan rapi</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai15" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai15" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai15"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="judul-seksi">3. Kesehatan dan Perilaku Keselamatan</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>Berat badan sesuai tingkat usia</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai16" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai16" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai16"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>Tinggi badan sesuai standar usia</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai17" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai17" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai17"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>Berat badan sesuai dengan standar tinggi badan</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai18" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai18" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai18"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>Lingkar kepala sesuai tingkat usia</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai19" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai19" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai19"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>Menutup hidung dan mulut (misal, ketika batuk dan bersin)</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai20" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai20" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai20"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>Membersihkan, dan membereskan tempat bermain</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai21" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai21" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai21"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>Menghindari situasi yang membahayakan diri</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai22" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai22" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai22"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>23</td>
                        <td>Memahami tata cara menyeberang</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai23" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai23" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai23"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>24</td>
                        <td>Mengenal kebiasaan buruk bagi kesehatan (rokok, minuman keras)</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai24" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai24" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai24"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="judul-seksi">III. KOGNITIF</td>
                    </tr>
                    <tr>
                        <td colspan="5" class="judul-seksi">1. Belajar dan Pemecahan Masalah</td>
                    </tr>
                    <tr>
                        <td>25</td>
                        <td>Menunjukkan aktivitas yang bersifat eksploratif dan menyelidiki</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai25" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai25" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai25"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>26</td>
                        <td>Memecahkan masalah sederhana dalam kehidupan sehari-hari dengan cara yang fleksibel dan
                            diterima sosial</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai26" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai26" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai26"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>27</td>
                        <td>Memiliki sikap rasa ingin tahu dan ingin mencoba kegiatan baru</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai27" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai27" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai27"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>28</td>
                        <td>Menunjukkan sikap kreatif dalam menyelesaikan masalah (ide, gagasan, atau kebiasaan)</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai28" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai28" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai28"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="judul-seksi">2. Berpikir Logis</td>
                    </tr>
                    <tr>
                        <td>29</td>
                        <td>Mengenal perbedaan kecil dan besar, panjang dan pendek</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai29" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai29" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai29"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>30</td>
                        <td>Menunjukkan inisiatif dalam memilih tema permainan</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai30" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai30" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai30"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>31</td>
                        <td>Menyusun perencanaan kegiatan yang akan dilakukan</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai31" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai31" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai31"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>32</td>
                        <td>Menjelaskan sebab-akibat tentang lingkungannya (angin bertiup menyebabkan daun bergerak, air
                            dapat menyebabkan banjir)</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai32" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai32" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai32"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>33</td>
                        <td>Mengenal pola benda sesuai jenis, warna, ukuran</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai33" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai33" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai33"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>34</td>
                        <td>Mengenal angka melalui lagu, jari tangan, alat permainan</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai34" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai34" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai34"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>35</td>
                        <td>Mengelompokkan benda berdasarkan ukuran dari yang paling kecil, sedang hingga yang paling
                            besar</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai35" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai35" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai35"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>36</td>
                        <td>Mengurutkan benda berdasarkan seriasi dari paling kecil, sedang hingga besar atau sebaliknya
                        </td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai36" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai36" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai36"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="judul-seksi">3. Berpikir Simbolik</td>
                    </tr>
                    <tr>
                        <td>37</td>
                        <td>Menyebutkan lambang bilangan 1–15</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai37" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai37" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai37"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>38</td>
                        <td>Menghitung benda sekitar dan penjumlahan</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai38" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai38" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai38"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>39</td>
                        <td>Mencocokkan bilangan dengan lambang bilangan</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai39" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai39" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai39"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>40</td>
                        <td>Mengenal berbagai macam lambang huruf vokal dan konsonan</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai40" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai40" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai40"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>41</td>
                        <td> Merepresentasikan berbagai macam benda dalam bentuk gambar atau tulisan (ada benda pensil
                            yang diikuti tulisan dan gambar pensil)</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai41" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai41" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai41"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="judul-seksi">IV. BAHASA</td>
                    </tr>
                    <tr>
                        <td colspan="5" class="judul-seksi">1. Memahami Bahasa</td>
                    </tr>
                    <tr>
                        <td>42</td>
                        <td>Melaksanakan perintah yang lebih kompleks sesuai aturan yang disampaikan</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai42" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai42" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai42"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>43</td>
                        <td>Mengulang kalimat yang lebih kompleks</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai43" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai43" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai43"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>44</td>
                        <td>Memahami informasi yang didengarnya</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai44" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai44" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai44"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>45</td>
                        <td>Senang dan menghargai bacaan</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai45" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai45" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai45"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="judul-seksi">2. Mengungkapkan Bahasa</td>
                    </tr>
                    <tr>
                        <td>46</td>
                        <td>Menjawab pertanyaan yang lebih kompleks</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai46" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai46" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai46"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>47</td>
                        <td>Mengungkapkan keinginan, perasaan, dan pendapat dengan kalimat sederhana dalam berkomunikasi
                        </td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai47" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai47" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai47"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>48</td>
                        <td>Mengutarakan perasaan, ide dengan pilihan kata yang sesuai ketika berkomunikasi</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai48" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai48" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai48"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>49</td>
                        <td>Menyusun kalimat sederhana dalam struktur lengkap (pokok kalimat–predikat–keterangan)</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai49" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai49" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai49"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>50</td>
                        <td>Memiliki lebih banyak kata-kata untuk mengekspresikan ide pada orang lain</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai50" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai50" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai50"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>51</td>
                        <td>Mampu menyampaikan sebagian cerita/dongeng yang telah diperdengarkan</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai51" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai51" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai51"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>52</td>
                        <td>Menceritakan pengalaman yang dialami dengan menggunakan bahasa yang sederhana</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai52" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai52" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai52"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="judul-seksi">3. Keaksaraan</td>
                    </tr>
                    <tr>
                        <td>53</td>
                        <td>Menyebutkan simbol-simbol huruf yang dikenal</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai53" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai53" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai53"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>54</td>
                        <td>Mengenal suara huruf awal dari nama benda-benda yang ada di sekitarnya</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai54" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai54" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai54"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>55</td>
                        <td>Menyebutkan kelompok gambar yang memiliki bunyi/huruf awal yang sama</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai55" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai55" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai55"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>56</td>
                        <td>Memahami hubungan antara bunyi dan bentuk huruf</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai56" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai56" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai56"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>57</td>
                        <td>Membaca nama sendiri</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai57" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai57" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai57"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>58</td>
                        <td>Menuliskan nama sendiri</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai58" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai58" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai58"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>59</td>
                        <td>Menunjukkan kemampuan keaksaraan dalam berbagai bentuk karya</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai59" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai59" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai59"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="judul-seksi">V. SOSIAL EMOSIONAL</td>
                    </tr>
                    <tr>
                        <td colspan="5" class="judul-seksi">1. Kesadaran Diri</td>
                    </tr>
                    <tr>
                        <td>60</td>
                        <td>Memperlihatkan kemampuan mengendalikan diri dengan situasi</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai60" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai60" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai60"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>61</td>
                        <td>Mengontrol keinginan sesuai dengan kebutuhan dan situasi</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai61" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai61" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai61"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>62</td>
                        <td>Mengenal perasaan sendiri dan mengelolanya secara wajar (mengendalikan diri secara wajar)
                        </td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai62" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai62" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai62"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="judul-seksi">2. Rasa Tanggung Jawab Diri Sendiri dan Orang Lain</td>
                    </tr>
                    <tr>
                        <td>63</td>
                        <td>Tahu akan hak dan kewajibannya</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai63" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai63" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai63"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>64</td>
                        <td>Mematuhi aturan kelas (kegiatan, bermain)</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai64" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai64" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai64"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>65</td>
                        <td>Mengatur diri sendiri</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai65" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai65" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai65"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>66</td>
                        <td>Bertanggung jawab atas perilakunya untuk kebaikan diri sendiri</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai66" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai66" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai66"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="judul-seksi">3. Perilaku Prososial</td>
                    </tr>
                    <tr>
                        <td>67</td>
                        <td>Bermain dengan teman sebaya tanpa mendiskriminasi</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai67" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai67" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai67"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>68</td>
                        <td>Mengetahui perasaan temannya dan merespon secara wajar</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai68" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai68" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai68"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>69</td>
                        <td>Berbagi dengan orang lain</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai69" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai69" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai69"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>70</td>
                        <td>Menghargai hak/pendapat/karya orang lain</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai70" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai70" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai70"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>71</td>
                        <td>Menggunakan cara yang diterima secara sosial dalam menyelesaikan masalah (menggunakan
                            fikiran untuk menyelesaikan masalah)</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai71" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai71" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai71"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>72</td>
                        <td>Bersikap kooperatif dengan teman</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai72" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai72" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai72"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>73</td>
                        <td>Menunjukkan sikap toleran</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai73" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai73" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai73"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>74</td>
                        <td>Mengekspresikan emosi yang sesuai dengan kondisi yang ada (senang-sedih-antusias, dsb)</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai74" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai74" value="cukup"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai74"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>75</td>
                        <td>Mengetahui tata krama dan sopan santun sesuai dengan nilai sosial budaya setempat</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai75" value="baik"></td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai75" value="cukup">
                        </td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai75"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="judul-seksi">VI. SENI</td>
                    </tr>
                    <tr>
                        <td colspan="5" class="judul-seksi">1. Anak mampu menikmati berbagai alunan lagu atau
                            suara
                        </td>
                    </tr>
                    <tr>
                        <td>76</td>
                        <td>Senang nyanyian dan ikut bersenandung dalam berbagai kegiatan</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai76" value="baik">
                        </td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai76" value="cukup">
                        </td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai76"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>77</td>
                        <td>Membuat nada suara dari berbagai benda yang ditemui</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai77" value="baik">
                        </td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai77" value="cukup">
                        </td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai77"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="judul-seksi">2. Tertarik dengan kegiatan seni</td>
                    </tr>
                    <tr>
                        <td>78</td>
                        <td>Menyanyikan lagu sesuai dengan lantunan</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai78" value="baik">
                        </td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai78" value="cukup">
                        </td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai78"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>79</td>
                        <td>Menggunakan berbagai warna dan bentuk dalam menyajikan sebuah gambar yang kreatif</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai79" value="baik">
                        </td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai79" value="cukup">
                        </td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai79"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>80</td>
                        <td>Mengekspresikan imajinasinya melalui kegiatan mewarnai</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai80" value="baik">
                        </td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai80" value="cukup">
                        </td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai80"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>81</td>
                        <td>Menggambar berbagai macam bentuk yang beragam</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai81" value="baik">
                        </td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai81" value="cukup">
                        </td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai81"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>82</td>
                        <td>Melukis dengan berbagai cara dan objek</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai82" value="baik">
                        </td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai82" value="cukup">
                        </td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai82"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td>83</td>
                        <td>Membuat karya seperti bentuk sesungguhnya dengan berbagai bahan (kertas, plastisin, balok,
                            dll)</td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai83" value="baik">
                        </td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai83" value="cukup">
                        </td>
                        <td class="penilaian radio-group"><input type="radio" name="nilai83"
                                value="perlu_dilatih"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="judul-seksi">VII. KESIMPULAN PERKEMBANGAN ANAK</td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <ul style="margin-bottom: 1rem;">
                                <li>Tingkat Pencapaian Perkembangan BAIK : 39/82 (47,56%)</li>
                                <li>Tingkat Pencapaian Perkembangan CUKUP : 39/82 (47,56%)</li>
                                <li>Tingkat Pencapaian Perkembangan PERLU DILATIH : 4/82 (4,88%)</li>
                            </ul>
                            <strong>Deskripsi:</strong>
                            <div style="height: 200px; border: 1px solid #000; margin-top: 0.5rem;"></div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" class="judul-seksi">VIII. CATATAN DAN REKOMENDASI PENDIDIK</td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <div style="height: 200px; border: 1px solid #000;"></div>
                        </td>
                    </tr>





                </tbody>
            </table>
        @endif
    </section>
</div>
