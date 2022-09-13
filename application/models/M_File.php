<?php

class M_File extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        // $this->load->helper('function_helper');
    }

    public function getalldata()
    {
        $get = $this->db->query('SELECT * FROM suplier');

        if ($get->num_rows() > 0) {
            return $get->result_array();
        } else {
            return null;
        }
    }

    public function upload_file_db($data)
    {
        $response['success'] = false;
        $response['message'] = null;
        $return = $this->db->insert('suplier', $data);

        if ($return) {

            $response['success'] = true;
            $response['message'] = 'Data Berhasil Ditambahkan';
        } else {
            $response['success'] = false;
            $response['message'] = 'Data Gagal DItambahkan';
        }
        return $response;
    }

    public function get_Banner($id)
    {
        $this->db->select('banner');
        $this->db->from('suplier');
        $this->db->where('id', $id);
        $get = $this->db->get();
        if ($get->num_rows() != 0) {
            $q = $get->row_array();
            return $q;
        } else {
            return null;
        }
    }
}
