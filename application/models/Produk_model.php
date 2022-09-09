<?php

class Produk_model extends CI_Model
{
    
    public function min_price()
    {
        $this->db->select_min('harga', 'min_price');

        $query = $this->db->get('produk')->row();
        return $query->min_price;
    }
    
    public function max_price()
    {
        $this->db->select_max('harga', 'max_price');

        $query = $this->db->get('produk')->row();
        return $query->max_price;
    }
    
    public function filter($data)
    {
        // Check if harga minimal tidak di set
        if($data['harga_min'] == '') {
            $data['harga_min'] = $this->min_price();
        }

        // Check if harga maksimal tidak di set
        if($data['harga_max'] == '') {
            $data['harga_max'] = $this->max_price();
        }

        // Filter Query
        $this->db->select('*')
            ->like('nama_produk', $data['nama'])
            ->like('id_produk_kategori', $data['kategori'])
            // ->like('lokasi', $data['lokasi'])
            ->like('brand', $data['merek'])
            ->having('harga >=', $data['harga_min'])
            ->having('harga <=', $data['harga_max'])
            ->order_by('created_at', $data['sort']);

        $query = $this->db->get('produk');
        return $query->result();
    }
}