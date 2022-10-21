<?php
defined('BASEPATH') or exit('No direct script access allowed');

class produk extends CI_Controller

{
    public $userdata;
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('cookie');
        $this->userdata = checkAuthSuplier();
        $this->src = 'assets/src/js/pages/suplier';
        $this->js = 'assets/admin/js';
        $this->css = 'assets/admin/css';
    }

    public function index()
    {
        $data = [
<<<<<<< HEAD
            'js'        => [$this->src . 'produk/list-produk.js'],
=======
            'js'        => ["$this->src/produk/list-produk.js"],
>>>>>>> origin/zlnew
            'content'   => 'admin/pages/produk/index',
            'produks'   => $this->db->get_where('produk', ['id_suplier' => $this->userdata->id_suplier])->result(),
        ];
        return $this->load->view('admin/layouts/app', $data);
    }


    public function tambah_produk_baru()
    {
        $css = ["$this->css/extensions/summernote-bs4.min.css"];
        $js = [
            "$this->js/extensions/summernote-bs4.min.js",
            "$this->src/produk/tambah-produk.js",
            "$this->js/extensions/fslightbox.js"
        ];
        $data = [
<<<<<<< HEAD
            'css'       => ['assets/admin/css/extensions/summernote-bs4.min.css'],
            'js'        => ['assets/admin/js/extensions/summernote-bs4.min.js', $this->src . 'produk/tambah-produk.js'],
=======
            'css'       => $css,
            'js'        => $js,
>>>>>>> origin/zlnew
            'content'   => 'admin/pages/produk/tambah_produk_baru',
            'k_produk'  => $this->db->get('produk_kategori')->result()
        ];
        return $this->load->view('admin/layouts/app', $data);
    }

    public function edit($id_produk)
    {
        $data['content'] = 'admin/pages/produk/edit_produk';
        return $this->load->view('admin/layouts/app', $data);
    }
}
