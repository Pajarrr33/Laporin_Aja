<?php

namespace App\Controllers;

use App\Models\MasyarakatModel;
use App\Models\PetugasModel;

class Auth extends BaseController
{
    public function __construct()
    {
        //membuat masyarakat model untuk konek ke database 
        $this->masyarakatModel = new MasyarakatModel();

        $this->PetugasModel = new PetugasModel();

        //meload validation
        $this->validation = \Config\Services::validation();

        //meload session
        $this->session = \Config\Services::session();
    }

    public function login()
    {
        //menampilkan halaman login
        return view('auth/login');
    }

    public function register()
    {
        //menampilkan halaman register
        return view('auth/register');
    }

    public function valid_register()
    {
        //tangkap data dari form 
        $data = $this->request->getPost();

        //jalankan validasi
        $this->validation->run($data, 'register');

        //cek errornya
        $errors = $this->validation->getErrors();

        //jika ada error kembalikan ke halaman register
        if ($errors) {
            session()->setFlashdata('error', $errors);
            return redirect()->to('/register');
        }

        //jika tdk ada error 

        //buat salt
        $salt = uniqid('', true);

        //hash password digabung dengan salt
        $password = md5($data['password']) . $salt;

        //masukan data ke database
        $this->masyarakatModel->save([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => $password,
            'salt' => $salt,
        ]);

        //arahkan ke halaman login
        session()->setFlashdata('login', 'Anda berhasil mendaftar, silahkan login');
        return redirect()->to('/login');
    }

    public function valid_login()
    {
        //ambil data dari form
        $data = $this->request->getPost();

        //ambil data masyarakat di database yang usernamenya sama 
        $masyarakat = $this->masyarakatModel->where('username', $data['username'])->first();
        $masyarakat2 = $this->masyarakatModel->where('email', $data['username'])->first();
        $petugas = $this->PetugasModel->where('username',$data['username'])->first();

        //cek apakah username ditemukan
        if ($masyarakat) 
        {
            //cek password
            //jika salah arahkan lagi ke halaman login
            if ($masyarakat['password'] != md5($data['password']) . $masyarakat['salt']) {
                session()->setFlashdata('password', 'Password salah');
                return redirect()->to('/login');
            } 
            else 
            {
                    $this->session->set([
                        'username' => $masyarakat['username'],
                        'id' => $masyarakat['id_masyarakat'],
                        'isLogin' => true
                    ]);
                    return redirect()->to('/user');
            }
        } 
        elseif ($masyarakat2) 
        {
            //cek password
            //jika salah arahkan lagi ke halaman login
            if ($masyarakat2['password'] != md5($data['password']) . $masyarakat2['salt']) {
                session()->setFlashdata('password', 'Password salah');
                return redirect()->to('/login');
            } 
            else 
            {
                    $this->session->set([
                        'username' => $masyarakat2['username'],
                        'id' => $masyarakat2['id_masyarakat'],
                        'isLogin' => true
                    ]);
                    return redirect()->to('/user');
            }
        }
        elseif($petugas)
        {
            //cek password
            //jika salah arahkan lagi ke halaman login
            if ($petugas['password'] != md5($data['password']) . $petugas['salt']) {
                session()->setFlashdata('password', 'Password salah');
                return redirect()->to('/login');
            } 
            else 
            {
                    $this->session->set([
                        'username' => $petugas['username'],
                        'id' => $petugas['id_petugas'],
                        'level' => $petugas['level'],
                        'isLogin' => true
                    ]);
                    if($petugas['level'] == 'admin')
                    {
                        return redirect()->to('/admin/dashboard');
                    }
                    else
                    {
                        return redirect()->to('/admin/dashboard');
                    }
            }
        }
        else 
        {
            //jika username tidak ditemukan, balikkan ke halaman login
            session()->setFlashdata('username', 'Username tidak ditemukan');
            return redirect()->to('/auth/login');
        }
    }

    public function logout()
    {
        //hancurkan session 
        //balikan ke halaman login
        $this->session->destroy();
        return redirect()->to('/login');
    }
}
