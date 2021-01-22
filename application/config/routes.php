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
$route['default_controller'] = 'home';

$route['about'] = 'home/about';
$route['rekomendasi'] = 'home/rekomendasi';
$route['rekomendasi/add'] = 'home/rekomendasi_add';
$route['kategori'] = 'home/kategori';
$route['kategori/detail/(:any)'] = 'home/kategori_detail/$1';
$route['register'] = 'home/register';
$route['more'] = 'home/more';
$route['detailrestro'] = 'home/detailrestro';
$route['addRate'] = 'home/addRate';
$route['addComment'] = 'home/addComment';

//Owner
$route['owner'] = 'owner';
//Owner-kategori
$route['owner/kategori'] = 'owner/kategori';
$route['owner/kategori/add'] = 'owner/kategori_add';
$route['owner/kategori/del/(:any)'] = 'owner/kategori_del/$1';
$route['owner/kategori/edit/(:any)'] = 'owner/kategori_edit/$1';
//Owner-jalan
$route['owner/jalan'] = 'owner/jalan';
$route['owner/jalan/add'] = 'owner/jalan_add';
$route['owner/jalan/del/(:any)'] = 'owner/jalan_del/$1';
$route['owner/jalan/edit/(:any)'] = 'owner/jalan_edit/$1';
//Owner-kuliner
$route['owner/kuliner'] = 'owner/kuliner';
$route['owner/kuliner/add'] = 'owner/kuliner_add';
$route['owner/kuliner/del/(:any)'] = 'owner/kuliner_del/$1';
$route['owner/kuliner/edit/(:any)'] = 'owner/kuliner_edit/$1';
//Owner-rekomendasi
$route['owner/rekomendasi'] = 'owner/rekomendasi';
$route['owner/rekomendasi/del/(:any)'] = 'owner/rekomendasi_del/$1';
//Owner-ulasan
$route['owner/ulasan'] = 'owner/ulasan';
$route['owner/ulasan/add'] = 'owner/ulasan_add';
$route['owner/ulasan/del/(:any)'] = 'owner/ulasan_del/$1';
$route['owner/ulasan/edit/(:any)'] = 'owner/ulasan_edit/$1';
$route['owner/ulasan/print'] = 'owner/ulasan_print';
//Owner-User
$route['owner/user'] = 'owner/user';
$route['owner/user/add'] = 'owner/user_add';
$route['owner/user/del/(:any)'] = 'owner/user_del/$1';

$route['owner/user/edit/(:any)'] = 'owner/user_edit/$1';
$route['owner/user/changepassword/(:any)'] = 'owner/user_changepassword/$1';
//Owner-profile
$route['owner/profile'] = 'owner/profile';
$route['owner/profile/add'] = 'owner/profile_add';
$route['owner/profile/del/(:any)'] = 'owner/profile_del/$1';
$route['owner/profile/edit/(:any)'] = 'owner/profile_edit/$1';
$route['owner/profile/changepassword/(:any)'] = 'owner/profile_changepassword/$1';
//Auth
$route['login'] = 'auth';
$route['owner/login'] = 'auth/owner';
$route['owner/logout'] = 'auth/owner_logout';
$route['logout'] = 'auth/logout';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
