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

// MAILBOX
$radapter->post('/services/mailbox/insert', fn (...$args) => MailboxService::insert(...$args));
// need to be logged
$radapter->post('/services/mailbox/select', fn () => middlewareSessionServicesLogin(), fn (...$args) => MailboxService::select(...$args));
$radapter->post('/services/mailbox/update', fn () => middlewareSessionServicesLogin(), fn (...$args) => MailboxService::update(...$args));
$radapter->post('/services/mailbox/delete', fn () => middlewareSessionServicesLogin(), fn (...$args) => MailboxService::delete(...$args));

// SERVICES
$radapter->post('/services/service/select', fn (...$args) => ServiceService::select(...$args));
$radapter->post('/services/service/select_join_projects', fn (...$args) => ServiceService::select_join_projects(...$args));
// need to be logged
$radapter->post('/services/service/insert', fn () => middlewareSessionServicesLogin(), fn (...$args) => ServiceService::insert(...$args));
$radapter->post('/services/service/update', fn () => middlewareSessionServicesLogin(), fn (...$args) => ServiceService::update(...$args));
$radapter->post('/services/service/delete', fn () => middlewareSessionServicesLogin(), fn (...$args) => ServiceService::delete(...$args));


// PROJECTS
$radapter->post('/services/project/select', fn (...$args) => ProjectService::select(...$args));
$radapter->getHTML('/services/projects/update_from_facebook/{app_token}/{token_renew_threshold}', '', fn (...$args) => ProjectService::update_from_facebook(...$args), null, false);

// QUALITIES
$radapter->post('/services/quality/select', fn (...$args) => QualityService::select(...$args));
// need to be logged
$radapter->post('/services/quality/insert', fn () => middlewareSessionServicesLogin(), fn (...$args) => QualityService::insert(...$args));
$radapter->post('/services/quality/update', fn () => middlewareSessionServicesLogin(), fn (...$args) => QualityService::update(...$args));
$radapter->post('/services/quality/delete', fn () => middlewareSessionServicesLogin(), fn (...$args) => QualityService::delete(...$args));


// CUSTOMERS
$radapter->post('/services/customer/select', fn (...$args) => CustomerService::select(...$args));
// need to be logged
$radapter->post('/services/customer/insert', fn () => middlewareSessionServicesLogin(), fn (...$args) => CustomerService::insert(...$args));
$radapter->post('/services/customer/update', fn () => middlewareSessionServicesLogin(), fn (...$args) => CustomerService::update(...$args));
$radapter->post('/services/customer/delete', fn () => middlewareSessionServicesLogin(), fn (...$args) => CustomerService::delete(...$args));




// TESTS
//http://localhost/constructora/services/projects/update_from_facebook/0x10ED43C718714eb63d5aA57B78B54704E256024E/600