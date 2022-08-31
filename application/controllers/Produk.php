<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function index()
	{
		$this->load->view('produk');
	}

    public function detail($uid)
    {
        $data = ['uid' => $uid];
        $this->load->view('produk', $data);
    }
}
