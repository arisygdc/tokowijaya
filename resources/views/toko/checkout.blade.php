@include('toko.header')
<!-- shopping cart form -->
<form>
  <div class="row text-center">
    <h1>Keranjang Belanja</h1>
    <div class="col justify-content-center">
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
            @php
                $total = 0
            @endphp
            @if ($count > 0)
            @foreach ($keranjang as $ker)
              <tr>
                <td>{{ $ker->nama_barang }}</td>
                <td>{{ $ker->jumlah }}</td>
                <td>{{ $ker->harga }}</td>
              </tr>
                @php
                    $total += ($ker->harga * $ker->jumlah)
                @endphp
            @endforeach
            @endif
            </tbody>
          </table>
          <h5 class="card-title">Total: {{ $total }}</h5>
        </div>
      </div>
    </div>
  </div>
</form>
<div class="container mt-5">
  <h1>Alamat Pengiriman</h1>
  <form action="{{ url('/checkout') }}" method="post">
    @csrf
    <div class="row mb-3">
      <label for="inputName" class="col-sm-2 col-form-label">Nama Lengkap</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputName" placeholder="Masukkan nama lengkap Anda">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputAddress" class="col-sm-2 col-form-label">Alamat</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputAddress" placeholder="Masukkan alamat lengkap Anda" name="alamat">
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
  @include('toko.footer')
