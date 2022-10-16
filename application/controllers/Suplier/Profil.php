<?php
defined('BASEPATH') or exit('No direct script access allowed');

class profil extends CI_Controller

{
    public $userdata;
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('cookie');
        $this->load->model('suplier_model', 'suplier');
        $this->userdata = checkAuthSuplier();
    }

    public function index()
    {
        $data['content'] = 'admin/pages/toko/index';
        $data['data'] = $this->db->get_where('suplier', ['id_suplier' => $this->userdata->id_suplier])->row_array();
        return $this->load->view('admin/layouts/app', $data);
    }

    public function update()
    {
        $rules = $this->suplier->rules('profile');

        // Set the rules
        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() == false) {
        } else {
            $data = [
                'username'   => $this->input->post('username'),
                'nama_toko'  => $this->input->post('nama_toko'),
                'email'      => $this->input->post('email'),
                'deskripsi'  => $this->input->post('deskripsi'),
                'lokasi'     => $this->input->post('lokasi'),
                'updated_at' => date('Y-m-d h:i:s')
            ];

            $id = $this->userdata->id_suplier;

            $this->suplier->update_profile($id, $data);
        }

        redirect('suplier/dashboard/profil-toko');
    }

    public function upload_logo()
    {
        $id_suplier = $this->userdata->id_suplier;
        $logo     = $_FILES['logo']['name'];

        if ($logo) {
            $location                   = 'public/' . 'upload/';
            $config['upload_path']      = 'public/upload/';
            $config['allowed_types']    = 'jpg|png|jpeg';
            $config['max_size']         = '2000';
            $config['file_name']        = 'logo_' . date('ymdhis');
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('logo')) {

                // cari gambar berdasarkan id
                $data['suplier'] = $this->db->select('logo')->get_where('suplier', ['id_suplier' => $id_suplier])->row_array();
                if ($data['suplier']['logo']) {
                    unlink($data['suplier']['logo']);
                }

                $file_banner = $this->upload->data();
                $this->db->set('logo', $location . $file_banner['file_name']);
                $this->db->where('id_suplier', $id_suplier);
                $this->db->update('suplier');
                $this->session->set_flashdata('msg', 'Upload Logo Berhasil');
            } else {
                $this->session->set_flashdata('msg', 'Data yang anda input tidak valid !');
            }
        } else {
            $this->session->set_flashdata('msg', 'Data yang anda input tidak valid !');
        }
        redirect('suplier/dashboard/profil-toko');
    }

    public function upload_banner()
    {
        $id_suplier = $this->userdata->id_suplier;
        $banner     = $_FILES['banner']['name'];
        $location   = 'public/upload/suplier/';

        if ($banner) {

            $config = array(
                "upload_path"   => 'public/upload/suplier/',
                "allowed_types" => 'jpg|png|jpeg',
                "max_size"      => '2048',
                "file_name"     => 'banner_' . date('ymdhis')
            );

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('banner')) {

                // cari gambar berdasarkan id
                $data['suplier'] = $this->db->select('banner')
                    ->get_where('suplier', ['id_suplier' => $id_suplier])->row_array();

                // menghapus data gambar sebelumnya jika gambar sudah ada
                if ($data['suplier']['banner']) {
                    unlink($data['suplier']['banner']);
                }

                $data = ['banner' => $location . $this->upload->data('file_name')];

                $this->suplier->update_profile($id_suplier, $data);
                $this->session->set_flashdata('msg', 'Upload Banner Berhasil');
            } else {
                $this->session->set_flashdata('msg', 'Data yang anda input tidak valid !');
            }
        }
        redirect('suplier/dashboard/profil-toko');
    }

    public function wilayah()
    {
        $data['content'] = 'admin/pages/toko/wilayah';
        $data['wilayahs'] = $this->db->get_where('wilayah_distribusi', ['id_suplier' => $this->userdata->id_suplier])->result();
        $data['provinsi'] = $this->db->get('provinces');
        $data['kota'] = $this->db->get('cities');
        return $this->load->view('admin/layouts/app', $data);
    }

    public function add_wilayah()
    {

        $data = [
            'id_suplier' => $this->userdata->id_suplier,
            'provinsi'   => $this->input->post('provinsi'),
            'kota'  => $this->input->post('kota'),
            'created_at' => date('Y-m-d h:i:s')
        ];

        $this->db->insert('wilayah_distribusi', $data);
        redirect('suplier/dashboard/wilayah-toko');
    }

    public function delete($id_wilayah)
    {
        $this->db->where('id_wilayah_distribusi', $id_wilayah);
        $this->db->delete('wilayah_distribusi');
        redirect('suplier/dashboard/wilayah-toko');
    }
}
