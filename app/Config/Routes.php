<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

// Atur halaman utama ke daftar pendaftaran
$routes->get('/', 'Courses::index');

// Rute untuk menampilkan semua pendaftaran (Read)
$routes->get('/courses', 'Courses::index');

// Rute untuk proses Tambah Data (Create)
$routes->get('/courses/create', 'Courses::create');
$routes->post('/courses/store', 'Courses::store');

// Rute untuk proses Edit Data (Update)
$routes->get('/courses/edit/(:num)', 'Courses::edit/$1');
$routes->post('/courses/update/(:num)', 'Courses::update/$1');

// Rute untuk proses Hapus Data (Delete)
$routes->get('/courses/delete/(:num)', 'Courses::delete/$1');