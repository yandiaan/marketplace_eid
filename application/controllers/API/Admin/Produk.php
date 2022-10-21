<?php

defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Produk extends RestController
{
    private $token_session;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('produk_model', 'produk');

        $header = $this->input->request_headers()['Authorization'];
        if (!$header) return $this->response(['message' => ' Token required'], 404);

        try {
            $this->token_session = decode_jwt($header);
        } catch (\Throwable $th) {
            $this->response(['message' => 'Invalid Token'], 404);
        }
    }



    public function store_produk_post()
    {
        $this->form_validation->set_rules($this->produk->rules('add_produk'));

        if ($this->form_validation->run() == false) {
            $this->response([
                'message' => 'Data yang anda input tidak valid !',
                'errors'  => $this->form_validation->error_array(),
            ], 422);
        }else{
            $id_suplier           = $this->token_session->id_suplier;
            $id_produk_kategori   = $this->input->post('id_produk_kategori', true);
            $nama_produk          = $this->input->post('nama_produk', true);
            $deskripsi            = $this->input->post('deskripsi', true);
            $spesifikasi          = $this->input->post('spesifikasi', true);
            $brand                = $this->input->post('brand', true);
            $harga                = $this->input->post('harga', true);
            $berat                = $this->input->post('berat', true);
            $lebar                = $this->input->post('lebar', true);
            $tinggi               = $this->input->post('tinggi', true);
            $garansi              = $this->input->post('garansi', true);

            $data = [
                'id_suplier'           => $id_suplier,
                'slug'                 => url_title($nama_produk, 'dash', true),
                'id_produk_kategori'   => htmlspecialchars($id_produk_kategori),
                'nama_produk'          => htmlspecialchars($nama_produk),
                'deskripsi'            => htmlspecialchars($deskripsi),
                'spesifikasi'          => htmlspecialchars($spesifikasi),
                'brand'                => htmlspecialchars($brand),
                'harga'                => htmlspecialchars($harga),
                'berat'                => htmlspecialchars($berat),
                'lebar'                => htmlspecialchars($lebar),
                'tinggi'               => htmlspecialchars($tinggi),
                'garansi'              => htmlspecialchars($garansi) == "" ? null : htmlspecialchars($garansi),
                'created_at'           => date('Y-m-d'),
                'updated_at'           => date('Y-m-d')
            ];


            $this->db->insert('produk', $data);
            $get_produk_after_add = $this->db->get_where('produk', ['id_produk' => $this->db->insert_id()])->row_array();

            $this->response([
                'meta' => [
                    'code'      => 200,
                    'status'    => 'success',
                    'message'   => 'Yey berhasil menambah data produk'
                ],
                'data' => [
                    'user'      => $get_produk_after_add
                ],

            ], 200);
        }
    }
}
