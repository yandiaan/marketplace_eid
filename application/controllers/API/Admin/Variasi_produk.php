<?php

defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Variasi_produk extends RestController
{
    private $token_session;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Variasi_produk_model', 'variasi_produk');

        $header = $this->input->request_headers()['Authorization'];
        if (!$header) return $this->response(['message' => ' Token required'], 404);

        try {
            $this->token_session = decode_jwt($header);
        } catch (\Throwable $th) {
            $this->response(['message' => 'Invalid Token'], 404);
        }
    }

    public function store_variasi_post()
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
            $harga           = $this->input->post('harga', true);
    
            $produk = $this->db->get_where('produk',['id_produk' => $id_produk, 'id_suplier' => $id_suplier])->result_array();

            if(count($produk) < 1) {
                $this->response([
                    'message' => 'Anda tidak memiliki akses untuk produk ini !',
                    'errors'  => 401,
                ], 401);
            }
            
            $data = [
                'id_produk'      => htmlspecialchars($id_produk),
                'model_variasi'  => htmlspecialchars($model_variasi),
                'harga'          => htmlspecialchars($harga),
                'created_at'     => date('Y-m-d'),
                'updated_at'     => date('Y-m-d')
            ];

            $this->db->insert('variasi', $data);
            $get_variasi_after_add = $this->db->get_where('variasi', ['id_variasi' => $this->db->insert_id()])->row_array();

            //  Upload gambar variasi produk 

            $root_folder = 'public/upload/galeri';
            $token = base64_encode(random_bytes(3));

            $nama_berkas_gambar = "";
            if (!empty($_FILES['galeriVariasiProduk']['name'])) {

                $_FILES['file']['name']     = $_FILES['galeriProduk']['name'];
                $_FILES['file']['type']     = $_FILES['galeriProduk']['type'];
                $_FILES['file']['tmp_name'] = $_FILES['galeriProduk']['tmp_name'];
                $_FILES['file']['error']    = $_FILES['galeriProduk']['error'];
                $_FILES['file']['size']     = $_FILES['galeriProduk']['size'];

                $config['upload_path']      = $root_folder; //path folder file upload
                $config['allowed_types']    = 'jpg|jpeg|png'; //type file yang boleh di upload
                $config['max_size']         = '3000';
                $config['file_name']        = 'produk_galeri_' . date('ymdhis') . $token; //enkripsi file name upload

                $this->load->library('upload');
                $this->upload->initialize($config);

                if ($this->upload->do_upload('file')) {
                    $file_foto   = $this->upload->data();
                    $nama_berkas_gambar =  '/' . $root_folder . '/' . $file_foto['file_name'];
                }
            } else {
                $this->response([
                    'message' => 'Gambar untuk variasi produk wajib diisi !',
                    'errors'  => 404,
                ], 404);
            }

            $dataGaleri = [
                'id_produk'   => htmlspecialchars($id_produk),
                'id_variasi'  => $get_variasi_after_add['id_variasi'],
                'image_path'  => $nama_berkas_gambar,
            ];

            $query = $this->db->insert('galeri_produk', $dataGaleri);

            if ($query) {
                // jika benar
                $this->response([
                    'meta' => [
                        'code'      => 200,
                        'status'    => 'success',
                        'message'   => 'Berhasil menambahkan galeri produk'
                    ],
                    'data' => [
                        'variasi'   => $get_variasi_after_add,
                        'image'     => $nama_berkas_gambar
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
}
