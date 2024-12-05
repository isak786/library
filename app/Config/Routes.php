<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Public routes
$routes->get('/', 'Home::index');
$routes->get('/login', 'AuthController::login');
$routes->get('/register', 'AuthController::register');

// Auth-related routes
$routes->post('/auth/processSignup', 'AuthController::processSignup');
$routes->post('/auth/processLogin', 'AuthController::processLogin');
$routes->get('/logout', 'AuthController::logout');

// Routes for logged-in users
$routes->get('/inventory', 'InventoryController::index');
$routes->get('/contracts', 'ContractsController::index');
$routes->get('/branches', 'BranchesController::index');
$routes->get('/branchlibraries', 'BranchLibrarian::index');

// User account management
$routes->get('/auth/changePassword', 'AuthController::changePassword');
$routes->post('/auth/processChangePassword', 'AuthController::processChangePassword');
$routes->post('/auth/deleteAccount', 'AuthController::deleteAccount');

$routes->get('/admin/dashboard', 'AuthController::adminDashboard');
$routes->get('/admin/deleteUser', 'AuthController::deleteUser');
$routes->get('/admin/editUser', 'AuthController::editUser');

$routes->get('/admin', 'Admin::index');
$routes->get('/admin/addUser', 'Admin::addUser');

$routes->post('/admin/saveUser', 'Admin::saveUser');
$routes->get('/admin/editUser/(:num)', 'Admin::editUser/$1');

$routes->post('/admin/updateUser/(:num)', 'Admin::updateUser/$1');
$routes->get('/admin/deleteUser/(:num)', 'Admin::deleteUser/$1');

