<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', 'HomeController@index');
$router->get('/projects', 'ProjectsController@index');
$router->get('/about', 'AboutController@index');
$router->get('/services', 'ServicesController@index');
$router->get('/contact', 'ContactController@index');
$router->post('/contact', 'ContactController@submit');
$router->get('/privacy', 'LegalController@privacy');
$router->get('/terms', 'LegalController@terms');
$router->get('/cookies', 'LegalController@cookies');
$router->get('/disclaimer', 'LegalController@disclaimer');

// Admin Auth
$router->get('/admin/login', 'Admin\AuthController@showLogin');
$router->post('/admin/login', 'Admin\AuthController@login');
$router->post('/admin/logout', 'Admin\AuthController@logout');

// Protected Admin Dashboard
$router->group(['middleware' => 'admin.auth', 'namespace' => 'Admin'], function ($router) {
    $router->get('/admin', 'DashboardController@index');
    $router->post('/admin/upload', 'DashboardController@uploadPartnerImage');
    $router->post('/admin/contacts/{id}/delete', 'DashboardController@deleteContact');
    $router->get('/admin/contacts', 'DashboardController@contacts');
    $router->get('/admin/contacts/export', 'DashboardController@exportContacts');
});

// SEO routes
$router->get('/sitemap.xml', 'SitemapController@index');
$router->get('/robots.txt', 'SitemapController@robots');

// Services Detail
$router->get('/services/{slug}', 'ServicesController@show');

// Case Studies
$router->get('/case-studies', 'CaseStudiesController@index');

// Newsletter
$router->post('/newsletter', 'NewsletterController@subscribe');
