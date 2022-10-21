<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pencarian extends CI_Controller
{

    public function index()
    {
        $data = [
            'content' => 'pencarian',
            'search' => (isset($_GET['search']) ) ? $_GET['search'] : "",
    ];
        $this->load->view('layouts/app', $data);
    }

    public function pencarian_produk()
    {
        $data = ['content' => 'pencarian-produk'];
        $this->load->view('layouts/app', $data);
    }
}