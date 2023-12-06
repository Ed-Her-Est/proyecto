<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
/**login */
$routes->get('/login/agregar','Login::agregar');
$routes->get('auth/login', 'Auth::login');
$routes->post('auth/processLogin', 'Auth::processLogin');
$routes->get('auth/logout', 'Auth::logout');
$routes->get('/usuario','Usuario::index');
/**uso de método get */
$routes->get('/usuario/login','Usuario::login');
$routes->get('/usuario/create_account', 'Usuario::createAccount');
$routes->get('/usuario/mostrar','Usuario::mostrar');
$routes->get('/usuario/agregar','Usuario::agregar');
$routes->get('/usuario/editar/(:num)','Usuario::editar/$1');
$routes->get('/usuario/buscar/','Usuario::buscar');
$routes->get('/usuario/delete/(:num)','Usuario::delete/$1'); 
/**uso de método post*/
$routes->post('/usuario/insert','Usuario::insert'); 
$routes->post('/usuario/update','Usuario::update'); 

/**MATERIA*/
$routes->get('/cuenta','Cuenta::index');

$routes->get('/cuenta/mostrar','Cuenta::mostrar');
$routes->get('/cuenta/agregar','Cuenta::agregar');
$routes->get('/cuenta/editar/(:num)','Cuenta::editar/$1');
$routes->get('/cuenta/buscar/','Cuenta::buscar');
$routes->get('/cuenta/delete/(:num)','Cuenta::delete/$1'); 

$routes->post('/cuenta/insert','Cuenta::insert'); 
$routes->post('/cuenta/update','Cuenta::update'); 

$routes->get('/citas','Citas::index');
$routes->get('/citas/mostrar','Citas::mostrar');
$routes->get('/citas/agregar','Citas::agregar');
$routes->get('/citas/editar/(:num)','Citas::editar/$1');
$routes->get('/citas/buscar/','Citas::buscar');
$routes->get('/citas/delete/(:num)','Citas::delete/$1'); 
$routes->post('/citas/insert','Citas::insert'); 
$routes->post('/citas/update','Citas::update'); 

