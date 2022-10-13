<?php

defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Wilayah_distribusi extends RestController
{
    private $token_session;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Wilayah_distribusi_model', 'wilayah_distribusi');

        $header = $this->input->request_headers()['Authorization'];
        if (!$header) return $this->response(['message' => ' Token required'], 404);

        try {
            $this->token_session = decode_jwt($header);
        } catch (\Throwable $th) {
            $this->response(['message' => 'Invalid Token'], 404);
        }
    }

    public function index_get()
    {
        $slug = htmlspecialchars($this->input->get('browse', true) ?? '');

        if ($slug) {
            $result = $this->wilayah_distribusi->get_one($slug ?? '');
            if ($result) {
                $this->response([
                    'meta' => [
                        'code'    => 200,
                        'status'  => 'success',
                        'message' => 'Success get data wilayah distribusi dengan id ' . $slug
                    ],
                    'data'  => $result,
                ], 200);
            } else {
                $this->response([
                    'meta'    => [
                        'code'    => 404,
                        'message' => "Data wilayah distribusi dengan id $slug tidak ditemukan",
                    ],
                ], 404);
            }
        } else {
            $result = $this->wilayah_distribusi->get_all($this->token_session->id_suplier);
            $this->response([
                'meta' => [
                    'code'    => 200,
                    'status'  => 'success',
                    // 'total'   => count($result),
                    'message' => 'Success get all data wilayah distribusi suplier'
                ],
                'data'  => $result,
            ], 200);
        }
    }

    public function store_wilayah_distribusi_post()
    {
        $id_suplier   = $this->token_session->id_suplier;

        $this->form_validation->set_rules($this->wilayah_distribusi->rules('add_wilayah_distribusi'));
        if ($this->form_validation->run() == false) {
            $this->response([
                'message' => 'Data yang anda input tidak valid !',
                'errors'  => $this->form_validation->error_array(),
            ], 422);
        } else {
            $provinsi         = $this->input->post('provinsi', true);
            $kota             = $this->input->post('kota', true);

            $data = [
                'id_suplier'  => $id_suplier,
                'provinsi'    => $provinsi,
                'kota'        => $kota,
                'created_at'  => date('Y-m-d'),
            ];

            $result = $this->db->insert('wilayah_distribusi', $data);

            $get_wilayah_distribusi_after_add = $this->db->get_where('wilayah_distribusi', ['id_wilayah_distribusi' => $this->db->insert_id()])->row_array();

            if ($result) {
                // jika benar
                $this->response([
                    'meta' => [
                        'code'      => 200,
                        'status'    => 'success',
                        'message'   => 'Berhasil menambahkan wilayah distribusi suplier'
                    ],
                    'data' =>  $get_wilayah_distribusi_after_add
                ], 200);
            } else {
                $this->response([
                    'message' => 'Gagal menambahkan wilayah distribusi suplier',
                    'error'  => 404,
                ], 404);
            }
        }
    }
}
