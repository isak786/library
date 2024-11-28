<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/login', 'AuthController::login');
$routes->get('/register', 'AuthController::register');
$routes->post('/auth/processSignup', 'AuthController::processSignup');
$routes->post('/auth/processLogin', 'AuthController::processLogin');

$routes->get('/inventory','InventoryController::index');
$routes->get('/contracts','ContractsController::index');
$routes->get('/branches','BranchesController::index');
$routes->get('/branchlibraries','BranchLibrarian::index');

