<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LaporanSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('laporan')->insertBatch([
            [
                'user_id' => 2,
                'kuliner_id' => 1,
                'alasan' => 'Tempat tutup',
                'status' => 'pending'
            ]
        ]);
    }
}