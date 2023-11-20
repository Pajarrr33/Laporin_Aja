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
             'auto_increment' => true,
           ],
           'id_masyarakat' => [
             'type' => 'INT',
             'constraint' => 11,
           ],
           'judul' => [
             'type' => 'VARCHAR',
             'constraint' => '128',
           ],
           'isi' => [
            'type' => 'TEXT',
            ],
          'img' => [
              'type' => 'VARCHAR',
              'constraint' => 120,
            ],
           'tanggal' => [
             'type' => 'VARCHAR',
             'constraint' => 256,
           ],
           'tanggal_filter' => [
            'type' => 'DATE',
          ],
          'tanggal_selesai' => [
            'type' => 'VARCHAR',
            'constraint' => 256,
            'default' => "-",
          ],
          
            'status' => [
              'type' => 'ENUM',
              'constraint' => array('0','1','2','3','4'),
              'default'=> "0"
            ],
       ]);
    
       $this->forge->addPrimaryKey('id_pengaduan');
       $this->forge->createTable('pengaduan');
    }
    
    public function down()
    {
       $this->forge->dropTable('pengaduan');
    }
}
