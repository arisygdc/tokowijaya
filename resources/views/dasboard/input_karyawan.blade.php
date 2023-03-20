@include('dasboard.header')
<div class="container mt-5">
		<h2>Input Data Karyawan</h2>
		<form>
			<div class="form-group">
				<label for="kode">Kode:</label>
				<input type="text" class="form-control" id="kode">
			</div>
			<div class="form-group">
				<label for="nik">NIK:</label>
				<input type="text" class="form-control" id="nik">
			</div>
			<div class="form-group">
				<label for="nama">Nama:</label>
				<input type="text" class="form-control" id="nama">
			</div>
			<div class="form-group">
				<label for="posisi">Posisi:</label>
				<input type="text" class="form-control" id="posisi">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat:</label>
				<textarea class="form-control" id="alamat"></textarea>
			</div>
			<div class="form-group">
				<label for="telp">No Telp:</label>
				<input type="text" class="form-control" id="telp">
			</div>
			<div class="form-group">
				<label for="jenis_kelamin">Jenis Kelamin:</label>
				<select class="form-control" id="jenis_kelamin">
					<option value="laki-laki">Laki-Laki</option>
					<option value="perempuan">Perempuan</option>
				</select>
			</div>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
	</div>
@include('dasboard.footer')
