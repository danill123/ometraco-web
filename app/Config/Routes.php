<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/products', 'Products::index');

$admin_routes = [
    'admin' => 'Admin::index',
    'admin/products' => 'Admin::products',
    'admin/add_product' => 'Admin::add_product',
    'admin/insert_update_product' => 'Admin::insert_update_product'
];

$routes->map($admin_routes);
