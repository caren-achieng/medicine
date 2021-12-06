<?php

namespace Config;

// Create a new instance of our RouteCollection class.
use App\Controllers\UsersController;

$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('UsersController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//custom routes
$routes->get('/', 'UserLogin::index');
$routes->get('/', 'Home::index');
$routes->get('/register', 'UsersController::registerusers');
$routes->get('/spouse', 'UsersController::registerspouses');
$routes->post('/register', 'UsersController::storeusers');
$routes->post('/registerspouse', 'UsersController::storespouses');
$routes->get('/nextofkin', 'UsersController::registernok');
$routes->post('/registernok', 'UsersController::storenextofkin');
$routes->get('/emergency', 'UsersController::registeremergency');
$routes->post('/registeremergency', 'UsersController::storeemergency');
$routes->get('/password', 'UsersController::registerpassword');
$routes->post('/registerpassword', 'UsersController::storepass');
$routes->get('/login', 'UserLogin::index');
$routes->get('/leaveapplication', 'LeaveController::index');
$routes->get('/dashboard', 'AdminDashboard::initialize_dashboard');
$routes->get('/users', 'AdminDashboard::users');
$routes->get('/user', 'AdminDashboard::user');
$routes->get('/ReadEmployees', 'AdminsController::ReadEmployees');
$routes->get('/ReadEmployees/UpdateEmployees/(:num)','AdminsController::edit/$1');
$routes->post('/ReadEmployees/update/(:num)','AdminsController::update/$1');
$routes->get('/ReadEmployees/DeleteEmployees/(:num)','AdminsController::delete/$1');
$routes->post('/UpdateEmployee', 'AdminsController::update');
$routes->post('/approval', 'Leave_approval::leave_approval');
$routes->post('/Update', 'UsersController::updateuser');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
