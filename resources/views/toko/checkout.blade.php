@include('toko.header')
<!-- shopping cart form -->
<form>
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h4>Keranjang Belanja</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-4">
              <img src="https://via.placeholder.com/200x200" alt="Product" class="img-fluid">
            </div>
            <div class="col-md-8">
              <h5 class="card-title">Nama Produk</h5>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" class="form-control" id="quantity" value="1">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          <h4>Ringkasan</h4>
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Beras</td>
                <td>1</td>
                <td>10,000</td>
              </tr>
            </tbody>
          </table>
          <h5 class="card-title">Total: 10,000</h5>
        </div>
      </div>
    </div>
  </div>
</form>
<div class="container mt-5">
  <h1>Alamat Pengiriman</h1>
  <form>
    <div class="row mb-3">
      <label for="inputName" class="col-sm-2 col-form-label">Nama Lengkap</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputName" placeholder="Masukkan nama lengkap Anda">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputAddress" class="col-sm-2 col-form-label">Alamat</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputAddress" placeholder="Masukkan alamat lengkap Anda">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputPhoneNumber" class="col-sm-2 col-form-label">Nomor Telepon</label>
      <div class="col-sm-10">
        <input type="tel" class="form-control" id="inputPhoneNumber" placeholder="Masukkan nomor telepon Anda">
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-10 offset-sm-2">
      <button type="submit" class="btn btn-primary btn-block">Checkout</button>
      </div>
    </div>
  </form>
</div>
<!-- end shopping cart form -->

  <!-- Similar Products -->
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
  <!-- End of Similar Products -->
  @include('toko.footer')
