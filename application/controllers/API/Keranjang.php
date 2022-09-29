<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Keranjang extends RestController
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
            return $this->response(['message' => 'Invalid Token'], 401);
        }
        
        $this->load->model('Keranjang_model', 'cart');
    }

    public function get_item_get()
    {
         $id_pengguna = $this->token_session->id_pengguna;

        $result = $this->cart->get_item($id_pengguna);

        $this->response([
            'meta' => [
                'code'    => 200,
                'status'  => 'success'
            ],
            'data'  => $result,
        ], 200);
    }

    public function add_item_post()
    {
        // Call suplier add item rules from model
        $rules = $this->cart->rules('add_item');

        // Set the rules
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == false) {

            $this->response([
                'code'      => 400,
                'message'   => 'Validasi Gagal',
                'errors'    => $this->form_validation->error_array(),
            ], 400);

        } else {

            $post = $this->input->post();

            $data = [
                'id_pengguna'   => $this->token_session->id_pengguna,
                'id_produk'     => $post['id_produk'],
                'jumlah'        => $post['jumlah'],
                'id_variasi'    => $post['id_variasi'] ?? null,
                'created_at'    => date('Y-m-d h:i:s'),
            ];

            $query = $this->cart->add_item($data);

            if($query) {                
                $this->response([
                    'meta' => [
                        'code'      => 200,
                        'status'    => 'success',
                        'message'   => 'Item berhasil ditambahkan pada keranjang',
                    ]
                ], 200);
            } else {
                $this->response([
                    'meta' => [
                        'code'      => 400,
                        'status'    => 'error',
                        'message'   => 'Terjadi kesalahan saat menambahkan item pada keranjang',
                    ]
                ], 400);
            }
        }
    }

    public function update_quantity_post()
    {
        // Call suplier add item rules from model
        $rules = $this->cart->rules('update_quantity');

        // Set the rules
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == false) {

            $this->response([
                'code'      => 400,
                'message'   => 'Validasi Gagal',
                'errors'    => $this->form_validation->error_array(),
            ], 400);

        } else {

            $post = $this->input->post();

            $where = [
                'id_pengguna'   => $this->token_session->id_pengguna,
                'id_produk'     => $post['id_produk'],
                'id_variasi'    => ($post['id_variasi'] == '0') ? null : $post['id_variasi']
            ];

            $data = [
                'jumlah'        => $post['jumlah'],
                'updated_at'    => date('Y-m-d h:i:s'),
            ];

            $query = $this->cart->update_quantity($data, $where);

            if($query) {
                $this->response([
                    'meta' => [
                        'code'      => 200,
                        'status'    => 'success',
                        'message'   => 'Jumlah item pada keranjang berhasil diperbarui',
                    ]
                ], 200);
            } else {
                $this->response([
                    'meta' => [
                        'code'      => 400,
                        'status'    => 'error',
                        'message'   => 'Terjadi kesalahan pada saat memperbarui keranjang',
                    ]
                ], 400);
            }

        }
    }

    public function delete_item_post()
    {
        $id_keranjang = $this->input->post('id_keranjang') ?? [''];
        
        foreach($id_keranjang as $key => $value) {
            $where[$key] = $value;
        }

        $id_pengguna = $this->token_session->id_pengguna;

        $query = $this->cart->delete_item($id_pengguna, $where);

        if($query) {
            $this->response([
                'meta' => [
                    'code'      => 200,
                    'status'    => 'success',
                    'message'   => 'Item berhasil dihapus pada keranjang',
                ]
            ], 200);
        } else {
            $this->response([
                'meta' => [
                    'code'      => 400,
                    'status'    => 'error',
                    'message'   => 'Terjadi kesalahan saat menghapus item pada keranjang',
                ]
            ], 400);
        }
    }

    public function empty_cart_post()
    {
        $id_pengguna = $this->token_session->id_pengguna;

        $query = $this->cart->empty_cart($id_pengguna);

        if($query) {
            $this->response([
                'meta' => [
                    'code'      => 200,
                    'status'    => 'success',
                    'message'   => 'Semua item pada keranjang berhasil dihapus',
                ]
            ], 200);
        } else {
            $this->response([
                'meta' => [
                    'code'      => 400,
                    'status'    => 'error',
                    'message'   => 'Terjadi kesalahan saat menghapus item pada keranjang',
                ]
            ], 400);
        }
    }

    public function check_item_post()
    {
        // Call cart is checked rules from model
        $rules = $this->cart->rules('check_item');

        // Set the rules
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == false) {

            $this->response([
                'message' => 'Data yang anda input tidak valid !',
                'errors'  => $this->form_validation->error_array(),
            ], 422);

        } else {

            $post = $this->input->post();

            $where = [
                'id_pengguna'   => $this->token_session->id_pengguna,
                'id_keranjang'  => $post['id_keranjang'],
            ];

            $data['is_checked'] = (int)$post['is_checked'];

            $query = $this->cart->check_item($data, $where);

            if($query){
                $this->response([
                    'meta' => [
                        'code'      => 200,
                        'status'    => 'success',
                        'message'   => 'Berhasil memberi checklist pada keranjang'
                    ],
                ], 200);
            } else {
                $this->response([
                    'message' => 'Data yang anda input tidak valid !',
                    'errors'  => 'id keranjang tidak ditemukan'
                ], 404);
            }

        }
    }

    public function check_all_item_post()
    {
        // Call cart is checked rules from model
        $rules = $this->cart->rules('check_all_item');

        // Set the rules
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == false) {

            $this->response([
                'message' => 'Data yang anda input tidak valid !',
                'errors'  => $this->form_validation->error_array(),
            ], 422);

        } else {

            $post = $this->input->post();

            $where = [
                'id_pengguna'   => $this->token_session->id_pengguna,
                'id_suplier'    => $post['id_suplier']
            ];

            $data['is_checked'] = (int)$post['is_checked'];

            $query = $this->cart->check_all_item($data, $where);

            if($query){
                $this->response([
                    'meta' => [
                        'code'      => 200,
                        'status'    => 'success',
                        'message'   => 'Berhasil memberi checklist pada keranjang'
                    ],
                ], 200);
            } else {
                $this->response([
                    'message' => 'Data yang anda input tidak valid !',
                    'errors'  => 'id keranjang tidak ditemukan'
                ], 404);
            }

        }
    }
}
