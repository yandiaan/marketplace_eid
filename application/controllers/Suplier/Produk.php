<?php
defined('BASEPATH') or exit('No direct script access allowed');

class produk extends CI_Controller

{
    public $userdata;
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('cookie');
        $this->userdata = checkAuthSuplier();
        $this->load->model('M_Produk', 'produk');
    }

    public function index()
    {
        $data['content'] = 'admin/pages/produk/index';
        $data['produks'] = $this->db->get_where('produk', ['id_suplier' => $this->userdata->id_suplier])->result();
        return $this->load->view('admin/layouts/app', $data);
    }

    public function list_produk()
    {
        $data['content'] = 'admin/pages/produk/list_produk';
        return $this->load->view('admin/layouts/app', $data);
    }

    public function DatatableProduk()
    {
        $list = $this->produk->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $produks) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $produks->id_produk_kategori;
            $row[] = $produks->nama_produk;
            $row[] = $produks->brand;
            $row[] = $produks->harga;
            $row[] = $produks->berat;
            $row[] = '<div class="btn-group mb-3" role="group" aria-label="Basic example">
            <a href="#" class="btn btn-warning">Edit</a>
            <a href="#" class="btn btn-success">Detail</a>
            <a href="#" class="btn btn-danger">Delete</a>
          </div>';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->produk->count_all(),
            "recordsFiltered" => $this->produk->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function tambah_produk_baru()
    {
        $data['content'] = 'admin/pages/produk/tambah_produk_baru';
        return $this->load->view('admin/layouts/app', $data);
    }

    public function edit($id_produk)
    {
        $data['content'] = 'admin/pages/produk/edit_produk';
        return $this->load->view('admin/layouts/app', $data);
    }
}
