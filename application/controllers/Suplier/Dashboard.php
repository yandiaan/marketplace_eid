<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller

{
    public $userdata;
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('cookie');
        $this->userdata = checkAuthSuplier();
    }

    public function index()
    {
        return $this->load->view('admin/layouts/app');
    }
}