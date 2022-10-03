<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller

{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('cookie');
        // $this->userdata = checkAuthSuplier();
    }

    public function index()
    {
        $session_token  = "Bearer " . get_cookie('sessionTokenSuplier');

        try {
            decode_jwt($session_token);

            redirect("suplier/dashboard");
            // return $this->load->view('admin/pages/login');

        } catch (\Throwable $th) {
            delete_cookie("sessionToken");

            return $this->load->view('admin/pages/login');
        }
    }
}
