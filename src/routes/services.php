<?php
$_TEMPLATE_SERVICES_PATH = './src/services/';
$radapter = new RAdapter($router, $_TEMPLATE_SERVICES_PATH, $_ENV['HTTP_DOMAIN']);

// CONFIGURATION
$radapter->getHTML('/services/configuration', 'configuration');

// USER
$radapter->post('/services/user/login', fn (...$args) => UserService::login(...$args));
$radapter->post('/services/user/logout', fn () => UserService::logout());
// need to be logged
$radapter->post('/services/user/select', fn () => middlewareSessionServicesLogin(), fn (...$args) => UserService::select(...$args));
$radapter->post('/services/user/insert', fn () => middlewareSessionServicesLogin(), fn (...$args) => UserService::insert(...$args));
$radapter->post('/services/user/update', fn () => middlewareSessionServicesLogin(), fn (...$args) => UserService::update(...$args));
$radapter->post('/services/user/delete', fn () => middlewareSessionServicesLogin(), fn (...$args) => UserService::delete(...$args));

// SLIDER
$radapter->post('/services/slider/select', fn (...$args) => SliderService::select(...$args));
// need to be logged
$radapter->post('/services/slider/insert', fn () => middlewareSessionServicesLogin(), fn (...$args) => SliderService::insert(...$args));
$radapter->post('/services/slider/update', fn () => middlewareSessionServicesLogin(), fn (...$args) => SliderService::update(...$args));
$radapter->post('/services/slider/delete', fn () => middlewareSessionServicesLogin(), fn (...$args) => SliderService::delete(...$args));

// CONTACT
$radapter->post('/services/contact/select', fn (...$args) => ContactService::select(...$args));
// need to be logged
$radapter->post('/services/contact/insert', fn () => middlewareSessionServicesLogin(), fn (...$args) => ContactService::insert(...$args));
$radapter->post('/services/contact/update', fn () => middlewareSessionServicesLogin(), fn (...$args) => ContactService::update(...$args));
$radapter->post('/services/contact/delete', fn () => middlewareSessionServicesLogin(), fn (...$args) => ContactService::delete(...$args));
