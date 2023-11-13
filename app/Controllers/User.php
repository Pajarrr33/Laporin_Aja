<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function __construct()
    {
        $this->PengaduanModel = new \App\Models\PengaduanModel();
        $this->TanggapanModel = new \App\Models\TanggapanModel();

        //load session
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        $pengaduan = $this->PengaduanModel->where("id_masyarakat",$this->session->get('id'))->findAll();
        $tanggapan = $this->TanggapanModel->findAll();
        $data = array(
            "pengaduan" => $pengaduan,
            "tanggapan" => $tanggapan,
        );
        return view('frontend/user',$data);
    }
}
