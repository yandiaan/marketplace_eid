<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

    public function index()
    {
        $data = ['content' => 'produk'];
        $this->load->view('layouts/app', $data);
    }

    public function detail($slug)
    {
        $data = array(
            'content' => 'produk',
            'slug' => $slug
        );
        $this->load->view('layouts/app', $data);
    }
}
