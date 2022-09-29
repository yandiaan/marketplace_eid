<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Trasaksi extends RestController
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
            $this->response(['message' => 'Invalid Token'], 404);
        }
    }

    public function checkout() {
        $id_pengguna = $this->token_session->id_pengguna;
        $total_transaksi = $this->input->post('total_transaksi');
        $status_transaksi = $this->input->post('status_transaksi'); // SUKSES.DIKIRIM,BATAL,PAID,UNPAID

    }

}