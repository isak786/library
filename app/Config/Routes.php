<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');  // Home page (or any landing page)
$routes->get('/login', 'AuthController::login');  // Login page
$routes->post('/auth/processLogin', 'AuthController::processLogin');  // Process login
$routes->get('/register', 'AuthController::register');  // Update this to use register instead of signup
$routes->post('/auth/processSignup', 'AuthController::processSignup');
$routes->get('/logout', 'AuthController::logout');  // Logout page
$routes->get('/dashboard', 'DashboardController::index');  // Dashboard page (after login)


// $route['default_controller'] = 'Home';
