<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        
        return view('frontend/index');
    }

    public function register()
    {
        $data = array(
            'title' => 'Daftar'
        );
        return view('frontend/register',$data);
    }

    public function login()
    {
        $data = array(
            'title' => 'Masuk'
        );
        return view('frontend/login',$data);
    }

    public function dashboard()
    {
        $data = array(
            'title' => 'Dashboard'
        );
        return view('admin/index',$data);
    }
}
