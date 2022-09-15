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

    public function getallgaleri()
    {
        $get = $this->db->query('SELECT * FROM galeri_produk');

        if ($get->num_rows() > 0) {
            return $get->result_array();
        } else {
            return null;
        }
    }

    public function get_Produk($id_produk = null)
    {
        $ci  = &get_instance();
        if ($id_produk != null) {
            $prov = $ci->db
                ->where(['id_produk' => $id_produk])
                ->order_by("nama_produk", 'asc')
                ->get('produk');
            if ($prov->num_rows() > 0) {
                return $prov->row_array();
            } else {
                return null;
            }
        } else {
            $prov = $ci->db
                ->order_by("nama_produk", 'asc')
                ->get('produk');
            if ($prov->num_rows() > 0) {
                return $prov->result_array();
            } else {
                return null;
            }
        }
    }

    public function get_createdata($data)
    {
        $response['success'] = false;
        $response['message'] = null;

        $return = $this->db->insert('galeri_produk', $data);

        if ($return) {

            $response['success'] = true;
            $response['message'] = 'Data Berhasil Ditambahkan';
        } else {
            $response['success'] = false;
            $response['message'] = 'Data Gagal Ditambahkan';
        }

        return $response;
    }

    public function getOldFiles($id_galeri)
    {
        $this->db->select('image_path');
        $this->db->where('id_galeri_produk', $id_galeri);
        $oldImages = $this->db->get('galeri_produk')->row_array();
        // var_dump($oldImages); exit();
        return $oldImages;
    }

    public function delete($id_galeri)
    {
        return $this->db->delete('galeri_produk', array("id_galeri_produk" => $id_galeri));
    }

    public function get_createdatamultiple($data, $count)
    {
        $response['success'] = false;
        $response['message'] = null;
        for ($i = 0; $i < $count; $i++) {
            $return = $this->db->insert('galeri_produk', $data[$i]);
        }

        if ($return) {

            $response['success'] = true;
            $response['message'] = 'Data Berhasil Ditambahkan';
        } else {
            $response['success'] = false;
            $response['message'] = 'Data Gagal Ditambahkan';
        }

        return $response;
    }
}
