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
        $this->validation = \Config\Services::validation();
    }
    
    public function index()
    {
        //
    }

    public function tambahPetugas()
    {
        $nologin = [
            'title' => 'Login - Aplikasi Pengaduan Masyarakat'
        ];
        if (!session()->get('isLoginAdmin')) {
            // Jika belum login, arahkan pengguna ke halaman login
            return view('/admin/tambahakun', $nologin);
        }

        $data = [
            'validation' => \Config\Services::validation(),
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
        $this->petugasModel->save([
            'nama_petugas' => $data['nama_petugas'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => $data['password'],
            'telepon' => $data['telepon'],
            'level' => $data['level'],


        ]);

        //arahkan ke halaman login
        session()->setFlashdata('login', 'Anda berhasil mendaftar, silahkan login');
        return redirect()->to('/admin/managementpetugas');
    }
}
