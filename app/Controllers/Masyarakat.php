<?php

namespace App\Controllers;

use App\Models\PengaduanModel;

class Masyarakat extends BaseController
{

    protected $session;
    protected $pengaduanModel;
    public function __construct()
    {
        $this->session = session();
        $this->pengaduanModel = new PengaduanModel();
    }

    public function index()
    {
        echo 'TEST';
    }
    
    public function new()
    {
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        $data = [
            'title' => 'Tulis Laporan',
            'validation' => \Config\Services::validation()
        ];

        return view('masyarakat/new', $data);
    }

    public function lihat()
    {
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        $pengaduan = $this->pengaduanModel->findAll();

        $data = [
            'title' => 'Data Pengaduan',
            'pengaduan' => $pengaduan
        ];

        return view('masyarakat/lihat', $data);
    }

    public function dashboard()
    {
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        $data = [
            'title' => 'Dashboard',
        ];

        return view('layout/masyarakat', $data);
    }
    
}