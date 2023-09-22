<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/main', 'StudentController::student');
$routes->post('/create', 'StudentController::create');
$routes->get('/delete/(:any)', 'StudentController::delete/$1');
$routes->get('/edit/(:any)', 'StudentController::edit/$1');
