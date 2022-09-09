<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;
use Firebase\JWT\JWT;

class Suplier_auth extends RestController
{
    // ================================================== Login =======================================================
    public function login_post()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->response([
                'message' => 'Data yang anda input tidak valid !',
                'errors'  => $this->form_validation->error_array(),
            ], 422);
        } else {
            // ketika validasinya lolos
            $email      = $this->input->post('email');
            $password   = $this->input->post('password');
            $user       = $this->db->get_where('suplier', ['email' => $email])->row_array();

            // jika usernya ada 
            if ($user) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $payload = array(
                        "iat"           => time(),
                        "exp"           => time() + getenv('JWT_TIME_EXP'),
                        "id_suplier"    => $user['id_suplier'],
                        "email"         => $email
                    );

                    $this->response([
                        'meta' => [
                            'code'          => 200,
                            'status'        => 'success',
                            'message'       => 'Berhasil login'
                        ],
                        'data' => [
                            'access_token'  => encode_jwt($payload),
                            'token_type'    => 'Bearer',
                            'user'          => $user
                        ],
                    ], 200);
                } else {
                    $this->response([
                        'code'    => 422,
                        'message' => 'Password anda salah !',
                        'pass'    => $password
                    ], 422);
                }
            } else {
                $this->response([
                    'code'    => 404,
                    'message' => 'Akun tidak diketahui !',
                ], 404);
            }
        }
    }

    // ================================================== Register =======================================================

    public function register_post()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[suplier.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[suplier.email]');
        $this->form_validation->set_rules('nama_toko', 'Nama Toko', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Toko', 'required|trim');
        $this->form_validation->set_rules('lokasi', 'Lokasi Toko', 'required|trim');
        // $this->form_validation->set_rules('banner', 'Banner Toko', 'required|trim');
        // $this->form_validation->set_rules('logo', 'Logo Toko', 'required|trim');

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches'       => 'password dont match!',
            'min_length'    => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->response([
                'message' => 'Data yang anda input tidak valid !',
                'errors'  => $this->form_validation->error_array(),
            ], 422);
        } else {
            $username     = $this->input->post('username', true);
            $email        = $this->input->post('email', true);
            $password     = $this->input->post('password1', true);
            $nama_toko    = $this->input->post('nama_toko', true);
            $deskripsi    = $this->input->post('deskripsi', true);
            $lokasi       = $this->input->post('lokasi', true);

            $data = [
                'email'         => htmlspecialchars($email),
                'password'      => password_hash($password, PASSWORD_DEFAULT),
                'username'      => htmlspecialchars($username),
                'nama_toko'     => htmlspecialchars($nama_toko),
                'deskripsi'     => htmlspecialchars($deskripsi),
                'lokasi'        => htmlspecialchars($lokasi)
            ];

            $this->db->insert('suplier', $data);
            $get_suplier_after_register = $this->db->get_where('suplier', ['id_suplier' => $this->db->insert_id()])->row_array();

            $this->response([
                'meta' => [
                    'code'      => 200,
                    'status'    => 'success',
                    'message'   => 'Berhasil register'
                ],
                'data' => [
                    'suplier'      => $get_suplier_after_register
                ],

            ], 200);
        }
    }
}
