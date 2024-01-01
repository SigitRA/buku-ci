<?php

use CodeIgniter\Router\RouteCollection;
use CodeIgniter\Router\RouteCollectionInterface;
use CodeIgniter\Router\RouteInterface;
use App\Controllers\BukuController;

$routes->get('/', 'BukuController::index');
$routes->get('daftar-buku', 'BukuController::index');
$routes->get('/tambah-buku', 'BukuController::tambahBukuForm');
$routes->post('/tambah-buku', 'BukuController::tambahBuku');

$routes->get('/edit-buku/(:num)', 'BukuController::editBukuForm/$1');
$routes->post('/update-buku/(:num)', 'BukuController::updateBuku/$1');

$routes->get('/hapus-buku/(:num)', 'BukuController::hapusBuku/$1');
