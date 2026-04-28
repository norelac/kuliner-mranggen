<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateFavorit extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type'=>'INT','auto_increment'=>true],
            'user_id' => ['type'=>'INT'],
            'kuliner_id' => ['type'=>'INT'],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id','users','id','CASCADE','CASCADE');
        $this->forge->addForeignKey('kuliner_id','kuliner','id','CASCADE','CASCADE');
        $this->forge->createTable('favorit');
    }

    public function down()
    {
        //
    }
}
