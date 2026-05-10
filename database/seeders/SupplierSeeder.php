<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
             [
                'supplier_id' => 1,
                'supplier_kode' => 'SPL001',
                'supplier_nama' => 'Resto Anjasmoro',
                'supplier_alamat' => 'Jl. Prambanan No. 123',
            ],
            [
                'supplier_id' => 2,
                'supplier_kode' => 'SPL002',
                'supplier_nama' => 'Cafe Beast',
                'supplier_alamat' => 'Jl. Malowopati No. 456',
            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 'SPL003',
                'supplier_nama' => 'Warung Cangkring',
                'supplier_alamat' => 'Jl. Mataram No. 789',
            ],
        ];
        DB::table ('m_supplier')->insert($data);
    }
}
