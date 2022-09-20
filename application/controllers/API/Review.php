<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Review extends RestController
{
    public $token_session;
    public function __construct()
    {
        parent::__construct();
        $header = $this->input->request_headers()['Authorization'];

        if (!$header) return $this->response(['message' => ' Token required'], 404);

        try {
            $this->token_session = decode_jwt($header);
        } catch (\Throwable $th) {
            return $this->response(['message' => 'Invalid Token'], 404);
        }
    }

    public function add_post()
    {
        $id_pengguna = $this->token_session->id_pengguna;
        $this->form_validation->set_rules('id_produk', 'Produk', 'required|trim');
        $this->form_validation->set_rules('pesan', 'Pesan', 'required|trim');
        $this->form_validation->set_rules('rating', 'Rating', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->response([
                'message' => 'Data yang anda input tidak valid !',
                'errors'  => $this->form_validation->error_array(),
            ], 422);
        } else {
            $id_produk = $this->input->post('id_produk', true);
            $pesan     = $this->input->post('pesan', true);
            $rating        = $this->input->post('rating', true);
            // $file_review     = '';

            $data = [
                'id_pengguna'  => $id_pengguna,
                'id_produk'    => htmlspecialchars($id_produk),
                'pesan'        => htmlspecialchars($pesan),
                'rating'       => htmlspecialchars($rating),
                'created_at'   => date('Y-m-d'),
                'updated_at'   => date('Y-m-d')
            ];

            $this->db->insert('review', $data);
            $this->response([
                'meta' => [
                    'code'      => 200,
                    'status'    => 'success',
                    'message'   => 'Berhasil memberi penilaian dan rating produk'
                ],
            ], 200);
        }
    }
}
