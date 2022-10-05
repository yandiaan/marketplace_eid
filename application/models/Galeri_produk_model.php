<?php

class Galeri_produk_model extends CI_Model
{
    public function addMultipleGaleriProduk($data, $count)
    {
        // $response['success'] = false;
        // $response['message'] = null;
        for ($i = 0; $i < $count; $i++) {
            $query = $this->db->insert('galeri_produk', $data[$i]);
        }

        return $query;

    //     if ($return) {

    //         $response['success'] = true;
    //         $response['message'] = 'Data Berhasil Ditambahkan';
    //     } else {
    //         $response['success'] = false;
    //         $response['message'] = 'Data Gagal Ditambahkan';
    //     }

    //     return $response;
    }
}