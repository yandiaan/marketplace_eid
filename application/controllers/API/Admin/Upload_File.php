<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload_File extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_File');
        $this->load->helper('function_helper');
    }

    public function index()
    {
        $view = ['content' => 'admin/upload'];
        $view['fotos'] = $this->M_File->getalldata();
        $this->load->view('admin/layouts/app', $view);
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

    public function galeri_index()
    {
        $produk = $this->getSelectProduk();
        $view = ['content' => 'admin/galeri'];
        $view['produk'] = $produk;
        $view['galeries'] = $this->M_File->getallgaleri();
        $this->load->view('admin/layouts/app', $view);
    }

    public function getSelectProduk($produk = null)
    {
        $return = '<option value="">Pilih Produk</option>';
        $result = $this->M_File->get_Produk($produk);
        if ($result != null) {
            foreach ($result as $rows) {
                $return .= '<option value="' . $rows['id_produk'] . '">' . ucwords(strtolower($rows['nama_produk'])) . '</option>';
            }
        }
        return $return;
    }

    public function save_galeri()
    {
        $count = $this->input->post('total');
        $foto = [];
        $nama = [];

        for ($i = 0; $i < $count; $i++) {
            if (!empty($_FILES['files' . $i . '']['name'])) {
                if (!in_array($_FILES['files' . $i . '']['name'], $nama)) {
                    $nama[$i] = $_FILES['files' . $i . '']['name'];
                    $foto[$i] = uploadBerkas('files' . $i . '', 'galeri', 'banner')['file_name'];
                } else {
                    return "Terdapat data yang sama";
                }
            }
        }

        $data = [
            'id_produk' => $this->input->post('input_produk'),
            'image_path' => json_encode($foto),
        ];

        $result = $this->M_File->get_createdata($data);

        redirect('galeri');
    }



    public function delete($id_galeri = null)
    {
        $file = $this->M_File->getOldFiles($id_galeri);

        $dok = json_decode($file['image_path']);
        $total = count($dok);

        for ($i = 0; $i < $total; $i++) {
            if (file_exists('.' . $dok[$i])) {
                unlink('.' . $dok[$i]);
            }
        }

        if ($this->M_File->delete($id_galeri)) {
            redirect('/galeri');
        }
    }
}
