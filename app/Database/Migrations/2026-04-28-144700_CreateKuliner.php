<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKuliner extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type'=>'INT','auto_increment'=>true],
            'user_id' => ['type'=>'INT'],
            'nama' => ['type'=>'VARCHAR','constraint'=>150],
            'alamat' => ['type'=>'TEXT'],
            'deskripsi' => ['type'=>'TEXT'],
            'kategori_id' => ['type'=>'INT'],
            'latitude' => ['type'=>'DECIMAL','constraint'=>'10,8'],
            'longitude' => ['type'=>'DECIMAL','constraint'=>'11,8'],
            'status' => ['type'=>'ENUM','constraint'=>['pending','approved','rejected']],
            'is_closed' => ['type'=>'TINYINT'],
            'created_at' => ['type'=>'DATETIME','null'=>true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id','users','id','CASCADE','CASCADE');
        $this->forge->addForeignKey('kategori_id','kategori','id','CASCADE','CASCADE');
        $this->forge->createTable('kuliner');
    }

    public function down()
    {
        //
    }
}
