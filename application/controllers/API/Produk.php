<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Produk extends RestController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('produk_model', 'produk');
    }

    public function filter_post()
    {
        $data = [
            'nama'       => $this->input->post('nama'),
            'kategori'   => $this->input->post('kategori'),
            'lokasi'     => $this->input->post('lokasi'),
            'merek'      => $this->input->post('merek'),
            'harga_min'  => $this->input->post('harga_min'),
            'harga_max'  => $this->input->post('harga_max'),
            'sort'       => $this->input->post('sort'),
        ];

        $result = $this->produk->filter($data);

        $this->response([
            'code'  => 200,
            'total' => count($result),
            'data'  => $result,
        ], 200);
    }
}