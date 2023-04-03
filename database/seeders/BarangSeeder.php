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
                'nama_barang' => 'Minyak Sania', 'stock' => '95', 'jenis_barang' => 'Sembako', 'harga' => '16000', 'gambar' => 'img/product/Sembako/sania_minyak_goreng_sania_-_1_liter_-_full01_slfbh9y5.png'
            ],[
                'nama_barang' => 'Minyak Bimoly', 'stock' => '76', 'jenis_barang' => 'Sembako', 'harga' => '19000', 'gambar' => 'img/product/Sembako/Bimoli.png'
            ],[
                'nama_barang' => 'Beras Bagus', 'stock' => '100', 'jenis_barang' => 'Sembako', 'harga' => '11500', 'gambar' => 'img/product/Sembako/Beras Premium.png'
            ],[
                'nama_barang' => 'Beras Sedang', 'stock' => '100', 'jenis_barang' => 'Sembako', 'harga' => '10000', 'gambar' => 'img/product/Sembako/berasMedium.png'
            ],[
                'nama_barang' => 'Gula Pasir', 'stock' => '60', 'jenis_barang' => 'Sembako', 'harga' => '13500', 'gambar' => 'img/product/Sembako/gula pasir fix.png'
            ],[
                'nama_barang' => 'Garam Cap Kapal', 'stock' => '80', 'jenis_barang' => 'Sembako', 'harga' => '7000', 'gambar' => 'img/product/Sembako/garam.png'
            ],[
                'nama_barang' => 'Choki - choki', 'stock' => '107', 'jenis_barang' => 'Snack', 'harga' => '1000', 'gambar' => 'img/product/Snack/choki2.png'
            ],[
                'nama_barang' => 'Chitato', 'stock' => '42', 'jenis_barang' => 'Snack', 'harga' => '9500', 'gambar' => 'img/product/Snack/Chitato.png'
            ],[
                'nama_barang' => 'Lays', 'stock' => '47', 'jenis_barang' => 'Snack', 'harga' => '9500', 'gambar' => 'img/product/Snack/Lays fix.jpg'
            ],[
                'nama_barang' => 'Kripik Usus', 'stock' => '16', 'jenis_barang' => 'Snack', 'harga' => '13000', 'gambar' => 'img/product/Snack/kripikUsus fix.jpg'
            ],[
                'nama_barang' => 'Kripik Balado', 'stock' => '12', 'jenis_barang' => 'Snack', 'harga' => '11000', 'gambar' => 'img/product/Snack/kripikBalado.png'
            ],[
                'nama_barang' => 'Bolpoin Pilot', 'stock' => '25', 'jenis_barang' => 'ATK', 'harga' => '2500', 'gambar' => 'img/product/Atk/pilot.jpg'
            ],[
                'nama_barang' => 'Bolpoin Standart', 'stock' => '28', 'jenis_barang' => 'ATK', 'harga' => '2000', 'gambar' => 'img/product/Atk/bolpenstandart.png'
            ],[
                'nama_barang' => 'Pensil 2B', 'stock' => '42', 'jenis_barang' => 'ATK', 'harga' => '5000', 'gambar' => 'img/product/Atk/2b.jpg'
            ],[
                'nama_barang' => 'Pensil HB', 'stock' => '32', 'jenis_barang' => 'ATK', 'harga' => '3500',  'gambar' => 'img/product/Atk/HB.jpg'
            ],[
                'nama_barang' => 'Royco 9 Gram', 'stock' => '153', 'jenis_barang' => 'Bumbu', 'harga' => '500', 'gambar' => 'img/product/Bumbu/Royco.jpg'
            ],[
                'nama_barang' => 'Masako 9 Gram', 'stock' => '132', 'jenis_barang' => 'Bumbu', 'harga' => '500', 'gambar' => 'img/product/Bumbu/masako fix.png'
            ],[
                'nama_barang' => 'Kecap Laron 300 Ml', 'stock' => '52', 'jenis_barang' => 'Bumbu', 'harga' => '14500', 'gambar' => 'img/product/Bumbu/kecap laron fx.png'
            ],[
                'nama_barang' => 'Saus Indofood 275 Ml', 'stock' => '48', 'jenis_barang' => 'Bumbu', 'harga' => '10500', 'gambar' => 'img/product/Bumbu/saus indofood.jpg'
            ],[
                'nama_barang' => 'Aqua 600 Ml', 'stock' => '57', 'jenis_barang' => 'Minuman', 'harga' => '3000', 'gambar' => 'img/product/Minuman/aqua.jpg'
            ],[
                'nama_barang' => 'Cleo 600 Ml', 'stock' => '83', 'jenis_barang' => 'Minuman', 'harga' => '3000', 'gambar' => 'img/product/Minuman/cleofix.png'
            ],[
                'nama_barang' => 'Teh Pucuk 350 Ml', 'stock' => '48', 'jenis_barang' => 'Minuman', 'harga' => '3000', 'gambar' => 'img/product/Minuman/Teh pucuk fix.jpg'
            ],[
                'nama_barang' => 'Mizone 500 Ml', 'stock' => '52', 'jenis_barang' => 'Minuman', 'harga' => '5000', 'gambar' => 'img/product/Minuman/Mizone.jpg'
            ],[
                'nama_barang' => 'Pocari Sweat 500 Ml', 'stock' => '72', 'jenis_barang' => 'Minuman', 'harga' => '7000', 'gambar' => 'img/product/Minuman/Pocarisweat.jpg'
            ],[
                'nama_barang' => 'Betadine 15 Ml', 'stock' => '24', 'jenis_barang' => 'Obat', 'harga' => '15000', 'gambar' => 'img/product/Obat-Obatan/Betadinefix.png'
            ],[
                'nama_barang' => 'Minyak Kayu Putih', 'stock' => '16', 'jenis_barang' => 'Obat', 'harga' => '19000', 'gambar' => 'img/product/Obat-Obatan/minyak kayu putih fix.png'
            ],[
                'nama_barang' => 'Mixagrib Flu', 'stock' => '52', 'jenis_barang' => 'Obat', 'harga' => '2500', 'gambar' => 'img/product/Obat-Obatan/Mixagrib.jpg'
            ],[
                'nama_barang' => 'Antangin 15 Ml', 'stock' => '72', 'jenis_barang' => 'Obat', 'harga' => '5500', 'gambar' => 'img/product/Obat-Obatan/antangin.jpg'
            ],[
                'nama_barang' => 'Rinso', 'stock' => '53', 'jenis_barang' => 'Perlengkap', 'harga' => '5000', 'gambar' => 'img/product/Perlengkapan/Betadinefix.png'
            ],[
                'nama_barang' => 'Sabun Giv', 'stock' => '70', 'jenis_barang' => 'Perlengkap', 'harga' => '3000', 'gambar' => 'img/product/Perlengkapan/sabun giv.jpg'
            ],[
                'nama_barang' => 'Sabun Dettol', 'stock' => '82', 'jenis_barang' => 'Perlengkap', 'harga' => '4500', 'gambar' => 'img/product/Perlengkapan/sabun detto fixl.jpg'
            ],[
                'nama_barang' => 'Molto 11 Ml', 'stock' => '360', 'jenis_barang' => 'Perlengkap', 'harga' => '500', 'gambar' => 'img/product/Perlengkapan/molto.jpg'
            ],[
                'nama_barang' => 'Pepsoden 225 G', 'stock' => '35', 'jenis_barang' => 'Perlengkap', 'harga' => '28500', 'gambar' => 'img/product/Perlengkapan/pepsodent.jpg'
            ],[
                'nama_barang' => 'Elpiji 3 Kg', 'stock' => '20', 'jenis_barang' => 'Lainnya', 'harga' => '18000', 'gambar' => 'img/product/Lain-lainnya/elpiji fixx.png'
            ],[
                'nama_barang' => 'Tisu Paseo 250 Sheets', 'stock' => '48', 'jenis_barang' => 'Lainnya', 'harga' => '9500', 'gambar' => 'img/product/Lain-lainnya/157ac0733d43fff8b55fb7168b98497d.jpg_2200x2200q80.jpg_.jpg'
            ],[
                'nama_barang' => 'Sedotan', 'stock' => '100', 'jenis_barang' => 'Lainnya', 'harga' => '6000', 'gambar' => 'img/product/Lain-lainnya/sedotan.jpg'
            ],[
                'nama_barang' => 'Tali Rafia 1 Kg', 'stock' => '30', 'jenis_barang' => 'Lainnya', 'harga' => '11000', 'gambar' => 'img/product/Lain-lainnya/tali-rafia.jpg'
            ]];

            foreach ($barang as $value) {
                DB::table('barang')->insert($value);
            }

    }
}
