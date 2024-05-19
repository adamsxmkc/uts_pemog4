<?php

use App\Controllers\Pegawai; // Menggunakan kontroler Pegawai
use App\Controllers\Dosen;
use App\Controllers\Mahasiswa;

$routes->setDefaultController('Home'); // Mengatur Home sebagai default controller
$routes->get('/', 'Home::index');

$routes->group('dosen', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Dosen::index');
    $routes->get('create', 'Dosen::create');
    $routes->post('store', 'Dosen::store');
    $routes->get('edit/(:num)', 'Dosen::edit/$1'); // Menambahkan parameter (:num) untuk ID dosen
    $routes->post('update/(:num)', 'Dosen::update/$1'); // Menambahkan parameter (:num) untuk ID dosen
    $routes->get('delete/(:num)', 'Dosen::delete/$1');
    $routes->get('view/(:num)', 'Dosen::view/$1');
});

$routes->group('mahasiswa', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Mahasiswa::index');
    $routes->get('create', 'Mahasiswa::create');
    $routes->post('store', 'Mahasiswa::store');
    $routes->get('edit/(:num)', 'Mahasiswa::edit/$1');
    $routes->post('update/(:num)', 'Mahasiswa::update/$1');
    $routes->get('delete/(:num)', 'Mahasiswa::delete/$1');
    $routes->get('view/(:num)', 'Mahasiswa::view/$1'); // Menambahkan parameter (:num) untuk ID mahasiswa
});

$routes->group('pegawai', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Pegawai::index'); // List all pegawai
    $routes->get('create', 'Pegawai::create'); // Form to create a new pegawai
    $routes->post('store', 'Pegawai::store'); // Store new pegawai
    $routes->get('edit/(:num)', 'Pegawai::edit/$1'); // Form to edit pegawai
    $routes->post('update/(:num)', 'Pegawai::update/$1'); // Update pegawai
    $routes->get('delete/(:num)', 'Pegawai::delete/$1'); // Delete pegawai
    $routes->get('view/(:num)', 'Pegawai::view/$1'); // View pegawai details
});
