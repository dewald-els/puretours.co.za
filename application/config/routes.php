<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

function public_route($_route) { return 'public/' . $_route; }
function cms_route($_route) { return 'cms/' . $_route; }

/**---------------------------------------------------
 * CMS ROUTES
 * ------------------------------------------------------*/
$route['admin'] = cms_route('dashboard');
$route['admin/dashboard'] = cms_route('dashboard');
$route['admin/pages'] = cms_route('pages/index');
// USERS
$route['admin/login'] = cms_route('login/index');
$route['admin/login-user'] = cms_route('login/login');
$route['admin/logout'] = cms_route('login/logout');
$route['admin/users'] = cms_route('users/index');
$route['admin/users/get_users'] = cms_route('users/get_users');
$route['admin/users/(:num)'] = cms_route('users/edit_user/$1');
// PAGES
$route['admin/pages/get_pages'] = cms_route('pages/get_pages');
$route['admin/pages/get-page-modules'] = cms_route('pages/get_page_modules');
$route['admin/pages/(:num)'] = cms_route('pages/edit_page/$1');
// MODULES
$route['admin/pages/module/(:num)/(:num)'] = cms_route('module/index/$1/$2');
// Packages
$route['admin/packages'] = cms_route('packages/index');


/**---------------------------------------------------
 * PUBLIC ROUTES
 * ------------------------------------------------------*/
$route['home'] = public_route('home/index');
$route['about'] = public_route('about/index');
$route['contact'] = public_route('contact/index');
$route['package/(:num)/(:any)'] = public_route('package/index/$1/$2');
$route['packages'] = public_route('packages/index');
$route['pure-skiing'] = public_route('pureski/index');
$route['pure-sport'] = public_route('puresport/index');
$route['resort/(:num)/(:any)'] = public_route('resort/index/$1/$2');
$route['robinson-club'] = public_route('robinson/index');

/**---------------------------------------------------
 * DEFAULTS
 * ------------------------------------------------------*/
$route['default_controller'] = public_route('home');
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
