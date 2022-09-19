<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function uploadBerkas($nama_file, $path_folder, $prefix)
{
    $ci = &get_instance();

    $root_folder = 'public/upload/' . $path_folder;
    $token = base64_encode(random_bytes(3));

    $response['success'] = false;
    $response['file_name'] = '';
    $nama_berkas = "";
    if (!empty($_FILES[$nama_file]['name'])) {
        $config['upload_path'] = $root_folder; //path folder file upload
        $config['allowed_types'] = 'jpg|jpeg|png'; //type file yang boleh di upload
        $config['max_size'] = '3000';
        $config['file_name'] = $prefix . '_' . date('ymdhis') . $token; //enkripsi file name upload
        $ci->load->library('upload');
        $ci->upload->initialize($config);
        if ($ci->upload->do_upload($nama_file)) {
            $file_foto = $ci->upload->data();
            $nama_berkas = '/' . $root_folder . '/' . $file_foto['file_name'];
            $response['success'] = true;
            $response['file_name'] = $nama_berkas;
        }
    }
    return $response;
}
