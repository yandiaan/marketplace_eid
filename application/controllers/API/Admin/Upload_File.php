<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload_File extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_File');
    }

    public function index()
    {
        $view = ['content' => 'admin/upload'];
        $view['fotos'] = $this->M_File->getalldata();
        $link_view = $this->load->view('admin/layouts/app', $view);
    }

    public function save()
    {
        $location = 'public/' . 'upload/';
        $images = $_FILES['inputFile']['name'];
        $config['upload_path'] = 'public/upload/';
        $config['allowed_types'] = 'pdf|gif|jpg|jpeg|png|jpeg|bmp';
        $config['max_size'] = '1000';
        $config['file_name'] = 'banner_' . date('ymdhis');
        $this->load->library('upload');
        $this->upload->initialize($config);
        if ($this->upload->do_upload('inputFile')) {
            $file_foto = $this->upload->data();
            $data['banner'] = $location . $file_foto['file_name'];
            $this->M_File->upload_file_db($data);
        }

        redirect('upload');
    }

    public function update()
    {
        $id_banner = $this->input->post('getDokumenid');

        $data = $this->M_File->get_Banner($id_banner);

        if ($data['url_file'] != '' || $data['url_file'] != null) {
            if (file_exists('./public/uploads/projects/dokumen/' . $data['url_file'])) {
                unlink('./public/uploads/projects/dokumen/' . $data['url_file']);
            }
        }

        $images = $_FILES['inputFileU']['name'];
        $config['upload_path'] = 'public/uploads/projects/dokumen';
        $config['allowed_types'] = 'pdf|gif|jpg|jpeg|png|jpeg|bmp';
        $config['max_size'] = '3000';
        $config['file_name'] = 'dokumen_' . date('ymdhis');
        $this->load->library('upload');
        $this->upload->initialize($config);
        if ($this->upload->do_upload('inputFileU')) {
            $file_foto = $this->upload->data();
            $data['url_file'] = $file_foto['file_name'];
        }
    }
}
