@include('dasboard.header')
<div class="container mt-5">
		<h1>Input Data Pelanggan</h1>
		<form action="{{ url('/karyawan/pelanggan/insert') }}" method="POST">
			@csrf
			<div class="form-group">
				<label for="nik">NIK</label>
				<input type="text" class="form-control" id="nik" name="nik">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password">
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
				<input type="text" class="form-control" id="no-telp" name="telephone">
			</div>
			<div class="form-group">
				<label for="tgl-lahir">Tgl Lahir</label>
				<input type="date" class="form-control" id="tgl-lahir" name="tgl_lahir">
			</div>
			<div class="form-group">
				<label for="pekerjaan">Pekerjaan</label>
				<input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
			</div>
			<div class="form-group">
				<label for="jenis-kelamin">Jenis Kelamin</label>
				<select class="form-control" id="jenis-kelamin" name="jk">
					<option value="">- Pilih Jenis Kelamin -</option>
					<option value="Pria">Laki-laki</option>
					<option value="wanita">Perempuan</option>
				</select>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@include('dasboard.footer')
