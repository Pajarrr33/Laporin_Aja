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
           'id_masyrakat' => [
             'type' => 'INT',
             'constraint' => 11,
           ],
           'judul' => [
             'type' => 'VARCHAR',
             'constraint' => '225',
           ],
           'nik' => [
             'type' => 'VARCHAR',
             'constraint' => 16,
           ],
           'tanggal_pengaduan' => [
             'type' => 'DATETIME',
           ],
          'isi_pengaduan' => [
               'type' => 'TEXT',
           ],
          'img' => [
             'type' => 'VARCHAR',
             'constraint' => 120,
           ],
          'status_pengaduan' => [
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
