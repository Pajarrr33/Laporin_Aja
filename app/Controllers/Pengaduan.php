<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pengaduan extends BaseController
{
    public function __construct() 
    {
        $this->PengaduanModel = new \App\Models\PengaduanModel();
        $this->TanggapanModel = new \App\Models\TanggapanModel();

        //meload validation
        $this->validation = \Config\Services::validation();

        //meload session
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        return view("frontend/pengaduan");
    }
    
    public function update($id = null)
    {
        $pengaduan = $this->PengaduanModel->where("id_masyarakat",$this->session->get('id'))->first();
        $data = array(
            "pengaduan" => $pengaduan
        );
        return view("frontend/update_pengaduan",$data);
    }

    public function pengaduan()
    {
        $pengaduan = $this->request->getPost();

        if($pengaduan)
        {
            $validation = $this->validate([
                'judul' => 'required',
                'isi'   => 'required',
                'img'   => 'uploaded[img]|mime_in[img,image/jpg,image/jpeg,image/gif,image/png]'
            ]);
            if($validation == true)
            {
                date_default_timezone_set('Asia/Jakarta');
                $file = $this->request->getFile('img');
                $img = $file->getName();
                $file->move(ROOTPATH . 'public/upload');
                $data = array(
                    'id_masyarakat' => $this->session->get('id'),
                    'judul' => $pengaduan['judul'],
                    'isi' => $pengaduan['isi'],
                    'img' => $img,
                    'tanggal' => date("l j F H:i"),
                    'status' => '0',
                );
                $this->PengaduanModel->create($data);

                    $id_pengaduan = $this->PengaduanModel->create_id();
                    $tanggapan_data = array(
                        'id_pengaduan' => $id_pengaduan,
                        'id_petugas' => 0,
                        'tanggapan' => 'Pengaduan telah diterima',
                        'tanggal' => date("l j F H:i"),
                    );
                    $this->TanggapanModel->create($tanggapan_data);
                    return redirect()->to('/');
            }
            else
            {
                return redirect()->to('/pengaduan');
            }
        }
        else
        {
            return redirect()->to('/pengaduan');
        }
    }

    public function update_pengaduan($id = null)
    {
        if($id != null)
        {
            $pengaduan = $this->PengaduanModel->where("id_pengaduan",$id)->first();
            $pengaduanUpdate = $this->request->getPost();

            if($pengaduanUpdate)
            {
                $validation = $this->validate([
                    'judul' => 'required',
                    'isi'   => 'required',
                    'img'   => 'uploaded[img]|mime_in[img,image/jpg,image/jpeg,image/gif,image/png]'
                ]);

                if($validation = true)
                {
                    if($this->request->getFile('img')->isValid())
                    {
                        if(!empty($pengaduan['img']))
                        {
                            unlink(ROOTPATH . 'public/upload/' . $pengaduan['img']);
                        }

                        $upload = $this->request->getFile('img');
                        $upload->move(ROOTPATH . 'public/upload/');
                        $img = $upload->getName();
                    }
                    else
                    {
                        $img = $pengaduan['img'];
                    }

                    $data = array(
                        'judul' => $pengaduanUpdate['judul'],
                        'isi' => $pengaduanUpdate['isi'],
                        'img' => $img,
                    );

                    $this->PengaduanModel->update_data($id,$data);
                    return redirect()->to('/');
                }
                else
                {
                    return redirect()->to('/update_pengaduan/' . $id);
                }
            }
            else
            {
                return redirect()->to('/update_pengaduan/' . $id);
            }
        }
        else
        {
            return redirect()->to('/');
        }
    }


    // Admin Function 
    public function list_pengaduan()
    {
        $pengaduan = $this->PengaduanModel->findAll();
        $tanggapan = $this->TanggapanModel->findAll();
        $data = array(
            "pengaduan" => $pengaduan,
            "tanggapan" => $tanggapan,
        );
        return view('admin/list_pengaduan',$data);
    }

    public function terima_pengaduan($id = null)
    {
        if($id != null)
        {
            $data = array(
                'status' => '1'
            );
            $this->PengaduanModel->update_data($id,$data);
            return redirect()->to('/admin/pengaduan/');
        }
        else
        {
            return redirect()->to('/admin/pengaduan/');
        }
    }

    public function tolak_pengaduan($id = null)
    {
        if($id != null)
        {
            $data = array(
                'status' => '4'
            );
            $this->PengaduanModel->update_data($id,$data);
            return redirect()->to('/admin/pengaduan/');
        }
        else
        {
            return redirect()->to('/admin/pengaduan/');
        }
    }
}   