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
         'tanggal_tanggapan' => [
            'type' => 'DATE',
          ],
         'tanggapan' => [
            'type' => 'TEXT',
          ],
         'status_tanggapan' => [
            'type' => 'ENUM',
            'constraint' => array('0','1','2','3','4'),
            'default'=> "0"
        ],
       'id_petugas' => [
          'type' => 'INT',
          'constraint' => 11,
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
