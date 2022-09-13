<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Suplier extends RestController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('suplier_model', 'suplier');
    }

    // Get specific supplier by id
    public function first_get($id)
    {
        $data = $this->suplier->get_one($id);

        if (count($data) < 1) {
            $this->response([
                'code'  => 404,
                'message'  => 'Suplier tidak ditemukan',
            ], 404);
        } else {
            $this->response([
                'meta' => [
                    'code'      => 200,
                    'status'    => 'success',
                    'message'   => 'Success get suplier by id'
                ],
                'data'  => $data,
            ], 200);
        }
    }

    // Get all supplier
    public function all_get()
    {
        $data = $this->suplier->get_all();

        if (count($data) < 1) {
            $this->response([
                'code'      => 404,
                'status'    => 'success',
                'message'   => 'Suplier tidak ditemukan',
            ], 404);
        } else {
            $this->response([
                'meta' => [
                    'code'      => 200,
                    'status'    => 'success',
                    'message'   => 'Success get all suplier',
                ],
                'data'  => $data,
            ], 200);
        }
    }

    // Get all supplier product
    public function products_get($id)
    {
        $data = $this->suplier->get_products($id);

        if (count($data) < 1) {
            $this->response([
                'code'      => 404,
                'message'   => 'Produk tidak ditemukan',
            ], 404);
        } else {
            $this->response([
                'meta' => [
                    'code'      => 200,
                    'status'    => 'success',
                    'message'   => 'Success get all produk suplier'
                ],
                'data'  => $data,
            ], 200);
        }
    }
    
        // Update profile
        public function update_profile_post()
        {
            $this->load->library('form_validation');
    
            // Call suplier profile rules from model
            $rules = $this->suplier->rules('profile');
    
            // Set the rules
            $this->form_validation->set_rules($rules);
    
            if($this->form_validation->run() == false) {
    
                $this->response([
                    'code'  => 400,
                    'message'  => 'Validasi Gagal',
                    'errors'  => $this->form_validation->error_array(),
                ], 400);
    
            } else {
    
                $data = [
                    'username'   => $this->input->post('username'),
                    'email'      => $this->input->post('email'),
                    'nama_toko'  => $this->input->post('nama_toko'),
                    'deskripsi'  => $this->input->post('deskripsi'),
                    'lokasi'     => $this->input->post('lokasi'),
                    'updated_at' => date('Y-m-d h:i:s')
                ];
    
                $id = $this->input->post('id_suplier');
    
                $this->suplier->update_profile($id, $data);
    
                $this->response([
                    'meta' => [
                        'code'      => 200,
                        'status'    =>'success',
                        'message'   => 'Profile berhasil diperbarui',
                    ],
                    'data'  => $data,
                ], 200);
    
            }
        }
    
        // Update Password
        public function update_password_post()
        {
            $id             = $this->input->post('id_suplier');
            $old_password   = $this->input->post('old_password');
            $verification   = $this->suplier->check_password($id, $old_password);
    
            // Verifying if old password is true
            if(!$verification) {
                $this->response([
                    'code'  => 401,
                    'message'  => 'Verifikasi Password Gagal',
                ], 401);
            }
    
            $this->load->library('form_validation');
    
            // Call suplier password rules from model
            $rules = $this->suplier->rules('password');
    
            // Set the rules
            $this->form_validation->set_rules($rules);
    
            if($this->form_validation->run() == false) {
    
                $this->response([
                    'code'  => 400,
                    'message'  => 'Validasi Gagal',
                    'errors'  => $this->form_validation->error_array(),
                ], 400);
    
            } else {
    
                $data = [
                    'password'   => password_hash($this->input->post('new_password'), PASSWORD_DEFAULT),
                    'updated_at' => date('Y-m-d h:i:s')
                ];
    
                $this->suplier->update_profile($id, $data);
    
                $this->response([
                    'code'  => 200,
                    'message'  => 'Password berhasil diperbarui',
                    'data'  => $data,
                ], 200);
    
            }
        }
    }
