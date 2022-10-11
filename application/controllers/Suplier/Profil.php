<?php
defined('BASEPATH') or exit('No direct script access allowed');

class profil extends CI_Controller

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
        $data['content'] = 'admin/pages/toko/index';
        $data['data'] = $this->db->get_where('suplier', ['id_suplier' => $this->userdata->id_suplier])->row_array();
        return $this->load->view('admin/layouts/app', $data);
    }
}
