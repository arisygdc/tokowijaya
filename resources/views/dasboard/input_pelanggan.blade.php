@include('dasboard.header')
<div class="container mt-5">
		<h1>Input Data Pelanggan</h1>
		<form>
			<div class="form-group">
				<label for="kode">Kode</label>
				<input type="text" class="form-control" id="kode" name="kode">
			</div>
			<div class="form-group">
				<label for="nik">NIK</label>
				<input type="text" class="form-control" id="nik" name="nik">
			</div>
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" class="form-control" id="nama" name="nama">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<textarea class="form-control" id="alamat" name="alamat"></textarea>
			</div>
			<div class="form-group">
				<label for="no-telp">No Telp</label>
				<input type="text" class="form-control" id="no-telp" name="no-telp">
			</div>
			<div class="form-group">
				<label for="tgl-lahir">Tgl Lahir</label>
				<input type="date" class="form-control" id="tgl-lahir" name="tgl-lahir">
			</div>
			<div class="form-group">
				<label for="pekerjaan">Pekerjaan</label>
				<input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
			</div>
			<div class="form-group">
				<label for="jenis-kelamin">Jenis Kelamin</label>
				<select class="form-control" id="jenis-kelamin" name="jenis-kelamin">
					<option value="">- Pilih Jenis Kelamin -</option>
					<option value="L">Laki-laki</option>
					<option value="P">Perempuan</option>
				</select>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@include('dasboard.footer')
