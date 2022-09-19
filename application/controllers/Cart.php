<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('cookie');
        checkAuth();
    }

    public function index()
    {
        $data = ['content' => 'cart'];
        $this->load->view('layouts/app', $data);
    }

    // public function checkout_2()
    // {
    //     $data = ['content' => 'checkout2'];
    //     $this->load->view('layouts/app', $data);
    // }
}
