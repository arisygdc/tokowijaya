@include('dasboard.header')
<div class="container">
@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif
  <form action="{{ url('/karyawan/barang/insert') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="nama_produk" class="form-label">Nama Produk</label>
      <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Masukkan Nama Produk">
    </div>
    <div class="mb-3">
      <label for="jenis" class="form-label">Jenis</label>
      <select class="form-control" id="jenis" name="jenis">
        <option value="">Pilih Jenis</option>
        <option value="Makanan">Sembako</option>
        <option value="Minuman">Snack</option>
        <option value="Elektronik">ATK</option>
        <option value="Pakaian">Bumbu</option>
        <option value="Minuman">Minuman</option>
        <option value="Elektronik">Obat</option>
        <option value="Pakaian">Perlengkap</option>
        <option value="Pakaian">Lainnya</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="jumlah" class="form-label">Jumlah</label>
      <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah Produk">
    </div>
    <div class="mb-3">
      <label for="harga" class="form-label">Harga</label>
      <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga Produk">
    </div>
    <div class="mb-3">
      <label for="gambar" class="form-label">Link Produk</label>
      <input type="text" class="form-control" id="gambar" name="gambar" placeholder="Masukkan Link Gambar Produk">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>
@include('dasboard.footer')
