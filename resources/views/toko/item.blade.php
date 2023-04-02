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
        <div class="container d-flex flex-row align-items-center justify-content-center">
          <div class="d-flex">
            <img src="{{ asset('img/featured/p2.jpg') }}" height="280px" alt="">
          </div>
          <div class="d-flex flex-column text-start">
            <table>
              <tr>
                <td><h4>Nama</h4></td>
                <td><h4>: {{$barang->nama_barang}}</h4></td>
              </tr>
              <tr>
                <td><h4>Harga</h4></td>
                <td><h4>: {{$barang->harga}}</h4></td>
              </tr>
              <tr>
                <td><h4>Stock</h4></td>
                <td><h4>: {{$barang->stock}}</h4></td>
              </tr>
              <tr>
                <td><h4>Masukkan Jumlah</h4></td>
                <td>
                  <h4>
                  <form action="{{ url('/keranjang') }}" method="POST">
                    @csrf
                    <label for="quantity"><h4>:</h4></label>
                    <input type="hidden" name="barang" class="form-control mr-sm-2" value="{{ $barang->id }}">
                    <input type="number" id="quantity" name="quantity" min="1" max="stock" name="qty">
                    <input type="submit" class="btn btn-primary">
                  </form>
                </h4>
                </td>
              </tr>
            </table>

            

          </div>
        </div>
        @endforeach
        <!-- end repeat-->
    </div>
  </section>
  <!-- End of Content -->
  @include('toko.footer')
