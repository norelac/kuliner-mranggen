<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KulinerTagSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('kuliner_tag')->insertBatch([
            ['kuliner_id' => 1, 'tag_id' => 1],
            ['kuliner_id' => 1, 'tag_id' => 2],
            ['kuliner_id' => 2, 'tag_id' => 3]
        ]);
    }
}