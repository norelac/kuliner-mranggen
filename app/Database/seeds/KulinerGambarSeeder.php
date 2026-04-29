<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KulinerGambarSeeder extends Seeder
{
    public function run()
{
    $data = [
        ['kuliner_id' => 1, 'nama_file' => 'default.jpg'],
        ['kuliner_id' => 2, 'nama_file' => 'default.jpg'],
        ['kuliner_id' => 3, 'nama_file' => 'default.jpg'],
    ];

    foreach ($data as $item) {
        $exists = $this->db->table('kuliner_gambar')
            ->where($item)
            ->get()->getRow();

        if (!$exists) {
            $this->db->table('kuliner_gambar')->insert($item);
        }
    }
}
}