<?php

class Suplier_model extends CI_Model
{
    public function get_one($id)
    {
        $this->db->select('suplier.id_suplier,suplier.nama_toko,suplier.deskripsi,suplier.lokasi,suplier.banner,suplier.logo,suplier.updated_at');
        $query = $this->db->get_where('suplier', ['id_suplier' => $id])->result_array();

        // Loop through the products array
        foreach ($query as $i => $suplier) {

            $this->db->where('id_suplier', $suplier['id_suplier']);
            $produks = $this->db->get('produk')->result_array();
            $query[$i]['produks'] = $produks;

            foreach ($produks as $j => $produk) {
                $this->db->where('id_produk', $produk['id_produk']);
                $images_query = $this->db->get('galeri_produk')->result_array();

                $query[$i]['produks'][$j]['images'] = $images_query;
            }
        }
        return $query;
    }
    
    public function get_all()
    {
        $this->db->select('suplier.id_suplier,suplier.nama_toko,suplier.deskripsi,suplier.lokasi,suplier.banner,suplier.logo,suplier.updated_at');
        $query = $this->db->get('suplier')->result_array();

        // Loop through the products array
        foreach ($query as $i => $suplier) {

            $this->db->where('id_suplier', $suplier['id_suplier']);
            $produks = $this->db->get('produk')->result_array();
            $query[$i]['produks'] = $produks;
            
            foreach($produks as $j => $produk) {
                $this->db->where('id_produk', $produk['id_produk']);
                $images_query = $this->db->get('galeri_produk')->result_array();

                $query[$i]['produks'][$j]['images'] = $images_query;
                
            }
        }
        return $query;
    }

    public function get_products($id)
    {
        $query = $this->db->get_where('produk', ['id_suplier' => $id]);
        return $query->result();
    }
}