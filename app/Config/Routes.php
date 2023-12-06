<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/servicios', 'Servicios::index');
 $routes->get('/contacto', 'Contacto::index');
 $routes->get('informaciontotal', 'InformacionTotal::mostrar');
 $routes->get('informaciontotal/mostrar', 'InformacionTotal::mostrar');
 /* USUARIO **/
$routes->get('/usuario', 'Usuario::index');
$routes->get('/usuario/login', 'Usuario::login');
$routes->get('/usuario/mostrar', 'Usuario::mostrar');
$routes->post('/usuario/mostrar', 'Usuario::mostrar');
$routes->post('/usuario/mostrar', 'Usuario::mostrar');
$routes->get('/usuario/agregar', 'Usuario::agregar');
$routes->get('/usuario/editar/(:num)', 'Usuario::editar/$1');
$routes->get('/usuario/buscar', 'Usuario::buscar');
$routes->get('/usuario/delete/(:num)', 'Usuario::delete/$1');
$routes->post('/usuario/delete/(:num)', 'Usuario::delete/$1');
$routes->post('/usuario/insert', 'Usuario::insert');
$routes->post('/usuario/update', 'Usuario::update');
$routes->delete('usuario/delete/(:num)', 'Usuario::delete/$1');

/* FISIOTERAPEUTA* */
$routes->get('/fisioterapeuta', 'Fisioterapeuta::index');
$routes->get('/fisioterapeuta/login', 'Fisioterapeuta::login');
$routes->get('/fisioterapeuta/mostrar', 'Fisioterapeuta::mostrar');
$routes->post('/fisioterapeuta/mostrar', 'Fisioterapeuta::mostrar');
$routes->post('/fisioterapeuta/mostrar', 'Fisioterapeuta::mostrar');
$routes->get('/fisioterapeuta/agregar', 'Fisioterapeuta::agregar');
$routes->get('/fisioterapeuta/editar/(:num)', 'Fisioterapeuta::editar/$1');
$routes->get('/fisioterapeuta/buscar', 'Fisioterapeuta::buscar');
$routes->get('/fisioterapeuta/delete/(:num)', 'Fisioterapeuta::delete/$1');
$routes->post('/fisioterapeuta/delete/(:num)', 'Fisioterapeuta::delete/$1');
$routes->post('/fisioterapeuta/insert', 'Fisioterapeuta::insert');
$routes->post('/fisioterapeuta/update', 'Fisioterapeuta::update');
$routes->delete('/fisioterapeuta/delete/(:num)', 'Fisioterapeuta::delete/$1');

/* PACIENTE* */
$routes->get('/paciente', 'Paciente::index');
$routes->get('/paciente/login', 'Paciente::login');
$routes->get('/paciente/mostrar', 'Paciente::mostrar');
$routes->post('/paciente/mostrar', 'Paciente::mostrar');
$routes->post('/paciente/mostrar', 'Paciente::mostrar');
$routes->get('/paciente/agregar', 'Paciente::agregar');
$routes->post('/paciente/agregar', 'Paciente::agregar');
$routes->get('/paciente/editar/(:num)', 'Paciente::editar/$1');
$routes->get('/paciente/buscar', 'Paciente::buscar');
$routes->get('/paciente/delete/(:num)', 'Paciente::delete/$1');
$routes->post('/paciente/delete/(:num)', 'Paciente::delete/$1');
$routes->post('/paciente/insert', 'Paciente::insert');
$routes->post('/paciente/update', 'Paciente::update');
$routes->delete('/paciente/delete/(:num)', 'Paciente::delete/$1');

/* CONSULTORIO */
$routes->get('/consultorio', 'Consultorio::index');
$routes->get('/consultorio/login', 'Consultorio::login');
$routes->get('/consultorio/mostrar', 'Consultorio::mostrar');
$routes->post('/consultorio/mostrar', 'Consultorio::mostrar');
$routes->post('/consultorio/mostrar', 'Consultorio::mostrar');
$routes->get('/consultorio/agregar', 'Consultorio::agregar');
$routes->get('/consultorio/editar/(:num)', 'Consultorio::editar/$1');
$routes->get('/consultorio/buscar', 'Consultorio::buscar');
$routes->get('/consultorio/delete/(:num)', 'Consultorio::delete/$1');
$routes->post('/consultorio/delete/(:num)', 'Consultorio::delete/$1');
$routes->post('/consultorio/insert', 'Consultorio::insert');
$routes->post('/consultorio/update', 'Consultorio::update');
$routes->delete('/consultorio/delete/(:num)', 'Consultorio::delete/$1');

/* DATOS GENERALES */
$routes->get('/datosgenerales', 'DatosGenerales::index');
$routes->get('/datosgenerales/mostrar', 'DatosGenerales::mostrar');
$routes->post('/datosgenerales/mostrar', 'DatosGenerales::mostrar');
$routes->get('/datosgenerales/agregar', 'DatosGenerales::agregar');
$routes->get('/datosgenerales/editar/(:num)', 'DatosGenerales::editar/$1');
$routes->get('/datosgenerales/buscar', 'DatosGenerales::buscar');
$routes->get('/datosgenerales/delete/(:num)', 'DatosGenerales::delete/$1');
$routes->post('/datosgenerales/delete/(:num)', 'DatosGenerales::delete/$1');
$routes->post('/datosgenerales/insert', 'DatosGenerales::insert');
$routes->post('/datosgenerales/update', 'DatosGenerales::update');
$routes->delete('/datosgenerales/delete/(:num)', 'DatosGenerales::delete/$1');

/* SIGNOS VITALES */
$routes->get('/signosvitales', 'SignosVitales::index');
$routes->get('/signosvitales/mostrar', 'SignosVitales::mostrar');
$routes->post('/signosvitales/mostrar', 'SignosVitales::mostrar');
$routes->get('/signosvitales/agregar', 'SignosVitales::agregar');
$routes->get('/signosvitales/editar/(:num)', 'SignosVitales::editar/$1');
$routes->get('/signosvitales/buscar', 'SignosVitales::buscar');
$routes->get('/signosvitales/delete/(:num)', 'SignosVitales::delete/$1');
$routes->post('/signosvitales/delete/(:num)', 'SignosVitales::delete/$1');
$routes->post('/signosvitales/insert', 'SignosVitales::insert');
$routes->post('/signosvitales/update', 'SignosVitales::update');
$routes->delete('/signosvitales/delete/(:num)', 'SignosVitales::delete/$1');

/* APHF */
$routes->get('/aphf', 'Aphf::index');
$routes->get('/aphf/mostrar', 'Aphf::mostrar');
$routes->post('/aphf/mostrar', 'Aphf::mostrar');
$routes->get('/aphf/agregar', 'Aphf::agregar');
$routes->get('/aphf/editar/(:num)', 'Aphf::editar/$1');
$routes->get('/aphf/buscar', 'Aphf::buscar');
$routes->get('/aphf/delete/(:num)', 'Aphf::delete/$1');
$routes->post('/aphf/delete/(:num)', 'Aphf::delete/$1');
$routes->post('/aphf/insert', 'Aphf::insert');
$routes->post('/aphf/update', 'Aphf::update');
$routes->delete('/aphf/delete/(:num)', 'Aphf::delete/$1');

/* EXPLORACION FISICA */
$routes->get('/exploracionfisica', 'ExploracionFisica::index');
$routes->get('/exploracionfisica/mostrar', 'ExploracionFisica::mostrar');
$routes->post('/exploracionfisica/mostrar', 'ExploracionFisica::mostrar');
$routes->get('/exploracionfisica/agregar', 'ExploracionFisica::agregar');
$routes->get('/exploracionfisica/editar/(:num)', 'ExploracionFisica::editar/$1');
$routes->get('/exploracionfisica/buscar', 'ExploracionFisica::buscar');
$routes->get('/exploracionfisica/delete/(:num)', 'ExploracionFisica::delete/$1');
$routes->post('/exploracionfisica/delete/(:num)', 'ExploracionFisica::delete/$1');
$routes->post('/exploracionfisica/insert', 'ExploracionFisica::insert');
$routes->post('/exploracionfisica/update', 'ExploracionFisica::update');
$routes->delete('/exploracionfisica/delete/(:num)', 'ExploracionFisica::delete/$1');


/* CONTROL */
$routes->get('/control', 'Control::index');
$routes->get('/control/mostrar', 'Control::mostrar');
$routes->post('/control/mostrar', 'Control::mostrar');
$routes->get('/control/agregar', 'Control::agregar');
$routes->get('/control/editar/(:num)', 'Control::editar/$1');
$routes->get('/control/buscar', 'Control::buscar');
$routes->get('/control/delete/(:num)', 'Control::delete/$1');
$routes->post('/control/delete/(:num)', 'Control::delete/$1');
$routes->post('/control/insert', 'Control::insert');
$routes->post('/control/update', 'Control::update');
$routes->delete('/control/delete/(:num)', 'Control::delete/$1');


    $routes->get('/expediente', 'Expediente::index');
    $routes->get('/expediente/mostrar', 'Expediente::mostrar');
    $routes->post('/expediente/mostrar', 'Expediente::mostrar');
    $routes->get('/expediente/agregar', 'Expediente::agregar');
    $routes->get('/expediente/editar/(:num)', 'Expediente::editar/$1');
    $routes->get('/expediente/buscar', 'Expediente::buscar');
    $routes->get('/expediente/delete/(:num)', 'Expediente::delete/$1');
    $routes->post('/expediente/delete/(:num)', 'Expediente::delete/$1');
    $routes->post('/expediente/insert', 'Expediente::insert');
    $routes->post('/expediente/update', 'Expediente::update');
    $routes->delete('/expediente/delete/(:num)', 'Expediente::delete/$1');


/*CITAS**/
$routes->get('/cita', 'Cita::index');
$routes->get('/cita/mostrar', 'Cita::mostrar');
$routes->post('/cita/mostrar', 'Cita::mostrar');
$routes->get('/cita/agregar', 'Cita::agregar');
$routes->get('/cita/editar/(:num)', 'Cita::editar/$1');
$routes->get('/cita/buscar', 'Cita::buscar');
$routes->get('/cita/delete/(:num)', 'Cita::delete/$1');
$routes->post('/cita/delete/(:num)', 'Cita::delete/$1');
$routes->post('/cita/insert', 'Cita::insert');
$routes->post('/cita/update', 'Cita::update');
$routes->delete('/cita/delete/(:num)', 'Cita::delete/$1');

$routes->get('/registro', 'Register::index',['as'=>'register']);
$routes->post('/store', 'Register::store');
$routes->get('/login', 'Login::index',['as'=>'login']);
$routes->post('/check', 'Login::signin',['as'=>'signin']);

$routes->get('/usuario/login','UserController::index');
$routes->post('/usuario/login','UserController::index');
