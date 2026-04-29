<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('kategori')->insertBatch([
            ['nama' => 'Makanan Berat'],
            ['nama' => 'Cafe'],
            ['nama' => 'Street Food'],
            ['nama' => 'Minuman']
        ]);
    }
}