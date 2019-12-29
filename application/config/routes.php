<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['default_controller'] = 'MainController';
$route['home'] = 'MainController';

$route['destinations'] = 'MainController/destinations';
$route['about'] = 'MainController/about';
$route['contact'] = 'MainController/contact';
$route['adventure'] = 'MainController/adventure';
$route['luxury'] = 'MainController/luxury';
$route['knowledges'] = 'MainController/knowledges';
$route['shelf'] = 'MainController/shelf';
$route['contact'] = 'MainController/contact';
$route['contact_mail'] = 'Mail/contact_mail';
$route['login'] = 'MainController/login';
$route['dashboard'] = 'MainController/dashboard';
$route['dash_about'] = 'MainController/dash_about';
$route['dash_aboutUpdate'] = 'MainController/dash_aboutUpdate';
$route['dash_park'] = 'MainController/dash_park';
$route['manage_destination'] = 'MainController/dash_destination';
$route['dash_experience'] = 'MainController/dash_experience';
$route['dash_wildlife'] = 'MainController/dash_wildlife';
$route['homeUpdate'] = 'MainController/homeUpdate';
$route['authentication'] = 'MainController/authentication';

$route['destinations/Antananarivo'] = 'MainController/destination/Antananarivo';
$route['destinations/Toamasina'] = 'MainController/destination/Toamasina';
$route['destinations/Diego'] = 'MainController/destination/Diego';
$route['destinations/Toliara'] = 'MainController/destination/Toliara';
$route['destinations/FortDauphin'] = 'MainController/destination/FortDauphin';
$route['destinations/Morondava'] = 'MainController/destination/Morondava';

//knowledge
$route['knowledge/madagascar'] = 'MainController/knowledge/madagascar';
$route['knowledge/baobab'] = 'MainController/knowledge/baobab';
$route['knowledge/tsingy'] = 'MainController/knowledge/tsingy';
$route['knowledge/beaches'] = 'MainController/knowledge/beaches';
$route['knowledge/wildlife'] = 'MainController/knowledge/wildlife';
$route['knowledge/culture'] = 'MainController/knowledge/culture';
$route['knowledge/sport'] = 'MainController/knowledge/sport';

//mail
$route['adventure/mail'] = 'Mail/adventure_service_mail';
$route['luxury/mail'] = 'Mail/luxury_service_mail';
$route['postman'] = 'Mail/Postman';
