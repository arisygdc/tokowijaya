@include('dasboard.header')
<div class="container mt-5">
		<h2>Input Data Karyawan</h2>
		<form action="{{ url('/karyawan/insert') }}" method="POST">
            @csrf
            <div class="form-group">
				<label for="nik">Kode Karyawan:</label>
				<input type="text" class="form-control" id="nik" name="kode_karyawan">
			</div>
			<div class="form-group">
				<label for="nik">NIK:</label>
				<input type="text" class="form-control" id="nik" name="nik">
			</div>
			<div class="form-group">
				<label for="nama">Nama:</label>
				<input type="text" class="form-control" id="nama" name="nama"">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat:</label>
				<textarea class="form-control" id="alamat" name="alamat"></textarea>
			</div>
			<div class="form-group">
				<label for="jenis_kelamin">Jenis Kelamin:</label>
				<select class="form-control" id="jenis_kelamin" name="jk">
					<option value="laki-laki">Laki-Laki</option>
					<option value="perempuan">Perempuan</option>
				</select>
			</div>
            <div class="form-group">
				<label for="nama">Telephone:</label>
				<input type="text" class="form-control" id="nama" name="telephone"">
			</div>
            <div class="form-group">
				<label for="nama">Password:</label>
				<input type="password" class="form-control" id="nama" name="password"">
			</div>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
	</div>
@include('dasboard.footer')
