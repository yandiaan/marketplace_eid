<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
{

    public function index()
    {
        $data = ['content' => 'checkout'];
        $this->load->view('layouts/app', $data);
    }

    public function checkout_2()
    {
        $data = ['content' => 'checkout2'];
        $this->load->view('layouts/app', $data);
    }
}
