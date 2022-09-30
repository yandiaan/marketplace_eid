<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('cookie');
        $this->userdata = checkAuth();
        $this->load->model('Keranjang_model', 'cart');
    }

    public function index()
    {
        $data = [
            'content' => 'cart',
            'cart' => $this->cart->get_item($this->userdata->id_pengguna),
        ];

        $this->load->view('layouts/app', $data);
    }

    // public function checkout_2()
    // {
    //     $data = ['content' => 'checkout2'];
    //     $this->load->view('layouts/app', $data);
    // }
}
