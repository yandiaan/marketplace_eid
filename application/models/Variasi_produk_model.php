<?php

class Variasi_produk_model extends CI_Model
{

    public function rules($params)
    {
        $validation = [
            'add_variasi' => [
                [
                    'field' => 'id_produk',
                    'label' => 'Kategori Produk',
                    'rules' => 'required'
                ],
                [
                    'field' => 'model_variasi',
                    'label' => 'Model Variasi',
                    'rules' => 'required'
                ],
                [
                    'field' => 'harga',
                    'label' => 'Harga Produk Variasi',
                    'rules' => 'required'
                ],
            ]
        ];

        return $validation[$params];
    }
}
