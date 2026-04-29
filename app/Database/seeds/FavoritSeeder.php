<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FavoritSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['user_id' => 3, 'kuliner_id' => 1],
            ['user_id' => 3, 'kuliner_id' => 3],
        ];

        foreach ($data as $item) {
            $exists = $this->db->table('favorit')
                ->where($item)
                ->get()->getRow();

            if (!$exists) {
                $this->db->table('favorit')->insert($item);
            }
        }
    }
}