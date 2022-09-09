<?php

class Produk_model extends CI_Model
{

    public function get_all()
    {
        $query = $this->db->get('produk');
        return $query->result();
    }

    public function get_one($id)
    {
        $query = $this->db->get_where('produk', ['id_produk' => $id]);
        return $query->result();
    }

    public function min_price()
    {
        $this->db->select_min('harga', 'min_price');

        $query = $this->db->get('produk')->row();
        if ($query->min_price != null) {
            return $query->min_price;
        } else {
            return 0;
        }
    }

    public function max_price()
    {
        $this->db->select_max('harga', 'max_price');

        $query = $this->db->get('produk')->row();
        if ($query->max_price != null) {
            return $query->max_price;
        } else {
            return 0;
        }
    }

    public function filter($data)
    {
        // Check if harga minimal tidak di set
        if ($data['harga_min'] == '') {
            $data['harga_min'] = $this->min_price();
        }

        // Check if harga maksimal tidak di set
        if ($data['harga_max'] == '') {
            $data['harga_max'] = $this->max_price();
        }

        // Filter Query
        $query = $this->db->select('*')
            ->like('nama_produk', $data['nama'])
            ->like('id_produk_kategori', $data['kategori'])
            // ->like('lokasi', $data['lokasi'])
            ->like('brand', $data['merek'])
            ->having('harga >=', $data['harga_min'])
            ->having('harga <=', $data['harga_max'])
            ->order_by('created_at', $data['sort'])->get('produk');

        try {
            return $query->result();
        } catch (Exception $e) {
            return $this->db->error();
        }
    }
}
