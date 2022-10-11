<?php

defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Wilayah_produk extends RestController
{
    private $token_session;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Wilayah_produk_model', 'wilayah_produk');

        $header = $this->input->request_headers()['Authorization'];
        if (!$header) return $this->response(['message' => ' Token required'], 404);

        try {
            $this->token_session = decode_jwt($header);
        } catch (\Throwable $th) {
            $this->response(['message' => 'Invalid Token'], 404);
        }
    }

    public function store_wilayah_produk_post()
    {
        $id_suplier   = $this->token_session->id_suplier;

        $this->form_validation->set_rules($this->variasi_produk->rules('add_variasi'));
        if ($this->form_validation->run() == false) {
            $this->response([
                'message' => 'Data yang anda input tidak valid !',
                'errors'  => $this->form_validation->error_array(),
            ], 422);
        } else {
            $id_produk       = $this->input->post('id_produk', true);
            $model_variasi   = $this->input->post('model_variasi', true);
        }
    }
}
