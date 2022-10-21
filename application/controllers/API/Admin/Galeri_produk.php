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
        $id_produk   = $this->input->post('id_produk', true) ?? false;

        if (!$id_produk) {
            $this->response([
                'message' => 'Id produk wajib diisi !',
                'error'   => 'id produk null',
            ], 404);
        }

        $galeri_produk = $_FILES['galeriProduk']['name'];
        $nama = [];

        foreach($galeri_produk as $key => $value) {
            if (!empty($galeri_produk[$key])) {

                if (!in_array($galeri_produk[$key], $nama)) {
                    $nama[$key] = $galeri_produk[$key];
                    $foto[$key] = uploadBerkas('galeri', 'produk_galeri', $key);
                } else {
                    $this->response([
                        'message' => 'Ada duplikat file !',
                        'error'  => "gambar ini " . $galeri_produk[$key] . " sudah terdaftar !",
                    ], 422);
                }

                $data[$key] = ['id_produk'  => $id_produk, 'image_path' => $foto[$key]];
                $total = $key + 1;
            }
        }

        $result = $this->galeri_produk->addMultipleGaleriProduk($data, $total);

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
