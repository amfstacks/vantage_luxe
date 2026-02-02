<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// Admin group – protected later with filter
 $routes->get('admin/',                      'Admin\Dashboard::index');
  $routes->get('admin/properties',             'Admin\PropertyController::index');
    $routes->get('admin/properties/create',      'Admin\PropertyController::create');

// $routes->group('admin', ['filter' => 'auth:admin'], static function ($routes) {
//     $routes->get('/',                      'Admin\Dashboard::index');
//     $routes->get('properties',             'Admin\PropertyController::index');
//     $routes->get('properties/create',      'Admin\PropertyController::create');
//     $routes->post('properties/store',      'Admin\PropertyController::store');
//     $routes->get('properties/(:num)/edit', 'Admin\PropertyController::edit/$1');
//     $routes->post('properties/(:num)',     'Admin\PropertyController::update/$1');
//     $routes->post('properties/(:num)/delete', 'Admin\PropertyController::delete/$1');
// });
