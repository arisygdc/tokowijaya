<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- button redirect to /karyawan/restock/prediction -->
                    <h1 class="h3 mb-4 text-gray-800">Rekomendasi Restock Barang <a href="{{ url('/karyawan/restock/prediction') }}" class="btn btn-primary">Run Prediction</a></h1>
                    <br>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Stock Saat ini</th>
                            <th>Rekomendasi Untuk Dibeli</th>
                        </tr>
                        @php
                            $i = 0;
                        @endphp
                        
                        @foreach ($barang as $val)
                        <tr>
                            <th>{{ $i++ }}</th>
                            <th>{{$val->nama_barang}}</th>
                            <th>{{$val->stock}}</th>
                            @php
                                if ($val->cluster == 0) {
                                    $val->stock = $val->stock * 1.2;
                                } else if ($val->cluster == 1) {
                                    $val->stock = $val->stock * 1;
                                } else if ($val->cluster == 2) {
                                    $val->stock = $val->stock * 0.8;
                                } else if ($val->cluster == 3) {
                                    $val->stock = $val->stock * 0.5;
                                }
                            @endphp
                            <th>{{ round($val->stock) }}</th>
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
        