<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

// Guest router
$routes->get('/', 'Auth::index');

// User router
$routes->group('user', static function ($routes) {
    $routes->addRedirect('', 'user/home');

    $routes->get('home', 'UserController::index');
});

// Admin router
$routes->group('admin', static function ($routes) {
    $routes->addRedirect('', 'admin/dashboard');

    $routes->get('dashboard', 'AdminController::index');
});