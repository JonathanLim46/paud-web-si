<div>
    <div class="container">
        <!-- Second row of images -->
        <div class="row mt-4">
            @foreach ($galeris as $galeri)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('storage/galeri/'.$galeri->foto_galeri) }}" class="card-img" alt="Gallery Image 4">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
