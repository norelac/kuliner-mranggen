<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TagSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('tag')->insertBatch([
            ['nama' => 'Murah'],
            ['nama' => 'Halal'],
            ['nama' => 'WiFi'],
            ['nama' => 'AC'],
            ['nama' => 'Parkir']
        ]);
    }
}