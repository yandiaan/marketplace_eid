<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
