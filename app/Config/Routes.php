<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/profil', 'Home::profil');
$routes->get('/kegiatan', 'Home::kegiatan');
$routes->get('/kegiatan/(:segment)', 'Home::detailKegiatan/$1');
$routes->get('/jadwal-sholat', 'Home::jadwalSholat');
$routes->get('/kontak', 'Home::kontak');
$routes->get('/berita', 'Home::berita');
$routes->get('/berita/(:segment)', 'Home::detailBerita/$1');

// Admin Routes
$routes->group('admin', function ($routes) {
    $routes->get('dashboard', 'Admin::index');
    $routes->get('login', 'Admin::login');
    $routes->post('login', 'Admin::auth');
    $routes->get('infaq', 'Admin::infaq');
    $routes->get('jadwal', 'Admin::jadwal');
    $routes->get('berita', 'Admin::berita');
    $routes->get('berita/tambah', 'Admin::tambah_berita');
    $routes->get('kegiatan', 'Admin::kegiatan');
    $routes->get('kegiatan/tambah', 'Admin::tambah_kegiatan');
    $routes->get('/', 'Admin::index');
});
