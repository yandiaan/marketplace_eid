<?php

class M_Produk extends CI_Model
{

    function __construct()
    {
        parent::__construct();
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

    public function getAllVariasi()
    {
        $get = $this->db->query('SELECT * FROM variasi');

        if ($get->num_rows() > 0) {
            return $get->result_array();
        } else {
            return null;
        }
    }

    public function get_Kategori($id_produk = null)
    {
        $ci  = &get_instance();
        if ($id_produk != null) {
            $prov = $ci->db
                ->where(['id_produk_kategori' => $id_produk])
                ->order_by("nama_kategori", 'asc')
                ->get('produk_kategori');
            if ($prov->num_rows() > 0) {
                return $prov->row_array();
            } else {
                return null;
            }
        } else {
            $prov = $ci->db
                ->order_by("nama_kategori", 'asc')
                ->get('produk_kategori');
            if ($prov->num_rows() > 0) {
                return $prov->result_array();
            } else {
                return null;
            }
        }
    }

    public function getprodukbyid($id_produk)
    {
        $get = $this->db->query('SELECT * FROM produk WHERE id_produk=?', array($id_produk));

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

        $this->db->where('id_produk', $id_produk);
        $return = $this->db->update('produk', $data);

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
        return $this->db->insert('produk', $data);
    }

    public function delete($id_produk)
    {
        return $this->db->delete('produk', array("id_produk" => $id_produk));
    }

    public function delete_variasi($id_variasi)
    {
        return $this->db->delete('variasi', array("id_variasi" => $id_variasi));
    }

    public function get_editkategori($role_id)
    {
        $data = $this->db->query("SELECT pf.id, pf.name FROM project_role_users pru
        LEFT JOIN project_features pf ON pf.project_role_user=pru.id
        WHERE pf.project_role_user =? AND pf.is_active =?", [$role_id, '1']);

        $fetched_records = $data;
        $dataProject = $fetched_records->result_array();

        $data = array();
        foreach ($dataProject as $project) {
            $data[] = array("id" => $project['id'], "text" => $project['name']);
        }
        return $data;
    }

    public function save_variasi($data)
    {
        return $this->db->insert('variasi', $data);
    }
}
