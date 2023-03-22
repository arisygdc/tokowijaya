<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barang = [[
                'nama_barang' => 'Minyak Sania', 'stock' => '95', 'jenis_barang' => 'Sembako', 'harga' => '16000'
            ],[
                'nama_barang' => 'Minyak Bimoly', 'stock' => '76', 'jenis_barang' => 'Sembako', 'harga' => '19000'
            ],[
                'nama_barang' => 'Beras Bagus', 'stock' => '100', 'jenis_barang' => 'Sembako', 'harga' => '11500'
            ],[
                'nama_barang' => 'Beras Sedang', 'stock' => '100', 'jenis_barang' => 'Sembako', 'harga' => '10000'
            ],[
                'nama_barang' => 'Gula Pasir', 'stock' => '60', 'jenis_barang' => 'Sembako', 'harga' => '13500'
            ],[
                'nama_barang' => 'Garam Cap Kapal', 'stock' => '80', 'jenis_barang' => 'Sembako', 'harga' => '7000'
            ],[
                'nama_barang' => 'Choki - choki', 'stock' => '107', 'jenis_barang' => 'Snack', 'harga' => '1000'
            ],[
                'nama_barang' => 'Chitato', 'stock' => '42', 'jenis_barang' => 'Snack', 'harga' => '9500'
            ],[
                'nama_barang' => 'Lays', 'stock' => '47', 'jenis_barang' => 'Snack', 'harga' => '9500'
            ],[
                'nama_barang' => 'Kripik Usus', 'stock' => '16', 'jenis_barang' => 'Snack', 'harga' => '13000'
            ],[
                'nama_barang' => 'Kripik Balado', 'stock' => '12', 'jenis_barang' => 'Snack', 'harga' => '11000'
            ],[
                'nama_barang' => 'Bolpoin Pilot', 'stock' => '25', 'jenis_barang' => 'ATK', 'harga' => '2500'
            ],[
                'nama_barang' => 'Bolpoin Standart', 'stock' => '28', 'jenis_barang' => 'ATK', 'harga' => '2000'
            ],[
                'nama_barang' => 'Pensil 2B', 'stock' => '42', 'jenis_barang' => 'ATK', 'harga' => '5000'
            ],[
                'nama_barang' => 'Pensil HB', 'stock' => '32', 'jenis_barang' => 'ATK', 'harga' => '3500'
            ],[
                'nama_barang' => 'Royco 9 Gram', 'stock' => '153', 'jenis_barang' => 'Bumbu', 'harga' => '500'
            ],[
                'nama_barang' => 'Masako 9 Gram', 'stock' => '132', 'jenis_barang' => 'Bumbu', 'harga' => '500'
            ],[
                'nama_barang' => 'Kecap Laron 300 Ml', 'stock' => '52', 'jenis_barang' => 'Bumbu', 'harga' => '14500'
            ],[
                'nama_barang' => 'Saus Indofood 275 Ml', 'stock' => '48', 'jenis_barang' => 'Bumbu', 'harga' => '10500'
            ],[
                'nama_barang' => 'Aqua 600 Ml', 'stock' => '57', 'jenis_barang' => 'Minuman', 'harga' => '3000'
            ],[
                'nama_barang' => 'Cleo 600 Ml', 'stock' => '83', 'jenis_barang' => 'Minuman', 'harga' => '3000'
            ],[
                'nama_barang' => 'Teh Pucuk 350 Ml', 'stock' => '48', 'jenis_barang' => 'Minuman', 'harga' => '3000'
            ],[
                'nama_barang' => 'Mizone 500 Ml', 'stock' => '52', 'jenis_barang' => 'Minuman', 'harga' => '5000'
            ],[
                'nama_barang' => 'Pocari Sweat 500 Ml', 'stock' => '72', 'jenis_barang' => 'Minuman', 'harga' => '7000'
            ],[
                'nama_barang' => 'Betadine 15 Ml', 'stock' => '24', 'jenis_barang' => 'Obat', 'harga' => '15000'
            ],[
                'nama_barang' => 'Minyak Kayu Putih', 'stock' => '16', 'jenis_barang' => 'Obat', 'harga' => '19000'
            ],[
                'nama_barang' => 'Mixagrib Flu', 'stock' => '52', 'jenis_barang' => 'Obat', 'harga' => '2500'
            ],[
                'nama_barang' => 'Antangin 15 Ml', 'stock' => '72', 'jenis_barang' => 'Obat', 'harga' => '5500'
            ],[
                'nama_barang' => 'Rinso', 'stock' => '53', 'jenis_barang' => 'Perlengkap', 'harga' => '5000'
            ],[
                'nama_barang' => 'Sabun Giv', 'stock' => '70', 'jenis_barang' => 'Perlengkap', 'harga' => '3000'
            ],[
                'nama_barang' => 'Sabun Dettol', 'stock' => '82', 'jenis_barang' => 'Perlengkap', 'harga' => '4500'
            ],[
                'nama_barang' => 'Molto 11 Ml', 'stock' => '360', 'jenis_barang' => 'Perlengkap', 'harga' => '500'
            ],[
                'nama_barang' => 'Pepsoden 225 G', 'stock' => '35', 'jenis_barang' => 'Perlengkap', 'harga' => '28500'
            ],[
                'nama_barang' => 'Elpiji 3 Kg', 'stock' => '20', 'jenis_barang' => 'Lainnya', 'harga' => '18000'
            ],[
                'nama_barang' => 'Tisu Paseo 250 Sheets', 'stock' => '48', 'jenis_barang' => 'Lainnya', 'harga' => '9500'
            ],[
                'nama_barang' => 'Sedotan', 'stock' => '100', 'jenis_barang' => 'Lainnya', 'harga' => '6000'
            ],[
                'nama_barang' => 'Tali Rafia 1 Kg', 'stock' => '30', 'jenis_barang' => 'Lainnya', 'harga' => '11000'
            ]];

            foreach ($barang as $value) {
                DB::table('barang')->insert($value);
            }

    }
}
