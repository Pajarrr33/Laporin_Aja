<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengaduan extends Migration
{
   public function up()
   {
      $this->forge->addField([
         'id_pengaduan' => [
            'type' => 'INT',
            'unsigned' => true,
            'auto_increment' => true,
          ],
         'tanggal_pengaduan' => [
            'type' => 'DATETIME',
          ],
         'nik' => [
            'type' => 'VARCHAR',
            'constraint' => 16,
          ],
         'isi_pengaduan' => [
              'type' => 'TEXT',
          ],
         'foto' => [
            'type' => 'VARCHAR',
            'constraint' => 120,
          ],
         'status_pengaduan' => [
            'type' => 'ENUM',
            'constraint' => array('0','1','2','3','4'),
            'default'=> "0"
          ],
      ]);
   
      $this->forge->addPrimaryKey('id');
      $this->forge->createTable('pengaduan');
   }
   
   public function down()
   {
      $this->forge->dropTable('pengaduan');
   }
}