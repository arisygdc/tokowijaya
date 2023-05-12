<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\DetTransaksi;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('level', 'Pengguna')->get();
        $usrLen = $user->count()-1;
        $barang = Barang::all();
        $barangLen = $barang->count()-1;
        $tgl = ['2022-12-01', '2022-12-02', '2022-12-03', '2022-12-04', '2022-12-05', '2022-12-06', '2022-12-07'];
        for ($i=0; $i < sizeof($tgl); $i++) {
            for ($f=0; $f < rand(30, 50); $f++) {
                $ker = new Transaksi;
                $ker->kode_pengguna = $user[rand(0, $usrLen)]->id;
                $ker->status = 2;
                $ker->tanggal = $tgl[$i];
                $ker->alamat = $user[rand(0, $usrLen)]->alamat;
                $ker->save();

                for ($g=0; $g < rand(1, 10); $g++) {
                    $barangPilihan = rand(0, $barangLen);
                    $jumlahDibeli = rand(1, 10);
                    $deTr = new DetTransaksi;
                    if ($barang[$barangPilihan]->stock < $jumlahDibeli) {
                        $deTr->jumlah = $jumlahDibeli;
                    } else {
                        $g-=1;
                        continue;
                    }
                    $deTr->kode_transaksi = $ker->id;
                    $deTr->kode_barang = $barang[$barangPilihan]->id;
                    $deTr->save();
                }
            }
        }
    }
}
