@include('dasboard.header')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Karyawan</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <a type="button" class="btn btn-primary" href="input_karyawan.php">Tambah Karyawan</a>
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
                                            <th>Posisi</th>
                                            <th>Alamat</th>
                                            <th>No Telp</th>
                                            <th>Jenis Kelamin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>0001</td>
                                            <td>190190190190190</td>
                                            <td>Edinburgh</td>
                                            <td>Kasir</td>
                                            <td>Dusun 1</td>
                                            <td>081212121212</td>
                                            <td>L</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
@include('dasboard.footer')
