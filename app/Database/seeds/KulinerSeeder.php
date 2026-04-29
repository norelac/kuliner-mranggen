<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KulinerSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Bakso Pak Kardi',
                'alamat' => 'Bandungrejo',
                'deskripsi' => 'Bakso legendaris di Mranggen',
                'kategori_id' => 1,
                'user_id' => 3
            ],
            [
                'nama' => 'Bebek Bakar Aminjoyo',
                'alamat' => 'Kauman',
                'deskripsi' => 'Bebeknya juicy banget',
                'kategori_id' => 1,
                'user_id' => 3
            ],
            [
                'nama' => 'Semesta Cafe',
                'alamat' => 'Kembangarum',
                'deskripsi' => 'Tempat nongkrong view sawah',
                'kategori_id' => 2,
                'user_id' => 3
            ],
            [
                'nama' => 'Es Dawet Hitam',
                'alamat' => 'Brumbung',
                'deskripsi' => 'Minuman segar tradisional',
                'kategori_id' => 5,
                'user_id' => 4
            ],
            [
                'nama' => 'Bakso Shobat',
                'alamat' => 'Bandungrejo',
                'deskripsi' => 'Bakso & Mie Ayam Andalan',
                'kategori_id' => 1,
                'user_id' => 4
            ],
        ];

        foreach ($data as $item) {
            $exists = $this->db->table('kuliner')
                ->where('nama', $item['nama'])
                ->get()->getRow();

            if (!$exists) {
                $this->db->table('kuliner')->insert($item);
            }
        }
    }
}

