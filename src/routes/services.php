<?php
$_TEMPLATE_SERVICES_PATH = './src/services/';
$radapter = new RAdapter($router, $_TEMPLATE_SERVICES_PATH, $_ENV['HTTP_DOMAIN']);

// CONFIGURATION
$radapter->getHTML('/services/configuration', 'configuration');

// USER
$radapter->post('/services/user/login', fn (...$args) => UserService::login(...$args));
$radapter->post('/services/user/logout', fn () => UserService::logout());
$radapter->post('/services/user/select', fn (...$args) => UserService::select(...$args));
$radapter->post('/services/user/insert', fn (...$args) => UserService::insert(...$args));
$radapter->post('/services/user/update', fn (...$args) => UserService::update(...$args));
$radapter->post('/services/user/delete', fn (...$args) => UserService::delete(...$args));

// SLIDER
$radapter->post('/services/slider/select', fn (...$args) => SliderService::select(...$args));
// need to be logged
$radapter->post('/services/slider/insert', fn () => middlewareSessionServicesLogin(), fn (...$args) => SliderService::insert(...$args));
$radapter->post('/services/slider/update', fn () => middlewareSessionServicesLogin(), fn (...$args) => SliderService::update(...$args));
$radapter->post('/services/slider/delete', fn () => middlewareSessionServicesLogin(), fn (...$args) => SliderService::delete(...$args));
