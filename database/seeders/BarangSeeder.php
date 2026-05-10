<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'BRG001',
                'barang_nama' => 'Nasi Goreng',
                'harga_beli' => 15000,
                'harga_jual' => 20000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'BRG002',
                'barang_nama' => 'Chicken Rice Bowl',
                'harga_beli' => 18000,
                'harga_jual' => 20000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 1,
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Nasi Ayam Geprek',
                'harga_beli' => 15000,
                'harga_jual' => 18000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 1,
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Chicken Steak',
                'harga_beli' => 20000,
                'harga_jual' => 22000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 1,
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Mie Goreng',
                'harga_beli' => 12000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 2,
                'barang_kode' => 'BRG006',
                'barang_nama' => 'Cappucino',
                'harga_beli' => 18000,
                'harga_jual' => 20000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 2,
                'barang_kode' => 'BRG007',
                'barang_nama' => 'Ice Tea Lychee',
                'harga_beli' => 12000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 2,
                'barang_kode' => 'BRG008',
                'barang_nama' => 'Americano',
                'harga_beli' => 15000,
                'harga_jual' => 18000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 2,
                'barang_kode' => 'BRG009',
                'barang_nama' => 'Milkbase',
                'harga_beli' => 10000,
                'harga_jual' => 12000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 2,
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Mocktail',
                'harga_beli' => 10000,
                'harga_jual' => 12000,
            ],
            [
                'barang_id' => 11,
                'kategori_id' => 3,
                'barang_kode' => 'BRG011',
                'barang_nama' => 'Muffin',
                'harga_beli' => 5000,
                'harga_jual' => 10000,
            ],
            [
                'barang_id' => 12,
                'kategori_id' => 3,
                'barang_kode' => 'BRG012',
                'barang_nama' => 'Donut',
                'harga_beli' => 5000,
                'harga_jual' => 10000,
            ],
            [
                'barang_id' => 13,
                'kategori_id' => 3,
                'barang_kode' => 'BRG013',
                'barang_nama' => 'Croissant',
                'harga_beli' => 7000,
                'harga_jual' => 12000,
            ],
            [
                'barang_id' => 14,
                'kategori_id' => 3,
                'barang_kode' => 'BRG014',
                'barang_nama' => 'Brownies',
                'harga_beli' => 8000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 15,
                'kategori_id' => 3,
                'barang_kode' => 'BRG015',
                'barang_nama' => 'Cheesecake',
                'harga_beli' => 10000,
                'harga_jual' => 20000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
