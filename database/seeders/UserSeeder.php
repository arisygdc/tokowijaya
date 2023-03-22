<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $level = ["Karyawan", "Pengguna"];
        $jk = ["Pria", "wanita"];
        $pwd = bcrypt("bukaakun");
// +---------------+------------------+---------------+----------+--------------------------------------------------------------------+--------------+---------------+
// | kode_karyawan | nik              | nama_karyawan | posisi   | alamat                                                             | telephone    | jenis_kelamin |
// +---------------+------------------+---------------+----------+--------------------------------------------------------------------+--------------+---------------+
// |         10001 | 3523180203000006 | Ricky Herlyan | Admin    | Jalan Kedaton Rt.05 Rw.01 Dusun Burdalem  Desa Leran Wetan         | 085764734332 | Pria          |
// |         10002 | 3523180906740006 | Suliat        | Karyawan | Jalan Kedaton Rt.05 Rw.01 Dusun Burdalem  Desa Leran Wetan         | 089753649273 | Wanita        |
// |         10003 | 3523181110700001 | Samsi         | Pemilik  | Jalan Kedaton Rt.05 Rw.01 Dusun Burdalem  Desa Leran Wetan         | 082276485467 | Pria          |
// |         10004 | 3523180607930003 | Farah Fadilah | Karyawan | Jalan Pusri Rt.02 Rw.09 Dusun Kedaton  Desa Leran kulon            | 08768263654  | Wanita        |
// |         10005 | 3523182106950003 | Joko Suwito   | Kurir    | Jalan Bukit Karang Rt.02 Rw.03 Dusun Karang Dowo  Desa Leran Wetan | 089637927284 | Pria          |
// |         10006 | 3523182311970001 | Anindi Sari   | Karyawan | Jalan Argopuro Rt.03 Rw.01 Dusun Leran  Desa Leran Kulon           | 085746282584 | Wanita        |
// +---------------+------------------+---------------+----------+--------------------------------------------------------------------+--------------+---------------+

        $karyawan = [
            [

                'kode_karyawan' => '10001',
                'nik' => '3523180203000006',
                'nama' => 'Ricky Herlyan',
                'jk' => $jk[0],
                'alamat' => 'Jalan Kedaton Rt.05 Rw.01 Dusun Burdalem Desa Leran Wetan',
                'telephone' => '085764734332',
            ],
            [
                'kode_karyawan' => '10002',
                'nik' => '3523180906740006',
                'nama' => 'Suliat',
                'jk' => $jk[1],
                'alamat' => 'Jalan Kedaton Rt.05 Rw.01 Dusun Burdalem Desa Leran Wetan',
                'telephone' => '089753649273',
            ],
            [
                'kode_karyawan' => '10003',
                'nik' => '3523181110700001',
                'nama' => 'Samsi',
                'jk' => $jk[0],
                'alamat' => 'Jalan Kedaton Rt.05 Rw.01 Dusun Burdalem Desa Leran Wetan',
                'telephone' => '082276485467',
            ],
            [
                'kode_karyawan' => '10004',
                'nik' => '3523180607930003',
                'nama' => 'Farah Fadilah',
                'jk' => $jk[1],
                'alamat' => 'Jalan Pusri Rt.02 Rw.09 Dusun Kedaton Desa Leran kulon',
                'telephone' => '08768263654',
            ],
            [
                'kode_karyawan' => '10005',
                'nik' => '3523182106950003',
                'nama' => 'Joko Suwito',
                'jk' => $jk[0],
                'alamat' => 'Jalan Bukit Karang Rt.02 Rw.03 Dusun Karang Dowo Desa Leran Wetan',
                'telephone' => '089637927284',
            ],
            [
                'kode_karyawan' => '10006',
                'nik' => '3523182311970001',
                'nama' => 'Anindi Sari',
                'jk' => $jk[1],
                'alamat' => 'Jalan Argopuro Rt.03 Rw.01 Dusun Leran Desa Leran Kulon',
                'telephone' => '085746282584',
            ]
        ];
        $count = 1;
        foreach ($karyawan as $key => $value) {
            DB::table('users')->insert([
                'id' => $count,
                'nik' => $value['nik'],
                'name' => $value['nama'],
                'level' => $level[0],
                'jk' => $value['jk'],
                'telephone' => $value['telephone'],
                'alamat' => $value['alamat'],
                'password' => $pwd,
            ]);
            DB::table('karyawan')->insert([
                'kode_karyawan' => $value['kode_karyawan'],
                'user_id' => $count,
            ]);
            $count++;
        }

        $pengguna = [
            [
                'nik' => '3523181104970001', 'name' => 'Nuzul Triyanto', 'jk' => $jk[0], 'telephone' => '081572268331','tgl_lahir' => '1997-04-11', 'pekerjaan' => 'Buruh Harian', 'alamat' => 'Jl. Krajan Rt.01 Rw.05 Dusun Krajan Desa Leran Kulon',
            ],[
                'nik' => '3523181201950003', 'name' => 'Fajar Saputra', 'jk' => $jk[0], 'telephone' => '081572947575','tgl_lahir' => '1995-01-12', 'pekerjaan' => 'Buruh Harian', 'alamat' => 'Jl. Argopuro Rt.01 Rw.01 Dusun Leran Wetan Desa Leran Wetan',
            ],[
                'nik' => '3523180305970001', 'name' => 'Fatekur Rohman', 'jk' => $jk[0], 'telephone' => '086357352867','tgl_lahir' => '1997-05-03', 'pekerjaan' => 'Penjaga Toko', 'alamat' => 'Jl. Krajan Rt.01 Rw.05 Dusun Krajan Desa Leran Kulon',
            ],[
                'nik' => '352318060797001', 'name' => 'Didin Marianto', 'jk' => $jk[0], 'telephone' => '087865862373','tgl_lahir' => '1997-07-06', 'pekerjaan' => 'Buruh Pabrik', 'alamat' => 'Jl.Krajan Rt.01 Rw.05 Dusun Krajan Desa Leran Kulon',
            ],[
                'nik' => '3523180101990002', 'name' => 'Susanto', 'jk' => $jk[0], 'telephone' => '087756731782','tgl_lahir' => '1999-01-01', 'pekerjaan' => 'Tukang Cukur', 'alamat' => 'Jl.Layut Rt.01 Rw.03 Dusun layut Desa Leran Kulon',
            ],[
                'nik' => '3523180605950001', 'name' => 'Adi Surya', 'jk' => $jk[0], 'telephone' => '089378156563','tgl_lahir' => '1995-05-06', 'pekerjaan' => 'Buruh Pabrik', 'alamat' => 'Jl.Argopuro Rt.02 Rw.02 Dusun Leran Desa Leran Kulon',
            ],[
                'nik' => '3523180803930003', 'name' => 'Ery Setiawan', 'jk' => $jk[0], 'telephone' => '089357276814','tgl_lahir' => '1993-03-08', 'pekerjaan' => 'Pedagang', 'alamat' => 'Jl.Argopuro Rt.02 Rw.04 Dusun Layut Desa Leran Kulon',
            ],[
                'nik' => '3523181011980002', 'name' => 'Muhammad Anwar', 'jk' => $jk[0], 'telephone' => '082156876528','tgl_lahir' => '1998-11-10', 'pekerjaan' => 'Wirausaha', 'alamat' => 'Jl.Melati Rt.01 Rw.01 Dusun Leran Desa Leran Kulon',
            ],[
                'nik' => '3523181606960002', 'name' => 'Rizal Ainun', 'jk' => $jk[0], 'telephone' => '088268623781','tgl_lahir' => '1996-06-16', 'pekerjaan' => 'Kurir', 'alamat' => 'Jl.Pasar Besar Rt.01 Rw.02 Dusun Leran Wetan Desa Leran Wetan',
            ],[
                'nik' => '3523180708950001', 'name' => 'Hery Agung', 'jk' => $jk[0], 'telephone' => '089784782783','tgl_lahir' => '1995-08-07', 'pekerjaan' => 'Sopir', 'alamat' => 'Jl.Kedaton Rt.02 Rw.07 Dusun Sejuwet Desa Leran Kulon',
            ],[
                'nik' => '3523181006970001', 'name' => 'Ardi Saputra', 'jk' => $jk[0], 'telephone' => '085789317970','tgl_lahir' => '1997-06-10', 'pekerjaan' => 'Buruh Harian', 'alamat' => 'Jl.Arjuna Rt.03 Rw.02 Dusun Leran Wetan Desa Leran Wetan',
            ],[
                'nik' => '3523181808960003', 'name' => 'Choirudin', 'jk' => $jk[0], 'telephone' => '083748211232','tgl_lahir' => '1996-08-18', 'pekerjaan' => 'Buruh Harian', 'alamat' => 'Jl.Argopuro Rt.01 Rw.02 Dusun Leran Desa Leran Kulon',
            ],[
                'nik' => '3523182106930001', 'name' => 'Isnawan', 'jk' => $jk[0], 'telephone' => '085723686236','tgl_lahir' => '1993-06-21', 'pekerjaan' => 'Pedagang', 'alamat' => 'Jl.Keprambon Rt.01 Rw.07 Dusun Sejuwet Desa Leran Kulon',
            ],[
                'nik' => '3523181410920003', 'name' => 'Winarsih', 'jk' => $jk[1], 'telephone' => '089728918921','tgl_lahir' => '1992-10-14', 'pekerjaan' => 'Ibu Rumah', 'alamat' => 'Jl.Bukit Karang Rt.01 Rw.05 Dusun Karang Dowo Desa Leran Wetan',
            ],[
                'nik' => '3523181611970002', 'name' => 'Ninda Arum', 'jk' => $jk[1], 'telephone' => '088726827619','tgl_lahir' => '1997-11-16', 'pekerjaan' => 'Penjaga Toko', 'alamat' => 'Jl.Argopuro Rt.02 Rw.02 Dusun Leran Desa Leran Kulon',
            ],[
                'nik' => '3523181107960001', 'name' => 'Tiara Andini', 'jk' => $jk[1], 'telephone' => '081788117218','tgl_lahir' => '1996-07-11', 'pekerjaan' => 'Wirausaha', 'alamat' => 'Jl.Argopuro Rt.02 Rw.06 Dusun Krajan Desa Leran Kulon',
            ],[
                'nik' => '3523182508930002', 'name' => 'Wicaksono', 'jk' => $jk[0], 'telephone' => '088371187254','tgl_lahir' => '1993-08-25', 'pekerjaan' => 'Tukang Batu', 'alamat' => 'Jl.Kepatihan Rt.01 Rw.02 Dusun Burdalem Desa Leran Wetan',
            ],[
                'nik' => '352318230894002', 'name' => 'Agus Saputra', 'jk' => $jk[0], 'telephone' => '089582681735','tgl_lahir' => '1994-08-23', 'pekerjaan' => 'Pedagang', 'alamat' => 'Jl.Kepatihan Rt.02 Rw.02 Dusun Burdalem Desa Leran Wetan',
            ],[
                'nik' => '3523181804980001', 'name' => 'Niko Alfiansyah', 'jk' => $jk[0], 'telephone' => '081972638153','tgl_lahir' => '1998-08-18', 'pekerjaan' => 'Buruh Pabrik', 'alamat' => 'Jl.Keprambon Rt.01 Rw.07 Dusun Sejuwet Desa Leran Kulon',
            ],[
                'nik' => '3523182710990001', 'name' => 'Nanda Septianti', 'jk' => $jk[1], 'telephone' => '089972638736','tgl_lahir' => '1999-10-27', 'pekerjaan' => 'Mahasiswi', 'alamat' => 'Jl.Kepatihan Rt.01 Rw.03 Dusun Burdalem Desa Leran Wetan',
            ],[
                'nik' => '3523180712980002', 'name' => 'Aldo Fikri', 'jk' => $jk[0], 'telephone' => '089547286281','tgl_lahir' => '1998-12-07', 'pekerjaan' => 'Buruh Harian', 'alamat' => 'Jl.Bukit Karang Rt.02 Rw.03 Dusun Karang Dowo Desa Leran Wetan',
            ],[
                'nik' => '3523181610950001', 'name' => 'Maryoto', 'jk' => $jk[0], 'telephone' => '089352678645','tgl_lahir' => '1995-10-16', 'pekerjaan' => 'Petani', 'alamat' => 'Jl.Krajan Rt.01 Rw.05 Dusun Krajan Desa Leran Kulon',
            ],[
                'nik' => '3523181903920001', 'name' => 'Agus Mudodo', 'jk' => $jk[0], 'telephone' => '081765656652','tgl_lahir' => '1992-03-19', 'pekerjaan' => 'Tukang Batu', 'alamat' => 'Jl.Layut Rt.02 Rw.04 Dusun Layut Desa Leran Kulon',
            ],[
                'nik' => '3523180612000001', 'name' => 'Trihariyati', 'jk' => $jk[1], 'telephone' => '087687625662','tgl_lahir' => '2000-12-06', 'pekerjaan' => 'Mahasiswi', 'alamat' => 'Jl.Arjuna Rt.01 Rw.06 Dusun Krajan Desa Leran Kulon',
            ],[
                'nik' => '3523181902010002', 'name' => 'Jefri Nando', 'jk' => $jk[0], 'telephone' => '0815782652911','tgl_lahir' => '2001-02-19', 'pekerjaan' => 'Penjaga Toko', 'alamat' => 'Jl.Arjuna Rt.01 Rw.06 Dusun Krajan Desa Leran Kulon',
            ],[
                'nik' => '3523181607990001', 'name' => 'Andrean', 'jk' => $jk[0], 'telephone' => '089658296444','tgl_lahir' => '1999-07-16', 'pekerjaan' => 'Buruh Harian', 'alamat' => 'Jl.Krajan Rt.01 Rw.05 Dusun Krajan Desa Leran Kulon',
            ],[
                'nik' => '3523181709970001', 'name' => 'Okky Putra', 'jk' => $jk[0], 'telephone' => '088552786455','tgl_lahir' => '1997-09-17', 'pekerjaan' => 'Pedagang', 'alamat' => 'Jl.Krajan Rt.01 Rw.05 Dusun Krajan Desa Leran Kulon',
            ],[
                'nik' => '3523182705970002', 'name' => 'Sony Ardiansyah', 'jk' => $jk[0], 'telephone' => '085638728727','tgl_lahir' => '1997-05-27', 'pekerjaan' => 'Pedagang', 'alamat' => 'Jl.Argopuro Rt.03 Rw.01 Dusun Leran Wetan Desa Leran Wetan',
            ],[
                'nik' => '3523181601940002', 'name' => 'Sutrisno', 'jk' => $jk[0], 'telephone' => '087637827747','tgl_lahir' => '1994-01-16', 'pekerjaan' => 'Buruh Harian', 'alamat' => 'Jl.Kerajan Rt.01 Rw.05 Dusun Krajan Desa Leran Kulon',
            ],[
                'nik' => '3523180608970001', 'name' => 'Syaifuddin', 'jk' => $jk[0], 'telephone' => '085746463227','tgl_lahir' => '1997-08-06', 'pekerjaan' => 'Buruh Pabrik', 'alamat' => 'Jl.Bogoran Rt.01 Rw.01 Dusun Bogoran Desa Glodog',
            ],[
                'nik' => '352318051098001', 'name' => 'Mila Anugerah', 'jk' => $jk[1], 'telephone' => '082254838828','tgl_lahir' => '1998-10-05', 'pekerjaan' => 'Wirausaha', 'alamat' => 'Jl.Kepatihan Rt.02 Rw.02 Dusun Burdalem Desa Leran Wetan'
            ],[
                'nik' => '3523181010950002', 'name' => 'Anik Wijayanti', 'jk' => $jk[1], 'telephone' => '081683786477','tgl_lahir' => '1995-10-10', 'pekerjaan' => 'Pedagang', 'alamat' => 'Jl.Layut Rt.02 Rw.04 Dusun Layut Desa Leran Kulon'
            ],[
                'nik' => '3523180705970001', 'name' => 'Ahmad Shofi', 'jk' => $jk[0], 'telephone' => '089912213113','tgl_lahir' => '1997-05-07', 'pekerjaan' => 'Mahasiswa', 'alamat' => 'Jl.Bukit Karang Rt.01 Rw.03 Dusun Karang Dowo Desa Leran Wetan'
            ],[
                'nik' => '3523180903920001', 'name' => 'Sriwati', 'jk' => $jk[1], 'telephone' => '083257782311','tgl_lahir' => '1992-03-09', 'pekerjaan' => 'Ibu Rumah', 'alamat' => 'Jl.Kepatihan Rt.02 Rw.02 Dusun Burdalem Desa Leran Wetan'
            ],[
                'nik' => '3523182401900001', 'name' => 'Narto', 'jk' => $jk[0], 'telephone' => '081782239573','tgl_lahir' => '1990-01-24', 'pekerjaan' => 'Guru', 'alamat' => 'Jl.Kedaton Rt.02 Rw.06 Dusun Bluri Desa Leran Wetan'
            ],[
                'nik' => '3523180804940002', 'name' => 'Laillis Widiyanti', 'jk' => $jk[1], 'telephone' => '089577352180','tgl_lahir' => '1994-04-08', 'pekerjaan' => 'Ibu Rumah', 'alamat' => 'Jl.Argopuro Rt.01 Rw.01 Dusun Leran Wetan Desa Leran Wetan'
            ],[
                'nik' => '3523180511890001', 'name' => 'Ida Berliana', 'jk' => $jk[1], 'telephone' => '088254635261','tgl_lahir' => '1989-11-05', 'pekerjaan' => 'Pedagang', 'alamat' => 'Jl.Anggrek Rt.02 Rw.05 Dusun Bluri Desa Leran Wetan'
            ],[
                'nik' => '3523182412930002', 'name' => 'Iskandar', 'jk' => $jk[0], 'telephone' => '083266548786','tgl_lahir' => '1993-12-24', 'pekerjaan' => 'Tukang Batu', 'alamat' => 'Jl.Karang Besar Rt.03 Rw.04 Dusun Karang Dowo Desa Leran Wetan'
            ],[
                'nik' => '3523181506980004', 'name' => 'Berliana', 'jk' => $jk[1], 'telephone' => '081672854890','tgl_lahir' => '1998-06-15', 'pekerjaan' => 'Penjaga Toko', 'alamat' => 'Jl.Gunung Atas Rt.01 Rw.02 Dusun Pucangan Desa Pucangan'
            ],[
                'nik' => '3523182102010002', 'name' => 'Nando Abdilah', 'jk' => $jk[0], 'telephone' => '089725611001','tgl_lahir' => '2001-02-21', 'pekerjaan' => 'Mahasiswa', 'alamat' => 'Jl.Argopuro Rt.01 Rw.01 Dusun Leran Desa Leran Kulon'
            ],[
                'nik' => '3523181607000001', 'name' => 'Berta Anugrah', 'jk' => $jk[1], 'telephone' => '081254478195','tgl_lahir' => '2000-07-16', 'pekerjaan' => 'Penjaga Toko', 'alamat' => 'Jl.Kedaton Rt.01 Rw.08 Dusun Sejuwet Desa Leran Kulon'
            ],[
                'nik' => '3523180710000002', 'name' => 'Ellisa Berta', 'jk' => $jk[1], 'telephone' => '081752600189','tgl_lahir' => '2000-10-07', 'pekerjaan' => 'Mahasiswi', 'alamat' => 'Jl.Kedaton Rt.01 Rw.05 Dusun Bluri Desa Leran Wetan'
            ],[
                'nik' => '3523180710930001', 'name' => 'Juwasih', 'jk' => $jk[1], 'telephone' => '085648726399','tgl_lahir' => '1993-10-07', 'pekerjaan' => 'Ibu Rumah', 'alamat' => 'Jl.Keprambon Rt.01 Rw.07 Dusun Sejuwet Desa Leran Kulon'
            ],[
                'nik' => '3523181907940002', 'name' => 'Joko Widodo', 'jk' => $jk[0], 'telephone' => '085740019274','tgl_lahir' => '1994-07-19', 'pekerjaan' => 'Buruh Harian', 'alamat' => 'Jl.Kepatihan Rt.02 Rw.03 Dusun Burdalem Desa Leran Wetan'
            ],[
                'nik' => '3523182612920001', 'name' => 'Agus Winoto', 'jk' => $jk[0], 'telephone' => '088192624810','tgl_lahir' => '1992-12-26', 'pekerjaan' => 'Buruh Harian', 'alamat' => 'Jl.Kepatihan Rt.02 Rw.03 Dusun Burdalem Desa Leran Wetan'
            ],[
                'nik' => '3523180710960001', 'name' => 'Shalsa Sabrina', 'jk' => $jk[1], 'telephone' => '089763518621','tgl_lahir' => '1996-10-07', 'pekerjaan' => 'Ibu Rumah', 'alamat' => 'Jl.Layut Dalam Rt.02 Rw.04 Dusun Sejuwet Desa Leran Kulon'
            ],[
                'nik' => '3523181104980002', 'name' => 'Satrio Wicaksono', 'jk' => $jk[0], 'telephone' => '086272518490','tgl_lahir' => '1998-04-11', 'pekerjaan' => 'Buruh Pabrik', 'alamat' => 'Jl.Krajan Rt.01 Rw.05 Dusun Krajan Desa Leran Kulon'
            ],[
                'nik' => '3523180310880001', 'name' => 'Nanang Hidayat', 'jk' => $jk[0], 'telephone' => '088193794712','tgl_lahir' => '1988-10-03', 'pekerjaan' => 'Petani', 'alamat' => 'Jl.Belimbing Rt.02 Rw.06 Dusun Bluri Desa Leran Wetan'
            ],[
                'nik' => '3523180610990002', 'name' => 'Agung Rizki', 'jk' => $jk[0], 'telephone' => '087782681224','tgl_lahir' => '1999-10-06', 'pekerjaan' => 'Pedagang', 'alamat' => 'Jl.Kepatihan Rt.01 Rw.03 Dusun Burdalem Desa Leran Wetan'
            ],[
                'nik' => '3523181012000002', 'name' => 'Nadia Fransiska', 'jk' => $jk[1], 'telephone' => '089637275821','tgl_lahir' => '2000-12-10', 'pekerjaan' => 'Pelayan Restoran', 'alamat' => 'Jl.Arjuna Rt.02 Rw.02 Dusun Leran Desa Leran Kulon'
            ],
        ];

        foreach ($pengguna as $key => $value) {
            DB::table('users')->insert([
                'id' => $count,
                'nik' => $value['nik'],
                'name' => $value['name'],
                'level' => $level[1],
                'jk' => $value['jk'],
                'telephone' => $value['telephone'],
                'alamat' => $value['alamat'],
                'password' => $pwd
            ]);
            DB::table('pengguna')->insert([
                'kode_pengguna' => $count,
                'tgl_lahir' => $value['tgl_lahir'],
                'pekerjaan' => $value['pekerjaan']
            ]);
            $count++;
        }
    }
}
