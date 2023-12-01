<?php

namespace App\Controllers;

use App\Models\Adminmenu;
use App\Models\PetugasModel;

class admin extends BaseController
{

    protected $petugasModel;
    protected $session;
    protected $adminModel;
    public function __construct()
    {
        $this->petugasModel = new PetugasModel();
        $this->adminModel = new PetugasModel();
        $this->accessModel = new Adminmenu();
        $this->session = session();
    }

    public function index()
    {
        if(!$this->session->has('isLogin')){
            return redirect()->to('/admin/login');
        }

        $petugas = $this->adminModel->findAll();

        $data = [
            'title' => 'Data Petugas',
            'petugas' => $petugas
        ];

        return view('admin/index', $data);
    }

    public function login(): string
    {

        if(!$this->session->has('isLogin')){
            return redirect()->to('/admin/login');
        }

        $petugas = $this->adminModel->findAll();

        $data = [
            'title' => 'Data Petugas',
            'petugas' => $petugas
        ];

        return view('admin/login', $data);
    }

    public function tambah_petugas()
    {

        if(!$this->session->has('isLogin')){
            return redirect()->to('/admin/login');
        }

        $data = [
            'title' => 'Tambah Data Petugas',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/tambah', $data);
    }

    public function valid_login()
    {
        //ambil data dari form
        $data = $this->request->getPost();

        //ambil data admin di database yang usernamenya sama 
        $admin = $this->adminModel->where('username', $data['username'])->first();

        //cek apakah username ditemukan
        if ($admin) {
            //cek password
            //jika salah arahkan lagi ke halaman login
            if (md5($admin['password']) != md5($data['password']) . $admin['salt']) {
                session()->setFlashdata('password', 'Password salah');
                var_dump($admin['password']);
                var_dump(md5($data['password']) . $admin['salt']);
                die ;
                return redirect()->to('/admin/login');
            } else {
                //jika benar, arahkan user masuk ke aplikasi 
                if ($admin['level'] == "admin") {
                    //jika benar, buat session
                    $this->session->set([
                        'username' => $admin['username'],
                        'role' => $admin['level'],
                        'isLogin' => true
                    ]);
                    //arahkan ke halaman admin
                    return redirect()->to('/admin');
                } else {
                    //jika benar, buat session
                    $this->session->set([
                        'username' => $admin['username'],
                        'role' => $admin['level'],
                        'isLogin' => true
                    ]);
                    //arahkan ke halaman user
                    return redirect()->to('/admin');
                }
            }
        } else {
            //jika username tidak ditemukan, balikkan ke halaman login
            session()->setFlashdata('username', 'Username tidak ditemukan');
            return redirect()->to('/admin/login');
        }
    }

    public function logout()
    {
        //hancurkan session 
        //balikan ke halaman login
        $this->session->destroy();
        return redirect()->to('/admin/login');
    }

    public function access_menu()
    {
        $accessMenu = $this->accessModel->findAll();
        $data = [
            'accessmenu' => $accessMenu
        ];
        return view('admin/access_menu',$data);
    }

    public function tambah_access()
    {
        $data = $this->request->getPost();
        if($data)
        {
            $this->accessModel->insert($data);
        }
        return redirect()->to('/admin/access_menu');
    }

    public function update_access($id = null)
    {
        if($id)
        {
            $data = $this->request->getPost();
            if($data)
            {
                $this->accessModel->update_data($data,$id);
            }
        }
        
        return redirect()->to('/admin/access_menu');
    }

    public function delete_access($id = null)
    {
        if($id)
        {
            $this->accessModel->delete($id);
        }
        
        return redirect()->to('/admin/access_menu');
    }

    public function managementpetugas(): string
    {
        $nologin = [
            'title' => 'Login - Aplikasi Pengaduan Masyarakat'
        ];

        $petugas = $this->petugasModel->findAll();
        $data = [
            'title' => 'Data Akun Admin/Petugas',
            'petugas' => $petugas
        ];

        return view('admin/petugas', $data);
    }

    public function editPetugas($id)
    {
        $nologin = [
            'title' => 'Login - Aplikasi Pengaduan Masyarakat'
        ];

        $data = [
            'title' => 'Edit Data Kelahiran',
            'validation' => \Config\Services::validation(),
            'petugas' => $this->petugasModel->getPetugas($id)
        ];

        return view('admin/edit-petugas', $data);
    }

    public function updatePetugas($id)
    {
        $nologin = [
            'title' => 'Login - Aplikasi Pengaduan Masyarakat'
        ];

        if (!$this->validate([
            'nama_petugas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Petugas harus diisi'
                ]
            ],
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username harus diisi'
                ]
            ],
            'telepon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Telepon harus diisi'
                ]
            ],
            'level' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Level harus diisi'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('vall', $validation->listErrors());

            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $this->petugasModel->save([
            "id_petugas" => $id,
            "nama_petugas" => $this->request->getVar('nama_petugas'),
            "username" => $this->request->getVar('username'),
            "telepon" => $this->request->getVar('telepon'),
            "level" => $this->request->getVar('level'),
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diedit.');
        return redirect()->to('/admin/managementpetugas');
    }

    public function deletePetugas($id)
    {
        $nologin = [
            'title' => 'Login - Aplikasi Pengaduan Masyarakat'
        ];

        $this->petugasModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/admin/managementpetugas');
    }

    public function defaultpassPetugas($id)
    {
        $nologin = [
            'title' => 'Login - Aplikasi Pengaduan Masyarakat'
        ];

        $default = 'defaultpassword';
        $this->petugasModel->save([
            "id_petugas" => $id,
            "password" => md5($default),
        ]);
        session()->setFlashdata('pesan', 'Password berhasil diubah ke default.');
        return redirect()->to('/admin/managementpetugas');
    }

}
