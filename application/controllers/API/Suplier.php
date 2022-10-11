<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Suplier extends RestController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('suplier_model', 'suplier');
    }

    // Get specific supplier by id
    public function first_get($id)
    {
        $data = $this->suplier->get_one($id);

        if (count($data) < 1) {
            $this->response([
                'code'  => 404,
                'message'  => 'Suplier tidak ditemukan',
            ], 404);
        } else {
            $this->response([
                'meta' => [
                    'code'      => 200,
                    'status'    => 'success',
                    'message'   => 'Success get suplier by id'
                ],
                'data'  => $data,
            ], 200);
        }
    }

    // Get all supplier
    public function filter_post()
    {
        $filter = [
            'nama_toko'       => $this->input->post('nama_toko'),
        ];

        $data = $this->suplier->filter_all($filter);

        if (count($data) < 1) {
            $this->response([
                'code'      => 404,
                'status'    => 'success',
                'message'   => 'Suplier tidak ditemukan',
            ], 404);
        } else {
            $this->response([
                'meta' => [
                    'code'      => 200,
                    'status'    => 'success',
                    'message'   => 'Success get all suplier',
                ],
                'data'  => $data,
            ], 200);
        }
    }
}
