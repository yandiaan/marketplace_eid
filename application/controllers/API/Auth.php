<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;
use Firebase\JWT\JWT;
use Firebase\JWT\ExpiredException;
use Firebase\JWT\Key;


class Auth extends RestController
{
    public function index_post()
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

            $email  = $this->input->post('email');
            $password  = $this->input->post('password');
            $user = $this->db->get_where('customer', ['email' => $email])->row_array();

            // jika usernya ada 
            if ($user) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $payload = array(
                        "iat" => time(),
                        "exp" => time() + getenv('JWT_TIME_EXP'),
                        "email" => $email
                    );

                    $key = getenv('JWT_SECRET_KEY');
                    $jwt = JWT::encode($payload, $key, 'HS256');

                    $this->response([
                        'meta' => [
                            'code'      => 200,
                            'status'    => 'success',
                            'message'   => 'Berhasil login'
                        ],
                        'data' => [
                            'access_token'  => $jwt,
                            'token_type'    => 'Bearer',
                            'user'          => $user
                        ],
                    ], 200);
                } else {
                    $this->response([
                        'code'    => 422,
                        'message' => 'Password anda salah !',
                    ], 422);
                }
            } else {
                $this->response([
                    'code'    => 404,
                    'message' => 'Akun tidak diketahui !',
                ], 404);
            }
        }

        return $this->response(['data_decode' => 'asas']);
    }

    public function register_post()
    {
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[customer.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[customer.email]');

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->response([
                'message' => 'Data yang anda input tidak valid !',
                'errors'  => $this->form_validation->error_array(),
            ], 422);
        } else {
            $nama_lengkap     = $this->input->post('nama_lengkap', true);
            $username     = $this->input->post('username', true);
            $email        = $this->input->post('email', true);
            $password     = $this->input->post('password1', true);

            $data = [
                'email'     => htmlspecialchars($email),
                'password'  => password_hash($password, PASSWORD_DEFAULT),
                'username'  => htmlspecialchars($username),
                'nama_lengkap'  => htmlspecialchars($nama_lengkap)
            ];

            $this->db->insert('customer', $data);
            $get_user_after_register = $this->db->get_where('customer', ['id_customer' => $this->db->insert_id()])->row_array();

            $this->response([
                'meta' => [
                    'code'      => 200,
                    'status'    => 'success',
                    'message'   => 'Berhasil register'
                ],
                'data' => [
                    'user'          => $get_user_after_register
                ],

            ], 200);
        }
    }
}
