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

/**---------------------------------------------------
 * PUBLIC ROUTES
 * ------------------------------------------------------*/
$route['home'] = 'home/index';
$route['about'] = 'about/index';
$route['contact'] = 'contact/index';
$route['package/(:num)/(:any)'] = 'package/index/$1/$2';
$route['sport-packages'] = 'sport_packages/index';
$route['sport-packages/(:num)'] = 'sport_packages/index/$1';
$route['ski-packages'] = 'ski_packages/index';
$route['ski-packages/(:num)'] = 'ski_packages/index/$1';
$route['pure-skiing'] = 'pureski/index';
$route['pure-sport'] = 'puresport/index';
$route['resort/(:num)/(:any)'] = 'resort/index/$1/$2';
$route['robinson-club'] = 'robinson/index';

/**---------------------------------------------------
 * CMS Routes
 * ------------------------------------------------------*/
$route['admin'] = 'admin_login/index';
$route['admin/login'] = 'admin_login/login';
$route['admin/dashboard'] = 'admin_dashboard/index';
$route['admin/sport-packages'] = 'admin_sport_packages/index';
$route['admin/sport-packages/(:num)'] = 'admin_sport_packages/index/$1';
$route['admin/ski-packages'] = 'admin_ski_packages/index';
$route['admin/ski-packages/(:num)'] = 'admin_ski_packages/index/$1';
$route['admin/robinson-packages'] = 'admin_robinson_packages/index';
$route['admin/robinson-packages/(:num)'] = 'admin_robinson_packages/index/$1';
$route['admin/resorts'] = 'admin_resorts/index';
$route['admin/countries'] = 'admin_countries/index';
$route['admin/users'] = 'admin_users/index';

/**---------------------------------------------------
 * DEFAULTS
 * ------------------------------------------------------*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
