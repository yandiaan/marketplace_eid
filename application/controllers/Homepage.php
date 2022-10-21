<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data = ['content' => 'home'];
		$this->load->view('layouts/app', $data);
	}

	public function pencarian()
	{
		$data = ['content' => 'pencarian'];
		$this->load->view('layouts/app', $data);
	}
}
