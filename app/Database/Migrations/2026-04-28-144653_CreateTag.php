<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTag extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type'=>'INT','auto_increment'=>true],
            'nama' => ['type'=>'VARCHAR','constraint'=>100],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tag');
    }

    public function down()
    {
        $this->forge->dropTable('tag', true);
    }
}
