<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function index($uid)
	{
		$data = ['content' => 'supplier'];
		$this->load->view('layouts/app', $data);
	}
}
