<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Kategori', 'kategori');
    }

    public function index()
    {
        $data = ['content' => 'admin/kategori'];
        $data["categories"] = $this->kategori->getAll();
        $this->load->view('admin/layouts/app', $data);
    }

    public function add()
    {
        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori'),
        );

        $product = $this->kategori->save($data);

        redirect('/kategori');
    }

    public function edit()
    {
        $get = $this->input->post('id');
        $data = $this->produk->getprodukbyid($get);
        echo json_encode($data);
    }

    public function update()
    {
        $data = array(
            'nama_produk' => $this->input->post('nama_produkU'),
            'deskripsi' => $this->input->post('deskripsiU'),
            // 'spesifikasi' => $this->input->post('spesifikasi'),
            'brand' => $this->input->post('brandU'),
            'harga' => $this->input->post('hargaU'),
            'berat' => $this->input->post('beratU'),
            'lebar' => $this->input->post('lebarU'),
            'tinggi' => $this->input->post('tinggiU'),
        );

        $id_produk = $this->input->post('id_produkU');

        $product = $this->produk->save_update($data, $id_produk);

        redirect('/admin');
    }

    public function delete($id_produk = null)
    {
        if ($this->kategori->delete($id_produk)) {
            redirect('/kategori');
        }
    }
}
