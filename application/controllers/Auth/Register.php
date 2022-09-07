<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data = ['content' => 'auth/register'];
        $data['title'] = 'Daftar';
        $this->load->view('layouts/auth', $data);
    }


    public function register_action()
    {
        if ($this->session->userdata('email')) {
            redirect('/');
        }

        // validation rules
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[customer.username]', [
            'required'      => 'Username wajib diisi!',
            'is_unique'     => 'Username sudah terdaftar!.'
        ]);
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim',[
            'required' => 'Nama lengkap wajib diisi!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[customer.email]', [
            'is_unique' => 'Email sudah terdaftar!',
            'required' => 'Email wajib diisi!',
            'valid_email' => 'Email tidak valid !'
        ]);
        
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'required' => 'Passoword wajib diisi!',
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]',[
            'required' => 'Passoword wajib diisi!',
        ]);


        if ($this->form_validation->run() == false) {
            $data = ['content' => 'auth/register'];
            $data['title'] = 'Daftar';
            $this->load->view('layouts/auth', $data);
        } else {
            $email = $this->input->post('email', true);

            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($email),
                'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap'), true),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'is_active' => 1,
            ];


            // siapkan token berupa bilngan random
            // $token = base64_encode(random_bytes(32));
            // $user_token = [
            //     'email' => $email,
            //     'token' => $token,
            //     'date_created' => time()
            // ];


            $this->db->insert('customer', $data);
            // $this->db->insert('user_token', $user_token);


            $this->session->set_flashdata('message', '
			<div class="alert alert-success" role="alert">
 			 Congratulation! your account has been created. Please activate your account! Cek your email.
			');
            redirect('login');
        }
    }
}
