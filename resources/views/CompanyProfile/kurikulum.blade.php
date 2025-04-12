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
        text-align: center
    }
    .blue {
        color: #0099cc;
    }
    
    .orange {
        color: #ff9900;
    }

    .method-title {
        font-size: 16px;
        font-weight: bold;
        color: white;
        background-color: rgba(0, 0, 0, 0.1);
        width: 100%;
        padding: 12px 5px;
        border-radius: 0 0 8px 8px;
        margin: 0;
        text-align: center;
    }

    .method-card {
        border-radius: 8px;
        height: 220px;  /* Increased height for more padding */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .blue-card {
        background-color: #5271BD;
    }
    
    .green-card {
        background-color: #8BAD3A;
    }
    
    .orange-card {
        background-color: #FFA640;
    }

    .method-image {
        flex-grow: 1;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .method-image img {
        max-height: 120px;
        object-fit: contain;
    }

    .methods-title {
        margin: 50px 0 30px;
        text-align: center;
        font-size: 28px;
        font-weight: bold;
    }
    
    .methods-container {
        max-width: 800px;
        margin: 0 auto 50px;
    }
</style>
<body>

    @include('layouts.header')

    <div class="container penerimaan mt-5">
        <h2 class="judul">
            <span class="blue">Kurikulum</span><span class="orange">KB Al-Husna</span>
        </h2>
        
        <div class="announcement-box">
            <p>PAUD AL-HUSNA menerapkan KURIKULUM MERDEKA memberikan kebebasan bagi sekolah dan guru untuk menyesuaikan pembelajaran sesuai dengan kebutuhan anak. Di PAUD KB AL-HUSNA, kurikulum ini dikombinasikan dengan beberapa metode untuk mengoptimalkan perkembangan anak.</p>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>