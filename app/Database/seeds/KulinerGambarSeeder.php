<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KulinerGambarSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('kuliner_gambar')->insert([
            'kuliner_id' => 1,
            'gambar' => 'default.jpg'
        ]);
    }
}