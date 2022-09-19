<?php

class M_Kategori extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        // $this->load->helper('function_helper');
    }

    public function getall()
    {
        $get = $this->db->query('SELECT * FROM produk_kategori');

        if ($get->num_rows() > 0) {
            return $get->result_array();
        } else {
            return null;
        }
    }

    public function getkategoribyid($id_produk)
    {
        $get = $this->db->query('SELECT * FROM produk_kategori WHERE id_produk_kategori=?', array($id_produk));

        if ($get->num_rows() > 0) {
            return $get->row_array();
        } else {
            return null;
        }
    }

    public function save_update($data, $id_produk)
    {
        $response['success'] = false;
        $response['message'] = null;

        $this->db->where('id_produk_kategori', $id_produk);
        $return = $this->db->update('produk_kategori', $data);

        if ($return) {

            $response['success'] = true;
            $response['message'] = 'Data Berhasil DiUpdate';
        } else {
            $response['success'] = false;
            $response['message'] = 'Data Gagal DItambahkan';
        }
        return $response;
    }

    public function save($data)
    {
        return $this->db->insert('produk_kategori', $data);
    }

    public function delete($id_produk_kategori)
    {
        return $this->db->delete('produk_kategori', array("id_produk_kategori" => $id_produk_kategori));
    }
}
