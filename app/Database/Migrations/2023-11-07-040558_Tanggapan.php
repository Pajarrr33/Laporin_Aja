<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tanggapan extends Migration
{
    public function up()
   {
      $this->forge->addField([
         'id_tanggapan' => [
            'type' => 'INT',
            'auto_increment' => true,
          ],
          'id_pengaduan' => [
             'type' => 'INT',
             'constraint' => 11,
           ],
           'id_petugas' => [
            'type' => 'INT',
            'constraint' => 11,
         ],
         'tanggal' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
          ],
         'tanggapan' => [
            'type' => 'TEXT',
          ],
         'status' => [
            'type' => 'ENUM',
            'constraint' => array('0','1','2','3','4'),
            'default'=> "0"
        ],
      ]);
   
      $this->forge->addPrimaryKey('id_tanggapan');
      $this->forge->createTable('tanggapan');
   }
   
   public function down()
   {
      $this->forge->dropTable('tanggapan');
   }
}
