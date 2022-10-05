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
    }

    public function index()
    {
        return $this->load->view('admin/layouts/app');
    }

    public function tambah_produk_baru()
    {
        $data['content'] = 'admin/pages/produk/tambah_produk_baru';
        return $this->load->view('admin/layouts/app', $data);
    }
}