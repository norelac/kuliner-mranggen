<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKulinerTag extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type'=>'INT','auto_increment'=>true],
            'kuliner_id' => ['type'=>'INT'],
            'tag_id' => ['type'=>'INT'],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('kuliner_id','kuliner','id','CASCADE','CASCADE');
        $this->forge->addForeignKey('tag_id','tag','id','CASCADE','CASCADE');
        $this->forge->createTable('kuliner_tag');
    }

    public function down()
    {
        $this->forge->dropTable('kuliner_tag', true);
    }
}
