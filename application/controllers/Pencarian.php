<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pencarian extends CI_Controller
{

    public function index()
    {
        $data = ['content' => 'pencarian'];
        $this->load->view('layouts/app', $data);
    }
}
