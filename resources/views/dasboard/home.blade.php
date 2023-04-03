                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Rekomendasi Restock Barang</h1>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Stock Saat ini</th>
                            <th>Rekomendasi Untuk Dibeli</th>
                        </tr>
                        @foreach ($barang as $val)
                        <tr>
                            <th>{{$val->id}}</th>
                            <th>{{$val->nama_barang}}</th>
                            <th>{{$val->stock}}</th>
                            <th></th> 
                            <!-- rencana jumlah stocknya cluster 0 restocknya 1.2x
                            rencana jumlah stocknya cluster 1 restocknya 1x
                            rencana jumlah stocknya cluster 2 restocknya 0.8x
                            rencana jumlah stocknya cluster 3 restocknya 0.5x -->
                        </tr>
                        @endforeach
                    </tbody>
                    </table>

                </div>
                <!-- /.container-fluid -->