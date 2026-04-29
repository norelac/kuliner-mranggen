<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['nama' => 'Makanan Berat'],
            ['nama' => 'Cafe'],
            ['nama' => 'Street Food'],
            ['nama' => 'Minuman'],
            ['nama' => 'Dessert'],
        ];

        foreach ($data as $item) {

            $exists = $this->db->table('kategori')
                ->where('nama', $item['nama'])
                ->get()
                ->getRow();

            if (!$exists) {
                $this->db->table('kategori')->insert($item);
            }
        }
    }
}