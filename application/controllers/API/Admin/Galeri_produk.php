<?php

defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Galeri_produk extends RestController
{
    private $token_session;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('produk_model', 'produk');
        $this->load->model('Galeri_produk_model', 'galeri_produk');

        $header = $this->input->request_headers()['Authorization'];
        if (!$header) return $this->response(['message' => ' Token required'], 404);

        try {
            $this->token_session = decode_jwt($header);
        } catch (\Throwable $th) {
            $this->response(['message' => 'Invalid Token'], 404);
        }
    }

    public function store_galeri_produk_post()
    {
        $id_produk   = $this->input->post('id_produk', true) ?? null;

        if (!$id_produk) {
            $this->response([
                'message' => 'Id produk wajib diisi !',
                'error'   => 'id produk null',
            ], 404);
        }

        $galeri_produk    = $_FILES['galeriProduk']['name'];

        $count = count($galeri_produk);

        $foto  = [];
        $nama  = [];

        for ($i = 0; $i < $count; $i++) {
            if (!empty($galeri_produk[$i])) {
                if (!in_array($galeri_produk[$i], $nama)) {
                    $nama[$i] = $galeri_produk[$i];
                    $foto[$i] = uploadBerkas('galeri', 'produk_galeri', $i);
                } else {
                    $this->response([
                        'message' => 'Ada duplikat file !',
                        'error'  => "gambar ini " . $galeri_produk[$i] . " sudah terdaftar !",
                    ], 422);
                }
            }
        }

        for ($j = 0; $j < $count; $j++) {
            $data[$j] = [
                'id_produk'  => $id_produk,
                'image_path' => $foto[$j],
            ];
        }

        $result = $this->galeri_produk->addMultipleGaleriProduk($data, $count);

        if ($result) {
            // jika benar
            $this->response([
                'meta' => [
                    'code'      => 200,
                    'status'    => 'success',
                    'message'   => 'Berhasil menambahkan galeri produk'
                ],
                'data' => [
                    'galeri_produk'      => $foto
                ],
            ], 200);
        } else {
            $this->response([
                'message' => 'Gagal menambahkan galeri produk',
                'error'  => 404,
            ], 404);
        }
    }
}
