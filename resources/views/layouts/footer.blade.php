<style>
    .footer {
        color: white;
        padding: 40px 0;
        position: relative;
    }
    
    .footer::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgdmlld0JveD0iMCAwIDcyIDcyIj48cGF0aCBkPSJNNDggMzJhOCA4IDAgMSAwIDAgMTYgOCA4IDAgMSAwIDAtMTZ6TTI0IDMyYTQgNCAwIDEgMCAwIDggNCA0IDAgMSAwIDAtOHoiIGZpbGw9IiMxNTViOWUiIG9wYWNpdHk9IjAuMiIvPjwvc3ZnPg==');
        opacity: 0.1;
        z-index: 0;
    }
    
    .footer .container {
        position: relative;
        z-index: 1;
    }
    
    .school-logo {
        width: 80px;
        height: 80px;
        margin-bottom: 15px;
    }
    
    .school-info h4 {
        font-weight: bold;
        font-size: 1.2rem;
        margin-bottom: 10px;
    }
    
    .school-info p {
        margin-bottom: 5px;
        font-size: 0.9rem;
    }
    
    .contact-title, 
    .social-title,
    .location-title {
        font-weight: bold;
        margin-bottom: 15px;
        text-transform: uppercase;
        font-size: 1rem;
    }
    
    .contact-info a,
    .social-media a {
        color: white;
        text-decoration: none;
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        font-size: 0.9rem;
    }
    
    .contact-info i,
    .social-media i {
        margin-right: 10px;
        font-size: 1.2rem;
    }
    
    .map-container {
        border-radius: 5px;
        overflow: hidden;
        max-width: 100%;
    }
    
    .map-container img {
        width: 100%;
        height: auto;
    }
    
    @media (max-width: 768px) {
        .school-info, .contact-info, .social-media, .location-info {
            margin-bottom: 30px;
        }
    }
    .bg-custom {
    background-image: url("{{ asset('images/page-layout/background_footer.png') }}");
    background-size: cover; 
    background-repeat: no-repeat;
    height: 400px;
}

</style>

<footer class="footer bg-custom">
    <div class="container">
        <div class="row mt-5">
            <!-- School Info Column -->
            <div class="col-md-4 school-info">
                <img src="{{ asset('images/page-layout/logo_tidak_text.png') }}" alt="KB AL-HUSNA Logo" class="school-logo">
                <h4>KB AL-HUSNA</h4>
                <p>Kp. Pasir Muncang RT 01</p>
                <p>RW 03 Desa Sukamanah</p>
                <p>Kecamatan Megamendung</p>
                <p>Kabupaten Bogor</p>
            </div>
            
            <!-- Contact Info Column -->
            <div class="col-md-4">
                <h5 class="contact-title">HUBUNGI KAMI</h5>
                <div class="contact-info">
                    <a href="tel:628577826075">
                        <i class="bi bi-whatsapp"></i>
                        62857 7782 6075
                    </a>
                    <a href="mailto:Paud.alhusna2209@gmail.com">
                        <i class="bi bi-envelope"></i>
                        Paud.alhusna2209@gmail.com
                    </a>
                </div>
                
                <h5 class="social-title mt-4">SOSIAL MEDIA</h5>
                <div class="social-media">
                    <a href="https://instagram.com/paud_kbalhusna" target="_blank">
                        <i class="bi bi-instagram"></i>
                        paud_kbalhusna
                    </a>
                </div>
            </div>
            
            <!-- Location Column -->
            <div class="col-md-4 location-info">
                <h5 class="location-title">LOKASI SEKOLAH KAMI</h5>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15853.598451073392!2d106.8060503!3d-6.5971565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5b7d47f9df3%3A0x7a8423915ade7301!2sHotel%20Salak%20The%20Heritage!5e0!3m2!1sid!2sid!4v1741276966339!5m2!1sid!2sid" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</footer>