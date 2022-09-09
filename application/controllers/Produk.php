<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function index()
	{
		$data = ['content' => 'produk'];
		$this->load->view('layouts/app', $data);
	}

    public function detail($uid)
    {
        $data = ['uid' => $uid];
        $this->load->view('produk', $data);
    }
}