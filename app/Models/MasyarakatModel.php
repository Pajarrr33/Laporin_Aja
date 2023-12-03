<?php

namespace App\Models;

use CodeIgniter\Model;

class MasyarakatModel extends Model
{
    protected $table = "masyarakat";
    protected $primaryKey = "id_masyarakat";
    protected $allowedFields = ["nik","email", "username", "password", "telepon", "date_created", "salt"];
    protected $useAutoIncrement = true;
    protected $useTimestamps = false;
   
    public function update_data($id, $data)
    {
        $query = $this->db->table($this->table)->where('id_masyarakat', $id)->update($data);
        return $query ;
    }
}