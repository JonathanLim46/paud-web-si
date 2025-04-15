<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    
    <title>Kontak</title>\
</head>
<style>
    .penerimaan {
        max-width: 800px;
        margin: 100px auto;
        padding: 20px;
        text-align: center
    }
    .blue {
        color: #0099cc;
    }
    
    .orange {
        color: #ff9900;
    }
    .text-warning {
        color: #ffa726 !important;
    }
    
    .card {
        border: none;
        border-radius: 10px;
    }
.penerimaan-img {
  width: 90%;
  height: 70%;
  object-fit: cover;
}
    
.faq-container {
    max-width: 800px;
    margin: 0 auto;
  }
  
  .faq-item {
    margin-bottom: 10px;
  }
  
  .faq-question {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 0;
    cursor: pointer;
    font-weight: 500;
  }
  
  .arrow-icon {
    font-size: 12px;
    transition: transform 0.3s;
  }
  
  .faq-answer {
    padding-bottom: 15px;
    display: none;
  }
  
  .divider {
    height: 1px;
    background-color: #e0e0e0;
    width: 100%;
  }
  
  /* Open state */
  .faq-item.active .arrow-icon {
    transform: rotate(180deg);
  }
  
  .faq-item.active .faq-answer {
    display: block;
  }
</style>
<body>

    @include('layouts.header')

    <div class="container penerimaan">
        <h2 class="judul">
            <span class="blue">Penerimaan Siswa Baru </span><span class="orange">KB Al-Husna</span>
        </h2>
        
        <div class="announcement-box">
            <p>PAUD KB Al-Husna membuka pendaftaran murid baru yang dapat dilakukan secara online maupun offline. Pendaftaran online dapat diakses melalui website resmi kami, memungkinkan proses yang lebih cepat dan fleksibel. Sementara itu, bagi yang ingin mendaftar secara langsung, bisa datang ke sekolah sesuai dengan jadwal yang telah ditentukan.</p>
            
            <p>Perhatikan dalam mengisi form Pendaftaran Online. Pastikan data yang dibutuhkan dalam proses pendaftaran online lengkap sesuai dengan persyaratan yang ada. Setelah proses pengisian form pendaftaran secara online berhasil dilakukan.</p>
        </div>
    </div>


    <div class="container my-5 syarat">
        <h2 class="text-center text-warning mb-4">Syarat Pendaftaran</h2>
        
        <div class="card shadow-sm">
            <div class="card-body p-4">
                <div class="row">
                    <div class="col-md-3 text-center">
                        <img src="{{ asset('images/page-pendaftaran/1.png') }}" alt="Clipboard Icon" class="img-fluid mb-2 " />
                        <div class="small text-center">
                            <p class="mb-1 fw-bold">Persyaratan Pendaftaran</p>
                            <p class="small text-muted">Calon Peserta Didik Baru<br>PAUD KB AL HUSNA</p>
                        </div>
                    </div>
                    
                    <div class="col-md-9">
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3">
                              <img src="{{ asset('images/page-pendaftaran/2.png') }}" width="35px" height="35px" alt="">
                            </div>
                            <div>
                                <p class="mb-0">Mengisi formulir pendaftaran Offline/Online</p>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-start mb-3">
                            <div class="me-3">
                              <img src="{{ asset('images/page-pendaftaran/3.png') }}" width="35px" height="35px" alt="">
                            </div>
                            <div>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-1">• Kelompok A Berusia 4 (empat) - 5 (lima) tahun</li>
                                    <li>•  Kelompok B berusia 5 (lima) - 6 (enam) tahun</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3">
                              <img src="{{ asset('images/page-pendaftaran/4.png') }}" width="35px" height="35px" alt="">

                            </div>
                            <div>
                                <p class="mb-0">Menyertakan fotocopy KTP orang tua dan Kartu Keluarga</p>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center mb-0">
                            <div class="me-3">
                              <img src="{{ asset('images/page-pendaftaran/5.png') }}" width="35px" height="35px" alt="">

                            </div>
                            <div>
                                <p class="mb-0">Membayar biaya pendaftaran + infaq bangunan sebesar Rp. 250.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <h2 class="blue my-5">
            Penerimaan Siswa Baru 
        </h2>
        <img src="{{ asset('images/page-pendaftaran/pendaftaran_poster.png') }}" class="penerimaan-img"  alt="">
    </div>

    <div class="container py-5">
        <h2 class="text-center mb-4"><span class="blue">FAQ</span></h2>
        <h2 class="text-center mb-4"><span class="orange">Seputar pendaftaran</span></h2>

        
        <div class="faq-container">
          <!-- FAQ Item 1 -->
          <div class="faq-item">
            <div class="faq-question" onclick="toggleFaq(this)">
              <div>Bagaimana jika saya mengalami kesulitan saat mengisi formulir pendaftaran online?</div>
              <div class="arrow-icon">▼</div>
            </div>
            <div class="faq-answer">
              <p>Jika mengalami kendala saat mengisi formulir, silakan hubungi tim administrasi PAUD KB AL-HUSNA melalui nomor WhatsApp atau email yang tercantum di website.</p>
            </div>
            <div class="divider"></div>
          </div>
          
          <!-- FAQ Item 2 -->
          <div class="faq-item">
            <div class="faq-question" onclick="toggleFaq(this)">
              <div>Apakah ada batasan usia untuk mendaftar?</div>
              <div class="arrow-icon">▼</div>
            </div>
            <div class="faq-answer">
              <p>PAUD KB AL-HUSNA menerima peserta didik sesuai dengan kategori usia yang telah ditentukan. Informasi lebih lanjut mengenai batasan usia dapat dilihat di halaman pendaftaran.</p>
            </div>
            <div class="divider"></div>
          </div>
          
          <!-- FAQ Item 3 -->
          <div class="faq-item">
            <div class="faq-question" onclick="toggleFaq(this)">
              <div>Apakah PAUD KB AL-HUSNA menerima peserta didik dari berbagai latar belakang agama?</div>
              <div class="arrow-icon">▼</div>
            </div>
            <div class="faq-answer">
              <p>Ya, PAUD KB AL-HUSNA adalah lembaga pendidikan inklusif yang menerima peserta didik dari berbagai latar belakang agama, dengan tetap mengedepankan nilai-nilai keislaman dalam pembelajaran.</p>
            </div>
            <div class="divider"></div>
          </div>
          
          <!-- FAQ Item 4 -->
          <div class="faq-item">
            <div class="faq-question" onclick="toggleFaq(this)">
              <div>Berapa biaya pendaftaran di PAUD KB AL-HUSNA?</div>
              <div class="arrow-icon">▼</div>
            </div>
            <div class="faq-answer">
              <p>Biaya pendaftaran di PAUD KB AL-HUSNA sebesar Rp 250.000 yang mencakup biaya formulir dan infaq bangunan. Informasi lebih detail dapat dilihat pada brosur pendaftaran atau menghubungi bagian administrasi.</p>
            </div>
            <div class="divider"></div>
          </div>
        </div>
      </div>
      
    @include('layouts.join')
    @include('layouts.footer')

    <script>
        function toggleFaq(element) {
    const faqItem = element.parentElement;
    faqItem.classList.toggle('active');
  }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>