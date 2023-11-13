<?php

namespace App\Models;

use CodeIgniter\Model;

class PengaduanModel extends Model
{
    protected $table = 'pengaduan';
    protected $primaryKey       = 'id_pengaduan';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;

    protected $allowedFields = ['id_pengaduan','id_masyrakat','judul','isi','img','tanggal','status'];

    public function create($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function update_data($id, $data)
    {
        $query = $this->db->table($this->table)->where('id_pengaduan', $id)->update($data);
        return $query ;
    }

    public function create_id()
    {
        return $this->db->insertID();
    }
}