<?php

class Produk_model extends CI_Model
{

    public function get_all()
    {
        $this->db->select('produk.*,suplier.nama_toko , suplier.deskripsi AS deskripsi_toko , suplier.lokasi,suplier.banner,suplier.logo,suplier.join_at, produk_kategori.nama_kategori');
        // $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('produk_kategori', 'produk_kategori.id_produk_kategori = produk.id_produk_kategori', 'left');
        $this->db->join('suplier', 'suplier.id_suplier = produk.id_suplier', 'left');
        $query = $this->db->get()->result_array();

        // Loop through the products array
        foreach ($query as $i => $product) {

            $this->db->where('id_produk', $product['id_produk']);
            $images_query = $this->db->get('galeri_produk')->result_array();

            $query[$i]['images'] = $images_query;
        }
        return $query;
    }

    public function get_one($slug)
    {
        $produk = $this->db->select('produk.* , suplier.nama_toko , suplier.deskripsi AS deskripsi_toko , suplier.lokasi,suplier.banner,suplier.logo,suplier.join_at, produk_kategori.nama_kategori')
            ->from('produk')
            ->join('suplier', 'suplier.id_suplier = produk.id_suplier')
            ->join('produk_kategori', 'produk_kategori.id_produk_kategori = produk.id_produk_kategori')
            ->where('slug', $slug);
        $data = $produk->get()->result_array();

        if (count($data) > 0) {
            $data[0]['variasi'] = $this->db->select('id_produk,model_variasi,harga')->get_where('variasi', ['id_produk' => $data[0]['id_produk']])->result_array();
        }
        if (count($data) > 0) {
            $data[0]['images'] = $this->db->get_where('galeri_produk', ['id_produk' => $data[0]['id_produk']])->result_array();
        }
        if (count($data) > 0) {
            $data[0]['reviews'] = $this->db->select('nama_pengguna,pesan,rating,file_review,created_at')->get_where('review', ['id_produk' => $data[0]['id_produk']])->result_array();
        }

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
        $this->db->join('suplier', 'suplier.id_suplier = produk.id_suplier', 'left');
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


    /**
     * =====================================================================
     * Model for Admin Suplier Produk
     * =====================================================================
     * **/


    public function rules($params)
    {
        $validation = [
            'add_produk' => [
                [
                    'field' => 'id_produk_kategori',
                    'label' => 'Kategori Produk',
                    'rules' => 'required'
                ],
                [
                    'field' => 'nama_produk',
                    'label' => 'Nama Produk',
                    'rules' => 'required'
                ],
                [
                    'field' => 'deskripsi',
                    'label' => 'Deskripsi Produk',
                    'rules' => 'required'
                ],
                [
                    'field' => 'spesifikasi',
                    'label' => 'Spesifikasi Produk',
                    'rules' => 'required'
                ],
                [
                    'field' => 'brand',
                    'label' => 'Brand Produk',
                    'rules' => 'required'
                ],
                [
                    'field' => 'harga',
                    'label' => 'Harga Produk',
                    'rules' => 'required'
                ],
                [
                    'field' => 'berat',
                    'label' => 'Berat Produk',
                    'rules' => 'required'
                ],
                [
                    'field' => 'lebar',
                    'label' => 'Lebar Produk',
                    'rules' => 'required'
                ],
                [
                    'field' => 'tinggi',
                    'label' => 'Tinggi Produk',
                    'rules' => 'required'
                ],
            ]
        ];

        return $validation[$params];
    }
}
