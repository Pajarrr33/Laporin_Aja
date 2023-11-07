<?php

namespace App\Controllers;

use App\Models\PengaduanModel;

class Pengaduan extends BaseController
{

    protected $session;
    protected $pengaduanModel;
    public function __construct()
    {
        $this->session = session();
        $this->pengaduanModel = new PengaduanModel();
    }

    public function save()
    {

        if (!$this->session->has('isLogin')) {
            return redirect()->to('/masyarakat/login');
        }

        // validation
        if (!$this->validate([
            'isi_pengaduan' => [
                'rules' => 'required',
            ],
            'foto' => [
                'rules' => 'required',
            ]
        ])) {   
            $validation = \Config\Services::validation();
            return redirect()->to('/masyarakat/new')->withInput()-> with('validation', $validation);
        }

        $this->pengaduanModel->save([
            'isi_pengaduan' => $this->request->getVar('isi_pengaduan'),
            'foto' => $this->request->getVar('foto'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/masyarakat/new');
    }

    public function saveadmin()
    {

        if (!$this->session->has('isLogin')) {
            return redirect()->to('/masyarakat/login');
        }

        // validation
        if (!$this->validate([
            'isi_pengaduan' => [
                'rules' => 'required',
            ],
            'foto' => [
                'rules' => 'required',
            ]
        ])) {   
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/tambah/pengaduan')->withInput()-> with('validation', $validation);
        }

        $this->pengaduanModel->save([
            'isi_pengaduan' => $this->request->getVar('isi_pengaduan'),
            'foto' => $this->request->getVar('foto'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/admin');
    }

    public function delete($id)
    {

        if (!$this->session->has('isLogin')) {
            return redirect()->to('/masyarakat/login');
        }


        $this->pengaduanModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/admin');
    }

    public function edit($id)
    {

        if (!$this->session->has('isLogin')) {
            return redirect()->to('/masyarakat/login');
        }

        $data = [
            'title' => 'Edit Data Pengaduan',
            'validation' => \Config\Services::validation(),
            'pengaduan' => $this->pengaduanModel->getPengaduan($id)
        ];

        return view('admin/edit', $data);
    }

    public function update($id) {

        if (!$this->session->has('isLogin')) {
            return redirect()->to('/masyarakat/login');
        }

        // validation
        if (!$this->validate([
            'isi_pengaduan' => [
                'rules' => 'required',
            ],
            'foto' => [
                'rules' => 'required',
            ]
        ])) {   
            $validation = \Config\Services::validation();
            return redirect()->to('/pengaduan/edit/' . $id)->withInput()-> with('validation', $validation);
        }

        $this->pengaduanModel->save([
            'id' => $id,
            'isi_pengaduan' => $this->request->getVar('isi_pengaduan'),
            'foto' => $this->request->getVar('foto'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/admin');
    }

}
