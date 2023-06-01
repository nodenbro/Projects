<?php

/**
 * Front controller
 */

/**
 * Composer
 */
require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '/Bootstrap.php';


/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


/**
 * Routing
 */
$router = new Core\Router();

// Add the routes


// Home routes
$router->add('', ['controller' => 'HomeController', 'action' => 'index']);
$router->add('home', ['controller' => 'HomeController', 'action' => 'index']);

//Application routes
$router->add('apply', ['controller' => 'ApplicationController', 'action' => 'apply']);
$router->add('apply-success', ['controller' => 'ApplicationController', 'action' => 'store']);
$router->add('delete-application', ['controller' => 'ApplicationController', 'action' => 'delete']);


// Company routes
$router->add('companies', ['controller' => 'CompanyController', 'action' => 'index']);
$router->add('register-company', ['controller' => 'CompanyController', 'action' => 'create']);
$router->add('store-company', ['controller' => 'CompanyController', 'action' => 'store']);
$router->add('edit-company', ['controller' => 'CompanyController', 'action' => 'edit']);
$router->add('update-company', ['controller' => 'CompanyController', 'action' => 'update']);
$router->add('delete-company', ['controller' => 'CompanyController', 'action' => 'delete']);
$router->add('applications', ['controller' => 'CompanyController', 'action' => 'applications']);


// User & Login routes
$router->add('login', ['controller' => 'LoginController', 'action' => 'index']);
$router->add('login-success', ['controller' => 'LoginController', 'action' => 'login']);
$router->add('sign-up', ['controller' => 'UserController', 'action' => 'create']);
$router->add('sign-out', ['controller' => 'LoginController', 'action' => 'logout']);
$router->add('store-user', ['controller' => 'UserController', 'action' => 'store']);


//Profile routes
$router->add('profile', ['controller' => 'ProfileController', 'action' => 'index']);
$router->add('edit-user', ['controller' => 'ProfileController', 'action' => 'edit']);
$router->add('update-profile', ['controller' => 'ProfileController', 'action' => 'update']);
$router->add('edit-role', ['controller' => 'ProfileController', 'action' => 'roleIndex']);
$router->add('update-role', ['controller' => 'ProfileController', 'action' => 'roleEdit']);
$router->add('view-profile', ['controller' => 'ProfileController', 'action' => 'viewProfileIndex']);


$router->add('profile-pic-index', ['controller' => 'ProfileController', 'action' => 'uploadIndex']);
$router->add('profile-pic-test', ['controller' => 'ProfileController', 'action' => 'uploadImage']);


//Feedback Route
$router->add('feedback', ['controller' => 'FeedbackController', 'action' => 'index']);
$router->add('store-feedback', ['controller' => 'FeedbackController', 'action' => 'store']);


$router->add('download', ['controller' => 'DownloadController', 'action' => 'index']);


//Company Login routes
$router->add('company-login', ['controller' => 'LoginController', 'action' => 'cmpIndex']);
$router->add('logged-in', ['controller' => 'LoginController', 'action' => 'companyLogin']);
$router->add('company-logout', ['controller' => 'LoginController', 'action' => 'cmpLogout']);


//Applications and Job Listings
$router->add('jobs', ['controller' => 'ApplicationController', 'action' => 'index']);
$router->add('apply', ['controller' => 'ApplicationController', 'action' => 'apply']);
$router->add('list-job', ['controller' => 'ListingController', 'action' => 'listing']);
$router->add('job-listed', ['controller' => 'ListingController', 'action' => 'store']);


// The Project routes
$router->add('projects', ['controller' => 'ProjectController', 'action' => 'index']);
$router->add('add-project', ['controller' => 'ProjectController', 'action' => 'create']);
$router->add('store-project', ['controller' => 'ProjectController', 'action' => 'store']);
$router->add('edit-project', ['controller' => 'ProjectController', 'action' => 'edit']);
$router->add('update-project', ['controller' => 'ProjectController', 'action' => 'update']);
$router->add('delete-project', ['controller' => 'ProjectController', 'action' => 'delete']);


// About route
$router->add('about', ['controller' => 'AboutController', 'action' => 'index']);


// Reviews route
$router->add('reviews', ['controller' => 'ReviewController', 'action' => 'index']);


$router->dispatch($_SERVER['QUERY_STRING']);
