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
$route['admin']                 = 'api/admin/D_produk/index';
$route['upload']                = 'api/admin/upload_file/index';
$route['galeri']                = 'api/admin/upload_file/galeri_index';
$route['kategori']              = 'api/admin/kategori/index';


// Produk route
$route['produk/(:any)']         = 'produk/detail/$1';
$route['pencarian']             = 'pencarian/index';
$route['pencarian-produk']      = 'pencarian/pencarian_produk';
$route['cart']                  = 'cart/index';
$route['checkout-2']            = 'checkout/checkout_2';
$route['checkout']              = 'checkout/index';


// Suplier route
$route['supplier/(:any)'] = 'supplier/index/$1';

// ========================== API ==========================

// dummy api untuk kustomer
$route['api/login']             = 'API/auth';
$route['api/register']          = 'API/auth/register';

// api untuk suplier
$route['api/admin/suplier/login']            = 'API/suplier_auth/login';
$route['api/admin/suplier/register']         = 'API/suplier_auth/register';
$route['api/admin/suplier/update_profile']   = 'API/admin/suplier/update_profile';
$route['api/admin/suplier/update_password']  = 'API/admin/suplier/update_password';
$route['api/admin/suplier/upload_banner']    = 'API/admin/suplier/upload_banner';
$route['api/admin/suplier/upload_logo']      = 'API/admin/suplier/upload_logo';
$route['api/admin/suplier/profile']          = 'API/admin/suplier/get_profil';


$route['api/suplier/get/(:any)']        = 'API/suplier/first/$1';
$route['api/suplier/all']               = 'API/suplier/all';
$route['api/suplier/products/(:any)']   = 'API/suplier/products/$1';

// API untuk produk
$route['api/produk'] = 'API/produk';
$route['api/produk/filter'] = 'API/produk/filter';

// API untuk keranjang
$route['api/keranjang/get_item']        = 'API/keranjang/get_item';
$route['api/keranjang/add_item']        = 'API/keranjang/add_item';
$route['api/keranjang/update_quantity'] = 'API/keranjang/update_quantity';
$route['api/keranjang/delete_item']     = 'API/keranjang/delete_item';
$route['api/keranjang/empty_cart']      = 'API/keranjang/empty_cart';


$route['api/review'] = 'API/review/add';
