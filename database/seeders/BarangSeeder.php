<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'kode_barang' => 'PRD001',
                'nama_barang' => 'Indomie',
                'kategori_barang' => 'makanan',
                'harga' => '3000',
                'qty' => '100'
            ],
            [
                'kode_barang' => 'PRD002',
                'nama_barang' => 'Pocari',
                'kategori_barang' => 'minuman',
                'harga' => '5000',
                'qty' => '50'
            ],
            [
                'kode_barang' => 'PRD003',
                'nama_barang' => 'Silverqueen',
                'kategori_barang' => 'snack',
                'harga' => '150000',
                'qty' => '45'
            ],
            [
                'kode_barang' => 'PRD004',
                'nama_barang' => 'momogi',
                'kategori_barang' => 'snack',
                'harga' => '1000',
                'qty' => '150'
            ],
            [
                'kode_barang' => 'PRD005',
                'nama_barang' => 'Sunslik',
                'kategori_barang' => 'pembersih',
                'harga' => '4000',
                'qty' => '200'
            ],
            [
                'kode_barang' => 'PRD006',
                'nama_barang' => 'teh gelas',
                'kategori_barang' => 'minuman',
                'harga' => '1000',
                'qty' => '250'
            ],
            [
                'kode_barang' => 'PRD007',
                'nama_barang' => 'Molto',
                'kategori_barang' => 'pembersih',
                'harga' => '4000',
                'qty' => '200'
            ],
            [
                'kode_barang' => 'PRD008',
                'nama_barang' => 'sarimie',
                'kategori_barang' => 'makanan',
                'harga' => '3000',
                'qty' => '200'
            ],
            [
                'kode_barang' => 'PRD009',
                'nama_barang' => 'sariroti',
                'kategori_barang' => 'makanan',
                'harga' => '5000',
                'qty' => '100'
            ],
            [
                'kode_barang' => 'PRD010',
                'nama_barang' => 'spagetti',
                'kategori_barang' => 'makanan',
                'harga' => '25000',
                'qty' => '100'
            ],
            [
                'kode_barang' => 'PRD011',
                'nama_barang' => 'teh kotak',
                'kategori_barang' => 'minuman',
                'harga' => '7000',
                'qty' => '150'
            ],
            [
                'kode_barang' => 'PRD012',
                'nama_barang' => 'coca-cola',
                'kategori_barang' => 'minuman',
                'harga' => '5000',
                'qty' => '350'
            ],
            [
                'kode_barang' => 'PRD013',
                'nama_barang' => 'fanta',
                'kategori_barang' => 'minuman',
                'harga' => '5000',
                'qty' => '150'
            ],
            [
                'kode_barang' => 'PRD014',
                'nama_barang' => 'chocolatos',
                'kategori_barang' => 'snack',
                'harga' => '1000',
                'qty' => '250'
            ],
            [
                'kode_barang' => 'PRD015',
                'nama_barang' => 'cheetos',
                'kategori_barang' => 'snack',
                'harga' => '3000',
                'qty' => '250'
            ],
            [
                'kode_barang' => 'PRD016',
                'nama_barang' => 'lays',
                'kategori_barang' => 'sanck',
                'harga' => '4000',
                'qty' => '100'
            ],
            [
                'kode_barang' => 'PRD017',
                'nama_barang' => 'daia',
                'kategori_barang' => 'pembersih',
                'harga' => '5000',
                'qty' => '150'
            ],
            [
                'kode_barang' => 'PRD018',
                'nama_barang' => 'rinso',
                'kategori_barang' => 'pembersih',
                'harga' => '10000',
                'qty' => '250'
            ],
            [
                'kode_barang' => 'PRD019',
                'nama_barang' => 'downi',
                'kategori_barang' => 'pembersih',
                'harga' => '5000',
                'qty' => '350'
            ],
            [
                'kode_barang' => 'PRD020',
                'nama_barang' => 'bayclin',
                'kategori_barang' => 'pembersih',
                'harga' => '3000',
                'qty' => '250'
            ]
        ];
        DB::table('barangs')->insert($data);
    }

}
