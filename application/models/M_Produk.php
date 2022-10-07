<?php

class M_Produk extends CI_Model
{

    var $table = 'produk';
    var $column_order = array(null, 'id_galeri_produk', 'nama_produk', 'brand', 'harga', 'berat'); //set column field database for datatable orderable
    var $column_search = array('nama_produk', 'brand'); //set column field database for datatable searchable 
    // var $order = array('id_produk' => 'asc'); // default order 
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query()
    {

        // $this->db->select('*');
        // $this->db->join('galeri_produk', 'produk.id_produk = galeri_produk.id_produk', 'left');
        $this->db->from($this->table);
        // $this->db->where('produk.id_suplier',);

        $i = 0;

        foreach ($this->column_search as $item) // loop column 
        {
            if ($_POST['search']['value']) // if datatable send POST for search
            {

                if ($i === 0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    //batasan
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
