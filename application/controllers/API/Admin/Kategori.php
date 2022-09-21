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
        $data = $this->kategori->getkategoribyid($get);
        echo json_encode($data);
    }

    public function update()
    {
        $data = array(
            'nama_kategori' => $this->input->post('nama_produk_kategoriU'),
        );

        $id_produk = $this->input->post('id_produk_kategoriU');

        $product = $this->kategori->save_update($data, $id_produk);

        redirect('/kategori');
    }

    public function delete($id_produk = null)
    {
        if ($this->kategori->delete($id_produk)) {
            redirect('/kategori');
        }
    }
}
