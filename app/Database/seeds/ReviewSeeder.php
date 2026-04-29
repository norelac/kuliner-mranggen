<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('review')->insertBatch([
            [
                'user_id' => 2,
                'kuliner_id' => 1,
                'rating' => 5,
                'komentar' => 'Enak banget'
            ]
        ]);
    }
}