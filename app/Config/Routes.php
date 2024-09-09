<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/input', 'UserController::inputname');
$routes->post('/inputuser', 'UserController::inputuser');
$routes->get('/getid', 'UserController::getid');
$routes->post('/chooseID', 'IdController::chooseID');
$routes->get('/ID/(:num)', 'IdController::ID/$1');
// $routes->get('ID/(:segment)/(:segment)', 'IdController::ID/$1/$2');
$routes->post('update/(:num)', 'IdController::update/$1');
