<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Tanggapan extends BaseController
{
    public function __construct() 
    {
        $this->TanggapanModel = new \App\Models\TanggapanModel();
        //meload validation
        $this->validation = \Config\Services::validation();

        //meload session
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        //
    }

    public function tambah_tanggapan($id_pengaduan = null)
    {
        if($id_pengaduan != null)
        {
            $tanggapan = $this->request->getPost();

            if($tanggapan)
            {
                $validation = $this->validate([
                    'tanggapan' => 'required'
                ]);
                if($validation == true)
                {
                    date_default_timezone_set('Asia/Jakarta');
                    $data = array(
                        'id_pengaduan' => $id_pengaduan,
                        'id_petugas' => $this->session->get('id'),
                        'tanggapan' => $tanggapan['tanggapan'],
                        'tanggal' => date("l j F H:i")
                    );
                    $this->TanggapanModel->create($data);
                    return redirect()->to('/');
                }
                else
                {
                    return redirect()->to('/');
                }
            }
            else
            {
                return redirect()->to('/');
            }
        }
        else
        {
            return redirect()->to('/');
        }
    }

    public function update_tanggapan($id_tanggapan = null)
    {
        if($id_tanggapan != null)
        {
            $tanggapan = $this->request->getPost();

            if($tanggapan)
            {
                $validation = $this->validate([
                    'tanggapan' => 'required'
                ]);
                if($validation == true)
                {
                    date_default_timezone_set('Asia/Jakarta');
                    $data = array(
                        'id_petugas' => $this->session->get('id'),
                        'tanggapan' => $tanggapan['tanggapan'],
                        'tanggal' => date("l j F H:i")
                    );
                    $this->TanggapanModel->update_data($data,$id_tanggapan);
                    return redirect()->to('/');
                }
                else
                {
                    return redirect()->to('/');
                }
            }
            else
            {
                return redirect()->to('/');
            }
        }
        else
        {
            return redirect()->to('/');
        }
    }

    public function delete_tanggapan($id = null)
    {
        if($id)
        {
            $this->TanggapanModel->delete($id);
            return redirect()->to('/');
        }
        else
        {
            return redirect()->to('/');
        }
    }
}
