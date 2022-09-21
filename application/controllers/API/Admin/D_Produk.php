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

    public function edit()
    {
        $get = $this->input->post('id');
        $data = $this->produk->getprodukbyid($get);

        $setparent = $this->_getParent_kategori($data['id_produk_kategori']);
        $data['kategori_name'] = $setparent;

        echo json_encode($data);
    }

    public function _getParent_kategori($id_kategori)
    {

        $return = '';
        $get = $this->produk->get_editkategori($id_kategori);

        if (!empty($get)) {
            foreach ($get as $rows) {
                $return .= '<option value="' . $rows['id_produk_kategori'] . '" ' . ($rows['id'] == $id_parent ? 'selected' : '') . '>' . $rows['text'] . '</option>';
            }
        }

        return $return;
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
        if ($this->produk->delete($id_produk)) {
            redirect('/admin');
        }
    }
}
