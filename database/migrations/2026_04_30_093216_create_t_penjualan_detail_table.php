<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function run(): void
{
    $data = [];
    $counter = 1;
    for ($i = 1; $i <= 10; $i++) { // loop untuk 10 transaksi
        for ($j = 1; $j <= 3; $j++) { // 3 barang per transaksi
            $data[] = [
                'detail_id' => $counter++,
                'penjualan_id' => $i,
                'barang_id' => rand(1, 15),
                'harga' => 15000,
                'jumlah' => rand(1, 3),
            ];
        }
    }
    DB::table('t_penjualan_detail')->insert($data); //
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penjualan_detail');
    }
};
