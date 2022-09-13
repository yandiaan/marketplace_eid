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

    public function index_get()
    {
        $id = htmlspecialchars($this->input->get('id', true));

        if($id){
            $result = $this->produk->get_one($id);
            if ($result) {
                $this->response([
                    'meta' => [
                        'code'    => 200,
                        'status'  => 'success',
                        'message' => 'Success get data produk by id '.$id
                    ],
                    'data'  => $result,
                ], 200);
            }else{
                $this->response([
                    'meta'    => [
                        'code'    => 404,
                        'message' => "Data dengan id $id tidak ditemukan",
                    ],
                ], 404);
            }

        }else {
            $result = $this->produk->get_all();
            $this->response([
                'meta' => [
                    'code'    => 200,
                    'status'  => 'success',
                    // 'total'   => count($result),
                    'message' => 'Success get data produk'
                ],
                'data'  => $result,
            ], 200);
        }
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

        if ($result) {
            // $result = $this->produk->filter($data);
            $this->response([
                'meta' => [
                    'code'    => 200,
                    'status'  => 'success',
                    'total'   => count($result),
                    'message' => 'Success get data produk'
                ],
                'data'  => $result,
            ], 200);
        } else {
            $this->response([
                'meta'    =>[
                    'code'    => 404,
                    'total'   => count($result),
                    'message' => 'Data yang anda tidak ditemukan',
                ],
                'data' => $result
            ], 404);
        }

    }
}
