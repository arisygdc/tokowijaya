@include('toko.header')

  <!-- Headline/Hero -->
  <!-- PC Version -->
  <div class="container-fluid px-0 d-none d-lg-block">
    <div class="row mx-0 justify-content-center" style="position: relative;">
      <div class="card">
          <img src="img/hero/toko.jpeg" alt="">
      </div>
    </div>
    <div class="row justify-content-center text-center" style="max-width: 100%;">
      <div class="col-6" style="width: 100%; transform: translateY(-88px);">
        <div class="input-group">
          <input class="form-control" type="text" placeholder="ex : gula, beras, minyak . . .">
          <div class="input-group-append">
            <button class="btn btn-light" type="button"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- End of Headline -->
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <hr><br>

  <!-- Featured -->
  <section class="similar shadow-sm bg-white p-3 mt-5 mb-5">
    <div class="container">
      <div class="col">
        <h4>Produk lain yang mungkin anda suka</h4>
        <p>Berdasarkan produk yang baru-baru ini anda lihat</p>
      </div>
      <div class="row mb-0">
        <div class="col-3 justify-content-center" style="height: fit-content;">
          <figure class="figure">
            <div class="figure-img m-0">
              <img src="img/featured/1.png" class="figure-img img-fluid m-0">
            </div>
            <a class="figure-caption text-center btn" href="">
              <h5>Nama Produk</h5>
              <p>IDR 260,900</p>
            </a>
          </figure>
        </div>
        <div class="col-3 justify-content-center" style="height: fit-content;">
          <figure class="figure">
            <div class="figure-img m-0">
              <img src="img/featured/2.png" class="figure-img img-fluid m-0">
            </div>
            <a class="figure-caption text-center btn" href="">
              <h5>Nama Produk</h5>
              <p>IDR 260,900</p>
            </a>
          </figure>
        </div>
        <div class="col-3 justify-content-center" style="height: fit-content;">
          <figure class="figure">
            <div class="figure-img m-0">
              <img src="img/featured/3.png" class="figure-img img-fluid m-0">
            </div>
            <a class="figure-caption text-center btn" href="">
              <h5>Nama Produk</h5>
              <p>IDR 260,900</p>
            </a>
          </figure>
        </div>
        <div class="col-3 justify-content-center" style="height: fit-content;">
          <figure class="figure">
            <div class="figure-img m-0">
              <img src="img/featured/4.png" class="figure-img img-fluid m-0">
            </div>
            <a class="figure-caption text-center btn" href="">
              <h5>Nama Produk</h5>
              <p>IDR 260,900</p>
            </a>
          </figure>
        </div>
        <button type="button" class="btn btn-outline-secondary btn-sm mx-auto">Lihat Selengkapnya</button>
    </div>
  </section>
  <!-- End of Featured -->

  <!-- Bottom Jumbotron (Invisible) -->
  <section class="info mb-5">
    <div class="container p-5">
      <div class="row mx-0 mt-5 text-center">
        <div class="col">
          <h1 class="display-4" style="color: #46576C;">JADI TUNGGU APA LAGI ?</h1>
        </div>
      </div>
      <div class="row mx-0 mt-3 d-flex justify-content-center">
        <button type="button" class="btn btn-outline-secondary btn-lg">BELANJA SEKARANG</button>
      </div>
    </div>
  </section>
  <!-- End of Bottom Jumbotron -->

@include('toko.footer')