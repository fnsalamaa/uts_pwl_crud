<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class penyimpananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //data1
        DB::table('inventorie')->insert([
            'kode_barang' => '1004',
            'nama_barang' => 'Momogi',
            'kategori_barang' => 'Snack',
            'harga' => '1500',
            'qty' => '100',
        ]);
        //data2
        DB::table('inventorie')->insert([
            'kode_barang' => '1005',
            'nama_barang' => 'Facetology Sunscreen',
            'kategori_barang' => 'Skincare',
            'harga' => '75000',
            'qty' => '145',
        ]);
        //data3
        DB::table('inventorie')->insert([
            'kode_barang' => '1006',
            'nama_barang' => 'Sari Gandum',
            'kategori_barang' => 'Snack',
            'harga' => '2000',
            'qty' => '50',
        ]);
        //data4
        DB::table('inventorie')->insert([
            'kode_barang' => '1007',
            'nama_barang' => 'Pasta Keju',
            'kategori_barang' => 'Snack',
            'harga' => '1000',
            'qty' => '500',
        ]);
        //data5
        DB::table('inventorie')->insert([
            'kode_barang' => '1008',
            'nama_barang' => 'Avoskin Toner',
            'kategori_barang' => 'Skincare',
            'harga' => '135000',
            'qty' => '255',
        ]);
        //data6
        DB::table('inventorie')->insert([
            'kode_barang' => '1009',
            'nama_barang' => 'Camille Facewash',
            'kategori_barang' => 'Skincare',
            'harga' => '89000',
            'qty' => '200',
        ]);
        //data7
        DB::table('inventorie')->insert([
            'kode_barang' => '10010',
            'nama_barang' => 'Hadalabo',
            'kategori_barang' => 'Skincare',
            'harga' => '60000',
            'qty' => '20',
        ]);
        //data8
        DB::table('inventorie')->insert([
            'kode_barang' => '10011',
            'nama_barang' => 'Pyunkang Yul Toner',
            'kategori_barang' => 'Skincare',
            'harga' => '120000',
            'qty' => '400',
        ]);
        //data9
        DB::table('inventorie')->insert([
            'kode_barang' => '10012',
            'nama_barang' => 'Snail Mucin Cosrx',
            'kategori_barang' => 'Skincare',
            'harga' => '220000',
            'qty' => '30',
        ]);
        //data10
        DB::table('inventorie')->insert([
            'kode_barang' => '10013',
            'nama_barang' => 'Sponge',
            'kategori_barang' => 'Snack',
            'harga' => '15000',
            'qty' => '234',
        ]);
        //data11
        DB::table('inventorie')->insert([
            'kode_barang' => '10014',
            'nama_barang' => 'Pocky',
            'kategori_barang' => 'Snack',
            'harga' => '8000',
            'qty' => '78',
        ]);
        //data12
        DB::table('inventorie')->insert([
            'kode_barang' => '10015',
            'nama_barang' => 'Baso Aci Instan',
            'kategori_barang' => 'Food',
            'harga' => '12000',
            'qty' => '600',
        ]);
        //data13
        DB::table('inventorie')->insert([
            'kode_barang' => '10016',
            'nama_barang' => 'Nugget Kanzler',
            'kategori_barang' => 'Food',
            'harga' => '55000',
            'qty' => '89',
        ]);
        //data14
        DB::table('inventorie')->insert([
            'kode_barang' => '10017',
            'nama_barang' => 'Kebab Frozen',
            'kategori_barang' => 'Food',
            'harga' => '30000',
            'qty' => '52',
        ]);
        //data15
        DB::table('inventorie')->insert([
            'kode_barang' => '10018',
            'nama_barang' => 'Teh Kotak',
            'kategori_barang' => 'Drink',
            'harga' => '4000',
            'qty' => '350',
        ]);
        //data16
        DB::table('inventorie')->insert([
            'kode_barang' => '10019',
            'nama_barang' => 'Kopi Kenangan',
            'kategori_barang' => 'Drink',
            'harga' => '11000',
            'qty' => '65',
        ]);
        //data17
        DB::table('inventorie')->insert([
            'kode_barang' => '10020',
            'nama_barang' => 'Fruit Tea',
            'kategori_barang' => 'Drink',
            'harga' => '6000',
            'qty' => '400',
        ]);
        //data18
        DB::table('inventorie')->insert([
            'kode_barang' => '10021',
            'nama_barang' => 'Teh Pucuk',
            'kategori_barang' => 'Drink',
            'harga' => '5000',
            'qty' => '600',
        ]);
        //data19
        DB::table('inventorie')->insert([
            'kode_barang' => '10022',
            'nama_barang' => 'Sarden',
            'kategori_barang' => 'Food',
            'harga' => '14000',
            'qty' => '90',
        ]);
        //data20
        DB::table('inventorie')->insert([
            'kode_barang' => '10023',
            'nama_barang' => 'Cireng Frozen',
            'kategori_barang' => 'Food',
            'harga' => '7000',
            'qty' => '50',
        ]);
    }
}
