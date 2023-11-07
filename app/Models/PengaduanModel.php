<?php

namespace App\Models;

use CodeIgniter\Model;

class PengaduanModel extends Model
{
    protected $table = 'pengaduan';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['id_pengaduan', 'tanggal_pengaduan', 'nik', 'isi_pengaduan', 'foto', 'status_pengaduan'];

    public function getPengaduan($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_pengaduan' => $id])->first();
    }
}