<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function __construct()
    {
        $this->PengaduanModel = new \App\Models\PengaduanModel();
        $this->TanggapanModel = new \App\Models\TanggapanModel();
        $this->MasyarakatModel = new \App\Models\MasyarakatModel();
        //load session
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        $masyarakat = $this->MasyarakatModel->where("id_masyarakat",$this->session->get('id'))->first();

        $pengaduan_dibuat = $this->PengaduanModel->where("id_masyarakat",$this->session->get('id'))->where("status",'0')->findAll();
        $pengaduan_diterima = $this->PengaduanModel->where("id_masyarakat",$this->session->get('id'))->where("status",'1')->findAll();
        $pengaduan_ditanggapi = $this->PengaduanModel->where("id_masyarakat",$this->session->get('id'))->where("status",'2')->findAll();
        $pengaduan_selesai = $this->PengaduanModel->where("id_masyarakat",$this->session->get('id'))->where("status",'3')->findAll();
        $pengaduan_ditolak = $this->PengaduanModel->where("id_masyarakat",$this->session->get('id'))->where("status",'4')->findAll();


        $tanggapan = $this->TanggapanModel->orderBy('id_tanggapan','desc')->findAll();
        
        $data = array(
            "masyarakat" => $masyarakat,
            "pengaduan_dibuat" => $pengaduan_dibuat,
            "pengaduan_diterima" => $pengaduan_diterima,
            "pengaduan_ditanggapi" => $pengaduan_ditanggapi,
            "pengaduan_selesai" => $pengaduan_selesai,
            "pengaduan_ditolak" => $pengaduan_ditolak,
            "tanggapan" => $tanggapan,
            "title" => "Pengguna",
        );
        return view('frontend/user',$data);
    }

    public function update($id = null)
    {
        if($id == null)
        {
            return redirect()->to('/user');
        }

        $validation = $this->validate([
            'username' => 'required',
            'email'   => 'required',
            'telepon'   => 'required',
            'alamat' => 'required',
            'nik' => 'required',
        ]);

        if($validation = false)
        {
            return redirect()->to('/user');
        }

        $data = $this->request->getPost();
        $this->MasyarakatModel->update_data($id,$data);
        return redirect()->to('/user');
    }

    public function delete($id = null)
    {
        if ($id === null)
        {
            return redirect()->to('/user');
        }

        // Assuming $this->MasyarakatModel is an instance of your model
        $this->MasyarakatModel->where('id_masyarakat', $id)->delete();

        return redirect()->to('/logout');
    }
}
