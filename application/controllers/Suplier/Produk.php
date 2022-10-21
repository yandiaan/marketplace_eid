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
            'js'        => ["$this->src/produk/list-produk.js"],
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
            'css'       => $css,
            'js'        => $js,
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

    public function delete($id_produk)
    {
        $this->db->where('id_produk', $id_produk);
        $this->db->delete('produk');
        redirect('suplier/dashboard/list-produk');
    }

    public function arsip($id_produk)
    {
        $date = date("Y-m-d h:i:s");
        $this->db->set('delete_at', $date);
        $this->db->where('id_produk', $id_produk);
        $this->db->update('produk');
        redirect('suplier/dashboard/list-produk');
    }

    public function bukaArsip($id_produk)
    {
        $this->db->set('delete_at', NULL);
        $this->db->where('id_produk', $id_produk);
        $this->db->update('produk');
        redirect('suplier/dashboard/list-produk');
    }

    public function wilayah_produk()
    {
        $query = $this->db->query('SELECT * FROM produk LEFT JOIN wilayah_produk
        ON produk.id_produk = wilayah_produk.id_produk LEFT JOIN wilayah_distribusi
        ON wilayah_produk.id_wilayah_distribusi = wilayah_distribusi.id_wilayah_distribusi WHERE wilayah_distribusi.id_suplier =?', $this->userdata->id_suplier)->result();

        $distribusi = $this->db->get_where('wilayah_distribusi', ['id_suplier' => $this->userdata->id_suplier])->result_array();
        $data_produk = $this->db->get_where('produk', ['id_suplier' => $this->userdata->id_suplier])->result_array();
        $data = [
            'js'        => [$this->src . 'produk/wilayah-produk.js'],
            'content'   => 'admin/pages/produk/wilayah_produk',
            'produks'   => $query,
            'distribusi'  => $distribusi,
            'data_produk' => $data_produk,
        ];
        return $this->load->view('admin/layouts/app', $data);
    }

    public function delete_wilayah_produk($id_wilayah)
    {
        $this->db->where('id_wilayah_produk', $id_wilayah);
        $this->db->delete('wilayah_produk');
        redirect('suplier/dashboard/wilayah-produk');
    }

    public function add_wilayah_produk()
    {
        $data = [
            'id_suplier' => $this->userdata->id_suplier,
            'provinsi'   => $this->input->post('provinsi'),
            'kota'  => $this->input->post('kota'),
            'created_at' => date('Y-m-d h:i:s')
        ];

        $this->db->insert('wilayah_distribusi', $data);
        redirect('suplier/dashboard/wilayah-toko');
    }
}
