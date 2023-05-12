<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $barang = [[
                'nama_barang' => 'Beras Mentari 5 Kg', 'stock' => '95', 'jenis_barang' => 'Sembako', 'harga' => '62000', 'gambar' => '/img/product/Sembako/sania_minyak_goreng_sania_-_1_liter_-_full01_slfbh9y5.png'
            ],[ 
                'nama_barang' => 'Beras Raja Lele 5 Kg', 'stock' => '76', 'jenis_barang' => 'Sembako', 'harga' => '50000', 'gambar' => '/img/product/Sembako/Bimoli.png'
            ],[
                'nama_barang' => 'Beras Sania 5 Kg', 'stock' => '100', 'jenis_barang' => 'Sembako', 'harga' => '69000', 'gambar' => '/img/product/Sembako/Beras Premium.png'
            ],[
                'nama_barang' => 'Gula Merah Aren', 'stock' => '100', 'jenis_barang' => 'Sembako', 'harga' => '26000', 'gambar' => '/img/product/Sembako/berasMedium.png'
            ],[
                'nama_barang' => 'Minyak Bimoli 2 Liter', 'stock' => '60', 'jenis_barang' => 'Sembako', 'harga' => '38000', 'gambar' => '/img/product/Sembako/gula pasir fix.png'
            ],[
                'nama_barang' => 'Minyak Sanco 1 Liter', 'stock' => '80', 'jenis_barang' => 'Sembako', 'harga' => '17500', 'gambar' => '/img/product/Sembako/garam.png'
            ],[
                'nama_barang' => 'Minyak Sania 2 liter', 'stock' => '107', 'jenis_barang' => 'Sembako', 'harga' => '32000', 'gambar' => '/img/product/Snack/choki2.png'
            ],[
                'nama_barang' => 'Chiki Balls 55g', 'stock' => '42', 'jenis_barang' => 'Snack', 'harga' => '6000', 'gambar' => '/img/product/Snack/Chitato.png'
            ],[
                'nama_barang' => 'Garuda Pilus 96g', 'stock' => '47', 'jenis_barang' => 'Snack', 'harga' => '6500', 'gambar' => '/img/product/Snack/Lays fix.jpg'
            ],[
                'nama_barang' => 'Gery Chocolatos', 'stock' => '16', 'jenis_barang' => 'Snack', 'harga' => '18000', 'gambar' => '/img/product/Snack/kripikUsus fix.jpg'
            ],[
                'nama_barang' => 'Gery Saluut', 'stock' => '12', 'jenis_barang' => 'Snack', 'harga' => '6000', 'gambar' => '/img/product/Snack/kripikBalado.png'
            ],[
                'nama_barang' => 'Oishi Pillows 100g', 'stock' => '25', 'jenis_barang' => 'Snack', 'harga' => '9000', 'gambar' => '/img/product/Atk/pilot.jpg'
            ],[
                'nama_barang' => 'Taro Net Potato BBQ 120g', 'stock' => '28', 'jenis_barang' => 'Snack', 'harga' => '16000', 'gambar' => '/img/product/Atk/bolpenstandart.png'
            ],[
                'nama_barang' => 'Tic Tic 65g', 'stock' => '42', 'jenis_barang' => 'Snack', 'harga' => '7000', 'gambar' => '/img/product/Atk/2b.jpg'
            ],[
                'nama_barang' => 'Bolpoint Hi-Tech', 'stock' => '32', 'jenis_barang' => 'ATK', 'harga' => '4500',  'gambar' => '/img/product/Atk/HB.jpg'
            ],[
                'nama_barang' => 'Buku Gambar A4', 'stock' => '153', 'jenis_barang' => 'ATK', 'harga' => '3500', 'gambar' => '/img/product/Bumbu/Royco.jpg'
            ],[
                'nama_barang' => 'Buku Tulis SiDu 38 Lembar', 'stock' => '132', 'jenis_barang' => 'ATK', 'harga' => '3500', 'gambar' => '/img/product/Bumbu/masako fix.png'
            ],[
                'nama_barang' => 'Buku Tulis SiDu 58 Lembar', 'stock' => '52', 'jenis_barang' => 'ATK', 'harga' => '5000', 'gambar' => '/img/product/Bumbu/kecap laron fx.png'
            ],[
                'nama_barang' => 'Gunting', 'stock' => '48', 'jenis_barang' => 'ATK', 'harga' => '6000', 'gambar' => '/img/product/Bumbu/saus indofood.jpg'
            ],[
                'nama_barang' => 'Selotip', 'stock' => '57', 'jenis_barang' => 'ATK', 'harga' => '1500', 'gambar' => '/img/product/Minuman/aqua.jpg'
            ],[
                'nama_barang' => 'Stabilo Boss', 'stock' => '83', 'jenis_barang' => 'ATK', 'harga' => '8500', 'gambar' => '/img/product/Minuman/cleofix.png'
            ],[
                'nama_barang' => 'Tipe X Kenko', 'stock' => '48', 'jenis_barang' => 'ATK', 'harga' => '5000', 'gambar' => '/img/product/Minuman/Teh pucuk fix.jpg'
            ],[
                'nama_barang' => 'Bawang Goreng B.J', 'stock' => '52', 'jenis_barang' => 'Bumbu', 'harga' => '9000', 'gambar' => '/img/product/Minuman/Mizone.jpg'
            ],[
                'nama_barang' => 'Kecap Asin ABC 133 ml', 'stock' => '72', 'jenis_barang' => 'Bumbu', 'harga' => '5500', 'gambar' => '/img/product/Minuman/Pocarisweat.jpg'
            ],[
                'nama_barang' => 'Kecap Sedaap 63 ml', 'stock' => '24', 'jenis_barang' => 'Bumbu', 'harga' => '2000', 'gambar' => '/img/product/Obat-Obatan/Betadinefix.png'
            ],[
                'nama_barang' => 'Ladaku 4g', 'stock' => '16', 'jenis_barang' => 'Bumbu', 'harga' => '1000', 'gambar' => '/img/product/Obat-Obatan/minyak kayu putih fix.png'
            ],[
                'nama_barang' => 'Santan Kara 65ml', 'stock' => '52', 'jenis_barang' => 'Bumbu', 'harga' => '2500', 'gambar' => '/img/product/Obat-Obatan/Mixagrib.jpg'
            ],[
                'nama_barang' => 'Saus Tiram 23ml', 'stock' => '72', 'jenis_barang' => 'Bumbu', 'harga' => '2500', 'gambar' => '/img/product/Obat-Obatan/antangin.jpg'
            ],[
                'nama_barang' => 'Umami Ajinomoto 250g', 'stock' => '53', 'jenis_barang' => 'Bumbu', 'harga' => '12000', 'gambar' => '/img/product/Perlengkapan/Betadinefix.png'
            ],[
                'nama_barang' => 'Coca Cola 390 ml', 'stock' => '70', 'jenis_barang' => 'Minuman', 'harga' => '5000', 'gambar' => '/img/product/Perlengkapan/sabun giv.jpg'
            ],[
                'nama_barang' => 'Floridina 350 ml', 'stock' => '82', 'jenis_barang' => 'Minuman', 'harga' => '3000', 'gambar' => '/img/product/Perlengkapan/sabun detto fixl.jpg'
            ],[
                'nama_barang' => 'Fruit Tea 550ml', 'stock' => '360', 'jenis_barang' => 'Minuman', 'harga' => '6000', 'gambar' => '/img/product/Perlengkapan/molto.jpg'
            ],[
                'nama_barang' => 'Isoplus 350 ml', 'stock' => '35', 'jenis_barang' => 'Minuman', 'harga' => '3000', 'gambar' => '/img/product/Perlengkapan/pepsodent.jpg'
            ],[
                'nama_barang' => 'Larutan Cap Kaki 3 500 ml', 'stock' => '20', 'jenis_barang' => 'Minuman', 'harga' => '7000', 'gambar' => '/img/product/Lain-lainnya/elpiji fixx.png'
            ],[
                'nama_barang' => 'Minute Maid Pulpy', 'stock' => '48', 'jenis_barang' => 'Minuman', 'harga' => '5000', 'gambar' => '/img/product/Lain-lainnya/157ac0733d43fff8b55fb7168b98497d.jpg_2200x2200q80.jpg_.jpg'
            ],[
                'nama_barang' => 'Orange Water', 'stock' => '100', 'jenis_barang' => 'Minuman', 'harga' => '7000', 'gambar' => '/img/product/Lain-lainnya/sedotan.jpg'
            ],[
                'nama_barang' => 'Sprite 390 ml', 'stock' => '66', 'jenis_barang' => 'Minuman', 'harga' => '5000', 'gambar' => '/img/product/Lain-lainnya/sedotan.jpg'
            ],[
                'nama_barang' => 'Antimo 50mg', 'stock' => '10', 'jenis_barang' => 'Obat', 'harga' => '4000', 'gambar' => '/img/product/Lain-lainnya/sedotan.jpg'
            ],[
                'nama_barang' => 'Bodrex', 'stock' => '20', 'jenis_barang' => 'Obat', 'harga' => '7500', 'gambar' => '/img/product/Lain-lainnya/sedotan.jpg'
            ],[
                'nama_barang' => 'Freshcare Roll on', 'stock' => '6', 'jenis_barang' => 'Obat', 'harga' => '9000', 'gambar' => '/img/product/Lain-lainnya/sedotan.jpg'
            ],[
                'nama_barang' => 'Minyak Tawon 90ml', 'stock' => '9', 'jenis_barang' => 'Obat', 'harga' => '65000', 'gambar' => '/img/product/Lain-lainnya/sedotan.jpg'
            ],[
                'nama_barang' => 'Paramex', 'stock' => '14', 'jenis_barang' => 'Obat', 'harga' => '2000', 'gambar' => '/img/product/Lain-lainnya/sedotan.jpg'
            ],[
                'nama_barang' => 'Promag', 'stock' => '22', 'jenis_barang' => 'Obat', 'harga' => '7500', 'gambar' => '/img/product/Lain-lainnya/sedotan.jpg'
            ],[
                'nama_barang' => 'Vicks Vaporub 25g', 'stock' => '4', 'jenis_barang' => 'Obat', 'harga' => '18000', 'gambar' => '/img/product/Lain-lainnya/sedotan.jpg'
            ],[
                'nama_barang' => 'Ciptadent 225g', 'stock' => '57', 'jenis_barang' => 'Mandi Dan Mencuci', 'harga' => '105000', 'gambar' => '/img/product/Lain-lainnya/sedotan.jpg'
            ],[
                'nama_barang' => 'Citra Sabun Mandi 70g', 'stock' => '45', 'jenis_barang' => 'Mandi Dan Mencuci', 'harga' => '3500', 'gambar' => '/img/product/Lain-lainnya/sedotan.jpg'
            ],[
                'nama_barang' => 'Mama Lemon 200 ml', 'stock' => '33', 'jenis_barang' => 'Mandi Dan Mencuci', 'harga' => '3500', 'gambar' => '/img/product/Lain-lainnya/sedotan.jpg'
            ],[
                'nama_barang' => 'Mama Lime 120', 'stock' => '34', 'jenis_barang' => 'Mandi Dan Mencuci', 'harga' => '2000', 'gambar' => '/img/product/Lain-lainnya/sedotan.jpg'
            ],[
                'nama_barang' => 'Nuvo sabun Mandi 76g', 'stock' => '40', 'jenis_barang' => 'Mandi Dan Mencuci', 'harga' => '3000', 'gambar' => '/img/product/Lain-lainnya/sedotan.jpg'
            ],[
                'nama_barang' => 'Harmony Sabun Mandi 70g', 'stock' => '28', 'jenis_barang' => 'Mandi Dan Mencuci', 'harga' => '3000', 'gambar' => '/img/product/Lain-lainnya/sedotan.jpg'
            ],[
                'nama_barang' => 'Shampoo Pantene Sachet', 'stock' => '74', 'jenis_barang' => 'Mandi Dan Mencuci', 'harga' => '500', 'gambar' => '/img/product/Lain-lainnya/sedotan.jpg'
            ],[
                'nama_barang' => 'Shampoo Lifebuoy Sachet', 'stock' => '53', 'jenis_barang' => 'Mandi Dan Mencuci', 'harga' => '500', 'gambar' => '/img/product/Lain-lainnya/sedotan.jpg'
            ],[
                'nama_barang' => 'Sunlight 95 ml', 'stock' => '67', 'jenis_barang' => 'Mandi Dan Mencuci', 'harga' => '2000', 'gambar' => '/img/product/Lain-lainnya/sedotan.jpg'
            ],[
                'nama_barang' => 'Sunlight 230 ml', 'stock' => '44', 'jenis_barang' => 'Mandi Dan Mencuci', 'harga' => '5000', 'gambar' => '/img/product/Lain-lainnya/sedotan.jpg'
            ],[
                'nama_barang' => 'Aqua Galon', 'stock' => '30', 'jenis_barang' => 'Lainnya', 'harga' => '18000', 'gambar' => '/img/product/Lain-lainnya/sedotan.jpg'
            ],[
                'nama_barang' => 'Cleo gallon', 'stock' => '30', 'jenis_barang' => 'Lainnya', 'harga' => '18000', 'gambar' => '/img/product/Lain-lainnya/sedotan.jpg'
            ],[
                'nama_barang' => 'Sapu Lantai', 'stock' => '50', 'jenis_barang' => 'Lainnya', 'harga' => '22000', 'gambar' => '/img/product/Lain-lainnya/sedotan.jpg'
            ],[
                'nama_barang' => 'Sapu Lidi', 'stock' => '50', 'jenis_barang' => 'Lainnya', 'harga' => '6000', 'gambar' => '/img/product/Lain-lainnya/sedotan.jpg'
            ],[
                'nama_barang' => 'Tali Pramuka', 'stock' => '39', 'jenis_barang' => 'Lainnya', 'harga' => '5000', 'gambar' => '/img/product/Lain-lainnya/sedotan.jpg'
            ],[
                'nama_barang' => 'Tali Rafia 500g', 'stock' => '21', 'jenis_barang' => 'Lainnya', 'harga' => '6000', 'gambar' => '/img/product/Lain-lainnya/sedotan.jpg'
            ],[
                'nama_barang' => 'Tongkat Kayu', 'stock' => '10', 'jenis_barang' => 'Lainnya', 'harga' => '9000', 'gambar' => '/img/product/Lain-lainnya/sedotan.jpg'
            ]
        
        ];

            foreach ($barang as $value) {
                DB::table('barang')->insert($value);
            }

    }
}
