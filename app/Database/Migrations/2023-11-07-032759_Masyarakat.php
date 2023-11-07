<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Masyarakat extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_masyarakat' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'nik' => [
                'type'       => 'VARCHAR',
                'constraint' => '16',
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 64,
            ],
            'telepon' => [
                'type' => 'VARCHAR',
                'constraint' => 13,
            ],
            'date_created' => [
                'type' => 'DATETIME',
            ],
            'salt' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ]
        ]);
        $this->forge->addKey('id_masyarakat', true);
        $this->forge->createTable('masyarakat');
    }

    public function down()
    {
        $this->forge->dropTable('blog');
    }
}
