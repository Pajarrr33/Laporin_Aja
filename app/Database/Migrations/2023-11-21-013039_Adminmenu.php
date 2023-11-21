<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Adminmenu extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
               'type' => 'INT',
               'auto_increment' => true,
             ],
            'url' => [
                'type' => 'VARCHAR',
                'constraint' => 256,
            ]
             
         ]);
      
         $this->forge->addPrimaryKey('id');
         $this->forge->createTable('adminmenu');
    }

    public function down()
    {
      $this->forge->dropTable('adminmenu');
    }
}
