<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Produk', 'produk');
    }

    public function index()
    {
        $data = ['content' => 'admin/admin'];
        $data["products"] = $this->produk->getAll();
        $this->load->view('admin/layouts/app', $data);
    }

    public function add()
    {
        $data = array(
            'nama_produk' => $this->input->post('nama_produk'),
            'deskripsi' => $this->input->post('deskripsi'),
            // 'spesifikasi' => $this->input->post('spesifikasi'),
            'brand' => $this->input->post('brand'),
            'harga' => $this->input->post('harga'),
            'berat' => $this->input->post('berat'),
            'lebar' => $this->input->post('lebar'),
            'tinggi' => $this->input->post('tinggi'),
        );

        $product = $this->produk->save($data);

        redirect('/admin');
    }

    public function delete($id_produk = null)
    {
        if ($this->produk->delete($id_produk)) {
            return $this->index();
        }
    }
}
