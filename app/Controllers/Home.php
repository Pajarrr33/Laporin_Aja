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
        return view('frontend/register');
    }

    public function login()
    {
        return view('frontend/login');
    }

    public function laporan()
    {
        return view('frontend/laporan');
    }

    public function user()
    {
        return view('frontend/user');
    }
}
