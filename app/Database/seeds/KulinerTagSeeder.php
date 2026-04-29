<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KulinerTagSeeder extends Seeder
{
    public function run()
    {
        $kuliners = $this->db->table('kuliner')->get()->getResult();
        $tags = $this->db->table('tag')->get()->getResult();

        foreach ($kuliners as $kuliner) {
            foreach ($tags as $tag) {

                $exists = $this->db->table('kuliner_tag')
                    ->where('kuliner_id', $kuliner->id)
                    ->where('tag_id', $tag->id)
                    ->get()
                    ->getRow();

                if (!$exists) {
                    $this->db->table('kuliner_tag')->insert([
                        'kuliner_id' => $kuliner->id,
                        'tag_id' => $tag->id,
                    ]);
                }
            }
        }
    }
}