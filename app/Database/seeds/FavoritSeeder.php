<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FavoritSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('favorit')->insertBatch([
            [
                'user_id' => 2,
                'kuliner_id' => 1
            ]
        ]);
    }
}