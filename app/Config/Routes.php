<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Pages::welcome');
$routes->get('/tasks', 'Pages::tasks');
$routes->get('/profile', 'Pages::profile');
$routes->get('/about', 'Pages::about');

$routes->get('/login', 'Auth::login');
$routes->post('/authenticate', 'Auth::authenticate');
$routes->get('/logout', 'Auth::logout');

$routes->get('/tasks/new', 'Pages::newTask');
$routes->post('/tasks/create', 'Pages::createTask');

$routes->get('/tasks/edit/(:num)', 'Pages::editTask/$1');
$routes->post('/tasks/update/(:num)', 'Pages::updateTask/$1');

$routes->get('/tasks/delete/(:num)', 'Pages::deleteTask/$1');