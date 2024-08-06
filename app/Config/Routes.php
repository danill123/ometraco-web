<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/category', 'Home::category');
$routes->get('/product', 'Home::product');

$admin_routes = [
    'admin' => 'Admin::home_content',
    'admin/home/view_add_edit_home_content' => 'Admin::view_add_edit_home_content',
    'admin/products' => 'Admin::products',
    'admin/products/add_edit_product' => 'Admin::add_edit_product',
    'admin/categories' => 'Admin::categories',
    'admin/categories/add_edit_categories' => 'Admin::add_edit_categories'
];

$routes->post('admin/insert_update_product', 'Admin::insert_update_product');
$routes->post('admin/insert_update_categories', 'Admin::insert_update_categories');
$routes->post('admin/add_edit_home_content_post', 'Admin::add_edit_home_content_post');

$routes->map($admin_routes);
