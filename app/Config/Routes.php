<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

// --- Landing Page --- 
$routes->get('/', 'HomeController::index');

// --- Authentication Routes --- 
$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::attemptLogin');
$routes->get('/logout', 'AuthController::logout');

// --- Registration routes --- 
$routes->get('register', 'AuthController::register');
$routes->post('register', 'AuthController::attemptRegister');

// --- User router --- 
$routes->group('user', static function ($routes) {
    $routes->addRedirect('', 'user/home');

    $routes->get('home', 'UserController::index');
});

// --- Admin router --- 
$routes->group('admin', static function ($routes) {
    $routes->addRedirect('', 'admin/dashboard');

    $routes->get('dashboard', 'AdminController::index');
});