<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekomendasi extends CI_Controller
{

    public function index()
    {
        $data = ['content' => 'rekomendasi'];
        $this->load->view('layouts/app', $data);
    }
}