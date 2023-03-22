
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

    <!-- Search -->
    <section class="search-button mb-3">
        <div class="container">
            <div class="input-group mb-2">
                <input class="form-control" type="text" placeholder="ex : Beras, Gula, Minyak, . . .">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Search -->

    <!-- Display Category -->
    <section class="display">
        <div class="container">
            <div class="row">
                <div class="col-md-6 px-3 pb-3" style="height: fit-content;">
                    <div class="card bg-dark text-white banner">
                        <img src="img/category/H1.png" class="card-img rounded">
                        <div class="card-img-overlay d-flex justify-content-between">
                            <h4 class="card-title" style="font-weight: 800;">beras</h4>
                        </div>
                        <a href="{{ url('/item') }}"></a>
                    </div>
                </div>

                <div class="col-md-6 px-3 pb-3" style="height: fit-content;">
                    <div class="card bg-dark text-white banner">
                        <img src="img/category/H1.png" class="card-img rounded">
                        <div class="card-img-overlay d-flex justify-content-between">
                            <h4 class="card-title" style="font-weight: 800;">Minyak</h4>
                        </div>
                        <a href=""></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 p-3" style="height: fit-content;">
                    <div class="card bg-dark text-white banner">
                        <img src="img/category/1.png" class="card-img rounded">
                        <div class="card-img-overlay d-flex justify-content-between">
                            <h5 class="card-title" style="font-weight: 800;">Detergen</h5>
                        </div>
                        <a href=""></a>
                    </div>
                </div>

                <div class="col-md-4 p-3" style="height: fit-content;">
                    <div class="card bg-dark text-white banner">
                        <img src="img/category/1.png" class="card-img rounded">
                        <div class="card-img-overlay d-flex justify-content-between">
                            <h5 class="card-title" style="font-weight: 800;">Snack</h5>
                        </div>
                        <a href=""></a>
                    </div>
                </div>

                <div class="col-md-4 p-3" style="height: fit-content;">
                    <div class="card bg-dark text-white banner">
                        <img src="img/category/1.png" class="card-img rounded">
                        <div class="card-img-overlay d-flex justify-content-between">
                            <h5 class="card-title" style="font-weight: 800;">Rokok</h5>
                        </div>
                        <a href=""></a>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row mb-5">
                <div class="col-6 col-lg-2 col-md-4 p-3" style="height: fit-content;">
                    <div class="card bg-dark text-white banner">
                        <img src="img/category/6a.png" class="card-img rounded">
                        <div class="card-img-overlay d-flex justify-content-between">
                            <h5 class="card-title" style="font-weight: 800;">Minuman</h5>
                        </div>
                        <a href=""></a>
                    </div>
                </div>

                <div class="col-6 col-lg-2 col-md-4 p-3" style="height: fit-content;">
                    <div class="card bg-dark text-white banner">
                        <img src="img/category/6a.png" class="card-img rounded">
                        <div class="card-img-overlay d-flex justify-content-between">
                            <h5 class="card-title" style="font-weight: 800;">Mie Instant</h5>
                        </div>
                        <a href=""></a>
                    </div>
                </div>

                <div class="col-6 col-lg-2 col-md-4 p-3" style="height: fit-content;">
                    <div class="card bg-dark text-white banner">
                        <img src="img/category/6a.png" class="card-img rounded">
                        <div class="card-img-overlay d-flex justify-content-between">
                            <h5 class="card-title" style="font-weight: 800;">Gula</h5>
                        </div>
                        <a href=""></a>
                    </div>
                </div>

                <div class="col-6 col-lg-2 col-md-4 p-3" style="height: fit-content;">
                    <div class="card bg-dark text-white banner">
                        <img src="img/category/6a.png" class="card-img rounded">
                        <div class="card-img-overlay d-flex justify-content-between">
                            <h5 class="card-title" style="font-weight: 800;">Kerupuk</h5>
                        </div>
                        <a href=""></a>
                    </div>
                </div>

                <div class="col-6 col-lg-2 col-md-4 p-3" style="height: fit-content;">
                    <div class="card bg-dark text-white banner">
                        <img src="img/category/6a.png" class="card-img rounded">
                        <div class="card-img-overlay d-flex justify-content-between">
                            <h5 class="card-title" style="font-weight: 800;">Air Kemasan</h5>
                        </div>
                        <a href=""></a>
                    </div>
                </div>

                <div class="col-6 col-lg-2 col-md-4 p-3" style="height: fit-content;">
                    <div class="card bg-dark text-white banner">
                        <img src="img/category/6a.png" class="card-img rounded">
                        <div class="card-img-overlay d-flex justify-content-between">
                            <h5 class="card-title" style="font-weight: 800;">Shampoo</h5>
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
                <div class="card">
                    <div class="banner">
                        <img src="img/category/p1.png" class="card-img-top" alt="...">
                        <a href=""></a>
                    </div>
                    <div class="card-body  text-center">
                        <h5 class="card-title">Nama Produk</h5>
                        <p class="card-subtitle" style="opacity: 0.5;">IDR 260,500</p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-sm text-light"
                            style="font-size: 10px; background-color: #7F9427;">Beras</button>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </div>
                <div class="card">
                    <div class="banner">
                        <img src="img/category/p2.png" class="card-img-top" alt="...">
                        <a href=""></a>
                    </div>
                    <div class="card-body  text-center">
                        <h5 class="card-title">Nama Produk</h5>
                        <p class="card-subtitle" style="opacity: 0.5;">IDR 260,500</p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-sm text-light"
                            style="font-size: 10px; background-color: #FF787C;">Minyak Goreng</button>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </div>
                <div class="card shadow-sm">
                    <div class="banner">
                        <img src="img/category/p3.png" class="card-img-top" alt="...">
                        <a href=""></a>
                    </div>
                    <div class="card-body  text-center">
                        <h5 class="card-title">Nama Produk</h5>
                        <p class="card-subtitle" style="opacity: 0.5;">IDR 260,500</p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-sm text-light"
                            style="font-size: 10px; background-color: #ff78f6;">Snack</button>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </div>
                <div class="card">
                    <div class="banner">
                        <img src="img/category/p4.png" class="card-img-top" alt="...">
                        <a href=""></a>
                    </div>
                    <div class="card-body  text-center">
                        <h5 class="card-title">Nama Produk</h5>
                        <p class="card-subtitle" style="opacity: 0.5;">IDR 260,500</p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-sm text-light"
                            style="font-size: 10px; background-color: #834bcc;">Minuman</button>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row mx-0">
                <div class="col mb-3 text-center">
                    <button type="button" class="btn btn-outline-secondary btn-sm">Tampilkan lebih banyak</button>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Reccomendations -->
@include('toko.footer')
