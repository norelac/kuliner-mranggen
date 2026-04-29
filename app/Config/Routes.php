<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/login', 'Auth\Auth::login');
$routes->post('/login', 'Auth\Auth::loginProcess');

$routes->get('/register', 'Auth\Auth::register');
$routes->post('/register', 'Auth\Auth::registerProcess');

$routes->get('/logout', 'Auth\Auth::logout');

$routes->get('/admin', 'Admin\Dashboard::index');

$routes->get('/kuliner', 'Kuliner::index');

$routes->group('admin', ['filter' => 'authAdmin'], function ($routes) {
    $routes->get('/', 'Admin\Dashboard::index');
});

$routes->group('admin', ['filter' => 'authAdmin'], function ($routes) {

    $routes->get('/', 'Admin\Dashboard::index');

    $routes->get('kuliner', 'Admin\Kuliner::index');
    $routes->get('kuliner/create', 'Admin\Kuliner::create');
    $routes->post('kuliner/store', 'Admin\Kuliner::store');
    $routes->post('admin/kuliner/get-coordinate', 'Admin\Kuliner::getCoordinate');
});


$routes->get('admin/kategori', 'Admin\Kategori::index');
$routes->get('admin/kategori/create', 'Admin\Kategori::create');
$routes->post('admin/kategori/store', 'Admin\Kategori::store');
$routes->get('admin/kategori/delete/(:num)', 'Admin\Kategori::delete/$1');

$routes->get('admin/review', 'Admin\Review::index');
$routes->get('admin/review/delete/(:num)', 'Admin\Review::delete/$1');