<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

    public function index()
    {
        $data = ['content' => 'produk'];
        $this->load->view('layouts/app', $data);
    }

    public function detail($uid)
    {
        $data = array(
            'content' => 'produk',
            'uid' => $uid
        );
        $this->load->view('layouts/app', $data);
    }
}
