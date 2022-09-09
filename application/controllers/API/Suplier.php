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

        if(count($data) < 1) {
            $this->response([
                'code'  => 404,
                'message'  => 'Suplier tidak ditemukan',
            ], 404);
        } else {
            $this->response([
                'code'  => 200,
                'data'  => $data,
            ], 200);
        }
    }

    // Get all supplier
    public function all_get()
    {
        $data = $this->suplier->get_all();

        if(count($data) < 1) {
            $this->response([
                'code'  => 404,
                'message'  => 'Suplier tidak ditemukan',
            ], 404);
        } else {
            $this->response([
                'code'  => 200,
                'data'  => $data,
            ], 200);
        }
    }

    // Get all supplier product
    public function products_get($id)
    {
        $data = $this->suplier->get_products($id);

        if(count($data) < 1) {
            $this->response([
                'code'  => 404,
                'message'  => 'Produk tidak ditemukan',
            ], 404);
        } else {
            $this->response([
                'code'  => 200,
                'data'  => $data,
            ], 200);
        }
    }
}