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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller']    = 'homepage';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;

// auth
$route['login']                 = 'Auth/login';
$route['register']              = 'Auth/register';
$route['register/action']       = 'Auth/register/register_action';

//admin
$route['admin']                 = 'API/Admin/product/index';
$route['upload']                = 'API/Admin/upload_file/index';
$route['galeri']                = 'API/Admin/upload_file/galeri_index';

// Produk route
$route['produk/(:any)']         = 'produk/detail/$1';
$route['pencarian']             = 'pencarian/index';
$route['pencarian-produk']      = 'pencarian/pencarian_produk';
$route['checkout']              = 'checkout/index';
$route['cart']                  = 'cart/index';
$route['checkout-2']            = 'checkout/checkout_2';
$route['produk/(:any)']         = 'produk/detail/$1';
$route['pencarian']             = 'pencarian/index';
$route['pencarian-produk']      = 'pencarian/pencarian_produk';
$route['checkout']              = 'checkout/index';
$route['checkout-2']            = 'checkout/checkout_2';

// Suplier route
$route['supplier/(:any)'] = 'supplier/index/$1';

// ========================== API ==========================

// dummy api untuk kustomer
$route['api/login']             = 'API/auth';
$route['api/register']          = 'API/auth/register';

// api untuk suplier
$route['api/admin/suplier/login']     = 'API/suplier_auth/login';
$route['api/admin/suplier/register']  = 'API/suplier_auth/register';
$route['api/admin/suplier/update_profile']   = 'API/Admin/suplier/update_profile';
$route['api/admin/suplier/update_password']  = 'API/Admin/suplier/update_password';
$route['api/admin/suplier/upload_banner']  = 'API/Admin/suplier/upload_banner';
$route['api/admin/suplier/upload_logo']  = 'API/Admin/suplier/upload_logo';

$route['api/suplier/get/(:any)']        = 'API/suplier/first/$1';
$route['api/suplier/all']               = 'API/suplier/all';
$route['api/suplier/products/(:any)']   = 'API/suplier/products/$1';

// API untuk produk
$route['api/produk/(:any)'] = 'API/produk/$1';
$route['api/produk/filter'] = 'API/produk/filter';
