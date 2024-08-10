<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/category', 'Home::category');
$routes->get('/product', 'Home::product');
$routes->get('/search', 'Home::search');
$routes->get('/contact', 'Home::contact');
$routes->post('/post_contact', 'Home::contact_post');

$admin_routes = [
    'admin' => 'Admin::home_content',
    'admin/home/view_add_edit_home_content' => 'Admin::view_add_edit_home_content',
    'admin/delete_home' => 'Admin::delete_home',
    'admin/products' => 'Admin::products',
    'admin/products/add_edit_product' => 'Admin::add_edit_product',
    'admin/delete_product' => 'Admin::delete_product',
    'admin/categories' => 'Admin::categories',
    'admin/delete_category' => 'Admin::delete_category',
    'admin/categories/add_edit_categories' => 'Admin::add_edit_categories',
    'admin/banner' => 'Admin::banner',
    'admin/banner/banner_add_edit_view' => 'Admin::banner_add_edit_view',
    'admin/delete_banner' => 'Admin::delete_banner',
    'admin/contacts' => 'Admin::contacts'
];

$routes->post('admin/insert_update_product', 'Admin::insert_update_product');
$routes->post('admin/insert_update_categories', 'Admin::insert_update_categories');
$routes->post('admin/add_edit_home_content_post', 'Admin::add_edit_home_content_post');
$routes->post('admin/banner_add_edit_post', 'Admin::banner_add_edit_post');

$routes->map($admin_routes);
