@include('dasboard.header')
<div class="container">
  <form>
    <div class="mb-3">
      <label for="kode_produk" class="form-label">Kode Produk</label>
      <input type="text" class="form-control" id="kode_produk" name="kode_produk" placeholder="Masukkan Kode Produk">
    </div>
    <div class="mb-3">
      <label for="nama_produk" class="form-label">Nama Produk</label>
      <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Masukkan Nama Produk">
    </div>
    <div class="mb-3">
      <label for="jenis" class="form-label">Jenis</label>
      <select class="form-control" id="jenis" name="jenis">
        <option value="">Pilih Jenis</option>
        <option value="Makanan">Makanan</option>
        <option value="Minuman">Minuman</option>
        <option value="Elektronik">Elektronik</option>
        <option value="Pakaian">Pakaian</option>
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
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>
@include('dasboard.footer')
