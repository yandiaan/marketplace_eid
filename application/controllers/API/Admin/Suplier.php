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

    // Update profile
    public function update_profile_post()
    {
        $this->load->library('form_validation');

        // Call suplier profile rules from model
        $rules = $this->suplier->rules('profile');

        // Set the rules
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == false) {

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
                    'status'    => 'success',
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
        if (!$verification) {
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

        if ($this->form_validation->run() == false) {

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

    public function upload_banner_post()
    {
        $this->form_validation->set_rules('id_suplier', 'Id Suplier', 'required');

        if ($this->form_validation->run() == false) {
            $this->response([
                'message' => 'Data yang anda input tidak valid !',
                'errors'  => $this->form_validation->error_array(),
            ], 422);
        } else {
            $id_suplier = $this->input->post('id_suplier');
            $banner = $_FILES['banner']['name'];

            if ($banner) {
                $location = 'public/' . 'upload/';
                $config['upload_path'] = 'public/upload/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = '2000';
                $config['file_name'] = 'banner_' . date('ymdhis');
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('banner')) {

                    // cari gambar berdasarkan id
                    $data['suplier'] = $this->db->query("SELECT banner FROM `suplier` WHERE id_suplier = $id_suplier")->row_array();
                    if($data['suplier']['banner']){
                        unlink($data['suplier']['banner']);
                    }

                    $file_banner = $this->upload->data();
                    $this->db->set('banner', $location . $file_banner['file_name']);
                    $this->db->where('id_suplier', $id_suplier);
                    $this->db->update('suplier');
                } else {
                    $this->response([
                        'message' => 'Data yang anda input tidak valid !',
                        'errors'  => $this->upload->display_errors(),
                    ], 422);
                }
            }
        }

        $dataAfterUploadBanner = $this->db->get_where('suplier', ['id_suplier' => $id_suplier])->result_array();

        $this->response([
            'meta' => [
                'code'      => 200,
                'status'    => 'success',
                'message'   => 'Banner berhasil diupload',
            ],
            'data'  => $dataAfterUploadBanner,
        ], 200);
    }
}
