<?php

namespace App\Controllers;

use App\Models\PetugasModel;

class Aturakun extends BaseController
{

    protected $petugasModel;
    protected $validation;
    
    public function __construct()
    {
        $this->session = session();
        $this->petugasModel = new PetugasModel();
        $this->MasyarakatModel = new \App\Models\MasyarakatModel();
        $this->validation = \Config\Services::validation();
    }
    
    public function index()
    {
        //
    }

    public function managementpetugas(): string
    {
        $petugas = $this->petugasModel->findAll();
        $data = [
            'title' => 'Kelola Akun Admin / Petugas',
            'petugas' => $petugas
        ];

        return view('admin/petugas', $data);
    }

    public function tambahPetugas()
    {
        $data = [
            'title' => 'Tambah Petugas',
        ];

        return view('/admin/tambahakun', $data);
    }

    public function savePetugas()
    {
        //tangkap data dari form 
        $data = $this->request->getPost();

        //jalankan validasi
        $this->validation->run($data, 'tambah_petugas');

        //cek errornya
        $errors = $this->validation->getErrors();

        //jika ada error kembalikan ke halaman register
        if ($errors) {
            session()->setFlashdata('nama_petugas', $this->validation->getError('nama_petugas'));
            session()->setFlashdata('username', $this->validation->getError('username'));
            session()->setFlashdata('email', $this->validation->getError('email'));
            session()->setFlashdata('password', $this->validation->getError('password'));
            session()->setFlashdata('confirm', $this->validation->getError('confirm'));
            session()->setFlashdata('telepon', $this->validation->getError('telepon'));
            return redirect()->to('/admin/tambahakun');
        }

        //jika tdk ada error 
        //masukan data ke database
        if($data['level'] == "petugas")
        {
            $format = "PTS_";
        }
        else
        {
            $format = "ADM_";
        }

        //buat salt
        $salt = uniqid('', true);

        //hash password digabung dengan salt
        $password = md5($data['password']) . $salt;

        $this->petugasModel->save([
            'nama_petugas' => $data['nama_petugas'],
            'username' => $format . $data['username'],
            'email' => $data['email'] . "@laporinaja.my.id",
            'password' => $password,
            'telepon' => $data['telepon'],
            'level' => $data['level'],
            'salt' => $salt
        ]);

        //arahkan ke halaman login
        session()->setFlashdata('login', 'Anda berhasil mendaftar, silahkan login');
        return redirect()->to('/admin/kelola-petugas');
    }

    public function editPetugas($id)
    {
        $data = [
            'title' => 'Edit Data Kelahiran',
            'petugas' => $this->petugasModel->getPetugas($id)
        ];

        return view('admin/edit-petugas', $data);
    }

    public function updatePetugas($id)
    {
        //tangkap data dari form 
        $data = $this->request->getPost();

        //jalankan validasi
        $this->validation->run($data, 'update_petugas');

        //cek errornya
        $errors = $this->validation->getErrors();

        //jika ada error kembalikan ke halaman register
        if ($errors) {
            session()->setFlashdata('nama_petugas', $this->validation->getError('nama_petugas'));
            session()->setFlashdata('username', $this->validation->getError('username'));
            session()->setFlashdata('email', $this->validation->getError('email'));
            session()->setFlashdata('telepon', $this->validation->getError('telepon'));
            return redirect()->to('/admin/petugas/edit/' . $id);
        }

        if($data['level'] == "petugas")
        {
            $format = "PTS_";
        }
        else
        {
            $format = "ADM_";
        }

        $data = [
            'nama_petugas' => $data['nama_petugas'],
            'username' => $format . $data['username'],
            'email' => $data['email'] . "@laporinaja.my.id",    
            'telepon' => $data['telepon'],
            'level' => $data['level'],
        ];

        $this->petugasModel->update_data($id,$data);
        return redirect()->to('/admin/kelola-petugas');
    }

    public function deletePetugas($id)
    {
        $this->petugasModel->delete($id);
        return redirect()->to('/admin/kelola-petugas');
    }

    public function defaultpassPetugas($id)
    {
        //buat salt
        $salt = uniqid('', true);

        //hash password digabung dengan salt
        $password = md5('LaporinAja') . $salt;

        $data = [
            'password' => $password,
            'salt' => $salt
        ];

        $this->petugasModel->update_data($id,$data);
        return redirect()->to('/admin/kelola-petugas');
    }

    public function masyarakat()
    {
        $masyarakat = $this->MasyarakatModel->findAll();

        $data = [
            'masyarakat' => $masyarakat,
            'title' => 'Kelola Masyarakat'
        ];

        return view('admin/masyarakat',$data);
    }

    public function reset_masyarakat($id = null)
    {
        if($id == null)
        {
            return redirect()->to('/admin/kelola-masyarakat');
        }

        $validation = $this->validate([
            'password' => 'min_length[8]|alpha_numeric_punct',
            'confirm' => 'matches[password]'
        ]);

        if($validation = false)
        {
            return redirect()->to('/admin/kelola-masyarakat');
        }

        $post = $this->request->getPost();

        //buat salt
        $salt = uniqid('', true);

        //hash password digabung dengan salt
        $password = md5($post['password']) . $salt;

        $data = [
            'password' => $password,
            'salt' => $salt
        ];

        $this->MasyarakatModel->update_data($id,$data);
        return redirect()->to('/admin/kelola-masyarakat');
    }
    
}
