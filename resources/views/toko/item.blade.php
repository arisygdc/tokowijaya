@include('toko.header')
<!-- Breadcrumb -->
  <section class="separator">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent" style="font-size: 14px;">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Nama Produk</li>
        </ol>
      </nav>
    </div>
  </section>
  <!-- End of Breadcrumb -->

  <!-- Content -->
  <section class="item pt-3 bg-white shadow-sm mb-5">
    <div class="container justify-content-center">
      <div class="row mx-0">
        <div class="col-md-4 mt-1" style="max-width:unset;">
          <div class="row mx-0">
            <div class="figure-img">
              <img src="img/single-item/p1.jpg" class="d-block w-100">
            </div>
          </div>
        </div>

        <div class="col px-3 mt-1">
          <div class="row mx-0">
            <h2>Minyak Goreng</h2>
          </div>
          <div class="row mx-0">
            <h4 class="mr-2 text-secondary">IDR 36,000</h4>
          </div>

          <div class="row mx-0 mt-2 mb-0">
            <div class="col mx-0">
              <p class="text-danger mr-2 mb-0" style="font-size: 20px;">Stock &lt; 50</p>
              <p class="text-danger" style="font-size: 14px; opacity: 0.6;">Segera pesan sebelum kehabisan !</p>
            </div>
          </div>
          <div class="row mt-1">
            <div class="col-md-3">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-secondary disabled" type="button">-</button>
                </div>
                <input class="form-control text-center" type="number" placeholder="1">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">+</button>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <button type="button" class="btn btn-primary btn-block">Add to cart</button>
            </div>
          </div>
        </div>
      </div>
      <hr class="m-0 mt-5 mb-5">

    </div>
  </section>
  <!-- End of Content -->

  <!-- Similar Products -->
  <section class="similar shadow-sm bg-white p-3 pt-4 mb-5">
    <div class="container">
      <div class="col">
        <h4>Produk lain yang mungkin anda suka</h4>
        <p>Berdasarkan produk yang baru-baru ini anda lihat</p>
      </div>
      <div class="row mx-0 mb-0 justify-content-center">
        <div class="col-6 col-sm-4 col-md-3 col-lg-2" style="height: fit-content;">
          <figure class="figure">
            <div class="figure-img m-0">
              <img src="img/featured/p1.jpg" class="figure-img img-fluid m-0">
              <a href="" class="d-flex justify-content-center">
                <div class="btn-group align-self-end" role="group" style="width: 100%;">
                  <button type="button" class="btn btn-danger"><img src="img/featured/Mask Group 11.png"
                      class="mx-auto"></button>
                  <button type="button" class="btn btn-success"><img src="img/featured/Mask Group 10.png"
                      class="mx-auto"></button>
                </div>
              </a>
            </div>
            <figcaption class="figure-caption text-center">
              <h5>Nama Produk</h5>
              <p>IDR 260,900</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2" style="height: fit-content;">
          <figure class="figure">
            <div class="figure-img m-0">
              <img src="img/featured/p2.jpg" class="figure-img img-fluid m-0">
              <a href="" class="d-flex justify-content-center">
                <div class="btn-group align-self-end" role="group" style="width: 100%;">
                  <button type="button" class="btn btn-danger"><img src="img/featured/Mask Group 11.png"
                      class="mx-auto"></button>
                  <button type="button" class="btn btn-success"><img src="img/featured/Mask Group 10.png"
                      class="mx-auto"></button>
                </div>
              </a>
            </div>
            <figcaption class="figure-caption text-center">
              <h5>Nama Produk</h5>
              <p>IDR 260,900</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2" style="height: fit-content;">
          <figure class="figure">
            <div class="figure-img m-0">
              <img src="img/featured/p1.jpg" class="figure-img img-fluid m-0">
              <a href="" class="d-flex justify-content-center">
                <div class="btn-group align-self-end" role="group" style="width: 100%;">
                  <button type="button" class="btn btn-danger"><img src="img/featured/Mask Group 11.png"
                      class="mx-auto"></button>
                  <button type="button" class="btn btn-success"><img src="img/featured/Mask Group 10.png"
                      class="mx-auto"></button>
                </div>
              </a>
            </div>
            <figcaption class="figure-caption text-center">
              <h5>Nama Produk</h5>
              <p>IDR 260,900</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2" style="height: fit-content;">
          <figure class="figure">
            <div class="figure-img m-0">
              <img src="img/featured/p2.jpg" class="figure-img img-fluid m-0">
              <a href="" class="d-flex justify-content-center">
                <div class="btn-group align-self-end" role="group" style="width: 100%;">
                  <button type="button" class="btn btn-danger"><img src="img/featured/Mask Group 11.png"
                      class="mx-auto"></button>
                  <button type="button" class="btn btn-success"><img src="img/featured/Mask Group 10.png"
                      class="mx-auto"></button>
                </div>
              </a>
            </div>
            <figcaption class="figure-caption text-center">
              <h5>Nama Produk</h5>
              <p>IDR 260,900</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2" style="height: fit-content;">
          <figure class="figure">
            <div class="figure-img m-0">
              <img src="img/featured/p1.jpg" class="figure-img img-fluid m-0">
              <a href="" class="d-flex justify-content-center">
                <div class="btn-group align-self-end" role="group" style="width: 100%;">
                  <button type="button" class="btn btn-danger"><img src="img/featured/Mask Group 11.png"
                      class="mx-auto"></button>
                  <button type="button" class="btn btn-success"><img src="img/featured/Mask Group 10.png"
                      class="mx-auto"></button>
                </div>
              </a>
            </div>
            <figcaption class="figure-caption text-center">
              <h5>Nama Produk</h5>
              <p>IDR 260,900</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2" style="height: fit-content;">
          <figure class="figure">
            <div class="figure-img m-0">
              <img src="img/featured/p2.jpg" class="figure-img img-fluid m-0">
              <a href="" class="d-flex justify-content-center">
                <div class="btn-group align-self-end" role="group" style="width: 100%;">
                  <button type="button" class="btn btn-danger"><img src="img/featured/Mask Group 11.png"
                      class="mx-auto"></button>
                  <button type="button" class="btn btn-success"><img src="img/featured/Mask Group 10.png"
                      class="mx-auto"></button>
                </div>
              </a>
            </div>
            <figcaption class="figure-caption text-center">
              <h5>Nama Produk</h5>
              <p>IDR 260,900</p>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col text-center">
          <button type="button" class="btn btn-outline-secondary btn-sm">Lihat Selengkapnya</button>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Similar Products -->
  @include('toko.footer')
