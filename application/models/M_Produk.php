<?php

class M_Produk extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        // $this->load->helper('function_helper');
    }

    public function getall()
    {
        $get = $this->db->query('SELECT * FROM produk');

        if ($get->num_rows() > 0) {
            return $get->result_array();
        } else {
            return null;
        }
    }

    public function save($data)
    {
        return $this->db->insert('produk', $data);
    }

    public function delete($id_produk)
    {
        return $this->db->delete('produk', array("id_produk" => $id_produk));
    }
}
