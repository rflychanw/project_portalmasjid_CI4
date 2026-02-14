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
