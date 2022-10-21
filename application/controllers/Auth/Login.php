<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index(){
        $data = ['content' => 'auth/login'];
        $data['title'] = 'Sign In';
        $this->load->view('layouts/auth', $data);
    }
}