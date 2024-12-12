<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/addtocart', 'addtocart::addtocart');
$routes->get('/login', 'AuthController::login');
$routes->get('/register', 'AuthController::register');
$routes->get('/guest','GuestController::index');
$routes->get('/accountmanagement','AcManagementController::index');


$routes->get('/inventory','InventoryController::index');
$routes->get('/contracts','ContractsController::index');
$routes->get('/branches','BranchesController::index');
$routes->get('/branchlibraries','BranchLibrarian::index');
