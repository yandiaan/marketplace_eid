<?php

class Suplier_model extends CI_Model
{
    public function get_one($id)
    {
        $query = $this->db->get_where('suplier', ['id_suplier' => $id]);
        return $query->result();
    }

    public function get_all()
    {
        $query = $this->db->get('suplier');
        return $query->result();
    }

    public function get_products($id)
    {
        $query = $this->db->get_where('produk', ['id_suplier' => $id]);
        return $query->result();
    }
}