<style>
      .registration-section {
            background-image: url("{{ asset('images/page-layout/background_bergabung.png') }}");
            background-size: cover; 
    background-position: center;
    background-repeat: no-repeat; 
            border-radius: 30px;
            padding: 0;
            overflow: hidden;
            position: relative;
            margin: 20px 0;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        
        .registration-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 30px;
            height: 100%;
        }
        
        .registration-heading {
            color: white;
            font-size: 2.2rem;
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
        }
        
        .registration-button {
            background-color: #ff6b2b;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 1rem;
            transition: all 0.3s ease;
            text-transform: uppercase;
        }
        
        .registration-button:hover {
            background-color: #e45a21;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }
        
        .image-container {
            position: relative;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .children-image {
            max-width: 75%;
            height: auto;
            position: relative;
            z-index: 1;
        }

</style>

<div class="container py-4 .bg-custom">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="registration-section position-relative">
                <div class="row g-0 align-items-center">
                    <div class="col-md-5 image-container">
                        <img class="children-image" src="{{ asset('images/page-layout/joinus.png') }}" alt="">
                    </div>
                    <div class="col-md-7 registration-text">
                        <h2 class="registration-heading">Ingin Bergabung dengan Kami?</h2>
                        <button class="registration-button">DAFTAR SEKARANG!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
