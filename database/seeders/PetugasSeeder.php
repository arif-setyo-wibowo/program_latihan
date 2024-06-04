<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('petugas')->insert(
            [
                ['id' => '1',
                'nama' => 'Admin',
                'username' => 'admin',
                'password' => '$2y$10$krTp5qjZ4zidKfCx94W6ZOJvqgsf1SCjNJ/rmE0qfNh9r27QLxHfi',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
                ]
            ]);
    }
}
