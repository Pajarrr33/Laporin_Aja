<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/','Home::index');
$routes->get('/login','Home::login');
$routes->get('/register','Home::register');
$routes->get('/user','User::index');

$routes->get('/pengaduan','Pengaduan::index');
$routes->post('/tulis_pengaduan','Pengaduan::pengaduan');
$routes->get('/update_pengaduan/(:any)' ,'Pengaduan::update/$1');
$routes->post('/tulis_pengaduan/(:any)','Pengaduan::update_pengaduan/$1');

$routes->get('/admin/dashboard/','Home::dashboard');
$routes->post('/admin/savePetugas', 'Aturakun::savePetugas');

$routes->get('/admin/pengaduan/','Pengaduan::list_pengaduan');
$routes->get('/admin/pengaduan/(:any)','Pengaduan::pengaduan_satuan/$1');
$routes->get('/terima_pengaduan/(:any)','Pengaduan::terima_pengaduan/$1');
$routes->get('/tolak_pengaduan/(:any)','Pengaduan::tolak_pengaduan/$1');

$routes->post('/tambah_tanggapan/(:any)','Tanggapan::tambah_tanggapan/$1');
$routes->post('/update_tanggapan/(:any)','Tanggapan::update_tanggapan/$1');

$routes->get('/admin/tambahakun','Aturakun::tambahPetugas');
$routes->get('/admin/login', 'Admin::login');
$routes->post('/admin/valid_login', 'Admin::valid_login');
$routes->get('/admin/logout', 'Admin::logout');
$routes->get('/auth/login', 'Auth::login');
$routes->post('/auth/valid_login', 'Auth::valid_login');
$routes->get('/auth/register', 'Auth::register');
$routes->post('/auth/valid_register', 'Auth::valid_register');
$routes->get('/auth/logout', 'Auth::logout');
$routes->get('/masyarakat', 'Masyarakat::dashboard');
$routes->get('/admin', 'Admin::index');

$routes->get('/masyarakat/lihat', 'Masyarakat::lihat');
$routes->get('/masyarakat/new', 'Masyarakat::new');
$routes->post('/pengaduan/save', 'Pengaduan::save');
