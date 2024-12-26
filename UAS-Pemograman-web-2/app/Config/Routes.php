<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'pengunjung::index');

//CRUD pengunjung Admin Routes
$routes->get('pengunjung', 'pengunjung::index');
$routes->post('pengunjung/store', 'pengunjung::store');
$routes->get('pengunjung/edit/(:num)', 'pengunjung::edit/$1');
$routes->get('pengunjung/delete/(:num)', 'pengunjung::delete/$1');
$routes->post('pengunjung/update', 'pengunjung::update');

service('auth')->routes($routes);
