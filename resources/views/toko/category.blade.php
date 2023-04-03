
@include('toko.header')
    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide mb-3" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="banner-promo d-flex">
                    <div class="banner">
                        <img src="img/category/B1.jpeg">
                        <a href=""></a>
                    </div>
                    <div class="banner">
                        <img src="img/category/B2.jpeg">
                        <a href=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Carousel -->

    <!-- Display Category -->
    <section class="display">
        <div class="container">
            <div class="row">
                <div class="col-md-6 px-3 pb-3" style="height: fit-content;">
                    <div class="card bg-dark text-white banner">
                        <img src="img/category/H1.png" class="card-img rounded">
                        <div class="card-img-overlay d-flex justify-content-between">
                            <h4 class="card-title" style="font-weight: 800;">Sembako</h4>
                        </div>
                        <a href="{{ url('/category/Sembako') }}"></a>
                    </div>
                </div>

                <div class="col-md-6 px-3 pb-3" style="height: fit-content;">
                    <div class="card bg-dark text-white banner">
                        <img src="img/category/H1.png" class="card-img rounded">
                        <div class="card-img-overlay d-flex justify-content-between">
                            <h4 class="card-title" style="font-weight: 800;">Snack</h4>
                        </div>
                        <a href="{{ url('/category/Snack') }}"></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 p-3" style="height: fit-content;">
                    <div class="card bg-dark text-white banner">
                        <img src="img/category/1.png" class="card-img rounded">
                        <div class="card-img-overlay d-flex justify-content-between">
                            <h5 class="card-title" style="font-weight: 800;">ATK</h5>
                        </div>
                        <a href="{{ url('/category/ATK') }}"></a>
                    </div>
                </div>

                <div class="col-md-4 p-3" style="height: fit-content;">
                    <div class="card bg-dark text-white banner">
                        <img src="img/category/1.png" class="card-img rounded">
                        <div class="card-img-overlay d-flex justify-content-between">
                            <h5 class="card-title" style="font-weight: 800;">Bumbu</h5>
                        </div>
                        <a href="{{ url('/category/Bumbu') }}"></a>
                    </div>
                </div>

                <div class="col-md-4 p-3" style="height: fit-content;">
                    <div class="card bg-dark text-white banner">
                        <img src="img/category/1.png" class="card-img rounded">
                        <div class="card-img-overlay d-flex justify-content-between">
                            <h5 class="card-title" style="font-weight: 800;">Minuman</h5>
                        </div>
                        <a href="{{ url('/category/Minuman') }}"></a>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row mb-5">
                <div class="col-6 col-lg-2 col-md-4 p-3" style="height: fit-content;">
                    <div class="card bg-dark text-white banner">
                        <img src="img/category/6a.png" class="card-img rounded">
                        <div class="card-img-overlay d-flex justify-content-between">
                            <h5 class="card-title" style="font-weight: 800;">Obat</h5>
                        </div>
                        <a href="{{ url('/category/Obat') }}"></a>
                    </div>
                </div>

                <div class="col-6 col-lg-2 col-md-4 p-3" style="height: fit-content;">
                    <div class="card bg-dark text-white banner">
                        <img src="img/category/6a.png" class="card-img rounded">
                        <div class="card-img-overlay d-flex justify-content-between">
                            <h5 class="card-title" style="font-weight: 800;">Perlengkap</h5>
                        </div>
                        <a href="{{ url('/category/Perlengkap') }}"></a>
                    </div>
                </div>

                <div class="col-6 col-lg-2 col-md-4 p-3" style="height: fit-content;">
                    <div class="card bg-dark text-white banner">
                        <img src="img/category/6a.png" class="card-img rounded">
                        <div class="card-img-overlay d-flex justify-content-between">
                            <h5 class="card-title" style="font-weight: 800;">Lainnya</h5>
                        </div>
                        <a href="{{ url('/category/sembako') }}"></a>
                    </div>
                </div>

                <div class="col-6 col-lg-2 col-md-4 p-3" style="height: fit-content;">
                    <div class="card bg-dark text-white banner">
                        <img src="img/category/6a.png" class="card-img rounded">
                        <div class="card-img-overlay d-flex justify-content-between">
                            <h5 class="card-title" style="font-weight: 800;">Segera</h5>
                        </div>
                        <a href=""></a>
                    </div>
                </div>

                <div class="col-6 col-lg-2 col-md-4 p-3" style="height: fit-content;">
                    <div class="card bg-dark text-white banner">
                        <img src="img/category/6a.png" class="card-img rounded">
                        <div class="card-img-overlay d-flex justify-content-between">
                            <h5 class="card-title" style="font-weight: 800;">Segera</h5>
                        </div>
                        <a href=""></a>
                    </div>
                </div>

                <div class="col-6 col-lg-2 col-md-4 p-3" style="height: fit-content;">
                    <div class="card bg-dark text-white banner">
                        <img src="img/category/6a.png" class="card-img rounded">
                        <div class="card-img-overlay d-flex justify-content-between">
                            <h5 class="card-title" style="font-weight: 800;">Segera</h5>
                        </div>
                        <a href=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Display Category -->

    <!-- Reccomendations -->
    <section class="recommend shadow-sm bg-white p-3 mb-5">
        <div class="container text-center justify-content-center">
            <div class="row mx-0">
                <div class="col mb-3">
                    <h2>Daftar Produk</h2>
                    <p>Berdasarkan produk trending dan produk yang kamu lihat akhir-akhir ini</p>
                </div>
            </div>
            <div class="card-deck mb-4">
                @foreach ($b as $a)
                <div class="col-6 d-flex flex-row justify-content-center">
                <figure class="figure">
                    <div class="figure-img">
                    <img src="{{ $a->gambar }}" height="320px" class="figure-img m-0">
                    </div>
                    <a class="figure-caption text-center btn" href="">
                    <h4>{{ $a->nama_barang }}</h4>
                    <h4>{{ $a->harga }}</h4>
                    </a>
                </figure>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End of Reccomendations -->
@include('toko.footer')
