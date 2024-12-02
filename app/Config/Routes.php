<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Public routes accessible by all users
$routes->get('/', 'Home::index');
$routes->get('/addtocart', 'addtocart::addtocart');
$routes->get('/login', 'AuthController::login');
$routes->get('/register', 'AuthController::register');

// Auth-related routes accessible by all users
$routes->post('/auth/processSignup', 'AuthController::processSignup');
$routes->post('/auth/processLogin', 'AuthController::processLogin');
$routes->get('/logout', 'AuthController::logout');

// Account management routes accessible by logged-in users
$routes->group('', ['filter' => 'auth'], function ($routes) {
    $routes->get('/auth/changePassword', 'AuthController::changePassword');
    $routes->post('/auth/processChangePassword', 'AuthController::processChangePassword');
    $routes->post('/auth/deleteAccount', 'AuthController::deleteAccount');
});

// Routes for specific roles
$routes->group('', ['filter' => 'role:admin'], function ($routes) {
    $routes->get('/inventory', 'InventoryController::index');
    $routes->get('/contracts', 'ContractsController::index');
    $routes->get('/branches', 'BranchesController::index');
    $routes->get('/branchlibraries', 'BranchLibrarian::index');
});
