@include('toko.header')
<!-- Breadcrumb -->
  <section class="separator">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent" style="font-size: 14px;">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ $kategori }}</li>
        </ol>
      </nav>
    </div>
  </section>
  <!-- End of Breadcrumb -->
  <!-- Content -->
  <section class="item pt-3 bg-white shadow-sm mb-5">
    <div class="container d-flex flex-column">
        <div class="container text-center">
          <h1>{{ $kategori }}</h1>
        </div>
        <!-- tempat ngerepeat -->
        @foreach ($barangs as $barang)
        <div class="container d-flex flex-row align-items-center">
          <div class="d-flex">
            <img src="{{ asset('img/featured/p2.jpg') }}" height="280px" alt="">
          </div>
          <div class="d-flex flex-column text-start">
            <h4>{{$barang->nama_barang}}</h4>
            <h4>Harga : {{$barang->harga}}</h4>
            <h4>Stock : {{$barang->stock}}</h4>
            <h4>
              <form action="{{ url('/keranjang') }}" method="POST">
                <label for="quantity">jumlah :</label>
                <input type="number" id="quantity" name="quantity" min="1" max="stock">
                <input type="submit">
              </form>
            </h4>
          </div>
        </div>
        @endforeach
        <!-- end repeat-->
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
              <img src="{{ asset('img/featured/p1.jpg') }}" class="figure-img img-fluid m-0">
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
              <img src="{{ asset('img/featured/p2.jpg') }}" class="figure-img img-fluid m-0">
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
              <img src="{{ asset('img/featured/p2.jpg') }}" class="figure-img img-fluid m-0">
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
              <img src="{{ asset('img/featured/p2.jpg') }}" class="figure-img img-fluid m-0">
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
              <img src="{{ asset('img/featured/p1.jpg') }}" class="figure-img img-fluid m-0">
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
              <img src="{{ asset('img/featured/p2.jpg') }}" class="figure-img img-fluid m-0">
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
