<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'user_id' => 2,
                'kuliner_id' => 1,
                'rating' => 5,
                'komentar' => 'Enak banget!'
            ],
            [
                'user_id' => 2,
                'kuliner_id' => 2,
                'rating' => 4,
                'komentar' => 'Lumayan enak'
            ],
        ];

        foreach ($data as $item) {
            $this->db->table('review')->insert($item);
        }
    }
}