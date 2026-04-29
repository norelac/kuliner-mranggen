<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KulinerSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('kuliner')->insertBatch([
            [
                'user_id' => 2,
                'kategori_id' => 3,
                'nama' => 'Bakso Pak Kardi',
                'alamat' => 'Bandungrejo',
                'deskripsi' => 'Spesialis bakso di Mranggen',
                'latitude' => -6.98,
                'longitude' => 110.40,
                'status' => 'approved'
            ],
            [
                'user_id' => 2,
                'kategori_id' => 2,
                'nama' => 'RM Padang Nan Sero',
                'alamat' => 'Bandungrejo',
                'deskripsi' => 'Salah satu RM Padang legendaris di kawasan Mranggen',
                'latitude' => -6.99,
                'longitude' => 110.42,
                'status' => 'approved'
            ],
            [
                'user_id' => 3,
                'kategori_id' => 1,
                'nama' => 'Bebek Bakar Aminjoyo',
                'alamat' => 'Kauman',
                'deskripsi' => 'Bebeknya juicy',
                'latitude' => -6.97,
                'longitude' => 110.41,
                'status' => 'approved'
            ]
        ]);
    }
}