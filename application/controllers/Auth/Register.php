<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function index()
    {
        $data = ['content' => 'auth/register'];
        $data['title'] = 'Daftar';
        $this->load->view('layouts/auth', $data);
    }
}
