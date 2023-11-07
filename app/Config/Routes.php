<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/','Home::index');
$routes->get('/laporan','Home::laporan');
$routes->get('/login','Home::login');
$routes->get('/register','Home::register');
$routes->get('/user','Home::user');

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