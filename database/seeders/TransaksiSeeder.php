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
        $tgl = ['2023-03-01', '2023-03-02', '2023-03-03'];
        for ($i=0; $i < 3; $i++) {
            for ($f=0; $f < rand(30, 50); $f++) {
                $ker = new Transaksi;
                $ker->kode_pengguna = $user[rand(0, $usrLen)]->id;
                $ker->status = 1;
                $ker->tanggal = $tgl[$i];
                $ker->alamat = $user[rand(0, $usrLen)]->alamat;
                $ker->save();

                for ($g=0; $g < rand(1, 10); $g++) {
                    $deTr = new DetTransaksi;
                    $deTr->kode_transaksi = $ker->id;
                    $deTr->kode_barang = $barang[rand(0, $barangLen)]->id;
                    $deTr->jumlah = rand(1, 10);
                    $deTr->save();
                }
            }
        }

    }
}
