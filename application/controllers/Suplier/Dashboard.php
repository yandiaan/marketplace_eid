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
        $data['content'] = 'admin/pages/dashboard';
        return $this->load->view('admin/layouts/app', $data);
    }

    public function get_kota()
    {
        $id_provinsi = $this->input->post('id_provinsi');

        $data = $this->db->get_where('cities', ['prov_id' => $id_provinsi])->result_array();

        echo json_encode($data);
    }
}