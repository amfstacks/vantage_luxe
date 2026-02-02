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
    $routes->post('admin/properties/store',      'Admin\PropertyController::store');
    $routes->get('admin/amenities',              'Admin\AmenityController::index');
    $routes->get('admin/amenities/create',       'Admin\AmenityController::create');
    $routes->post('admin/amenities/store',       'Admin\AmenityController::store');
    $routes->get('admin/amenities/(:num)/edit',  'Admin\AmenityController::edit/$1');
    // $routes->post('amenities/(:num)/delete','Admin\AmenityController::delete/$1');
    

// $routes->group('admin', ['filter' => 'auth:admin'], static function ($routes) {
//     $routes->get('/',                      'Admin\Dashboard::index');
//     $routes->get('properties',             'Admin\PropertyController::index');
//     $routes->get('properties/create',      'Admin\PropertyController::create');
//     $routes->post('properties/store',      'Admin\PropertyController::store');
//     $routes->get('properties/(:num)/edit', 'Admin\PropertyController::edit/$1');
//     $routes->post('properties/(:num)',     'Admin\PropertyController::update/$1');
//     $routes->post('properties/(:num)/delete', 'Admin\PropertyController::delete/$1');
// $routes->get('amenities',              'Admin\AmenityController::index');
//     $routes->get('amenities/create',       'Admin\AmenityController::create');
//     $routes->post('amenities/store',       'Admin\AmenityController::store');
//     $routes->get('amenities/(:num)/edit',  'Admin\AmenityController::edit/$1');
//     $routes->post('amenities/(:num)',      'Admin\AmenityController::update/$1');
//     $routes->post('amenities/(:num)/delete','Admin\AmenityController::delete/$1');
// });
