<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// To /app/Controllers/Home.php
$routes->get('/', 'Home::index');
// To /app/Controllers/ProductDetails.php
$routes->get('/product/view/(:segment)', 'ProductDetails::product/$1');
