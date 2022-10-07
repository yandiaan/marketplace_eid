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
        $data['content'] = 'admin/pages/produk/index';
        $data['produks'] = $this->db->get_where('produk', ['id_suplier' => $this->userdata->id_suplier])->result();
        return $this->load->view('admin/layouts/app', $data);
    }


    public function tambah_produk_baru()
    {
        $data['content'] = 'admin/pages/produk/tambah_produk_baru';
        return $this->load->view('admin/layouts/app', $data);
    }

    public function edit($id_produk)
    {
        $data['content'] = 'admin/pages/produk/edit_produk';
        return $this->load->view('admin/layouts/app', $data);
    }
}
