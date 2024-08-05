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
    'admin/products/add_edit_product' => 'Admin::add_edit_product',
    'admin/categories' => 'Admin::categories',
    'admin/categories/add_edit_categories' => 'Admin::add_edit_categories'
];

$routes->post('admin/insert_update_product', 'Admin::insert_update_product');
$routes->post('admin/insert_update_categories', 'Admin::insert_update_categories');

$routes->map($admin_routes);
