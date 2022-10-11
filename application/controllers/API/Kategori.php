<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Kategori extends RestController
{
    public function index_get()
    {
        $result = $this->db->get('produk_kategori')->result_array();
        $this->response([
            'meta' => [
                'code'    => 200,
                'status'  => 'success',
                'total'   => count($result),
                'message' => 'Success get data kategori produk'
            ],
            'data'  => $result,
        ], 200);
    }
}
