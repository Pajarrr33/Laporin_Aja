<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pengaduan extends BaseController
{
    public function __construct() 
    {
        $this->PengaduanModel = new \App\Models\PengaduanModel();
        $this->TanggapanModel = new \App\Models\TanggapanModel();
        $this->MasyarakatModel = new \App\Models\MasyarakatModel();
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
        $pengaduan = $this->PengaduanModel->where("id_pengaduan",$id)->first();
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
        $pengaduan = $this->PengaduanModel->where("id_pengaduan",$id)->first();

        if($id != null)
        {
            if($pengaduan['status'] == '0') 
            {
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
                        return redirect()->to('/user');
                    }
                    else
                    {
                        return redirect()->to('/user');
                    }
                }
                else
                {
                    $this->session->setFlashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Anda Mengubah isi pengaduan ini karena sudah diverifikasi oleh petugas
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                    return redirect()->to('/user');
                }
            }
            else
            {
                return redirect()->to('/user');
            }
        }
        else
        {
            return redirect()->to('/user');
        }
    }

    public function delete_pengaduan($id = null)
    {
        if($id)
        {
            $pengaduan = $this->PengaduanModel->where("id_pengaduan",$id)->first();
            if($pengaduan['status'] == '0') 
            {
                $tanggapan = $this->TanggapanModel->where("id_pengaduan",$id)->findAll();
                if($pengaduan['img'])
                {
                    unlink(ROOTPATH . 'public/upload/' . $pengaduan['img']);
                }
                foreach($tanggapan as $t) {
                    $this->TanggapanModel->delete($t['id_tanggapan']);
                }
                $this->PengaduanModel->delete($id);
                return redirect()->to('/user');
            }
            else
            {
                $this->session->setFlashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Anda Tidak bisa menghapus pengaduan ini karena sudah diverifikasi oleh petugas
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                return redirect()->to('/user');
            }
        }
        else
        {
            return redirect()->to('/user');
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

    public function pengaduan_satuan($id = null)
    {
        $pengaduan = $this->PengaduanModel->where('id_pengaduan',$id)->first();
        $masyrakat = $this->MasyarakatModel->where('id_masyarakat',$pengaduan['id_masyarakat'])->first();
        $tanggapan = $this->TanggapanModel->where('id_pengaduan',$pengaduan['id_pengaduan'])->orderBy('id_tanggapan','desc')->findAll();
        $data = array(
            "pengaduan" => $pengaduan,
            "tanggapan" => $tanggapan,
            "masyarakat"=> $masyrakat,
        );
        return view('admin/pengaduan_satuan',$data);
    }

    public function terima_pengaduan($id = null)
    {
        if($id != null)
        {
            date_default_timezone_set('Asia/Jakarta');
            $data = array(
                'status' => '1'
            );
            $this->PengaduanModel->update_data($id,$data);
            $tanggapan_data = array(
                'id_pengaduan' => $id,
                'id_petugas' => $this->session->get('id'),
                'tanggapan' => 'Pengaduan telah diverifikasi',
                'tanggal' => date("l j F H:i"),
            );
            $this->TanggapanModel->create($tanggapan_data);
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
            date_default_timezone_set('Asia/Jakarta');
            $data = array(
                'status' => '4'
            );
            $this->PengaduanModel->update_data($id,$data);
            $tanggapan_data = array(
                'id_pengaduan' => $id,
                'id_petugas' => $this->session->get('id'),
                'tanggapan' => $this->request->getPost('tanggapan'),
                'tanggal' => date("l j F H:i"),
            );
            $this->TanggapanModel->create($tanggapan_data);
            return redirect()->to('/admin/pengaduan/');
        }
        else
        {
            return redirect()->to('/admin/pengaduan/');
        }
    }
}   