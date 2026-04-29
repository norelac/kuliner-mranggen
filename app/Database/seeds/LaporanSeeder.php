<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LaporanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'user_id' => 2,
                'kuliner_id' => 1,
                'pesan' => 'Tempat tutup permanen'
            ],
        ];

        foreach ($data as $item) {
            $this->db->table('laporan')->insert($item);
        }
    }
}