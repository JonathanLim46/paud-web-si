<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Kontak</title>
</head>
<style>
    .penerimaan {
        max-width: 800px;
        margin: 100px auto;
        padding: 20px;
        text-align: center;
    }
    .blue {
        color: #0099cc;
    }
    
    .orange {
        color: #ff9900;
    }
    .card {
      height: 300px; 
      width: 250px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      color: white;
      margin: 0 auto; /* Center cards horizontally */
    }

    .card-img-top {
      height: 200px;
      object-fit: contain;
      padding: 20px;
      margin: 0 auto;
    }

    .card-body {
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 1rem;
      text-align: center;
      flex-grow: 1;
    }

    .card-title {
      margin: 0;
    }

    .card.bg-blue { background-color: #516ABD; }
    .card.bg-green { background-color: #8DAD34; }
    .card.bg-orange { background-color: #F6AE2D; }
    
    /* Container for the cards with proper centering */
    .card-container {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 30px;
    }
    
    .card-wrapper {
      display: flex;
      justify-content: center;
    }
    /* kegiatan */
    .content-section {
            padding: 50px 0;
            background-color: #f9f9f9;
        }
        .content-title {
            color: #3366cc;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .content-text {
            color: #333;
            line-height: 1.6;
        }
        .content-image {
            width: 100%;
            border-radius: 8px;
        }
</style>
<body>

    @include('layouts.header')

    <div class="container penerimaan mt-5">
        <h2 class="judul">
            <span class="blue">Kurikulum </span><span class="orange">KB Al-Husna</span>
        </h2>
        
        <div class="announcement-box">
            <p>PAUD AL-HUSNA menerapkan KURIKULUM MERDEKA memberikan kebebasan bagi sekolah dan guru untuk menyesuaikan pembelajaran sesuai dengan kebutuhan anak. Di PAUD KB AL-HUSNA, kurikulum ini dikombinasikan dengan beberapa metode untuk mengoptimalkan perkembangan anak.</p>
        </div>
    </div>


    <div class="container penerimaan mt-5">
      <h2 class="judul">
          <span class="blue">Metode </span><span class="orange">Pembelajaran</span>
      </h2>
    </div>
    
    <div class="container my-5">
        <div class="card-container">
          <!-- Card 1 -->
          <div class="card bg-blue">
            <img src="{{ asset("images/page-kurikulum/pendidikan-karakter.png") }}" class="card-img-top" alt="Pendidikan Berkarakter">
            <div class="card-body">
              <h5 class="card-title">Pendidikan Berkarakter</h5>
            </div>
          </div>
    
          <!-- Card 2 -->
          <div class="card bg-green">
            <img src="{{ asset("images/page-kurikulum/steam.png") }}" class="card-img-top" alt="STEAM">
            <div class="card-body">
              <h5 class="card-title">Tematik Integratif berbasis STEAM</h5>
            </div>
          </div>
    
          <!-- Card 3 -->
          <div class="card bg-orange">
            <img src="{{ asset("images/page-kurikulum/pembelajaran-sentra.png") }}" class="card-img-top" alt="Pembelajaran Sentra">
            <div class="card-body">
              <h5 class="card-title">Pembelajaran Sentra</h5>
            </div>
          </div>
        </div>
    </div>


    <div class="container penerimaan mt-5">
      <h2 class="judul">
          <span class="blue">Kegiatan - Kegiatan</span>
      </h2>
    </div>

  <section class="content-section">
      <div class="container">
          <div class="row align-items-center">
              <!-- Left column with text -->
              <div class="col-md-6">
                  <h2 class="content-title">Sholat Dhuha Bersama</h2>
                  <p class="content-text">
                      Kegiatan Dhuha Bersama dilaksanakan setiap hari sebelum memulai pembelajaran sebagai bentuk pembiasaan ibadah sejak dini. Anak-anak diajak untuk meningkatkan keimanan dengan mengamalkan ajaran agama dengan doa dan dzikir bersama. Kegiatan ini bertujuan untuk menanamkan nilai spiritual, meningkatkan dalam beribadah, serta membangun kebiasaan positif yang akan menjadi bekal bagi mereka di masa depan.
                  </p>
              </div>
              <!-- Right column with image -->
              <div class="col-md-6">
                  <img src="{{ asset("images/page-kurikulum/sholat_dhuha.png") }}" alt="Sholat Dhuha Bersama" class="content-image">
              </div>
          </div>
      </div>
  </section>

 <section class="content-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
              <img src="{{ asset("images/page-kurikulum/mengaji.png") }}" alt="Sholat Dhuha Bersama" class="content-image">
          </div>
          
          <div class="col-md-6">
              <h2 class="content-title">Mengaji dan Membaca</h2>
              <p class="content-text">
                Kegiatan Mengaji dan Membaca merupakan bagian dari rutinitas harian yang bertujuan untuk meningkatkan kemampuan membaca Al-Qur'an serta membangun minat baca sejak dini. Anak-anak dibimbing untuk mengenal dan melafalkan huruf hijaiyah dengan metode yang menyenangkan, serta diajak membaca buku cerita atau materi edukatif sesuai usia mereka. Program ini tidak hanya melatih keterampilan literasi, tetapi juga menanamkan kecintaan terhadap Al-Qur'an dan buku sebagai sumber ilmu.
              </p>
          </div>
            
        </div>
    </div>
</section>

<section class="content-section">
  <div class="container">
      <div class="row align-items-center">
          <!-- Left column with text -->
          <div class="col-md-6">
              <h2 class="content-title">Kelas SENTRA</h2>
              <p class="content-text">
                PAUD AL-HUSNA menerapkan pembelajaran berbasis sentra, di mana anak-anak belajar melalui berbagai area tematik yang dirancang sesuai dengan tahap perkembangan mereka. Setiap hari, anak-anak berpindah ke sentra yang berbeda, seperti Sentra Balok, Sentra Seni, Sentra Alam, dan Sentra Peran.

Melalui metode ini, anak dapat mengeksplorasi berbagai keterampilan, mulai dari kreativitas, motorik halus dan kasar, hingga kemampuan berpikir kritis serta pemecahan masalah. Guru berperan sebagai fasilitator yang membimbing anak dalam bermain sambil belajar, sehingga proses pembelajaran menjadi lebih menyenangkan dan bermakna.
              </p>
          </div>
          <!-- Right column with image -->
          <div class="col-md-6">
              <img src="{{ asset("images/page-kurikulum/sentra.png") }}" alt="Sholat Dhuha Bersama" class="content-image">
          </div>
      </div>
  </div>
</section>

 <section class="content-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
              <img src="{{ asset("images/page-kurikulum/nyunda.png") }}" alt="Sholat Dhuha Bersama" class="content-image">
          </div>
          
          <div class="col-md-6">
              <h2 class="content-title">Kamis Nyunda</h2>
              <p class="content-text">
                Program Kamis Nyunda adalah kegiatan khusus yang dilaksanakan setiap hari Kamis untuk mengenalkan dan melestarikan budaya Sunda kepada anak-anak. Dalam program ini, anak-anak diajak untuk mengenakan pakaian khas Sunda, belajar bahasa Sunda dasar, serta mengenal kesenian dan tradisi Sunda seperti permainan tradisional, tembang Sunda, atau dongeng khas daerah. Kegiatan ini bertujuan untuk menanamkan kecintaan terhadap budaya lokal sejak dini serta membangun rasa bangga terhadap warisan budaya Sunda.
              </p>
          </div>
            
        </div>
    </div>
</section>

<section class="content-section">
  <div class="container">
      <div class="row align-items-center">
          <!-- Left column with text -->
          <div class="col-md-6">
              <h2 class="content-title">Adventure Class</h2>
              <p class="content-text">
                Adventure Class adalah program pembelajaran luar kelas yang dirancang untuk memberikan pengalaman belajar yang lebih menyenangkan dan interaktif. Anak-anak diajak untuk mengeksplorasi lingkungan sekitar melalui kegiatan seperti kunjungan ke alam, peternakan, perkebunan, atau tempat edukatif lainnya.

Melalui program ini, anak-anak dapat belajar secara langsung dari pengalaman nyata, meningkatkan keterampilan sosial, serta menumbuhkan rasa ingin tahu dan keberanian dalam menghadapi tantangan baru. Kegiatan ini juga membantu anak memahami konsep-konsep yang mereka pelajari di kelas dengan cara yang lebih konkret dan menyenangkan.
              </p>
          </div>
          <!-- Right column with image -->
          <div class="col-md-6">
              <img src="{{ asset("images/page-kurikulum/adventure.png") }}" alt="Sholat Dhuha Bersama" class="content-image">
          </div>
      </div>
  </div>
</section>
    @include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>