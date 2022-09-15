<?php

class Produk_model extends CI_Model
{

    public function get_all()
    {
        $this->db->select('produk.*,suplier.nama_toko , suplier.deskripsi AS deskripsi_toko , suplier.lokasi,suplier.banner,suplier.logo,suplier.join_at, produk_kategori.nama_kategori');
        $this->db->from('produk');
        $this->db->join('produk_kategori', 'produk_kategori.id_produk_kategori = produk.id_produk_kategori','left');
        $this->db->join('suplier', 'suplier.id_suplier = produk.id_suplier', 'inner');
        $query = $this->db->get()->result_array();

        // Loop through the products array
        foreach ($query as $i => $product) {

            $this->db->where('id_produk', $product['id_produk']);
            $images_query = $this->db->get('galeri_produk')->result_array();

            $query[$i]['images'] = $images_query;
        }
        return $query;
    }

    public function get_one($id)
    {
        $produk = $this->db->select('produk.* , suplier.nama_toko , suplier.deskripsi AS deskripsi_toko , suplier.lokasi,suplier.banner,suplier.logo,suplier.join_at, produk_kategori.nama_kategori')
                    ->from('produk')
                    ->join('suplier', 'suplier.id_suplier = produk.id_suplier')
                    ->join('produk_kategori', 'produk_kategori.id_produk_kategori = produk.id_produk_kategori')
                    ->where('id_produk',$id);
        $data = $produk->get()->result_array();
        $data[0]['images'] = $this->db->get_where('galeri_produk',['id_produk' =>$id])->result_array();
        return $data;
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

        $this->db->select('produk.*,suplier.nama_toko , suplier.deskripsi AS deskripsi_toko , suplier.lokasi,suplier.banner,suplier.logo,suplier.join_at, produk_kategori.nama_kategori');
        $this->db->from('produk');
        $this->db->join('produk_kategori', 'produk_kategori.id_produk_kategori = produk.id_produk_kategori', 'left');
        $this->db->join('suplier', 'suplier.id_suplier = produk.id_suplier', 'inner');
        $this->db->like('nama_produk', $data['nama']);
        $this->db->like('nama_kategori', $data['kategori']);
        // $this->db->like('lokasi', $data['lokasi']);
        $this->db->like('brand', $data['merek']);
        $this->db->having('harga >=', $data['harga_min']);
        $this->db->having('harga <=', $data['harga_max']);
        $this->db->order_by('created_at', $data['sort']);

        $query = $this->db->get()->result_array();

        foreach ($query as $i => $product) {

            $this->db->where('id_produk', $product['id_produk']);
            $images_query = $this->db->get('galeri_produk')->result_array();

            $query[$i]['images'] = $images_query;
        }

        try {
            return $query;
        } catch (Exception $e) {
            return $this->db->error();
        }
    }
}
