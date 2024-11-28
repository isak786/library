<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
<<<<<<< HEAD
$routes->get('/', 'Home::index');  // Home page (or any landing page)
$routes->get('/login', 'AuthController::login');  // Login page
$routes->post('/auth/processLogin', 'AuthController::processLogin');  // Process login
$routes->get('/register', 'AuthController::register');  // Update this to use register instead of signup
$routes->post('/auth/processSignup', 'AuthController::processSignup');
$routes->get('/logout', 'AuthController::logout');  // Logout page
$routes->get('/dashboard', 'DashboardController::index');  // Dashboard page (after login)


// $route['default_controller'] = 'Home';
=======
$routes->get('/', 'Home::index');
$routes->get('/login', 'AuthController::login');
$routes->get('/register', 'AuthController::register');


$routes->get('/inventory','InventoryController::index');
$routes->get('/contracts','ContractsController::index');
$routes->get('/branches','BranchesController::index');
$routes->get('/branchlibraries','BranchLibrarian::index');
>>>>>>> origin/Front-end-Branch---2
