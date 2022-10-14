<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller']    = 'homepage';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;

// auth
$route['login']                 = 'Auth/login';
$route['register']              = 'Auth/register';
$route['register/action']       = 'Auth/register/register_action';


// Admin
$route['suplier/dashboard/login']     = 'Suplier/Auth';
$route['suplier/dashboard']           = 'Suplier/Dashboard';
$route['suplier/dashboard/list-produk']         = 'Suplier/Produk/index';
$route['suplier/dashboard/tambah-produk-baru']  = 'Suplier/Produk/tambah_produk_baru';
$route['suplier/dashboard/edit-produk/(:any)']  = 'Suplier/Produk/edit/$1';
$route['suplier/dashboard/arsip-produk/(:any)']  = 'Suplier/Produk/arsip/$1';
$route['suplier/dashboard/bukaarsip-produk/(:any)']  = 'Suplier/Produk/bukaArsip/$1';
$route['suplier/dashboard/delete-produk/(:any)']  = 'Suplier/Produk/delete/$1';

$route['suplier/dashboard/profil-toko'] = 'Suplier/Profil/index';
// $route['suplier/dashboard/update-profil/(:any)'] = 'Suplier/Profil/update/$1';



// Produk route
$route['produk/(:any)']         = 'produk/detail/$1';
$route['produk']                = '404';
$route['pencarian']             = 'pencarian/index';
$route['pencarian-produk']      = 'pencarian/pencarian_produk';
$route['rekomendasi']           = 'rekomendasi/index';
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

$route['api/admin/suplier/distribusi']       = 'API/admin/Wilayah_distribusi/index';
$route['api/admin/suplier/distribusi']       = 'API/admin/Wilayah_distribusi/store_wilayah_distribusi';

// api untuk suplier mengelola produk
$route['api/admin/produk/store']             = 'API/Admin/Produk/store_produk';
$route['api/admin/produk/all']               = 'API/Admin/Produk/get_all_produk';
$route['api/admin/produk/datatables']        = 'API/Admin/Produk/get_datatables';
$route['api/admin/produk/galeri/store']      = 'API/Admin/Galeri_produk/store_galeri_produk';

$route['api/admin/produk/delete']             = 'API/Admin/Produk/delete_produk';

// api untuk suplier menambah variasi produk
$route['api/admin/produk/variasi/store']     = 'API/Admin/Variasi_produk/store_variasi';

// api untuk halaman pengguna
$route['api/suplier/get/(:any)']           = 'API/suplier/first/$1';
$route['api/suplier/filter']               = 'API/suplier/filter';

// API untuk produk
$route['api/produk'] = 'API/produk';
$route['api/produk/filter'] = 'API/produk/filter';
$route['api/kategori'] = 'API/kategori';


// API untuk keranjang
$route['api/keranjang/get_item']        = 'API/keranjang/get_item';
$route['api/keranjang/add_item']        = 'API/keranjang/add_item';
$route['api/keranjang/update_quantity'] = 'API/keranjang/update_quantity';
$route['api/keranjang/delete_item']     = 'API/keranjang/delete_item';
$route['api/keranjang/delete_checked_item']     = 'API/keranjang/delete_checked_item';
$route['api/keranjang/empty_cart']      = 'API/keranjang/empty_cart';
$route['api/keranjang/check_item']      = 'API/keranjang/check_item';
$route['api/keranjang/check_all_item']  = 'API/keranjang/check_all_item';


// API Review
$route['api/review'] = 'API/review/add';

// API checkout
$route['api/transaksi'] = 'API/transaksi/checkout';
