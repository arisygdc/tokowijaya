@include('dasboard.header')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Produk</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <a type="button" class="btn btn-primary" href="input_barang.php">Tambah Produk</a>
                          </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Stock</th>
                                            <th>Jenis</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($barang as $val)
                                     <tr>
                                            <th>{{$val->id}}</th>
                                            <th>{{$val->nama_barang}}</th>
                                            <th>{{$val->satuan}}</th>
                                            <th>{{$val->jenis_barang}}</th>
                                            <th>{{$val->harga}}</th>
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
