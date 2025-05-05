<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Rapor Anak</title>
    <style>
        * {
            font-family: 'DejaVu Sans', sans-serif;
            font-size: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 2rem;
            font-family: 'Poppins', sans-serif;
        }

        th,
        td {
            border: 1px solid #333;
            padding: 5px;
            text-align: left;
        }



        .judul-seksi {
            background-color: #f0f8ff;
            font-weight: 600;
        }

        .penilaian {
            text-align: center;
        }

        .judul-seksi {
            font-weight: bold;
            text-align: left;
            background-color: #f0f0f0;
        }

        .deskripsi-box,
        .catatan-box {
            height: 200px;
            border: 1px solid #000;
            margin-top: 0.5rem;
        }

        ul {
            padding-left: 20px;
            text-align: left;
        }

        .letterhead-container {
            width: 100%;
            max-width: 800px;
            margin: 20px auto;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .letterhead {
            padding: 20px;
            position: relative;
        }

        .logo-container {
            float: left;
            width: 15%;
        }

        .logo {
            width: 100%;
            max-width: 80px;
            height: auto;
        }

        .header-text {
            float: left;
            width: 85%;
            text-align: center;
        }

        .school-name {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .school-address {
            font-size: 14px;
            margin-bottom: 5px;
        }

        .school-contact {
            font-size: 14px;
        }

        .divider {
            clear: both;
            height: 2px;
            background-color: #000;
            margin-top: 15px;
        }

        .background-text {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
            color: rgba(0, 0, 0, 0.03);
            transform: rotate(-45deg);
            pointer-events: none;
            overflow: hidden;
            z-index: 0;
        }

        .background-text span {
            white-space: nowrap;
            margin-right: 20px;
        }

        .content {
            position: relative;
            z-index: 1;
        }

        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>
</head>

<body>
    <div class="letterhead-container">
        <div class="letterhead">
            {{-- <div class="background-text">
                <span>PENDIDIKAN ANAK USIA DINI</span>
                <span>PENDIDIKAN ANAK USIA DINI</span>
                <span>PENDIDIKAN ANAK USIA DINI</span>
            </div> --}}
            <div class="content clearfix">
                <div class="logo-container">
                    <img style="margin-top: 50px" src="{{ public_path('images/page-layout/logo_tidak_text.png') }}"
                        width="100px" height="100px" alt="Logo">

                </div>
                <div class="header-text">
                    <div class="school-name"><span>PENDIDIKAN ANAK USIA DINI</span><br>PAUD AL-HUSNA</div>
                    <div class="school-address">JL. Raya Cicopo Selatan Kp. Pasir Muncang RT 01/03 Desa Sukamanah Kec
                        Megamendung</div>
                    <div class="school-contact">Email: Paud.alhusna2209@gmail.com - NPSN: 69960530 Ter Akreditasi: B
                    </div>
                </div>
            </div>
            <div class="divider"></div>
        </div>
    </div>
    @php
        $baik = 0;
        $cukup = 0;
        $platih = 0;
    @endphp
    <h3 style="text-align: center;">Rapor Perkembangan Anak</h3>
    <h1 style="text-align: center;">Semester {{ $semester }}</h1>
    <p>Nama Siswa : {{ $pendaftar->dataPribadi->nama_lengkap }}</p>
    <p>Nomer Induk : {{ $pendaftar->dataPribadi->nis }}</p>
    <p>Berat Badan : {{ $pendaftar->dataPribadi->berat_badan }}</->
    <p>Tinggi Badan : {{ $pendaftar->dataPribadi->tinggi_badan }}</p>
    <table>
        <thead>
            <tr>
                @if ($semester === 'Ganjil')
                    <th style="background-color :#40adce; text-align:center">No</th>
                    <th style="background-color :#40adce; text-align:center">Aspek Perkembangan</th>
                    <th style="background-color :#40adce; text-align:center">Baik</th>
                    <th style="background-color :#40adce; text-align:center">Cukup</th>
                    <th style="background-color :#40adce; text-align:center">Perlu Dilatih</th>
                @else
                    <!-- Tampilkan kolom lainnya jika semester bukan Ganjil -->
                    <th style="background-color :#f88c44; text-align:center">No</th>
                    <th style="background-color :#f88c44; text-align:center">Aspek Perkembangan</th>
                    <th style="background-color :#f88c44; text-align:center">Baik</th>
                    <th style="background-color :#f88c44; text-align:center">Cukup</th>
                    <th style="background-color :#f88c44; text-align:center">Perlu Dilatih</th>
                @endif

            </tr>
        </thead>
        <tbody>
            @foreach ($aspekTexts as $key => $aspek)
                {{-- Header Besar dan Subheader --}}
                @if ($key == 1)
                    <tr>
                        <td colspan="5" class="judul-seksi">I. NILAI-NILAI AGAMA DAN MORAL</td>
                    </tr>
                @endif

                @if ($key == 6)
                    <tr>
                        <td colspan="5" class="judul-seksi">II. FISIK MOTORIK</td>
                    </tr>
                    <tr>
                        <td colspan="5" class="judul-seksi">1. Motorik Kasar</td>
                    </tr>
                @endif

                @if ($key == 11)
                    <tr>
                        <td colspan="5" class="judul-seksi">2. Motorik Halus</td>
                    </tr>
                @endif

                @if ($key == 16)
                    <tr>
                        <td colspan="5" class="judul-seksi">3. Kesehatan dan Perilaku Keselamatan</td>
                    </tr>
                @endif

                @if ($key == 25)
                    <tr>
                        <td colspan="5" class="judul-seksi">III. KOGNITIF</td>
                    </tr>
                    <tr>
                        <td colspan="5" class="judul-seksi">1. Belajar dan Pemecahan Masalah</td>
                    </tr>
                @endif

                @if ($key == 29)
                    <tr>
                        <td colspan="5" class="judul-seksi">2. Berpikir Logis</td>
                    </tr>
                @endif

                @if ($key == 37)
                    <tr>
                        <td colspan="5" class="judul-seksi">3. Berpikir Simbolik</td>
                    </tr>
                @endif

                @if ($key == 42)
                    <tr>
                        <td colspan="5" class="judul-seksi">IV. BAHASA</td>
                    </tr>
                    <tr>
                        <td colspan="5" class="judul-seksi">1. Memahami Bahasa</td>
                    </tr>
                @endif

                @if ($key == 46)
                    <tr>
                        <td colspan="5" class="judul-seksi">2. Mengungkapkan Bahasa</td>
                    </tr>
                @endif

                @if ($key == 53)
                    <tr>
                        <td colspan="5" class="judul-seksi">3. Keaksaraan</td>
                    </tr>
                @endif

                @if ($key == 60)
                    <tr>
                        <td colspan="5" class="judul-seksi">V. SOSIAL EMOSIONAL</td>
                    </tr>
                    <tr>
                        <td colspan="5" class="judul-seksi">1. Kesadaran Diri</td>
                    </tr>
                @endif

                @if ($key == 63)
                    <tr>
                        <td colspan="5" class="judul-seksi">2. Rasa Tanggung Jawab Diri Sendiri dan Orang Lain</td>
                    </tr>
                @endif

                @if ($key == 67)
                    <tr>
                        <td colspan="5" class="judul-seksi">3. Perilaku Prososial</td>
                    </tr>
                @endif

                @if ($key == 76)
                    <tr>
                        <td colspan="5" class="judul-seksi">VI. SENI</td>
                    </tr>
                    <tr>
                        <td colspan="5" class="judul-seksi">1. Anak mampu menikmati berbagai alunan lagu atau suara
                        </td>
                    </tr>
                @endif

                @if ($key == 78)
                    <tr>
                        <td colspan="5" class="judul-seksi">2. Tertarik dengan kegiatan seni</td>
                    </tr>
                @endif

                {{-- Isi Soal --}}
                <tr>
                    <td>{{ $key }}</td>
                    <td style="text-align: left;">{{ $aspek }}</td>
                    <td style="text-align: center; font-size: 25px; vertical-align: middle; height: 30px;">
                        @if (($data['nilai' . $key] ?? null) == 'baik')
                            ✔️
                            @php
                                $baik += 1;
                            @endphp
                        @endif
                    </td>
                    <td style="text-align: center; font-size: 25px; vertical-align: middle; height: 30px;">
                        @if (($data['nilai' . $key] ?? null) == 'cukup')
                            ✔️
                            @php
                                $cukup += 1;
                            @endphp
                        @endif
                    </td>
                    <td style="text-align: center; font-size: 25px; vertical-align: middle; height: 30px;">
                        @if (($data['nilai' . $key] ?? null) == 'perlu_dilatih')
                            ✔️
                            @php
                                $platih += 1;
                            @endphp
                        @endif
                    </td>
                </tr>
            @endforeach


            @php
                $total = 82; // Total jumlah soal
                $baikPercentage = ($baik / $total) * 100;
                $cukupPercentage = ($cukup / $total) * 100;
                $platihPercentage = ($platih / $total) * 100;
            @endphp

            {{-- Kesimpulan --}}
            <tr>
                <td colspan="5" class="judul-seksi">VII. KESIMPULAN PERKEMBANGAN ANAK</td>
            </tr>
            <tr>
                <td colspan="5">
                    <ul>
                        <li>Tingkat Pencapaian Perkembangan BAIK : {{ $baik }} / {{ $total }}
                            ({{ number_format($baikPercentage, 2) }}%)</li>
                        <li>Tingkat Pencapaian Perkembangan CUKUP : {{ $cukup }} / {{ $total }}
                            ({{ number_format($cukupPercentage, 2) }}%)</li>
                        <li>Tingkat Pencapaian Perkembangan PERLU DILATIH : {{ $platih }} / {{ $total }}
                            ({{ number_format($platihPercentage, 2) }}%)</li>
                    </ul>
                    <strong>Deskripsi:</strong>
                    <div class="deskripsi-box"></div>
                </td>
            </tr>

            {{-- Catatan --}}
            <tr>
                <td colspan="5" class="judul-seksi">VIII. CATATAN DAN REKOMENDASI PENDIDIK</td>
            </tr>
            <tr>
                <td colspan="5">
                    <div class="catatan-box"></div>
                </td>
            </tr>

        </tbody>
    </table>


    {{-- buat form ttd disini --}}
    <div style="font-family: Arial, sans-serif; width: 100%; padding: 15px;">
        <table style="width: 100%;">
            <tr>
                <td style="width: 45%;">
                    <div class="signature-area">
                        <div style="margin-bottom: 5px;">Kepala Sekolah</div>
                        <div style="height: 60px; border-bottom: 1px solid #000; margin-bottom: 10px;"></div>
                        <div>____________________</div>
                    </div>
                </td>
                <td style="width: 10%;"></td>
                <td style="width: 45%;">
                    <div class="signature-area">
                        <div style="margin-bottom: 5px;">Guru Wali Kelas</div>
                        <div style="height: 60px; border-bottom: 1px solid #000; margin-bottom: 10px;"></div>
                        <div>____________________</div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
