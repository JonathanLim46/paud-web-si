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
    </style>
</head>

<body>

    <h3 style="text-align: center;">Rapor Perkembangan Anak</h3>
    <h3>Nama Siswa : {{ $pendaftar->dataPribadi->nama_lengkap }}</h3>
    <h3>Nama kelas : {{ $pendaftar->kelas->nama_kelas }}</h3>
    <h3>Nama Siswa : {{ $pendaftar->dataPribadi->nama_lengkap }}</h3>

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
                    <td>
                        @if (($data['nilai' . $key] ?? null) == 'baik')
                            ✔️
                        @endif
                    </td>
                    <td>
                        @if (($data['nilai' . $key] ?? null) == 'cukup')
                            ✔️
                        @endif
                    </td>
                    <td>
                        @if (($data['nilai' . $key] ?? null) == 'perlu_dilatih')
                            ✔️
                        @endif
                    </td>
                </tr>
            @endforeach

            {{-- Kesimpulan --}}
            <tr>
                <td colspan="5" class="judul-seksi">VII. KESIMPULAN PERKEMBANGAN ANAK</td>
            </tr>
            <tr>
                <td colspan="5">
                    <ul>
                        <li>Tingkat Pencapaian Perkembangan BAIK : 39/82 (47,56%)</li>
                        <li>Tingkat Pencapaian Perkembangan CUKUP : 39/82 (47,56%)</li>
                        <li>Tingkat Pencapaian Perkembangan PERLU DILATIH : 4/82 (4,88%)</li>
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

</body>

</html>
