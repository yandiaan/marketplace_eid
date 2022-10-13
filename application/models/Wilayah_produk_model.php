<?php

class Wilayah_produk_model extends CI_Model
{

    public function rules($params)
    {
        $validation = [
            'add_wilayah' => [
                [
                    'field' => 'id_produk',
                    'label' => 'Produk',
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
