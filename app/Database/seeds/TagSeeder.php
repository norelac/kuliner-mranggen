<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TagSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['nama' => 'Murah'],
            ['nama' => 'Enak'],
            ['nama' => 'Viral'],
            ['nama' => 'Pedas'],
            ['nama' => 'Instagramable'],
        ];

        foreach ($data as $item) {
            $exists = $this->db->table('tag')
                ->where('nama', $item['nama'])
                ->get()->getRow();

            if (!$exists) {
                $this->db->table('tag')->insert($item);
            }
        }
    }
}