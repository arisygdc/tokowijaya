@include('dasboard.header')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Transaksi id {{ $transaksi_id }}</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <form action="{{ url('/karyawan/kirim?id='.$transaksi_id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-primary">tandai telah dikirim</button>
                            </form>
                          </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Barang</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($detail_transaksi as $val)
                                        <tr>
                                            <td>{{ $val->barang }}</td>
                                            <td>{{ $val->jumlah }}</td>
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
