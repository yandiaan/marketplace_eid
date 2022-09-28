<?php
defined('BASEPATH') or exit('No direct script access allowed');

class D_produk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Produk', 'produk');
    }

    public function index()
    {
        $kategori = $this->getSelectKategori();
        $data = ['content' => 'admin/admin'];
        $data["products"] = $this->produk->getAll();
        $data["kategori"] = $kategori;
        $this->load->view('admin/layouts/app', $data);
    }

    public function index_variasi()
    {
        $data = ['content' => 'admin/variasi'];
        $data["variasi"] = $this->produk->getAllVariasi();
        $this->load->view('admin/layouts/app', $data);
    }

    public function getSelectKategori($kategori = null)
    {
        $return = '<option value="">Pilih Kategori</option>';
        $result = $this->produk->get_Kategori($kategori);
        if ($result != null) {
            foreach ($result as $rows) {
                $return .= '<option value="' . $rows['id_produk_kategori'] . '">' . ucwords(strtolower($rows['nama_kategori'])) . '</option>';
            }
        }
        return $return;
    }


    public function add()
    {
        $data = array(
            'nama_produk' => $this->input->post('nama_produk'),
            'id_produk_kategori' => $this->input->post('input_kategori'),
            'deskripsi' => $this->input->post('deskripsi'),
            'spesifikasi' => $this->input->post('spesifikasi'),
            'brand' => $this->input->post('brand'),
            'harga' => $this->input->post('harga'),
            'berat' => $this->input->post('berat'),
            'lebar' => $this->input->post('lebar'),
            'tinggi' => $this->input->post('tinggi'),
        );

        $product = $this->produk->save($data);

        redirect('/admin');
    }

    public function add_variasi()
    {
        $data = array(
            'id_produk' => $this->input->post('id_produk'),
            'model_variasi' => $this->input->post('model'),
            'harga' => $this->input->post('harga')
        );

        $product = $this->produk->save_variasi($data);
        redirect('/variasi');
    }

    public function edit($id)
    {
        $data = $this->produk->getprodukbyid($id);
        $view = ['content' => 'admin/E_Produk'];
        $view['cats'] = $this->db->get('produk_kategori')->result();
        $view['data'] = $data;
        $this->load->view('admin/layouts/app', $view);
    }

    public function variasi($id)
    {
        $data = $this->produk->getprodukbyid($id);

        $view = ['content' => 'admin/E_Variasi'];
        $view['data'] = $data;
        $this->load->view('admin/layouts/app', $view);
    }

    public function update()
    {
        $data = array(
            'nama_produk' => $this->input->post('nama_produk'),
            'id_produk_kategori' => $this->input->post('input_kategori'),
            'deskripsi' => $this->input->post('deskripsi'),
            'spesifikasi' => $this->input->post('spesifikasi'),
            'brand' => $this->input->post('brand'),
            'harga' => $this->input->post('harga'),
            'berat' => $this->input->post('berat'),
            'lebar' => $this->input->post('lebar'),
            'tinggi' => $this->input->post('tinggi'),
        );

        $id_produk = $this->input->post('id_produk');

        $product = $this->produk->save_update($data, $id_produk);

        redirect('/admin');
    }

    public function delete($id_produk = null)
    {
        if ($this->produk->delete($id_produk)) {
            redirect('/admin');
        }
    }

    public function delete_variasi($id_variasi = null)
    {
        if ($this->produk->delete_variasi($id_variasi)) {
            redirect('/variasi');
        }
    }
}
