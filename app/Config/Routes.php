<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/', 'Home::index');

$routes->get('/login', 'Auth\Auth::login');
$routes->post('/login', 'Auth\Auth::loginProcess');

$routes->get('/register', 'Auth\Auth::register');
$routes->post('/register', 'Auth\Auth::registerProcess');

$routes->get('/logout', 'Auth\Auth::logout');

$routes->group('admin', ['filter' => 'authAdmin'], function($routes){
    $routes->get('/', 'Admin\Dashboard::index');
});