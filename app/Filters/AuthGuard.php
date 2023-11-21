<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Adminmenu;

class AuthGuard implements FilterInterface
{
    public function __construct()
    {
        $this->uri = \Config\Services::uri();
        $this->Adminmenu = new Adminmenu();
    }

    public function before(RequestInterface $request, $arguments = null)
    {
        if(!session('isLogin'))
        {
            session()->setFlashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Silahkan Login Terlebih Dahulu
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            return redirect()->to('/login');
        }
        else
        {
            $menu = $this->uri->getSegment(1);

            if($menu == 'admin' && !session('level'))
            {
                return redirect()->to('/blocked');
            }
            else
            {
                $StaffMenu = $this->uri->getSegment(2);
                $AuthorizedMenu = $this->Adminmenu->where('url',$StaffMenu)->first() ?? null;

                if(session('level') ==  'petugas' && $AuthorizedMenu == null)
                {
                    return redirect()->to('/blocked');
                }
            }

        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}