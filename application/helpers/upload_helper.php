<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function uploadBerkas($path_folder, $prefix, $array)
{
    $ci = &get_instance();

    $root_folder = 'public/upload/' . $path_folder;
    $token = base64_encode(random_bytes(3));

    $nama_berkas = "";
    if (!empty($_FILES['galeriProduk']['name'][$array])) {

        $_FILES['file']['name']     = $_FILES['galeriProduk']['name'][$array];
        $_FILES['file']['type']     = $_FILES['galeriProduk']['type'][$array];
        $_FILES['file']['tmp_name'] = $_FILES['galeriProduk']['tmp_name'][$array];
        $_FILES['file']['error']    = $_FILES['galeriProduk']['error'][$array];
        $_FILES['file']['size']     = $_FILES['galeriProduk']['size'][$array];

        $config['upload_path'] = $root_folder; //path folder file upload
        $config['allowed_types'] = 'jpg|jpeg|png'; //type file yang boleh di upload
        $config['max_size'] = '3000';
        $config['file_name'] = $prefix . '_' . date('ymdhis') . $token; //enkripsi file name upload
        $ci->load->library('upload');
        $ci->upload->initialize($config);
        if ($ci->upload->do_upload('file')) {
            $file_foto = $ci->upload->data();
            $nama_berkas =  '/' . $root_folder . '/' . $file_foto['file_name'];
        }
    }

    return $nama_berkas;
}
