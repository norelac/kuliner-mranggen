<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKulinerGambar extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type'=>'INT','auto_increment'=>true],
            'kuliner_id' => ['type'=>'INT'],
            'nama_file' => ['type'=>'VARCHAR','constraint'=>255],
            'created_at' => ['type'=>'DATETIME','null'=>true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('kuliner_id','kuliner','id','CASCADE','CASCADE');
        $this->forge->createTable('kuliner_gambar');
    }

    public function down()
    {
        $this->forge->dropTable('kuliner_gambar', true);
    }
}
