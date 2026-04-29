<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLaporan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type'=>'INT','auto_increment'=>true],
            'user_id' => ['type'=>'INT'],
            'kuliner_id' => ['type'=>'INT'],
            'alasan' => ['type'=>'TEXT'],
            'status' => ['type'=>'ENUM','constraint'=>['pending','valid','ditolak']],
            'created_at' => ['type'=>'DATETIME','null'=>true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id','users','id','CASCADE','CASCADE');
        $this->forge->addForeignKey('kuliner_id','kuliner','id','CASCADE','CASCADE');
        $this->forge->createTable('laporan');
    }

    public function down()
    {
        $this->forge->dropTable('laporan', true);
    }
}
