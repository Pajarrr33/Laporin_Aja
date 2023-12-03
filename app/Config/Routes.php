<?php

use App\Controllers\Aturakun;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/','Home::index');

$routes->get('/logout', 'Auth::logout');
$routes->get('/login','Home::login');
$routes->get('/register','Home::register');

$routes->get('/user','User::index');
$routes->post('/user/update/(:any)','User::update/$1');
$routes->get('/user/delete/(:any)','User::delete/$1');

$routes->get('/pengaduan','Pengaduan::index');
$routes->get('/pengaduan/detail/(:any)','Pengaduan::detail/$1');
$routes->post('/tulis_pengaduan','Pengaduan::pengaduan');
$routes->get('/pengaduan/update_pengaduan/(:any)' ,'Pengaduan::update/$1');
$routes->post('/tulis_pengaduan/(:any)','Pengaduan::update_pengaduan/$1');
$routes->get('/hapus_pengaduan/(:any)','Pengaduan::delete_pengaduan/$1');

$routes->get('/admin/dashboard/','Home::dashboard');

$routes->get('/admin/pengaduan/','Pengaduan::list_pengaduan');
$routes->get('/admin/pengaduan/(:any)','Pengaduan::pengaduan_satuan/$1');
$routes->get('/admin/terima_pengaduan/(:any)','Pengaduan::terima_pengaduan/$1');
$routes->post('/admin/tolak_pengaduan/(:any)','Pengaduan::tolak_pengaduan/$1');

$routes->post('/admin/tambah_tanggapan/(:any)','Tanggapan::tambah_tanggapan/$1');
$routes->post('/admin/update_tanggapan/(:any)','Tanggapan::update_tanggapan/$1');
$routes->get('/admin/delete_tanggapan/(:any)' ,'Tanggapan::delete_tanggapan/$1');

$routes->get('/admin/Laporan_Pengaduan/','Laporan::index');
$routes->post('/admin/BuatLaporan/','Laporan::Laporan');

$routes->get('/admin/access_menu','Admin::access_menu');
$routes->post('/admin/tambah_access_menu','Admin::tambah_access');
$routes->post('/admin/update_access_menu/(:any)','Admin::update_access/$1');
$routes->get('/admin/delete_access_menu/(:any)','Admin::delete_access/$1');

$routes->get('/admin/kelola-petugas', 'Aturakun::managementpetugas');

$routes->get('/admin/tambahakun','Aturakun::tambahPetugas');
$routes->post('/admin/savePetugas', 'Aturakun::savePetugas');

$routes->get('/admin/petugas/edit/(:num)', 'Aturakun::editPetugas/$1');
$routes->post('/admin/petugas/update/(:num)', 'Aturakun::updatePetugas/$1');
$routes->get('/admin/defaultpasspetugas/(:num)', 'Aturakun::defaultpassPetugas/$1');
$routes->get('/admin/petugas/delete/(:num)', 'Aturakun::deletePetugas/$1');

$routes->get('/admin/kelola-masyarakat', 'Aturakun::masyarakat');
$routes->post('/admin/masyarakat/reset-password/(:any)', 'Aturakun::reset_masyarakat/$1');

$routes->get('/admin/login', 'Admin::login');
$routes->post('/admin/valid_login', 'Admin::valid_login');
$routes->get('/admin/logout', 'Admin::logout');
$routes->get('/auth/login', 'Auth::login');
$routes->post('/auth/valid_login', 'Auth::valid_login');
$routes->get('/auth/register', 'Auth::register');
$routes->post('/auth/valid_register', 'Auth::valid_register');
$routes->get('/masyarakat', 'Masyarakat::dashboard');
$routes->get('/admin', 'Admin::index');

$routes->get('/masyarakat/lihat', 'Masyarakat::lihat');
$routes->get('/masyarakat/new', 'Masyarakat::new');
$routes->post('/pengaduan/save', 'Pengaduan::save');

$routes->get('/blocked','Blocked::index');