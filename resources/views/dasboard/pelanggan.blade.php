@include('dasboard.header')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Pelanggan</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <a type="button" class="btn btn-primary" href="{{ url('/karyawan/pelanggan/insert') }}">Tambah Pelanggan</a>
                          </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>No Telp</th>
                                            <th>Tgl Lahir</th>
                                            <th>Pekerjaan</th>
                                            <th>Jenis Kelamin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pelanggan as $val)
                                        <tr>
                                            <td>{{$val->kode_pengguna}}</td>
                                            <td>{{$val->nik}}</td>
                                            <td>{{$val->name}}</td>
                                            <td>{{$val->alamat}}</td>
                                            <td>{{$val->telephone}}</td>
                                            <td>{{$val->tgl_lahir}}</td>
                                            <td>{{$val->pekerjaan}}</td>
                                            <td>{{$val->jk}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
@include('dasboard.footer')
