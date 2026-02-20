<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'Ahmad',
                'penjualan_kode' => 'PJL001',
                'penjualan_tanggal' => '2026-02-20 11:00:00',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Siti',
                'penjualan_kode' => 'PJL002',
                'penjualan_tanggal' => '2026-02-20 11:30:00',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Budi',
                'penjualan_kode' => 'PJL003',
                'penjualan_tanggal' => '2026-02-20 12:00:00',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'Dewi',
                'penjualan_kode' => 'PJL004',
                'penjualan_tanggal' => '2026-02-20 12:30:00',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'Eko',
                'penjualan_kode' => 'PJL005',
                'penjualan_tanggal' => '2026-02-20 13:00:00',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Fitri',
                'penjualan_kode' => 'PJL006',
                'penjualan_tanggal' => '2026-02-20 13:30:00',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'Gita',
                'penjualan_kode' => 'PJL007',
                'penjualan_tanggal' => '2026-02-20 14:00:00',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Hendra',
                'penjualan_kode' => 'PJL008',
                'penjualan_tanggal' => '2026-02-20 14:30:00',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Ira',
                'penjualan_kode' => 'PJL009',
                'penjualan_tanggal' => '2026-02-20 15:00:00',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Joko',
                'penjualan_kode' => 'PJL010',
                'penjualan_tanggal' => '2026-02-20 15:30:00',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
