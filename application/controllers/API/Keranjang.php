<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Keranjang extends RestController
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Keranjang_model', 'cart');
    }

    public function get_item_get()
    {
        $id_pengguna = htmlspecialchars($this->input->get('id_pengguna', TRUE));
        
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
                'id_pengguna'   => $post['id_pengguna'],
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
                'id_pengguna'   => $post['id_pengguna'],
                'id_produk'     => $post['id_produk'],
                'id_variasi'    => $post['id_variasi'] ?? null
            ];
            
            $data = [
                'jumlah'        => $post['jumlah'],
                'updated_at'    => date('Y-m-d h:i:s'),
            ];
            
            // option values are ('' OR increment OR decrement)
            $method = $post['metode'];

            $query = $this->cart->update_quantity($data, $where, $method);

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
        $id = $this->input->post('id_keranjang') ?? [''];
        
        foreach($id as $key => $value) {
            $where[$key] = $value;
        }

        $query = $this->cart->delete_item($where);

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
        $id_pengguna = $this->input->post('id_pengguna');

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
}