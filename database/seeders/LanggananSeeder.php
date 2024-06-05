<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanggananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query = "INSERT INTO `langganans` (`id`, `nama_langganan`, `lama_langganan`, `harga`, `keuntungan_1`, `keuntungan_2`, `keuntungan_3`, `keuntungan_4`, `keuntungan_5`, `created_at`, `updated_at`) VALUES
        (1, 'rudi 1', '1 bulan', 120000, 'keu 11', 'keu 21', 'keu 31', 'keu 41', 'keu 51', '2024-06-05 02:40:35', '2024-06-05 06:15:34'),
        (2, 'rudi 2', '6 bulan', 450000, 'keu 1', 'keu 2', 'keu 3', 'keu 4', 'keu 5', '2024-06-05 02:40:35', '2024-06-05 02:40:39'),
        (3, 'rudi 3', '12 bulan', 1500000, 'keu 1', 'keu 2', 'keu 3', 'keu 4', 'keu 5', '2024-06-05 02:40:35', '2024-06-05 02:40:39');
        ";


        DB::statement($query);
    }
}
